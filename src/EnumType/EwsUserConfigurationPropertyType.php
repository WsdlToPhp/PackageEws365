<?php

namespace Ews\EnumType;

/**
 * This class stands for UserConfigurationPropertyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationPropertyType
{
    /**
     * Constant for value 'Id'
     * @return string 'Id'
     */
    const VALUE_ID = 'Id';
    /**
     * Constant for value 'Dictionary'
     * @return string 'Dictionary'
     */
    const VALUE_DICTIONARY = 'Dictionary';
    /**
     * Constant for value 'XmlData'
     * @return string 'XmlData'
     */
    const VALUE_XML_DATA = 'XmlData';
    /**
     * Constant for value 'BinaryData'
     * @return string 'BinaryData'
     */
    const VALUE_BINARY_DATA = 'BinaryData';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
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
     * @uses self::VALUE_ID
     * @uses self::VALUE_DICTIONARY
     * @uses self::VALUE_XML_DATA
     * @uses self::VALUE_BINARY_DATA
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ID,
            self::VALUE_DICTIONARY,
            self::VALUE_XML_DATA,
            self::VALUE_BINARY_DATA,
            self::VALUE_ALL,
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
