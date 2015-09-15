<?php

namespace Ews\EnumType;

/**
 * This class stands for UMCDRGroupByType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUMCDRGroupByType
{
    /**
     * Constant for value 'Day'
     * @return string 'Day'
     */
    const VALUE_DAY = 'Day';
    /**
     * Constant for value 'Month'
     * @return string 'Month'
     */
    const VALUE_MONTH = 'Month';
    /**
     * Constant for value 'Total'
     * @return string 'Total'
     */
    const VALUE_TOTAL = 'Total';
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
     * @uses self::VALUE_DAY
     * @uses self::VALUE_MONTH
     * @uses self::VALUE_TOTAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DAY,
            self::VALUE_MONTH,
            self::VALUE_TOTAL,
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
