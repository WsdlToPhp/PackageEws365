<?php
/**
 * Composer autoload
 */
require_once __DIR__ . '/../vendor/autoload.php';
/**
 * Used classes
 */
use WsdlToPhp\PackageBase\AbstractSoapClientBase;
use Ews\StructType\EwsRequestServerVersion;
use Ews\EnumType\EwsExchangeVersionType;
use Ews\StructType\EwsCreateItemType;
use Ews\StructType\EwsTargetFolderIdType;
use Ews\StructType\EwsDistinguishedFolderIdType;
use Ews\EnumType\EwsDistinguishedFolderIdNameType;
use Ews\StructType\EwsNonEmptyArrayOfAllItemsType;
use Ews\StructType\EwsTaskType;
use Ews\EwsClassMap;
use Ews\StructType\EwsBodyType;
use Ews\EnumType\EwsBodyTypeType;
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
    AbstractSoapClientBase::WSDL_URL => __DIR__ . '/../wsdl/services.wsdl',
    AbstractSoapClientBase::WSDL_CLASSMAP => EwsClassMap::get(),
    AbstractSoapClientBase::WSDL_LOGIN => EWS_WS_LOGIN,
    AbstractSoapClientBase::WSDL_PASSWORD => EWS_WS_PASSWORD
);
/**
 * Instanciation of the ServiceType get that gather all the operations beginnig with "get".
 */
$create = new \Ews\ServiceType\EwsCreate($options);
$create->setLocation('https://pod51036.outlook.com/ews/Exchange.asmx');
/**
 * Configure the SoapHeader, each header's method begins with "setSoapHeader".
 */
$create->setSoapHeaderRequestServerVersion(new EwsRequestServerVersion(EwsExchangeVersionType::VALUE_EXCHANGE_2013_SP_1));
/**
 * Send the request, you can customize the request by modifiying the new \Ews\StructType\EwsGetServerTimeZonesType() instance
 */
$items = new EwsNonEmptyArrayOfAllItemsType();
$task = new EwsTaskType();
$dueDate = new \DateTime('today + 5 day');
$task->setDueDate($dueDate->format('Y-m-d\TH:i:s\Z'))
    ->setBody(new EwsBodyType(EwsBodyTypeType::VALUE_TEXT, 'This task is very important, please do it as soon as possible'))
    ->setSubject('Sample task created with EWS')
    ->setReminderDueBy($dueDate->sub(new \DateInterval('PT1H'))
    ->format('Y-m-d\TH:i:s\Z'))
    ->setReminderIsSet(true);
$items->setTask($task);
$itemType = new EwsCreateItemType(new EwsTargetFolderIdType(null, new EwsDistinguishedFolderIdType(EwsDistinguishedFolderIdNameType::VALUE_TASKS)), $items);
$result = $create->CreateItem($itemType);
/**
 * Debug informations provided by the utility methods
 */
if (true) {
    echo 'XML Request: ' . $create->getLastRequest() . "\r\n";
    echo 'Headers Request: ' . $create->getLastRequestHeaders() . "\r\n";
    echo 'XML Response: ' . $create->getLastResponse() . "\r\n";
    echo 'Headers Response: ' . $create->getLastResponseHeaders() . "\r\n";
}
/**
 * Sample call for CreateItem operation/method
 */
if ($result !== false) {
    /**
     * Display the message
     */
    foreach ($result->getResponseMessages()->getCreateItemResponseMessage() as $message) {
        $responseCode = $message->getResponseCode();
        echo PHP_EOL . sprintf('Response code: %s', $responseCode);
        $itemsCreated = $message->getItems()->getTask();
        if (is_array($itemsCreated)) {
            foreach ($itemsCreated as $itemCreated) {
                echo PHP_EOL . sprintf('Task created with id %s', $itemCreated->getItemId()->getId());
            }
        } else {
            echo PHP_EOL . 'No message found';
        }
        echo PHP_EOL;
    }
} else {
    /**
     * In this case, we get the \SoapFault object
     */
    print_r($create->getLastErrorForMethod('\Ews\ServiceType\EwsCreate::CreateItem'));
}