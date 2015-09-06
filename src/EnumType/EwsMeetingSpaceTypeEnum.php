<?php

namespace Ews\EnumType;

/**
 * This class stands for MeetingSpaceTypeEnum EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingSpaceTypeEnum
{
    /**
     * Constant for value 'Public'
     * @return string 'Public'
     */
    const VALUE_PUBLIC = 'Public';
    /**
     * Constant for value 'Private'
     * @return string 'Private'
     */
    const VALUE_PRIVATE = 'Private';
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
     * @uses self::VALUE_PUBLIC
     * @uses self::VALUE_PRIVATE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PUBLIC,
            self::VALUE_PRIVATE,
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
