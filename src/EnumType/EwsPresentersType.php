<?php

namespace Ews\EnumType;

/**
 * This class stands for PresentersType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPresentersType
{
    /**
     * Constant for value 'Disabled'
     * @return string 'Disabled'
     */
    const VALUE_DISABLED = 'Disabled';
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
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_DISABLED
     * @uses self::VALUE_INTERNAL
     * @uses self::VALUE_EVERYONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DISABLED,
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
