<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransitionTargetKindType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTransitionTargetKindType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Period'
     * @return string 'Period'
     */
    const VALUE_PERIOD = 'Period';
    /**
     * Constant for value 'Group'
     * @return string 'Group'
     */
    const VALUE_GROUP = 'Group';
    /**
     * Return allowed values
     * @uses self::VALUE_PERIOD
     * @uses self::VALUE_GROUP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PERIOD,
            self::VALUE_GROUP,
        ];
    }
}
