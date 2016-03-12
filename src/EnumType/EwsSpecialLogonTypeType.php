<?php

namespace Ews\EnumType;

/**
 * This class stands for SpecialLogonTypeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Surfaces the various logon types that are supported for conversion
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSpecialLogonTypeType
{
    /**
     * Constant for value 'Admin'
     * @return string 'Admin'
     */
    const VALUE_ADMIN = 'Admin';
    /**
     * Constant for value 'SystemService'
     * @return string 'SystemService'
     */
    const VALUE_SYSTEM_SERVICE = 'SystemService';
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
     * @uses self::VALUE_ADMIN
     * @uses self::VALUE_SYSTEM_SERVICE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ADMIN,
            self::VALUE_SYSTEM_SERVICE,
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
