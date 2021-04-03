<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IdFormatType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Surfaces the various id types that are supported for conversion
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsIdFormatType extends AbstractStructEnumBase
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
     * Return allowed values
     * @uses self::VALUE_EWS_LEGACY_ID
     * @uses self::VALUE_EWS_ID
     * @uses self::VALUE_ENTRY_ID
     * @uses self::VALUE_HEX_ENTRY_ID
     * @uses self::VALUE_STORE_ID
     * @uses self::VALUE_OWA_ID
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EWS_LEGACY_ID,
            self::VALUE_EWS_ID,
            self::VALUE_ENTRY_ID,
            self::VALUE_HEX_ENTRY_ID,
            self::VALUE_STORE_ID,
            self::VALUE_OWA_ID,
        ];
    }
}
