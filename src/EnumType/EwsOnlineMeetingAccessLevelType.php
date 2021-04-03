<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OnlineMeetingAccessLevelType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsOnlineMeetingAccessLevelType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Locked'
     * @return string 'Locked'
     */
    const VALUE_LOCKED = 'Locked';
    /**
     * Constant for value 'Invited'
     * @return string 'Invited'
     */
    const VALUE_INVITED = 'Invited';
    /**
     * Constant for value 'Internal'
     * @return string 'Internal'
     */
    const VALUE_INTERNAL = 'Internal';
    /**
     * Constant for value 'Everyone'
     * @return string 'Everyone'
     */
    const VALUE_EVERYONE = 'Everyone';
    /**
     * Return allowed values
     * @uses self::VALUE_LOCKED
     * @uses self::VALUE_INVITED
     * @uses self::VALUE_INTERNAL
     * @uses self::VALUE_EVERYONE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LOCKED,
            self::VALUE_INVITED,
            self::VALUE_INTERNAL,
            self::VALUE_EVERYONE,
        ];
    }
}
