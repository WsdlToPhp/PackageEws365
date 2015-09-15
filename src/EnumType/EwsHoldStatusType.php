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
    const VALUE_NOTONHOLD = 'NotOnHold';
    /**
     * Constant for value 'Pending'
     * @return string 'Pending'
     */
    const VALUE_PENDING = 'Pending';
    /**
     * Constant for value 'OnHold'
     * @return string 'OnHold'
     */
    const VALUE_ONHOLD = 'OnHold';
    /**
     * Constant for value 'PartialHold'
     * @return string 'PartialHold'
     */
    const VALUE_PARTIALHOLD = 'PartialHold';
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
     * @uses self::VALUE_NOTONHOLD
     * @uses self::VALUE_PENDING
     * @uses self::VALUE_ONHOLD
     * @uses self::VALUE_PARTIALHOLD
     * @uses self::VALUE_FAILED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NOTONHOLD,
            self::VALUE_PENDING,
            self::VALUE_ONHOLD,
            self::VALUE_PARTIALHOLD,
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
