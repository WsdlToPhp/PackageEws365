<?php

namespace Ews\EnumType;

/**
 * This class stands for UMCDRFilterByType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUMCDRFilterByType
{
    /**
     * Constant for value 'FilterByUser'
     * @return string 'FilterByUser'
     */
    const VALUE_FILTER_BY_USER = 'FilterByUser';
    /**
     * Constant for value 'FilterByDate'
     * @return string 'FilterByDate'
     */
    const VALUE_FILTER_BY_DATE = 'FilterByDate';
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
     * @uses self::VALUE_FILTER_BY_USER
     * @uses self::VALUE_FILTER_BY_DATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FILTER_BY_USER,
            self::VALUE_FILTER_BY_DATE,
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
