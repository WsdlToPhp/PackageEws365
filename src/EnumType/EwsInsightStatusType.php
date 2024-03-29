<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for InsightStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsightStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Created'
     * @return string 'Created'
     */
    const VALUE_CREATED = 'Created';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Dismissed'
     * @return string 'Dismissed'
     */
    const VALUE_DISMISSED = 'Dismissed';
    /**
     * Constant for value 'Invalid'
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Return allowed values
     * @uses self::VALUE_CREATED
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_DISMISSED
     * @uses self::VALUE_INVALID
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CREATED,
            self::VALUE_ACTIVE,
            self::VALUE_DISMISSED,
            self::VALUE_INVALID,
        ];
    }
}
