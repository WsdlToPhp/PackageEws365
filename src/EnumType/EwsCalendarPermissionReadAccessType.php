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
    const VALUE_TIMEONLY = 'TimeOnly';
    /**
     * Constant for value 'TimeAndSubjectAndLocation'
     * @return string 'TimeAndSubjectAndLocation'
     */
    const VALUE_TIMEANDSUBJECTANDLOCATION = 'TimeAndSubjectAndLocation';
    /**
     * Constant for value 'FullDetails'
     * @return string 'FullDetails'
     */
    const VALUE_FULLDETAILS = 'FullDetails';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_TIMEONLY
     * @uses self::VALUE_TIMEANDSUBJECTANDLOCATION
     * @uses self::VALUE_FULLDETAILS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_TIMEONLY,
            self::VALUE_TIMEANDSUBJECTANDLOCATION,
            self::VALUE_FULLDETAILS,
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
