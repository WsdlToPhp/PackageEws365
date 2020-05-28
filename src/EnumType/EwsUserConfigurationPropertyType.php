<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserConfigurationPropertyType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUserConfigurationPropertyType extends AbstractStructEnumBase
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
}
