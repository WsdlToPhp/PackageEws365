<?php

namespace Ews\EnumType;

/**
 * This class stands for DictionaryURIType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDictionaryURIType
{
    /**
     * Constant for value 'item:InternetMessageHeader'
     * @return string 'item:InternetMessageHeader'
     */
    const VALUE_ITEM_INTERNETMESSAGEHEADER = 'item:InternetMessageHeader';
    /**
     * Constant for value 'contacts:ImAddress'
     * @return string 'contacts:ImAddress'
     */
    const VALUE_CONTACTS_IMADDRESS = 'contacts:ImAddress';
    /**
     * Constant for value 'contacts:PhysicalAddress:Street'
     * @return string 'contacts:PhysicalAddress:Street'
     */
    const VALUE_CONTACTS_PHYSICALADDRESS_STREET = 'contacts:PhysicalAddress:Street';
    /**
     * Constant for value 'contacts:PhysicalAddress:City'
     * @return string 'contacts:PhysicalAddress:City'
     */
    const VALUE_CONTACTS_PHYSICALADDRESS_CITY = 'contacts:PhysicalAddress:City';
    /**
     * Constant for value 'contacts:PhysicalAddress:State'
     * @return string 'contacts:PhysicalAddress:State'
     */
    const VALUE_CONTACTS_PHYSICALADDRESS_STATE = 'contacts:PhysicalAddress:State';
    /**
     * Constant for value 'contacts:PhysicalAddress:CountryOrRegion'
     * @return string 'contacts:PhysicalAddress:CountryOrRegion'
     */
    const VALUE_CONTACTS_PHYSICALADDRESS_COUNTRYORREGION = 'contacts:PhysicalAddress:CountryOrRegion';
    /**
     * Constant for value 'contacts:PhysicalAddress:PostalCode'
     * @return string 'contacts:PhysicalAddress:PostalCode'
     */
    const VALUE_CONTACTS_PHYSICALADDRESS_POSTALCODE = 'contacts:PhysicalAddress:PostalCode';
    /**
     * Constant for value 'contacts:PhoneNumber'
     * @return string 'contacts:PhoneNumber'
     */
    const VALUE_CONTACTS_PHONENUMBER = 'contacts:PhoneNumber';
    /**
     * Constant for value 'contacts:EmailAddress'
     * @return string 'contacts:EmailAddress'
     */
    const VALUE_CONTACTS_EMAILADDRESS = 'contacts:EmailAddress';
    /**
     * Constant for value 'distributionlist:Members:Member'
     * @return string 'distributionlist:Members:Member'
     */
    const VALUE_DISTRIBUTIONLIST_MEMBERS_MEMBER = 'distributionlist:Members:Member';
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
     * @uses self::VALUE_ITEM_INTERNETMESSAGEHEADER
     * @uses self::VALUE_CONTACTS_IMADDRESS
     * @uses self::VALUE_CONTACTS_PHYSICALADDRESS_STREET
     * @uses self::VALUE_CONTACTS_PHYSICALADDRESS_CITY
     * @uses self::VALUE_CONTACTS_PHYSICALADDRESS_STATE
     * @uses self::VALUE_CONTACTS_PHYSICALADDRESS_COUNTRYORREGION
     * @uses self::VALUE_CONTACTS_PHYSICALADDRESS_POSTALCODE
     * @uses self::VALUE_CONTACTS_PHONENUMBER
     * @uses self::VALUE_CONTACTS_EMAILADDRESS
     * @uses self::VALUE_DISTRIBUTIONLIST_MEMBERS_MEMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_INTERNETMESSAGEHEADER,
            self::VALUE_CONTACTS_IMADDRESS,
            self::VALUE_CONTACTS_PHYSICALADDRESS_STREET,
            self::VALUE_CONTACTS_PHYSICALADDRESS_CITY,
            self::VALUE_CONTACTS_PHYSICALADDRESS_STATE,
            self::VALUE_CONTACTS_PHYSICALADDRESS_COUNTRYORREGION,
            self::VALUE_CONTACTS_PHYSICALADDRESS_POSTALCODE,
            self::VALUE_CONTACTS_PHONENUMBER,
            self::VALUE_CONTACTS_EMAILADDRESS,
            self::VALUE_DISTRIBUTIONLIST_MEMBERS_MEMBER,
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
