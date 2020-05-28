<?php

namespace Ews\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DictionaryURIType EnumType
 * @package Ews
 * @subpackage Enumerations
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDictionaryURIType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'item:InternetMessageHeader'
     * @return string 'item:InternetMessageHeader'
     */
    const VALUE_ITEM_INTERNET_MESSAGE_HEADER = 'item:InternetMessageHeader';
    /**
     * Constant for value 'contacts:ImAddress'
     * @return string 'contacts:ImAddress'
     */
    const VALUE_CONTACTS_IM_ADDRESS = 'contacts:ImAddress';
    /**
     * Constant for value 'contacts:PhysicalAddress:Street'
     * @return string 'contacts:PhysicalAddress:Street'
     */
    const VALUE_CONTACTS_PHYSICAL_ADDRESS_STREET = 'contacts:PhysicalAddress:Street';
    /**
     * Constant for value 'contacts:PhysicalAddress:City'
     * @return string 'contacts:PhysicalAddress:City'
     */
    const VALUE_CONTACTS_PHYSICAL_ADDRESS_CITY = 'contacts:PhysicalAddress:City';
    /**
     * Constant for value 'contacts:PhysicalAddress:State'
     * @return string 'contacts:PhysicalAddress:State'
     */
    const VALUE_CONTACTS_PHYSICAL_ADDRESS_STATE = 'contacts:PhysicalAddress:State';
    /**
     * Constant for value 'contacts:PhysicalAddress:CountryOrRegion'
     * @return string 'contacts:PhysicalAddress:CountryOrRegion'
     */
    const VALUE_CONTACTS_PHYSICAL_ADDRESS_COUNTRY_OR_REGION = 'contacts:PhysicalAddress:CountryOrRegion';
    /**
     * Constant for value 'contacts:PhysicalAddress:PostalCode'
     * @return string 'contacts:PhysicalAddress:PostalCode'
     */
    const VALUE_CONTACTS_PHYSICAL_ADDRESS_POSTAL_CODE = 'contacts:PhysicalAddress:PostalCode';
    /**
     * Constant for value 'contacts:PhoneNumber'
     * @return string 'contacts:PhoneNumber'
     */
    const VALUE_CONTACTS_PHONE_NUMBER = 'contacts:PhoneNumber';
    /**
     * Constant for value 'contacts:EmailAddress'
     * @return string 'contacts:EmailAddress'
     */
    const VALUE_CONTACTS_EMAIL_ADDRESS = 'contacts:EmailAddress';
    /**
     * Constant for value 'distributionlist:Members:Member'
     * @return string 'distributionlist:Members:Member'
     */
    const VALUE_DISTRIBUTIONLIST_MEMBERS_MEMBER = 'distributionlist:Members:Member';
    /**
     * Return allowed values
     * @uses self::VALUE_ITEM_INTERNET_MESSAGE_HEADER
     * @uses self::VALUE_CONTACTS_IM_ADDRESS
     * @uses self::VALUE_CONTACTS_PHYSICAL_ADDRESS_STREET
     * @uses self::VALUE_CONTACTS_PHYSICAL_ADDRESS_CITY
     * @uses self::VALUE_CONTACTS_PHYSICAL_ADDRESS_STATE
     * @uses self::VALUE_CONTACTS_PHYSICAL_ADDRESS_COUNTRY_OR_REGION
     * @uses self::VALUE_CONTACTS_PHYSICAL_ADDRESS_POSTAL_CODE
     * @uses self::VALUE_CONTACTS_PHONE_NUMBER
     * @uses self::VALUE_CONTACTS_EMAIL_ADDRESS
     * @uses self::VALUE_DISTRIBUTIONLIST_MEMBERS_MEMBER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ITEM_INTERNET_MESSAGE_HEADER,
            self::VALUE_CONTACTS_IM_ADDRESS,
            self::VALUE_CONTACTS_PHYSICAL_ADDRESS_STREET,
            self::VALUE_CONTACTS_PHYSICAL_ADDRESS_CITY,
            self::VALUE_CONTACTS_PHYSICAL_ADDRESS_STATE,
            self::VALUE_CONTACTS_PHYSICAL_ADDRESS_COUNTRY_OR_REGION,
            self::VALUE_CONTACTS_PHYSICAL_ADDRESS_POSTAL_CODE,
            self::VALUE_CONTACTS_PHONE_NUMBER,
            self::VALUE_CONTACTS_EMAIL_ADDRESS,
            self::VALUE_DISTRIBUTIONLIST_MEMBERS_MEMBER,
        );
    }
}
