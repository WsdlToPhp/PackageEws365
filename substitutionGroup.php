<?php
/**
 * This script is intended to "fix" the schema as the native PHP SoapClient class does not handle correctly the substitutionGroup attribute.
 * In order to "fix" the schema widely, programmatically and quickly, we use this script.
 * Make sure to run this command line first: composer require --dev wsdltophp/packagegenerator
 * Then run: php substitutionGroup.php
 * Then regenerate the package: ./generate.sh
 *
 * This script shows the usage of the very useful classes contained by the PackageGenerator project.
 * In addition, it shows that we can easily manipulate and update any schema.
 */

require_once 'vendor/autoload.php';

use WsdlToPhp\PackageGenerator\DomHandler\Wsdl\Wsdl;
use WsdlToPhp\PackageGenerator\Generator\Generator;
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Parser\Wsdl\TagInclude;
use WsdlToPhp\PackageGenerator\Parser\Wsdl\TagImport;

$dom = new \DOMDocument('1.0', 'UTF-8');
$dom->ouputFormated = true;
$dom->formatedOutput = true;
$dom->load(__DIR__ . '/wsdl/services.wsdl');
$generator = new Generator(GeneratorOptions::instance()->setOrigin(__DIR__ . '/wsdl/services.wsdl'));

$wsdl = new Wsdl($dom, $generator);
$includeParser = new TagInclude($generator);
$importParser = new TagImport($generator);
$includeParser->parse();
$importParser->parse();

echo $generator->getWsdl()->getContent()->getExternalSchemas()->count();

$substitionGroupNames = array('t:SearchExpression', 't:Path', 't:Transition');
foreach($substitionGroupNames as $substitionGroupName) {
    $substitionGroups = $generator->getWsdl()->getContent()->getElementsByNameAndAttributes('element', array(
        'substitutionGroup' => $substitionGroupName
    ), null, true);

    echo PHP_EOL . sprintf(' %s subscription groups found for %s', count($substitionGroups), $substitionGroupName) . PHP_EOL;

    foreach($generator->getWsdl()->getContent()->getExternalSchemas() as $externalSchema) {
        /** @var \WsdlToPhp\PackageGenerator\Container\Model\Schema $externalSchema */
        $searchExpressions = $externalSchema->getContent()->getElementsByNameAndAttributes('element', array(
            'ref' => $substitionGroupName
        ), null, true);

        echo PHP_EOL . sprintf('%s %s found in %s', count($searchExpressions), $substitionGroupName, $externalSchema->getName()) . PHP_EOL;

        foreach($searchExpressions as $searchExpression) {
            $parent = $searchExpression->getParent();
            $parent->getElement()->removeChild($searchExpression->getNode());
            $parent->getElement()->appendChild($parent->getDomDocumentHandler()->getRootElement()->getParent()->getNode()->createComment(' ### Subscription group ' . $substitionGroupName . ' is replaced by actual elements ### '));
            foreach($substitionGroups as $substitionGroup) {
                echo PHP_EOL . $substitionGroup->getAttributeName();
                $node = $parent->getDomDocumentHandler()->getRootElement()->getParent()->getNode()->createElementNS('http://www.w3.org/2001/XMLSchema', 'element');
                $node->setAttribute('name', $substitionGroup->getAttributeName());
                $node->setAttribute('type', $substitionGroup->getAttribute('type')->getValue(true));
                $parent->getElement()->appendChild($node);
            }
            $parent->getDomDocumentHandler()->getRootElement()->getParent()->getNode()->formatOutput = true;
        }
        echo $externalSchema->getContent()->getRootElement()->getParent()->getNode()->save(str_replace('.xsd', '.updated.xsd', $externalSchema->getName()));
    }
}

echo PHP_EOL;
