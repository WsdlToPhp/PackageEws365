<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ActivityDomainType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsActivityDomainType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Work'
     * @return string 'Work'
     */
    const VALUE_WORK = 'Work';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_WORK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_PERSONAL,
            self::VALUE_WORK,
        ];
    }
}
