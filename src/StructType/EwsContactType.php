<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactType extends EwsEntityType
{
    /**
     * The PersonName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PersonName;
    /**
     * The BusinessName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BusinessName;
    /**
     * The PhoneNumbers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfPhonesType
     */
    public $PhoneNumbers;
    /**
     * The Urls
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfUrlsType
     */
    public $Urls;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfExtractedEmailAddresses
     */
    public $EmailAddresses;
    /**
     * The Addresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfAddressesType
     */
    public $Addresses;
    /**
     * The ContactString
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($personName) && !is_string($personName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personName, true), gettype($personName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($businessName) && !is_string($businessName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessName, true), gettype($businessName)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($contactString) && !is_string($contactString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactString, true), gettype($contactString)), __LINE__);
        }
        $this->ContactString = $contactString;
        return $this;
    }
}
