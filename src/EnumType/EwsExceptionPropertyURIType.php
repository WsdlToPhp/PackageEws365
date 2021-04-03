<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ExceptionPropertyURIType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExceptionPropertyURIType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'attachment:Name'
     * @return string 'attachment:Name'
     */
    const VALUE_ATTACHMENT_NAME = 'attachment:Name';
    /**
     * Constant for value 'attachment:ContentType'
     * @return string 'attachment:ContentType'
     */
    const VALUE_ATTACHMENT_CONTENT_TYPE = 'attachment:ContentType';
    /**
     * Constant for value 'attachment:Content'
     * @return string 'attachment:Content'
     */
    const VALUE_ATTACHMENT_CONTENT = 'attachment:Content';
    /**
     * Constant for value 'recurrence:Month'
     * @return string 'recurrence:Month'
     */
    const VALUE_RECURRENCE_MONTH = 'recurrence:Month';
    /**
     * Constant for value 'recurrence:DayOfWeekIndex'
     * @return string 'recurrence:DayOfWeekIndex'
     */
    const VALUE_RECURRENCE_DAY_OF_WEEK_INDEX = 'recurrence:DayOfWeekIndex';
    /**
     * Constant for value 'recurrence:DaysOfWeek'
     * @return string 'recurrence:DaysOfWeek'
     */
    const VALUE_RECURRENCE_DAYS_OF_WEEK = 'recurrence:DaysOfWeek';
    /**
     * Constant for value 'recurrence:DayOfMonth'
     * @return string 'recurrence:DayOfMonth'
     */
    const VALUE_RECURRENCE_DAY_OF_MONTH = 'recurrence:DayOfMonth';
    /**
     * Constant for value 'recurrence:Interval'
     * @return string 'recurrence:Interval'
     */
    const VALUE_RECURRENCE_INTERVAL = 'recurrence:Interval';
    /**
     * Constant for value 'recurrence:NumberOfOccurrences'
     * @return string 'recurrence:NumberOfOccurrences'
     */
    const VALUE_RECURRENCE_NUMBER_OF_OCCURRENCES = 'recurrence:NumberOfOccurrences';
    /**
     * Constant for value 'timezone:Offset'
     * @return string 'timezone:Offset'
     */
    const VALUE_TIMEZONE_OFFSET = 'timezone:Offset';
    /**
     * Return allowed values
     * @uses self::VALUE_ATTACHMENT_NAME
     * @uses self::VALUE_ATTACHMENT_CONTENT_TYPE
     * @uses self::VALUE_ATTACHMENT_CONTENT
     * @uses self::VALUE_RECURRENCE_MONTH
     * @uses self::VALUE_RECURRENCE_DAY_OF_WEEK_INDEX
     * @uses self::VALUE_RECURRENCE_DAYS_OF_WEEK
     * @uses self::VALUE_RECURRENCE_DAY_OF_MONTH
     * @uses self::VALUE_RECURRENCE_INTERVAL
     * @uses self::VALUE_RECURRENCE_NUMBER_OF_OCCURRENCES
     * @uses self::VALUE_TIMEZONE_OFFSET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ATTACHMENT_NAME,
            self::VALUE_ATTACHMENT_CONTENT_TYPE,
            self::VALUE_ATTACHMENT_CONTENT,
            self::VALUE_RECURRENCE_MONTH,
            self::VALUE_RECURRENCE_DAY_OF_WEEK_INDEX,
            self::VALUE_RECURRENCE_DAYS_OF_WEEK,
            self::VALUE_RECURRENCE_DAY_OF_MONTH,
            self::VALUE_RECURRENCE_INTERVAL,
            self::VALUE_RECURRENCE_NUMBER_OF_OCCURRENCES,
            self::VALUE_TIMEZONE_OFFSET,
        ];
    }
}
