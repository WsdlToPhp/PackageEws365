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
    const VALUE_CROSSSITE = 'CrossSite';
    /**
     * Constant for value 'CrossForest'
     * @return string 'CrossForest'
     */
    const VALUE_CROSSFOREST = 'CrossForest';
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
     * @uses self::VALUE_CROSSSITE
     * @uses self::VALUE_CROSSFOREST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CROSSSITE,
            self::VALUE_CROSSFOREST,
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
