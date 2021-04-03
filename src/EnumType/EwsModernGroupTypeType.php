<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ModernGroupTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsModernGroupTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Private'
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Constant for value 'Secret'
     * @return string 'Secret'
     */
    const VALUE_SECRET = 'Secret';
    /**
     * Constant for value 'Public'
     * @return string 'Public'
     */
    const VALUE_PUBLIC = 'Public';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_SECRET
     * @uses self::VALUE_PUBLIC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_PRIVATE,
            self::VALUE_SECRET,
            self::VALUE_PUBLIC,
        ];
    }
}
