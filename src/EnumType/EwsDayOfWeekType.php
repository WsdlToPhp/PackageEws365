<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DayOfWeekType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDayOfWeekType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sunday'
     * @return string 'Sunday'
     */
    const VALUE_SUNDAY = 'Sunday';
    /**
     * Constant for value 'Monday'
     * @return string 'Monday'
     */
    const VALUE_MONDAY = 'Monday';
    /**
     * Constant for value 'Tuesday'
     * @return string 'Tuesday'
     */
    const VALUE_TUESDAY = 'Tuesday';
    /**
     * Constant for value 'Wednesday'
     * @return string 'Wednesday'
     */
    const VALUE_WEDNESDAY = 'Wednesday';
    /**
     * Constant for value 'Thursday'
     * @return string 'Thursday'
     */
    const VALUE_THURSDAY = 'Thursday';
    /**
     * Constant for value 'Friday'
     * @return string 'Friday'
     */
    const VALUE_FRIDAY = 'Friday';
    /**
     * Constant for value 'Saturday'
     * @return string 'Saturday'
     */
    const VALUE_SATURDAY = 'Saturday';
    /**
     * Constant for value 'Day'
     * @return string 'Day'
     */
    const VALUE_DAY = 'Day';
    /**
     * Constant for value 'Weekday'
     * @return string 'Weekday'
     */
    const VALUE_WEEKDAY = 'Weekday';
    /**
     * Constant for value 'WeekendDay'
     * @return string 'WeekendDay'
     */
    const VALUE_WEEKEND_DAY = 'WeekendDay';
    /**
     * Return allowed values
     * @uses self::VALUE_SUNDAY
     * @uses self::VALUE_MONDAY
     * @uses self::VALUE_TUESDAY
     * @uses self::VALUE_WEDNESDAY
     * @uses self::VALUE_THURSDAY
     * @uses self::VALUE_FRIDAY
     * @uses self::VALUE_SATURDAY
     * @uses self::VALUE_DAY
     * @uses self::VALUE_WEEKDAY
     * @uses self::VALUE_WEEKEND_DAY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUNDAY,
            self::VALUE_MONDAY,
            self::VALUE_TUESDAY,
            self::VALUE_WEDNESDAY,
            self::VALUE_THURSDAY,
            self::VALUE_FRIDAY,
            self::VALUE_SATURDAY,
            self::VALUE_DAY,
            self::VALUE_WEEKDAY,
            self::VALUE_WEEKEND_DAY,
        ];
    }
}
