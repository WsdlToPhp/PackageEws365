<?php

namespace Ews\EnumType;

/**
 * This class stands for XrmGraphRelationshipType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsXrmGraphRelationshipType
{
    /**
     * Constant for value 'PointsOfContactFor'
     * @return string 'PointsOfContactFor'
     */
    const VALUE_POINTSOFCONTACTFOR = 'PointsOfContactFor';
    /**
     * Constant for value 'CustomerOf'
     * @return string 'CustomerOf'
     */
    const VALUE_CUSTOMEROF = 'CustomerOf';
    /**
     * Constant for value 'WorksFor'
     * @return string 'WorksFor'
     */
    const VALUE_WORKSFOR = 'WorksFor';
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
     * @uses self::VALUE_POINTSOFCONTACTFOR
     * @uses self::VALUE_CUSTOMEROF
     * @uses self::VALUE_WORKSFOR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POINTSOFCONTACTFOR,
            self::VALUE_CUSTOMEROF,
            self::VALUE_WORKSFOR,
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
