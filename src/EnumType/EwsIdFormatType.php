<?php

namespace Ews\EnumType;

/**
 * This class stands for IdFormatType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Surfaces the various id types that are supported for conversion
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsIdFormatType
{
    /**
     * Constant for value 'EwsLegacyId'
     * @return string 'EwsLegacyId'
     */
    const VALUE_EWSLEGACYID = 'EwsLegacyId';
    /**
     * Constant for value 'EwsId'
     * @return string 'EwsId'
     */
    const VALUE_EWSID = 'EwsId';
    /**
     * Constant for value 'EntryId'
     * @return string 'EntryId'
     */
    const VALUE_ENTRYID = 'EntryId';
    /**
     * Constant for value 'HexEntryId'
     * @return string 'HexEntryId'
     */
    const VALUE_HEXENTRYID = 'HexEntryId';
    /**
     * Constant for value 'StoreId'
     * @return string 'StoreId'
     */
    const VALUE_STOREID = 'StoreId';
    /**
     * Constant for value 'OwaId'
     * @return string 'OwaId'
     */
    const VALUE_OWAID = 'OwaId';
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
     * @uses self::VALUE_EWSLEGACYID
     * @uses self::VALUE_EWSID
     * @uses self::VALUE_ENTRYID
     * @uses self::VALUE_HEXENTRYID
     * @uses self::VALUE_STOREID
     * @uses self::VALUE_OWAID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EWSLEGACYID,
            self::VALUE_EWSID,
            self::VALUE_ENTRYID,
            self::VALUE_HEXENTRYID,
            self::VALUE_STOREID,
            self::VALUE_OWAID,
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
