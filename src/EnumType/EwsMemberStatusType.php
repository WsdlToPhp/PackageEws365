<?php

namespace Ews\EnumType;

/**
 * This class stands for MemberStatusType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMemberStatusType
{
    /**
     * Constant for value 'Unrecognized'
     * @return string 'Unrecognized'
     */
    const VALUE_UNRECOGNIZED = 'Unrecognized';
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Demoted'
     * @return string 'Demoted'
     */
    const VALUE_DEMOTED = 'Demoted';
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
     * @uses self::VALUE_UNRECOGNIZED
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_DEMOTED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNRECOGNIZED,
            self::VALUE_NORMAL,
            self::VALUE_DEMOTED,
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
