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
use Ews\StructType\EwsGetItemType;
use Ews\StructType\EwsItemResponseShapeType;
use Ews\EnumType\EwsDefaultShapeNamesType;
use Ews\StructType\EwsRequestServerVersion;
use Ews\EnumType\EwsBodyTypeResponseType;
use Ews\StructType\EwsNonEmptyArrayOfBaseItemIdsType;
use Ews\StructType\EwsItemIdType;
use Ews\StructType\EwsContactItemType;

/**
 * Your Office 365 login, like {id}@{id}.onmicrosoft.com
 */
define('EWS_WS_LOGIN', '***************************');
/**
 * Your Office 365 passowrd
 */
define('EWS_WS_PASSWORD', '*************');

/**
 * Minimal options in order to instanciate the ServiceType named Get
 */
$options = array(
    AbstractSoapClientBase::WSDL_URL => __DIR__ . '/../../wsdl/services.wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => EwsClassMap::get(),
    AbstractSoapClientBase::WSDL_LOGIN => EWS_WS_LOGIN,
    AbstractSoapClientBase::WSDL_PASSWORD => EWS_WS_PASSWORD,
);

/**
 * Instanciation of the ServiceType get that gather all the operations beginnig with "get".
 */
$get = new \Ews\ServiceType\EwsGet($options);
/**
 * Configure the SoapHeader, each header's method begins with "setSoapHeader".
 */
$get->setSoapHeaderRequestServerVersion(new EwsRequestServerVersion(EwsExchangeVersionType::VALUE_EXCHANGE_2013_SP_1));
/**
 * Send the request with your actual ID
 * inbox item id : AQMkADdmZTc2Y2EwLWM4QtNGNkYi1iOTZhLTI4ZTIzNjEwZGIzZgBGAAAD4a54IMUm0UC0Oie/nN4R4AcAHM3Rq81r8UGBMGXZ2QDPNOoAAAIBDAAAADSezQdp0a5Anuxdk9hQzRAAAAIFUQAAAA==
 * calendar item id : AAMkADdmZTc2Y2EwL4YmQtNGNkYi1iOTZhLTI4ZTIzNjEwZGIzZgBGAAAAAADhrnggxSbRQLQ6J7+c3hHgBwAczdGrzWvxQYEwZdnZzzTqAAAAAAENAAA0ns0HadGuQJ7sXZPYUM0QAAAVnj3eAAA=
 * taks item id : AAMkADdmZTc2Y2EwLWM4YtNGNkYi1iOTZhLTI4ZTIzNjEwZGIzZgBGAAAAAADhrnggxSbRQLQ6J7+c3hHgBwAczdGrzWvxQYEwZdnZzzTqAAAAAAESAAA0ns0HadGuQJ7sXZPYUM0QAAAVnkW1AAA=
 * contac titme id : AAMkADdmZTc2Y2EwLWYmQtNGNkYi1iOTZhLTI4ZTIzNjEwZGIzZgBGAAAAAADhrnggxSbRQLQ6J7+c3hHgBwAczdGrzWvxQYEwZdnZzzTqAAAAAAEOAAA0ns0HadGuQJ7sXZPYUM0QAAAVnjYCAAA=
 */
$itemType = new EwsGetItemType();
$shapeType = new EwsItemResponseShapeType();
$shapeType
    ->setBaseShape(EwsDefaultShapeNamesType::VALUE_ALL_PROPERTIES)
    ->setBodyType(EwsBodyTypeResponseType::VALUE_BEST);
$itemType
    ->setItemShape($shapeType)
    ->setItemIds(
        new EwsNonEmptyArrayOfBaseItemIdsType(
            new EwsItemIdType('******************************************************************************************************************************************************')
            )
        );
$result = $get->GetItem($itemType);

/**
 * Debug informations provided by the utility methods
 */
if (false) {
    echo 'XML Request: ' . $get->getLastRequest() . "\r\n";
    echo 'Headers Request: ' . $get->getLastRequestHeaders() . "\r\n";
    echo 'XML Response: ' . $get->getLastResponse() . "\r\n";
    echo 'Headers Response: ' . $get->getLastResponseHeaders() . "\r\n";
}

if ($result !== false) {
    /**
     * Display the item data depending on its type:
     */
    foreach($result->getResponseMessages()->getGetItemResponseMessage() as $message) {
        /**
         * In case of a Contact Item
         */
        if (is_array($message->getItems()->getContact())) {
            foreach($message->getItems()->getContact() as $item) {
                if ($item instanceof EwsContactItemType) {
                    $addresses = $item->getEmailAddresses()->getEntry();
                    echo PHP_EOL . sprintf('Contact "%s %s <%s>"',
                        $item->getCompleteName()->getFirstName(),
                        $item->getCompleteName()->getLastName(),
                        is_array($addresses) ? array_shift($addresses)->get_() : '');
                }
            }
        }
        echo  PHP_EOL;
    }
} else {
    /**
     * In this case, we get the \SoapFault object
     */
    print_r($get->getLastErrorForMethod('\Ews\ServiceType\EwsGet::GetItem'));
}