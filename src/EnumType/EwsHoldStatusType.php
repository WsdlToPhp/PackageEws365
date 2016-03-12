<?php

namespace Ews\EnumType;

/**
 * This class stands for HoldStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsHoldStatusType
{
    /**
     * Constant for value 'NotOnHold'
     * @return string 'NotOnHold'
     */
    const VALUE_NOT_ON_HOLD = 'NotOnHold';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'OnHold'
     * @return string 'OnHold'
     */
    const VALUE_ON_HOLD = 'OnHold';
    /**
     * Constant for value 'PartialHold'
     * @return string 'PartialHold'
     */
    const VALUE_PARTIAL_HOLD = 'PartialHold';
    /**
     * Constant for value 'Failed'
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
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
     * @uses self::VALUE_NOT_ON_HOLD
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_ON_HOLD
     * @uses self::VALUE_PARTIAL_HOLD
     * @uses self::VALUE_FAILED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOT_ON_HOLD,
            self::VALUE_PENDING,
            self::VALUE_ON_HOLD,
            self::VALUE_PARTIAL_HOLD,
            self::VALUE_FAILED,
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
