<?php

namespace Ews\EnumType;

/**
 * This class stands for UnifiedGroupsFilterType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupsFilterType
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
    const VALUE_EXCLUDEFAVORITES = 'ExcludeFavorites';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_FAVORITES
     * @uses self::VALUE_EXCLUDEFAVORITES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_FAVORITES,
            self::VALUE_EXCLUDEFAVORITES,
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
