<?php

namespace Ews\EnumType;

/**
 * This class stands for DayOfWeekIndexType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDayOfWeekIndexType
{
    /**
     * Constant for value 'First'
     * @return string 'First'
     */
    const VALUE_FIRST = 'First';
    /**
     * Constant for value 'Second'
     * @return string 'Second'
     */
    const VALUE_SECOND = 'Second';
    /**
     * Constant for value 'Third'
     * @return string 'Third'
     */
    const VALUE_THIRD = 'Third';
    /**
     * Constant for value 'Fourth'
     * @return string 'Fourth'
     */
    const VALUE_FOURTH = 'Fourth';
    /**
     * Constant for value 'Last'
     * @return string 'Last'
     */
    const VALUE_LAST = 'Last';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_FIRST
     * @uses self::VALUE_SECOND
     * @uses self::VALUE_THIRD
     * @uses self::VALUE_FOURTH
     * @uses self::VALUE_LAST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FIRST,
            self::VALUE_SECOND,
            self::VALUE_THIRD,
            self::VALUE_FOURTH,
            self::VALUE_LAST,
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
