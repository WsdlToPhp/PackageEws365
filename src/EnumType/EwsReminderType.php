<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReminderType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Current'
     * @return string 'Current'
     */
    const VALUE_CURRENT = 'Current';
    /**
     * Constant for value 'Old'
     * @return string 'Old'
     */
    const VALUE_OLD = 'Old';
    /**
     * Return allowed values
     * @uses self::VALUE_ALL
     * @uses self::VALUE_CURRENT
     * @uses self::VALUE_OLD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ALL,
            self::VALUE_CURRENT,
            self::VALUE_OLD,
        ];
    }
}
