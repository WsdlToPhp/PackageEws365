<?php

namespace Ews\EnumType;

/**
 * This class stands for ActivityDomainType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsActivityDomainType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Work'
     * @return string 'Work'
     */
    const VALUE_WORK = 'Work';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_WORK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_PERSONAL,
            self::VALUE_WORK,
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
