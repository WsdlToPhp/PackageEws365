<?php

namespace Ews\EnumType;

/**
 * This class stands for ClientExtensionProvidedToType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientExtensionProvidedToType
{
    /**
     * Constant for value 'Everyone'
     * @return string 'Everyone'
     */
    const VALUE_EVERYONE = 'Everyone';
    /**
     * Constant for value 'SpecificUsers'
     * @return string 'SpecificUsers'
     */
    const VALUE_SPECIFIC_USERS = 'SpecificUsers';
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
     * @uses self::VALUE_EVERYONE
     * @uses self::VALUE_SPECIFIC_USERS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EVERYONE,
            self::VALUE_SPECIFIC_USERS,
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
