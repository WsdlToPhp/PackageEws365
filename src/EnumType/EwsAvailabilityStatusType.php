<?php

namespace Ews\EnumType;

/**
 * This class stands for AvailabilityStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsAvailabilityStatusType
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Free'
     * @return string 'Free'
     */
    const VALUE_FREE = 'Free';
    /**
     * Constant for value 'Tentative'
     * @return string 'Tentative'
     */
    const VALUE_TENTATIVE = 'Tentative';
    /**
     * Constant for value 'Busy'
     * @return string 'Busy'
     */
    const VALUE_BUSY = 'Busy';
    /**
     * Constant for value 'Oof'
     * @return string 'Oof'
     */
    const VALUE_OOF = 'Oof';
    /**
     * Constant for value 'WorkingElsewhere'
     * @return string 'WorkingElsewhere'
     */
    const VALUE_WORKINGELSEWHERE = 'WorkingElsewhere';
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
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_FREE
     * @uses self::VALUE_TENTATIVE
     * @uses self::VALUE_BUSY
     * @uses self::VALUE_OOF
     * @uses self::VALUE_WORKINGELSEWHERE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNKNOWN,
            self::VALUE_FREE,
            self::VALUE_TENTATIVE,
            self::VALUE_BUSY,
            self::VALUE_OOF,
            self::VALUE_WORKINGELSEWHERE,
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
