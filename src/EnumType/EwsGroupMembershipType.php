<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GroupMembershipType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupMembershipType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Dynamic'
     * @return string 'Dynamic'
     */
    const VALUE_DYNAMIC = 'Dynamic';
    /**
     * Constant for value 'Hidden'
     * @return string 'Hidden'
     */
    const VALUE_HIDDEN = 'Hidden';
    /**
     * Return allowed values
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_DYNAMIC
     * @uses self::VALUE_HIDDEN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NORMAL,
            self::VALUE_DYNAMIC,
            self::VALUE_HIDDEN,
        ];
    }
}
