<?php

namespace Ews\EnumType;

/**
 * This class stands for BookingServiceTypeEnum EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBookingServiceTypeEnum
{
    /**
     * Constant for value 'UserDefined'
     * @return string 'UserDefined'
     */
    const VALUE_USERDEFINED = 'UserDefined';
    /**
     * Constant for value 'TimeOff'
     * @return string 'TimeOff'
     */
    const VALUE_TIMEOFF = 'TimeOff';
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
     * @uses self::VALUE_USERDEFINED
     * @uses self::VALUE_TIMEOFF
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_USERDEFINED,
            self::VALUE_TIMEOFF,
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
