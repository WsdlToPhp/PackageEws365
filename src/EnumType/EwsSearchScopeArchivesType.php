<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchScopeArchivesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchScopeArchivesType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MainArchive'
     * @return string 'MainArchive'
     */
    const VALUE_MAIN_ARCHIVE = 'MainArchive';
    /**
     * Constant for value 'AuxArchive'
     * @return string 'AuxArchive'
     */
    const VALUE_AUX_ARCHIVE = 'AuxArchive';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return allowed values
     * @uses self::VALUE_MAIN_ARCHIVE
     * @uses self::VALUE_AUX_ARCHIVE
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MAIN_ARCHIVE,
            self::VALUE_AUX_ARCHIVE,
            self::VALUE_ALL,
        );
    }
}
