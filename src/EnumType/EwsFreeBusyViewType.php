<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FreeBusyViewType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFreeBusyViewType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MergedOnly'
     * @return string 'MergedOnly'
     */
    const VALUE_MERGED_ONLY = 'MergedOnly';
    /**
     * Constant for value 'FreeBusy'
     * @return string 'FreeBusy'
     */
    const VALUE_FREE_BUSY = 'FreeBusy';
    /**
     * Constant for value 'FreeBusyMerged'
     * @return string 'FreeBusyMerged'
     */
    const VALUE_FREE_BUSY_MERGED = 'FreeBusyMerged';
    /**
     * Constant for value 'Detailed'
     * @return string 'Detailed'
     */
    const VALUE_DETAILED = 'Detailed';
    /**
     * Constant for value 'DetailedMerged'
     * @return string 'DetailedMerged'
     */
    const VALUE_DETAILED_MERGED = 'DetailedMerged';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_MERGED_ONLY
     * @uses self::VALUE_FREE_BUSY
     * @uses self::VALUE_FREE_BUSY_MERGED
     * @uses self::VALUE_DETAILED
     * @uses self::VALUE_DETAILED_MERGED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MERGED_ONLY,
            self::VALUE_FREE_BUSY,
            self::VALUE_FREE_BUSY_MERGED,
            self::VALUE_DETAILED,
            self::VALUE_DETAILED_MERGED,
        );
    }
}
