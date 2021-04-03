<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClientExtensionScopeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientExtensionScopeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'User'
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Constant for value 'Organization'
     * @return string 'Organization'
     */
    const VALUE_ORGANIZATION = 'Organization';
    /**
     * Constant for value 'Default'
     * @return string 'Default'
     */
    const VALUE_DEFAULT = 'Default';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_USER
     * @uses self::VALUE_ORGANIZATION
     * @uses self::VALUE_DEFAULT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_USER,
            self::VALUE_ORGANIZATION,
            self::VALUE_DEFAULT,
        ];
    }
}
