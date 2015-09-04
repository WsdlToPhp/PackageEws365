<?php

namespace Ews\EnumType;

/**
 * This class stands for UMCDRFilterByType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUMCDRFilterByType
{
    /**
     * Constant for value 'FilterByUser'
     * @return string 'FilterByUser'
     */
    const VALUE_FILTERBYUSER = 'FilterByUser';
    /**
     * Constant for value 'FilterByDate'
     * @return string 'FilterByDate'
     */
    const VALUE_FILTERBYDATE = 'FilterByDate';
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
     * @uses self::VALUE_FILTERBYUSER
     * @uses self::VALUE_FILTERBYDATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FILTERBYUSER,
            self::VALUE_FILTERBYDATE,
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
