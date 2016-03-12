<?php

namespace Ews\EnumType;

/**
 * This class stands for DefaultShapeNamesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDefaultShapeNamesType
{
    /**
     * Constant for value 'IdOnly'
     * @return string 'IdOnly'
     */
    const VALUE_ID_ONLY = 'IdOnly';
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'AllProperties'
     * @return string 'AllProperties'
     */
    const VALUE_ALL_PROPERTIES = 'AllProperties';
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
     * @uses self::VALUE_ID_ONLY
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_ALL_PROPERTIES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ID_ONLY,
            self::VALUE_DEFAULT,
            self::VALUE_ALL_PROPERTIES,
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
