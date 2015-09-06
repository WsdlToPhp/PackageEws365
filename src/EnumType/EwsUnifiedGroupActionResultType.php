<?php

namespace Ews\EnumType;

/**
 * This class stands for UnifiedGroupActionResultType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupActionResultType
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'SuccessDelayed'
     * @return string 'SuccessDelayed'
     */
    const VALUE_SUCCESSDELAYED = 'SuccessDelayed';
    /**
     * Constant for value 'Unauthorized'
     * @return string 'Unauthorized'
     */
    const VALUE_UNAUTHORIZED = 'Unauthorized';
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
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_SUCCESSDELAYED
     * @uses self::VALUE_UNAUTHORIZED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SUCCESS,
            self::VALUE_SUCCESSDELAYED,
            self::VALUE_UNAUTHORIZED,
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
