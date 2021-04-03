<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DateTimePrecisionType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Precision for returned DateTime values
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDateTimePrecisionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Seconds'
     * @return string 'Seconds'
     */
    const VALUE_SECONDS = 'Seconds';
    /**
     * Constant for value 'Milliseconds'
     * @return string 'Milliseconds'
     */
    const VALUE_MILLISECONDS = 'Milliseconds';
    /**
     * Return allowed values
     * @uses self::VALUE_SECONDS
     * @uses self::VALUE_MILLISECONDS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SECONDS,
            self::VALUE_MILLISECONDS,
        ];
    }
}
