<?php

namespace Ews\EnumType;

/**
 * This class stands for SenderRestrictionType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSenderRestrictionType
{
    /**
     * Constant for value 'Allow'
     * @return string 'Allow'
     */
    const VALUE_ALLOW = 'Allow';
    /**
     * Constant for value 'Reject'
     * @return string 'Reject'
     */
    const VALUE_REJECT = 'Reject';
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
     * @uses self::VALUE_ALLOW
     * @uses self::VALUE_REJECT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALLOW,
            self::VALUE_REJECT,
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
