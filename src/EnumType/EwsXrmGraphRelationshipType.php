<?php

namespace Ews\EnumType;

/**
 * This class stands for XrmGraphRelationshipType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmGraphRelationshipType
{
    /**
     * Constant for value 'PointsOfContactFor'
     * @return string 'PointsOfContactFor'
     */
    const VALUE_POINTS_OF_CONTACT_FOR = 'PointsOfContactFor';
    /**
     * Constant for value 'CustomerOf'
     * @return string 'CustomerOf'
     */
    const VALUE_CUSTOMER_OF = 'CustomerOf';
    /**
     * Constant for value 'WorksFor'
     * @return string 'WorksFor'
     */
    const VALUE_WORKS_FOR = 'WorksFor';
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
     * @uses self::VALUE_POINTS_OF_CONTACT_FOR
     * @uses self::VALUE_CUSTOMER_OF
     * @uses self::VALUE_WORKS_FOR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POINTS_OF_CONTACT_FOR,
            self::VALUE_CUSTOMER_OF,
            self::VALUE_WORKS_FOR,
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
