<?php

namespace Ews\EnumType;

/**
 * This class stands for GroupMembershipType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGroupMembershipType
{
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'Dynamic'
     * @return string 'Dynamic'
     */
    const VALUE_DYNAMIC = 'Dynamic';
    /**
     * Constant for value 'Hidden'
     * @return string 'Hidden'
     */
    const VALUE_HIDDEN = 'Hidden';
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
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_DYNAMIC
     * @uses self::VALUE_HIDDEN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NORMAL,
            self::VALUE_DYNAMIC,
            self::VALUE_HIDDEN,
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
