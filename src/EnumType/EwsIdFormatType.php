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
    const VALUE_EWS_LEGACY_ID = 'EwsLegacyId';
    /**
     * Constant for value 'EwsId'
     * @return string 'EwsId'
     */
    const VALUE_EWS_ID = 'EwsId';
    /**
     * Constant for value 'EntryId'
     * @return string 'EntryId'
     */
    const VALUE_ENTRY_ID = 'EntryId';
    /**
     * Constant for value 'HexEntryId'
     * @return string 'HexEntryId'
     */
    const VALUE_HEX_ENTRY_ID = 'HexEntryId';
    /**
     * Constant for value 'StoreId'
     * @return string 'StoreId'
     */
    const VALUE_STORE_ID = 'StoreId';
    /**
     * Constant for value 'OwaId'
     * @return string 'OwaId'
     */
    const VALUE_OWA_ID = 'OwaId';
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
     * @uses self::VALUE_EWS_LEGACY_ID
     * @uses self::VALUE_EWS_ID
     * @uses self::VALUE_ENTRY_ID
     * @uses self::VALUE_HEX_ENTRY_ID
     * @uses self::VALUE_STORE_ID
     * @uses self::VALUE_OWA_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EWS_LEGACY_ID,
            self::VALUE_EWS_ID,
            self::VALUE_ENTRY_ID,
            self::VALUE_HEX_ENTRY_ID,
            self::VALUE_STORE_ID,
            self::VALUE_OWA_ID,
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
