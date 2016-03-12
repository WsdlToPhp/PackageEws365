<?php

namespace Ews\EnumType;

/**
 * This class stands for CalendarPermissionReadAccessType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarPermissionReadAccessType
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
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_TIME_ONLY
     * @uses self::VALUE_TIME_AND_SUBJECT_AND_LOCATION
     * @uses self::VALUE_FULL_DETAILS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_TIME_ONLY,
            self::VALUE_TIME_AND_SUBJECT_AND_LOCATION,
            self::VALUE_FULL_DETAILS,
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
