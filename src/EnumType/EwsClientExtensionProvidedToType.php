<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClientExtensionProvidedToType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsClientExtensionProvidedToType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Everyone'
     * @return string 'Everyone'
     */
    const VALUE_EVERYONE = 'Everyone';
    /**
     * Constant for value 'SpecificUsers'
     * @return string 'SpecificUsers'
     */
    const VALUE_SPECIFIC_USERS = 'SpecificUsers';
    /**
     * Return allowed values
     * @uses self::VALUE_EVERYONE
     * @uses self::VALUE_SPECIFIC_USERS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EVERYONE,
            self::VALUE_SPECIFIC_USERS,
        ];
    }
}
