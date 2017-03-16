<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';

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
 * Your Office 365 login, like {id}@{id}.onmicrosoft.com
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
    AbstractSoapClientBase::WSDL_URL => __DIR__ . '/../wsdl/services.wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => EwsClassMap::get(),
    AbstractSoapClientBase::WSDL_LOGIN => EWS_WS_LOGIN,
    AbstractSoapClientBase::WSDL_PASSWORD => EWS_WS_PASSWORD,
);

/**
 * Instanciation of the ServiceType get that gather all the operations beginnig with "get".
 */
$find = new \Ews\ServiceType\EwsFind($options);
/**
 * Configure the SoapHeader, each header's method begins with "setSoapHeader".
 */
$find->setSoapHeaderRequestServerVersion(new EwsRequestServerVersion(EwsExchangeVersionType::VALUE_EXCHANGE_2013_SP_1));
/**
 * Send the request, you can customize the request by modifiying the new \Ews\StructType\EwsGetServerTimeZonesType() instance
 */
$itemType = new EwsFindItemType();
$itemShape = new EwsItemResponseShapeType(EwsDefaultShapeNamesType::VALUE_ALL_PROPERTIES);
$itemType
    ->setItemShape($itemShape)
    ->setParentFolderIds(new EwsNonEmptyArrayOfBaseFolderIdsType(null, new EwsDistinguishedFolderIdType(EwsDistinguishedFolderIdNameType::VALUE_CONTACTS)))
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

/**
 * Sample call for GetServerTimeZones operation/method
*/
if ($result !== false) {
    /**
     * Display the Inbox messages if there is at least one:
     *
     * Contact "{firstName} {lastName} <{email}>"
     * Contact "{firstName} {lastName} <{email}>"
     * ... etc
     */
    foreach($result->getResponseMessages()->getFindItemResponseMessage() as $message) {
        $contacts = $message->getRootFolder()->getItems()->getContact();
        if(is_array($contacts)) {
            foreach($contacts as $item) {
                $addresses = $item->getEmailAddresses()->getEntry();
                echo PHP_EOL . sprintf('Contact "%s %s <%s>"',
                    $item->getCompleteName()->getFirstName(),
                    $item->getCompleteName()->getLastName(),
                    is_array($addresses) ? array_shift($addresses)->get_() : '');
            }
        } else {
            echo PHP_EOL . 'No contact found';
        }
        echo  PHP_EOL;
    }
} else {
    /**
     * In this case, we get the \SoapFault object
     */
    print_r($find->getLastErrorForMethod('\Ews\ServiceType\EwsFind::FindItem'));
}