<?php

namespace Ews\EnumType;

/**
 * This class stands for EmailReminderChangeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsEmailReminderChangeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Added'
     * @return string 'Added'
     */
    const VALUE_ADDED = 'Added';
    /**
     * Constant for value 'Override'
     * @return string 'Override'
     */
    const VALUE_OVERRIDE = 'Override';
    /**
     * Constant for value 'Deleted'
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ADDED
     * @uses self::VALUE_OVERRIDE
     * @uses self::VALUE_DELETED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ADDED,
            self::VALUE_OVERRIDE,
            self::VALUE_DELETED,
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
