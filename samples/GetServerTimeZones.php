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

/**
 * Your Office 365 login, like {id}@{id}.onmicrosoft.com
 */
define('EWS_WS_LOGIN', '');
/**
 * Your Office 365 passowrd
 */
define('EWS_WS_PASSWORD', '');

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
$get = new \Ews\ServiceType\EwsGet($options);
/**
 * Configure the SoapHeader, each header's method begins with "setSoapHeader".
 */
$get->setSoapHeaderRequestServerVersion(new \Ews\StructType\EwsRequestServerVersion(EwsExchangeVersionType::VALUE_EXCHANGE_2013_SP_1));
/**
 * Send the request, you can customize the request by modifiying the new \Ews\StructType\EwsGetServerTimeZonesType() instance
 */
$result = $get->GetServerTimeZones(new \Ews\StructType\EwsGetServerTimeZonesType());

/**
 * Debug informations provided by the utility methods
 */
if (false) {
    echo 'XML Request: ' . $get->getLastRequest() . "\r\n";
    echo 'Headers Request: ' . $get->getLastRequestHeaders() . "\r\n";
    echo 'XML Response: ' . $get->getLastResponse() . "\r\n";
    echo 'Headers Response: ' . $get->getLastResponseHeaders() . "\r\n";
}

/**
 * Sample call for GetServerTimeZones operation/method
*/
if ($result !== false) {
    /**
     * @var Ews\StructType\EwsArrayOfResponseMessagesType
     */
    $responseMessages = $result->getResponseMessages();
    /**
     * @var Ews\StructType\EwsGetServerTimeZonesResponseMessageType
     */
    $response = $responseMessages->getGetServerTimeZonesResponseMessage();
    $response = $response[0];
    /**
     * @var Ews\ArrayType\EwsArrayOfTimeZoneDefinitionType
     */
    $timeZoneDefinitions = $response->getTimeZoneDefinitions();
    $timeZoneDefinitions->initInternArray();
    /**
     * Display the TimeZones if there is at least one:
     *
     * 108 timezones found!
     * Id: Dateline Standard Time, Name: (UTC-12:00) International Date Line West
     * Id: Samoa Standard Time, Name: (UTC+13:00) Samoa
     * Id: UTC-11, Name: (UTC-11:00) Coordinated Universal Time-11
     * Id: Hawaiian Standard Time, Name: (UTC-10:00) Hawaii
     * Id: Alaskan Standard Time, Name: (UTC-09:00) Alaska
     * Id: Pacific Standard Time (Mexico), Name: (UTC-08:00) Baja California
     * Id: Pacific Standard Time, Name: (UTC-08:00) Pacific Time (US & Canada)
     * Id: US Mountain Standard Time, Name: (UTC-07:00) Arizona
     * Id: Mountain Standard Time (Mexico), Name: (UTC-07:00) Chihuahua, La Paz, Mazatlan
     * Id: Mountain Standard Time, Name: (UTC-07:00) Mountain Time (US & Canada)
     * Id: Central America Standard Time, Name: (UTC-06:00) Central America
     * ... etc
     *
     * Otherwise it displays:
     * No timezone found!
     */
    if ($timeZoneDefinitions->count() > 0) {
        echo PHP_EOL . sprintf('%d timezones found!', $timeZoneDefinitions->count()) . PHP_EOL;
        foreach ($timeZoneDefinitions as $timeZoneDefinition) {
            echo sprintf('Id: %s, Name: %s', $timeZoneDefinition->getId(), $timeZoneDefinition->getName()) . PHP_EOL;
        }
    } else {
        echo PHP_EOL . 'No timezone found!';
    }
} else {
    /**
     * In this case, we get the \SoapFault object
     */
    print_r($get->getLastErrorForMethod('\Ews\ServiceType\EwsGet::GetServerTimeZones'));
}