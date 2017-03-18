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
 * Send the request
 */
$itemType = new EwsFindItemType();
$itemShape = new EwsItemResponseShapeType(EwsDefaultShapeNamesType::VALUE_ALL_PROPERTIES);
$itemType
    ->setItemShape($itemShape)
    ->setParentFolderIds(new EwsNonEmptyArrayOfBaseFolderIdsType(null, new EwsDistinguishedFolderIdType(EwsDistinguishedFolderIdNameType::VALUE_CALENDAR)))
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
     * Display the Calendar items if there is at least one:
     *
     * Event with subject "***" starts at "2017-03-15T08:00:00-06:00" and ends at "2017-03-15T08:30:00-06:00" with timezone "(UTC-07:00) Mountain Time (US & Canada)"
     * Event with subject "***" starts at "2017-03-15T08:00:00-06:00" and ends at "2017-03-15T08:30:00-06:00" with timezone "(UTC-07:00) Mountain Time (US & Canada)"
     * ... etc
     */
    foreach($result->getResponseMessages()->getFindItemResponseMessage() as $message) {
        $events = $message->getRootFolder()->getItems()->getCalendarItem();
        if(is_array($events)) {
            foreach($events as $item) {
               echo PHP_EOL . sprintf('Event with subject "%s" starts at "%s" and ends at "%s" with timezone "%s"',
                    $item->getSubject(),
                    $item->getStartWallClock(),
                    $item->getEndWallClock(),
                    $item->getTimeZone());
            }
        } else {
            echo PHP_EOL . 'No event found';
        }
        echo  PHP_EOL;
    }
} else {
    /**
     * In this case, we get the \SoapFault object
     */
    print_r($find->getLastErrorForMethod('\Ews\ServiceType\EwsFind::FindItem'));
}