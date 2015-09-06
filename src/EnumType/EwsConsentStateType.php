<?php

namespace Ews\EnumType;

/**
 * This class stands for ConsentStateType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConsentStateType
{
    /**
     * Constant for value 'NotResponded'
     * @return string 'NotResponded'
     */
    const VALUE_NOTRESPONDED = 'NotResponded';
    /**
     * Constant for value 'NotConsented'
     * @return string 'NotConsented'
     */
    const VALUE_NOTCONSENTED = 'NotConsented';
    /**
     * Constant for value 'Consented'
     * @return string 'Consented'
     */
    const VALUE_CONSENTED = 'Consented';
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
     * @uses self::VALUE_NOTRESPONDED
     * @uses self::VALUE_NOTCONSENTED
     * @uses self::VALUE_CONSENTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOTRESPONDED,
            self::VALUE_NOTCONSENTED,
            self::VALUE_CONSENTED,
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
