<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IndexBasePointType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsIndexBasePointType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Beginning'
     * @return string 'Beginning'
     */
    const VALUE_BEGINNING = 'Beginning';
    /**
     * Constant for value 'End'
     * @return string 'End'
     */
    const VALUE_END = 'End';
    /**
     * Return allowed values
     * @uses self::VALUE_BEGINNING
     * @uses self::VALUE_END
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BEGINNING,
            self::VALUE_END,
        ];
    }
}
