<?php

namespace Ews\EnumType;

/**
 * This class stands for IndexBasePointType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsIndexBasePointType
{
    /**
     * Constant for value 'Beginning'
     * @return string 'Beginning'
     */
    const VALUE_BEGINNING = 'Beginning';
    /**
     * Constant for value 'End'
     * @return string 'End'
     */
    const VALUE_END = 'End';
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
     * @uses self::VALUE_BEGINNING
     * @uses self::VALUE_END
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BEGINNING,
            self::VALUE_END,
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
