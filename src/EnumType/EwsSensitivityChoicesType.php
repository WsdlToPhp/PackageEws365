<?php

namespace Ews\EnumType;

/**
 * This class stands for SensitivityChoicesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSensitivityChoicesType
{
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Private'
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Constant for value 'Confidential'
     * @return string 'Confidential'
     */
    const VALUE_CONFIDENTIAL = 'Confidential';
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
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_CONFIDENTIAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL,
            self::VALUE_PERSONAL,
            self::VALUE_PRIVATE,
            self::VALUE_CONFIDENTIAL,
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
