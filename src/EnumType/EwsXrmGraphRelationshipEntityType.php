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
    const VALUE_XRM_DEAL = 'XrmDeal';
    /**
     * Constant for value 'XrmContact'
     * @return string 'XrmContact'
     */
    const VALUE_XRM_CONTACT = 'XrmContact';
    /**
     * Constant for value 'XrmOrganization'
     * @return string 'XrmOrganization'
     */
    const VALUE_XRM_ORGANIZATION = 'XrmOrganization';
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
     * @uses self::VALUE_XRM_DEAL
     * @uses self::VALUE_XRM_CONTACT
     * @uses self::VALUE_XRM_ORGANIZATION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_XRM_DEAL,
            self::VALUE_XRM_CONTACT,
            self::VALUE_XRM_ORGANIZATION,
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
