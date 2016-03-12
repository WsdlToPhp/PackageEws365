<?php

namespace Ews\EnumType;

/**
 * This class stands for AvailabilityProxyRequestType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAvailabilityProxyRequestType
{
    /**
     * Constant for value 'CrossSite'
     * @return string 'CrossSite'
     */
    const VALUE_CROSS_SITE = 'CrossSite';
    /**
     * Constant for value 'CrossForest'
     * @return string 'CrossForest'
     */
    const VALUE_CROSS_FOREST = 'CrossForest';
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
     * @uses self::VALUE_CROSS_SITE
     * @uses self::VALUE_CROSS_FOREST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CROSS_SITE,
            self::VALUE_CROSS_FOREST,
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
