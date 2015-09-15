<?php

namespace Ews\EnumType;

/**
 * This class stands for DateTimePrecisionType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Precision for returned DateTime values
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDateTimePrecisionType
{
    /**
     * Constant for value 'Seconds'
     * @return string 'Seconds'
     */
    const VALUE_SECONDS = 'Seconds';
    /**
     * Constant for value 'Milliseconds'
     * @return string 'Milliseconds'
     */
    const VALUE_MILLISECONDS = 'Milliseconds';
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
     * @uses self::VALUE_SECONDS
     * @uses self::VALUE_MILLISECONDS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SECONDS,
            self::VALUE_MILLISECONDS,
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
