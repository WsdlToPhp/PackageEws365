<?php

namespace Ews\EnumType;

/**
 * This class stands for UnifiedGroupMembersResponseShapeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUnifiedGroupMembersResponseShapeType
{
    /**
     * Constant for value 'Members'
     * @return string 'Members'
     */
    const VALUE_MEMBERS = 'Members';
    /**
     * Constant for value 'Owners'
     * @return string 'Owners'
     */
    const VALUE_OWNERS = 'Owners';
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
     * @uses self::VALUE_MEMBERS
     * @uses self::VALUE_OWNERS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MEMBERS,
            self::VALUE_OWNERS,
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
