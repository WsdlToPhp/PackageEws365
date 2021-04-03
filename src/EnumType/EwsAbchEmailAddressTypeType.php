<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AbchEmailAddressTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbchEmailAddressTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Business'
     * @return string 'Business'
     */
    const VALUE_BUSINESS = 'Business';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
    /**
     * Constant for value 'Passport'
     * @return string 'Passport'
     */
    const VALUE_PASSPORT = 'Passport';
    /**
     * Return allowed values
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_BUSINESS
     * @uses self::VALUE_OTHER
     * @uses self::VALUE_PASSPORT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERSONAL,
            self::VALUE_BUSINESS,
            self::VALUE_OTHER,
            self::VALUE_PASSPORT,
        ];
    }
}
