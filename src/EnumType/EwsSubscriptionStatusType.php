<?php

namespace Ews\EnumType;

/**
 * This class stands for SubscriptionStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSubscriptionStatusType
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'Unsubscribe'
     * @return string 'Unsubscribe'
     */
    const VALUE_UNSUBSCRIBE = 'Unsubscribe';
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
     * @uses self::VALUE_OK
     * @uses self::VALUE_UNSUBSCRIBE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_OK,
            self::VALUE_UNSUBSCRIBE,
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
