<?php

namespace Ews\EnumType;

/**
 * This class stands for RoleMemberTypeType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsRoleMemberTypeType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Passport'
     * @return string 'Passport'
     */
    const VALUE_PASSPORT = 'Passport';
    /**
     * Constant for value 'Everyone'
     * @return string 'Everyone'
     */
    const VALUE_EVERYONE = 'Everyone';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'Phone'
     * @return string 'Phone'
     */
    const VALUE_PHONE = 'Phone';
    /**
     * Constant for value 'SkypeId'
     * @return string 'SkypeId'
     */
    const VALUE_SKYPEID = 'SkypeId';
    /**
     * Constant for value 'ExternalId'
     * @return string 'ExternalId'
     */
    const VALUE_EXTERNALID = 'ExternalId';
    /**
     * Constant for value 'Group'
     * @return string 'Group'
     */
    const VALUE_GROUP = 'Group';
    /**
     * Constant for value 'Guid'
     * @return string 'Guid'
     */
    const VALUE_GUID = 'Guid';
    /**
     * Constant for value 'Role'
     * @return string 'Role'
     */
    const VALUE_ROLE = 'Role';
    /**
     * Constant for value 'Service'
     * @return string 'Service'
     */
    const VALUE_SERVICE = 'Service';
    /**
     * Constant for value 'Circle'
     * @return string 'Circle'
     */
    const VALUE_CIRCLE = 'Circle';
    /**
     * Constant for value 'Domain'
     * @return string 'Domain'
     */
    const VALUE_DOMAIN = 'Domain';
    /**
     * Constant for value 'Partner'
     * @return string 'Partner'
     */
    const VALUE_PARTNER = 'Partner';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_PASSPORT
     * @uses self::VALUE_EVERYONE
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_PHONE
     * @uses self::VALUE_SKYPEID
     * @uses self::VALUE_EXTERNALID
     * @uses self::VALUE_GROUP
     * @uses self::VALUE_GUID
     * @uses self::VALUE_ROLE
     * @uses self::VALUE_SERVICE
     * @uses self::VALUE_CIRCLE
     * @uses self::VALUE_DOMAIN
     * @uses self::VALUE_PARTNER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_PASSPORT,
            self::VALUE_EVERYONE,
            self::VALUE_EMAIL,
            self::VALUE_PHONE,
            self::VALUE_SKYPEID,
            self::VALUE_EXTERNALID,
            self::VALUE_GROUP,
            self::VALUE_GUID,
            self::VALUE_ROLE,
            self::VALUE_SERVICE,
            self::VALUE_CIRCLE,
            self::VALUE_DOMAIN,
            self::VALUE_PARTNER,
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
