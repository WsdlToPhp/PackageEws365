<?php

namespace Ews\EnumType;

/**
 * This class stands for CalendarItemTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarItemTypeType
{
    /**
     * Constant for value 'Single'
     * @return string 'Single'
     */
    const VALUE_SINGLE = 'Single';
    /**
     * Constant for value 'Occurrence'
     * @return string 'Occurrence'
     */
    const VALUE_OCCURRENCE = 'Occurrence';
    /**
     * Constant for value 'Exception'
     * @return string 'Exception'
     */
    const VALUE_EXCEPTION = 'Exception';
    /**
     * Constant for value 'RecurringMaster'
     * @return string 'RecurringMaster'
     */
    const VALUE_RECURRINGMASTER = 'RecurringMaster';
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
     * @uses self::VALUE_SINGLE
     * @uses self::VALUE_OCCURRENCE
     * @uses self::VALUE_EXCEPTION
     * @uses self::VALUE_RECURRINGMASTER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGLE,
            self::VALUE_OCCURRENCE,
            self::VALUE_EXCEPTION,
            self::VALUE_RECURRINGMASTER,
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
