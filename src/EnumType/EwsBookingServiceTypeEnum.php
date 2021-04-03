<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BookingServiceTypeEnum EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBookingServiceTypeEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UserDefined'
     * @return string 'UserDefined'
     */
    const VALUE_USER_DEFINED = 'UserDefined';
    /**
     * Constant for value 'TimeOff'
     * @return string 'TimeOff'
     */
    const VALUE_TIME_OFF = 'TimeOff';
    /**
     * Return allowed values
     * @uses self::VALUE_USER_DEFINED
     * @uses self::VALUE_TIME_OFF
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_USER_DEFINED,
            self::VALUE_TIME_OFF,
        ];
    }
}
