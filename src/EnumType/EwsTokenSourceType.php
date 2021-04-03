<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TokenSourceType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTokenSourceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'LinkedIn'
     * @return string 'LinkedIn'
     */
    const VALUE_LINKED_IN = 'LinkedIn';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LINKED_IN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_LINKED_IN,
        ];
    }
}
