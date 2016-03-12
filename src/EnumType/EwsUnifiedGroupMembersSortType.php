<?php

namespace Ews\EnumType;

/**
 * This class stands for UnifiedGroupMembersSortType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupMembersSortType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DisplayName'
     * @return string 'DisplayName'
     */
    const VALUE_DISPLAY_NAME = 'DisplayName';
    /**
     * Constant for value 'OwnerAndDisplayName'
     * @return string 'OwnerAndDisplayName'
     */
    const VALUE_OWNER_AND_DISPLAY_NAME = 'OwnerAndDisplayName';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DISPLAY_NAME
     * @uses self::VALUE_OWNER_AND_DISPLAY_NAME
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DISPLAY_NAME,
            self::VALUE_OWNER_AND_DISPLAY_NAME,
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
