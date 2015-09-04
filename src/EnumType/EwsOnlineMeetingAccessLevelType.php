<?php

namespace Ews\EnumType;

/**
 * This class stands for OnlineMeetingAccessLevelType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsOnlineMeetingAccessLevelType
{
    /**
     * Constant for value 'Locked'
     * @return string 'Locked'
     */
    const VALUE_LOCKED = 'Locked';
    /**
     * Constant for value 'Invited'
     * @return string 'Invited'
     */
    const VALUE_INVITED = 'Invited';
    /**
     * Constant for value 'Internal'
     * @return string 'Internal'
     */
    const VALUE_INTERNAL = 'Internal';
    /**
     * Constant for value 'Everyone'
     * @return string 'Everyone'
     */
    const VALUE_EVERYONE = 'Everyone';
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
     * @uses self::VALUE_LOCKED
     * @uses self::VALUE_INVITED
     * @uses self::VALUE_INTERNAL
     * @uses self::VALUE_EVERYONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LOCKED,
            self::VALUE_INVITED,
            self::VALUE_INTERNAL,
            self::VALUE_EVERYONE,
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
