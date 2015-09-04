<?php

namespace Ews\EnumType;

/**
 * This class stands for ExceptionPropertyURIType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsExceptionPropertyURIType
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
    const VALUE_ATTACHMENT_CONTENTTYPE = 'attachment:ContentType';
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
    const VALUE_RECURRENCE_DAYOFWEEKINDEX = 'recurrence:DayOfWeekIndex';
    /**
     * Constant for value 'recurrence:DaysOfWeek'
     * @return string 'recurrence:DaysOfWeek'
     */
    const VALUE_RECURRENCE_DAYSOFWEEK = 'recurrence:DaysOfWeek';
    /**
     * Constant for value 'recurrence:DayOfMonth'
     * @return string 'recurrence:DayOfMonth'
     */
    const VALUE_RECURRENCE_DAYOFMONTH = 'recurrence:DayOfMonth';
    /**
     * Constant for value 'recurrence:Interval'
     * @return string 'recurrence:Interval'
     */
    const VALUE_RECURRENCE_INTERVAL = 'recurrence:Interval';
    /**
     * Constant for value 'recurrence:NumberOfOccurrences'
     * @return string 'recurrence:NumberOfOccurrences'
     */
    const VALUE_RECURRENCE_NUMBEROFOCCURRENCES = 'recurrence:NumberOfOccurrences';
    /**
     * Constant for value 'timezone:Offset'
     * @return string 'timezone:Offset'
     */
    const VALUE_TIMEZONE_OFFSET = 'timezone:Offset';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_ATTACHMENT_NAME
     * @uses self::VALUE_ATTACHMENT_CONTENTTYPE
     * @uses self::VALUE_ATTACHMENT_CONTENT
     * @uses self::VALUE_RECURRENCE_MONTH
     * @uses self::VALUE_RECURRENCE_DAYOFWEEKINDEX
     * @uses self::VALUE_RECURRENCE_DAYSOFWEEK
     * @uses self::VALUE_RECURRENCE_DAYOFMONTH
     * @uses self::VALUE_RECURRENCE_INTERVAL
     * @uses self::VALUE_RECURRENCE_NUMBEROFOCCURRENCES
     * @uses self::VALUE_TIMEZONE_OFFSET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ATTACHMENT_NAME,
            self::VALUE_ATTACHMENT_CONTENTTYPE,
            self::VALUE_ATTACHMENT_CONTENT,
            self::VALUE_RECURRENCE_MONTH,
            self::VALUE_RECURRENCE_DAYOFWEEKINDEX,
            self::VALUE_RECURRENCE_DAYSOFWEEK,
            self::VALUE_RECURRENCE_DAYOFMONTH,
            self::VALUE_RECURRENCE_INTERVAL,
            self::VALUE_RECURRENCE_NUMBEROFOCCURRENCES,
            self::VALUE_TIMEZONE_OFFSET,
        );
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
