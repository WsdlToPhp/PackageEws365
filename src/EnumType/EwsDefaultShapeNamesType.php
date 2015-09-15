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
    const VALUE_IDONLY = 'IdOnly';
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'AllProperties'
     * @return string 'AllProperties'
     */
    const VALUE_ALLPROPERTIES = 'AllProperties';
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
     * @uses self::VALUE_IDONLY
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_ALLPROPERTIES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IDONLY,
            self::VALUE_DEFAULT,
            self::VALUE_ALLPROPERTIES,
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
