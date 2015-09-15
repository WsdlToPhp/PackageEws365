<?php

namespace Ews\EnumType;

/**
 * This class stands for UnifiedGroupDetailsResponseShapeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnifiedGroupDetailsResponseShapeType
{
    /**
     * Constant for value 'Basic'
     * @return string 'Basic'
     */
    const VALUE_BASIC = 'Basic';
    /**
     * Constant for value 'Full'
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
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
     * @uses self::VALUE_BASIC
     * @uses self::VALUE_FULL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BASIC,
            self::VALUE_FULL,
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
