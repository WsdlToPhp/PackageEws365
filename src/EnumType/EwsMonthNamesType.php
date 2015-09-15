<?php

namespace Ews\EnumType;

/**
 * This class stands for MonthNamesType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMonthNamesType
{
    /**
     * Constant for value 'January'
     * @return string 'January'
     */
    const VALUE_JANUARY = 'January';
    /**
     * Constant for value 'February'
     * @return string 'February'
     */
    const VALUE_FEBRUARY = 'February';
    /**
     * Constant for value 'March'
     * @return string 'March'
     */
    const VALUE_MARCH = 'March';
    /**
     * Constant for value 'April'
     * @return string 'April'
     */
    const VALUE_APRIL = 'April';
    /**
     * Constant for value 'May'
     * @return string 'May'
     */
    const VALUE_MAY = 'May';
    /**
     * Constant for value 'June'
     * @return string 'June'
     */
    const VALUE_JUNE = 'June';
    /**
     * Constant for value 'July'
     * @return string 'July'
     */
    const VALUE_JULY = 'July';
    /**
     * Constant for value 'August'
     * @return string 'August'
     */
    const VALUE_AUGUST = 'August';
    /**
     * Constant for value 'September'
     * @return string 'September'
     */
    const VALUE_SEPTEMBER = 'September';
    /**
     * Constant for value 'October'
     * @return string 'October'
     */
    const VALUE_OCTOBER = 'October';
    /**
     * Constant for value 'November'
     * @return string 'November'
     */
    const VALUE_NOVEMBER = 'November';
    /**
     * Constant for value 'December'
     * @return string 'December'
     */
    const VALUE_DECEMBER = 'December';
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
     * @uses self::VALUE_JANUARY
     * @uses self::VALUE_FEBRUARY
     * @uses self::VALUE_MARCH
     * @uses self::VALUE_APRIL
     * @uses self::VALUE_MAY
     * @uses self::VALUE_JUNE
     * @uses self::VALUE_JULY
     * @uses self::VALUE_AUGUST
     * @uses self::VALUE_SEPTEMBER
     * @uses self::VALUE_OCTOBER
     * @uses self::VALUE_NOVEMBER
     * @uses self::VALUE_DECEMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_JANUARY,
            self::VALUE_FEBRUARY,
            self::VALUE_MARCH,
            self::VALUE_APRIL,
            self::VALUE_MAY,
            self::VALUE_JUNE,
            self::VALUE_JULY,
            self::VALUE_AUGUST,
            self::VALUE_SEPTEMBER,
            self::VALUE_OCTOBER,
            self::VALUE_NOVEMBER,
            self::VALUE_DECEMBER,
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
