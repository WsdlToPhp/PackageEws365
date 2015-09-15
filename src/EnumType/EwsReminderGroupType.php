<?php

namespace Ews\EnumType;

/**
 * This class stands for ReminderGroupType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderGroupType
{
    /**
     * Constant for value 'Calendar'
     * @return string 'Calendar'
     */
    const VALUE_CALENDAR = 'Calendar';
    /**
     * Constant for value 'Task'
     * @return string 'Task'
     */
    const VALUE_TASK = 'Task';
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
     * @uses self::VALUE_CALENDAR
     * @uses self::VALUE_TASK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CALENDAR,
            self::VALUE_TASK,
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
