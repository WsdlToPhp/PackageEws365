<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SensitivityChoicesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSensitivityChoicesType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Personal'
     * @return string 'Personal'
     */
    const VALUE_PERSONAL = 'Personal';
    /**
     * Constant for value 'Private'
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
    /**
     * Constant for value 'Confidential'
     * @return string 'Confidential'
     */
    const VALUE_CONFIDENTIAL = 'Confidential';
    /**
     * Return allowed values
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_PERSONAL
     * @uses self::VALUE_PRIVATE
     * @uses self::VALUE_CONFIDENTIAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NORMAL,
            self::VALUE_PERSONAL,
            self::VALUE_PRIVATE,
            self::VALUE_CONFIDENTIAL,
        ];
    }
}
