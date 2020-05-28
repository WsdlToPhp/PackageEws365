<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnifiedGroupsFilterType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupsFilterType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Favorites'
     * @return string 'Favorites'
     */
    const VALUE_FAVORITES = 'Favorites';
    /**
     * Constant for value 'ExcludeFavorites'
     * @return string 'ExcludeFavorites'
     */
    const VALUE_EXCLUDE_FAVORITES = 'ExcludeFavorites';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_FAVORITES
     * @uses self::VALUE_EXCLUDE_FAVORITES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_FAVORITES,
            self::VALUE_EXCLUDE_FAVORITES,
        );
    }
}
