<?php

namespace Ews\EnumType;

/**
 * This class stands for SearchScopeArchivesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSearchScopeArchivesType
{
    /**
     * Constant for value 'MainArchive'
     * @return string 'MainArchive'
     */
    const VALUE_MAINARCHIVE = 'MainArchive';
    /**
     * Constant for value 'AuxArchive'
     * @return string 'AuxArchive'
     */
    const VALUE_AUXARCHIVE = 'AuxArchive';
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
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_MAINARCHIVE
     * @uses self::VALUE_AUXARCHIVE
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MAINARCHIVE,
            self::VALUE_AUXARCHIVE,
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
