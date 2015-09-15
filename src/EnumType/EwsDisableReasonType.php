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
    const VALUE_NOREASON = 'NoReason';
    /**
     * Constant for value 'OutlookClientPerformance'
     * @return string 'OutlookClientPerformance'
     */
    const VALUE_OUTLOOKCLIENTPERFORMANCE = 'OutlookClientPerformance';
    /**
     * Constant for value 'OWAClientPerformance'
     * @return string 'OWAClientPerformance'
     */
    const VALUE_OWACLIENTPERFORMANCE = 'OWAClientPerformance';
    /**
     * Constant for value 'MobileClientPerformance'
     * @return string 'MobileClientPerformance'
     */
    const VALUE_MOBILECLIENTPERFORMANCE = 'MobileClientPerformance';
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
     * @uses self::VALUE_NOREASON
     * @uses self::VALUE_OUTLOOKCLIENTPERFORMANCE
     * @uses self::VALUE_OWACLIENTPERFORMANCE
     * @uses self::VALUE_MOBILECLIENTPERFORMANCE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOREASON,
            self::VALUE_OUTLOOKCLIENTPERFORMANCE,
            self::VALUE_OWACLIENTPERFORMANCE,
            self::VALUE_MOBILECLIENTPERFORMANCE,
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
