<?php

namespace Ews\EnumType;

/**
 * This class stands for TransitionTargetKindType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTransitionTargetKindType
{
    /**
     * Constant for value 'Period'
     * @return string 'Period'
     */
    const VALUE_PERIOD = 'Period';
    /**
     * Constant for value 'Group'
     * @return string 'Group'
     */
    const VALUE_GROUP = 'Group';
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
     * @uses self::VALUE_PERIOD
     * @uses self::VALUE_GROUP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PERIOD,
            self::VALUE_GROUP,
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
