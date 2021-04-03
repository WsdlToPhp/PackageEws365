<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PermissionReadAccessType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPermissionReadAccessType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'FullDetails'
     * @return string 'FullDetails'
     */
    const VALUE_FULL_DETAILS = 'FullDetails';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_FULL_DETAILS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_FULL_DETAILS,
        ];
    }
}
