<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CalendarPermissionReadAccessType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarPermissionReadAccessType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'TimeOnly'
     * @return string 'TimeOnly'
     */
    const VALUE_TIME_ONLY = 'TimeOnly';
    /**
     * Constant for value 'TimeAndSubjectAndLocation'
     * @return string 'TimeAndSubjectAndLocation'
     */
    const VALUE_TIME_AND_SUBJECT_AND_LOCATION = 'TimeAndSubjectAndLocation';
    /**
     * Constant for value 'FullDetails'
     * @return string 'FullDetails'
     */
    const VALUE_FULL_DETAILS = 'FullDetails';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_TIME_ONLY
     * @uses self::VALUE_TIME_AND_SUBJECT_AND_LOCATION
     * @uses self::VALUE_FULL_DETAILS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_TIME_ONLY,
            self::VALUE_TIME_AND_SUBJECT_AND_LOCATION,
            self::VALUE_FULL_DETAILS,
        ];
    }
}
