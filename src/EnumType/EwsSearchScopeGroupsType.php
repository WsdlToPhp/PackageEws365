<?php

namespace Ews\EnumType;

/**
 * This class stands for SearchScopeGroupsType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchScopeGroupsType
{
    /**
     * Constant for value 'MyGroups'
     * @return string 'MyGroups'
     */
    const VALUE_MY_GROUPS = 'MyGroups';
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
     * @uses self::VALUE_MY_GROUPS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MY_GROUPS,
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
