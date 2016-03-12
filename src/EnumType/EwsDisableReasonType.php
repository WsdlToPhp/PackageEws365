<?php

namespace Ews\EnumType;

/**
 * This class stands for DisableReasonType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: List of possible reasons for disabling the client extension
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDisableReasonType
{
    /**
     * Constant for value 'NoReason'
     * @return string 'NoReason'
     */
    const VALUE_NO_REASON = 'NoReason';
    /**
     * Constant for value 'OutlookClientPerformance'
     * @return string 'OutlookClientPerformance'
     */
    const VALUE_OUTLOOK_CLIENT_PERFORMANCE = 'OutlookClientPerformance';
    /**
     * Constant for value 'OWAClientPerformance'
     * @return string 'OWAClientPerformance'
     */
    const VALUE_OWACLIENT_PERFORMANCE = 'OWAClientPerformance';
    /**
     * Constant for value 'MobileClientPerformance'
     * @return string 'MobileClientPerformance'
     */
    const VALUE_MOBILE_CLIENT_PERFORMANCE = 'MobileClientPerformance';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NO_REASON
     * @uses self::VALUE_OUTLOOK_CLIENT_PERFORMANCE
     * @uses self::VALUE_OWACLIENT_PERFORMANCE
     * @uses self::VALUE_MOBILE_CLIENT_PERFORMANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_REASON,
            self::VALUE_OUTLOOK_CLIENT_PERFORMANCE,
            self::VALUE_OWACLIENT_PERFORMANCE,
            self::VALUE_MOBILE_CLIENT_PERFORMANCE,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
