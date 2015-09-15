<?php

namespace Ews\EnumType;

/**
 * This class stands for AbchEmailAddressTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbchEmailAddressTypeType
{
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Passport'
     * @return string 'Passport'
     */
    const VALUE_PASSPORT = 'Passport';
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
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PASSPORT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERSONAL,
            self::VALUE_BUSINESS,
            self::VALUE_OTHER,
            self::VALUE_PASSPORT,
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
