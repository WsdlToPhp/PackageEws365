<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsContactType extends EwsEntityType
{
    /**
     * The PersonName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PersonName;
    /**
     * The BusinessName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BusinessName;
    /**
     * The PhoneNumbers
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhonesType
     */
    public $PhoneNumbers;
    /**
     * The Urls
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUrlsType
     */
    public $Urls;
    /**
     * The EmailAddresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses
     */
    public $EmailAddresses;
    /**
     * The Addresses
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfAddressesType
     */
    public $Addresses;
    /**
     * The ContactString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContactString;
    /**
     * Constructor method for ContactType
     * @uses EwsContactType::setPersonName()
     * @uses EwsContactType::setBusinessName()
     * @uses EwsContactType::setPhoneNumbers()
     * @uses EwsContactType::setUrls()
     * @uses EwsContactType::setEmailAddresses()
     * @uses EwsContactType::setAddresses()
     * @uses EwsContactType::setContactString()
     * @param string $personName
     * @param string $businessName
     * @param \Ews\ArrayType\EwsArrayOfPhonesType $phoneNumbers
     * @param \Ews\ArrayType\EwsArrayOfUrlsType $urls
     * @param \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses $emailAddresses
     * @param \Ews\ArrayType\EwsArrayOfAddressesType $addresses
     * @param string $contactString
     */
    public function __construct($personName = null, $businessName = null, \Ews\ArrayType\EwsArrayOfPhonesType $phoneNumbers = null, \Ews\ArrayType\EwsArrayOfUrlsType $urls = null, \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses $emailAddresses = null, \Ews\ArrayType\EwsArrayOfAddressesType $addresses = null, $contactString = null)
    {
        $this
            ->setPersonName($personName)
            ->setBusinessName($businessName)
            ->setPhoneNumbers($phoneNumbers)
            ->setUrls($urls)
            ->setEmailAddresses($emailAddresses)
            ->setAddresses($addresses)
            ->setContactString($contactString);
    }
    /**
     * Get PersonName value
     * @return string|null
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param string $personName
     * @return \Ews\StructType\EwsContactType
     */
    public function setPersonName($personName = null)
    {
        $this->PersonName = $personName;
        return $this;
    }
    /**
     * Get BusinessName value
     * @return string|null
     */
    public function getBusinessName()
    {
        return $this->BusinessName;
    }
    /**
     * Set BusinessName value
     * @param string $businessName
     * @return \Ews\StructType\EwsContactType
     */
    public function setBusinessName($businessName = null)
    {
        $this->BusinessName = $businessName;
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \Ews\ArrayType\EwsArrayOfPhonesType|null
     */
    public function getPhoneNumbers()
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \Ews\ArrayType\EwsArrayOfPhonesType $phoneNumbers
     * @return \Ews\StructType\EwsContactType
     */
    public function setPhoneNumbers(\Ews\ArrayType\EwsArrayOfPhonesType $phoneNumbers = null)
    {
        $this->PhoneNumbers = $phoneNumbers;
        return $this;
    }
    /**
     * Get Urls value
     * @return \Ews\ArrayType\EwsArrayOfUrlsType|null
     */
    public function getUrls()
    {
        return $this->Urls;
    }
    /**
     * Set Urls value
     * @param \Ews\ArrayType\EwsArrayOfUrlsType $urls
     * @return \Ews\StructType\EwsContactType
     */
    public function setUrls(\Ews\ArrayType\EwsArrayOfUrlsType $urls = null)
    {
        $this->Urls = $urls;
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses|null
     */
    public function getEmailAddresses()
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses $emailAddresses
     * @return \Ews\StructType\EwsContactType
     */
    public function setEmailAddresses(\Ews\ArrayType\EwsArrayOfExtractedEmailAddresses $emailAddresses = null)
    {
        $this->EmailAddresses = $emailAddresses;
        return $this;
    }
    /**
     * Get Addresses value
     * @return \Ews\ArrayType\EwsArrayOfAddressesType|null
     */
    public function getAddresses()
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \Ews\ArrayType\EwsArrayOfAddressesType $addresses
     * @return \Ews\StructType\EwsContactType
     */
    public function setAddresses(\Ews\ArrayType\EwsArrayOfAddressesType $addresses = null)
    {
        $this->Addresses = $addresses;
        return $this;
    }
    /**
     * Get ContactString value
     * @return string|null
     */
    public function getContactString()
    {
        return $this->ContactString;
    }
    /**
     * Set ContactString value
     * @param string $contactString
     * @return \Ews\StructType\EwsContactType
     */
    public function setContactString($contactString = null)
    {
        $this->ContactString = $contactString;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsContactType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
