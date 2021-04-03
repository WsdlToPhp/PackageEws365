<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AvailabilityStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAvailabilityStatusType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Free'
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'Tentative'
     * @return string 'Tentative'
     */
    const VALUE_TENTATIVE = 'Tentative';
    /**
     * Constant for value 'Busy'
     * @return string 'Busy'
     */
    const VALUE_BUSY = 'Busy';
    /**
     * Constant for value 'Oof'
     * @return string 'Oof'
     */
    const VALUE_OOF = 'Oof';
    /**
     * Constant for value 'WorkingElsewhere'
     * @return string 'WorkingElsewhere'
     */
    const VALUE_WORKING_ELSEWHERE = 'WorkingElsewhere';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_FREE
     * @uses self::VALUE_TENTATIVE
     * @uses self::VALUE_BUSY
     * @uses self::VALUE_OOF
     * @uses self::VALUE_WORKING_ELSEWHERE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_FREE,
            self::VALUE_TENTATIVE,
            self::VALUE_BUSY,
            self::VALUE_OOF,
            self::VALUE_WORKING_ELSEWHERE,
        ];
    }
}
