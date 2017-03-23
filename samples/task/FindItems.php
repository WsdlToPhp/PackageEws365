<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use Ews\EnumType\EwsExchangeVersionType;
use Ews\EwsClassMap;
use Ews\StructType\EwsFindItemType;
use Ews\StructType\EwsItemResponseShapeType;
use Ews\EnumType\EwsDefaultShapeNamesType;
use Ews\StructType\EwsNonEmptyArrayOfBaseFolderIdsType;
use Ews\EnumType\EwsDistinguishedFolderIdNameType;
use Ews\EnumType\EwsItemQueryTraversalType;
use Ews\StructType\EwsDistinguishedFolderIdType;
use Ews\StructType\EwsRequestServerVersion;

/**
 * Your Office 365 login
 */
define('EWS_WS_LOGIN', '***************************');
/**
 * Your Office 365 passowrd
 */
define('EWS_WS_PASSWORD', '************');

/**
 * Minimal options in order to instanciate the ServiceType named Get
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => __DIR__ . '/../../wsdl/services.updated.wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => EwsClassMap::get(),
    AbstractSoapClientBase::WSDL_LOGIN => EWS_WS_LOGIN,
    AbstractSoapClientBase::WSDL_PASSWORD => EWS_WS_PASSWORD,
);

/**
 * Instanciation of the ServiceType get that gather all the operations beginnig with "get".
 */
$find = new \Ews\ServiceType\EwsFind($options);
$find->setLocation('https://pod51036.outlook.com/ews/Exchange.asmx');
/**
 * Configure the SoapHeader, each header's method begins with "setSoapHeader".
 */
$find->setSoapHeaderRequestServerVersion(new EwsRequestServerVersion(EwsExchangeVersionType::VALUE_EXCHANGE_2013_SP_1));
/**
 * Send the request
 */
$itemType = new EwsFindItemType();
$itemShape = new EwsItemResponseShapeType(EwsDefaultShapeNamesType::VALUE_ALL_PROPERTIES);
$itemType
    ->setItemShape($itemShape)
    ->setParentFolderIds(new EwsNonEmptyArrayOfBaseFolderIdsType(null, new EwsDistinguishedFolderIdType(EwsDistinguishedFolderIdNameType::VALUE_TASKS)))
    ->setTraversal(EwsItemQueryTraversalType::VALUE_SHALLOW);
$result = $find->FindItem($itemType);

/**
 * Debug informations provided by the utility methods
 */
if (false) {
    echo 'XML Request: ' . $find->getLastRequest() . "\r\n";
    echo 'Headers Request: ' . $find->getLastRequestHeaders() . "\r\n";
    echo 'XML Response: ' . $find->getLastResponse() . "\r\n";
    echo 'Headers Response: ' . $find->getLastResponseHeaders() . "\r\n";
}

if ($result !== false) {
    /**
     * Display the Tasks items if there is at least one:
     *
     * Task with subject "******************" that must be done at "2017-03-15T06:00:00Z" is "NotStarted"
     * Task with subject "******************" that must be done at "2017-03-15T06:00:00Z" is "NotStarted"
     * ... etc
     */
    foreach($result->getResponseMessages()->getFindItemResponseMessage() as $message) {
        $tasks = $message->getRootFolder()->getItems()->getTask();
        if(is_array($tasks)) {
            foreach($tasks as $item) {
               echo PHP_EOL . sprintf('Task with subject "%s" that must be done at "%s" is "%s"',
                    $item->getSubject(),
                    $item->getDueDate(),
                    $item->getStatus());
            }
        } else {
            echo PHP_EOL . 'No task found';
        }
        echo  PHP_EOL;
    }
} else {
    /**
     * In this case, we get the \SoapFault object
     */
    print_r($find->getLastErrorForMethod('\Ews\ServiceType\EwsFind::FindItem'));
}