<?php

namespace Ews\EnumType;

/**
 * This class stands for ReminderActionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderActionType
{
    /**
     * Constant for value 'Dismiss'
     * @return string 'Dismiss'
     */
    const VALUE_DISMISS = 'Dismiss';
    /**
     * Constant for value 'Snooze'
     * @return string 'Snooze'
     */
    const VALUE_SNOOZE = 'Snooze';
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
     * @uses self::VALUE_DISMISS
     * @uses self::VALUE_SNOOZE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISMISS,
            self::VALUE_SNOOZE,
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
