<?php

namespace Ews\EnumType;

/**
 * This class stands for XrmGraphRelationshipEntityType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmGraphRelationshipEntityType
{
    /**
     * Constant for value 'XrmDeal'
     * @return string 'XrmDeal'
     */
    const VALUE_XRMDEAL = 'XrmDeal';
    /**
     * Constant for value 'XrmContact'
     * @return string 'XrmContact'
     */
    const VALUE_XRMCONTACT = 'XrmContact';
    /**
     * Constant for value 'XrmOrganization'
     * @return string 'XrmOrganization'
     */
    const VALUE_XRMORGANIZATION = 'XrmOrganization';
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
     * @uses self::VALUE_XRMDEAL
     * @uses self::VALUE_XRMCONTACT
     * @uses self::VALUE_XRMORGANIZATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_XRMDEAL,
            self::VALUE_XRMCONTACT,
            self::VALUE_XRMORGANIZATION,
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
