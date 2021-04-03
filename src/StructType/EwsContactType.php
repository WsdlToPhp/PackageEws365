<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $PersonName = null;
    /**
     * The BusinessName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BusinessName = null;
    /**
     * The PhoneNumbers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfPhonesType|null
     */
    protected ?\ArrayType\EwsArrayOfPhonesType $PhoneNumbers = null;
    /**
     * The Urls
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfUrlsType|null
     */
    protected ?\ArrayType\EwsArrayOfUrlsType $Urls = null;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfExtractedEmailAddresses|null
     */
    protected ?\ArrayType\EwsArrayOfExtractedEmailAddresses $EmailAddresses = null;
    /**
     * The Addresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfAddressesType|null
     */
    protected ?\ArrayType\EwsArrayOfAddressesType $Addresses = null;
    /**
     * The ContactString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ContactString = null;
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
     * @param \ArrayType\EwsArrayOfPhonesType $phoneNumbers
     * @param \ArrayType\EwsArrayOfUrlsType $urls
     * @param \ArrayType\EwsArrayOfExtractedEmailAddresses $emailAddresses
     * @param \ArrayType\EwsArrayOfAddressesType $addresses
     * @param string $contactString
     */
    public function __construct(?string $personName = null, ?string $businessName = null, ?\ArrayType\EwsArrayOfPhonesType $phoneNumbers = null, ?\ArrayType\EwsArrayOfUrlsType $urls = null, ?\ArrayType\EwsArrayOfExtractedEmailAddresses $emailAddresses = null, ?\ArrayType\EwsArrayOfAddressesType $addresses = null, ?string $contactString = null)
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
    public function getPersonName(): ?string
    {
        return $this->PersonName;
    }
    /**
     * Set PersonName value
     * @param string $personName
     * @return \StructType\EwsContactType
     */
    public function setPersonName(?string $personName = null): self
    {
        // validation for constraint: string
        if (!is_null($personName) && !is_string($personName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personName, true), gettype($personName)), __LINE__);
        }
        $this->PersonName = $personName;
        
        return $this;
    }
    /**
     * Get BusinessName value
     * @return string|null
     */
    public function getBusinessName(): ?string
    {
        return $this->BusinessName;
    }
    /**
     * Set BusinessName value
     * @param string $businessName
     * @return \StructType\EwsContactType
     */
    public function setBusinessName(?string $businessName = null): self
    {
        // validation for constraint: string
        if (!is_null($businessName) && !is_string($businessName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessName, true), gettype($businessName)), __LINE__);
        }
        $this->BusinessName = $businessName;
        
        return $this;
    }
    /**
     * Get PhoneNumbers value
     * @return \ArrayType\EwsArrayOfPhonesType|null
     */
    public function getPhoneNumbers(): ?\ArrayType\EwsArrayOfPhonesType
    {
        return $this->PhoneNumbers;
    }
    /**
     * Set PhoneNumbers value
     * @param \ArrayType\EwsArrayOfPhonesType $phoneNumbers
     * @return \StructType\EwsContactType
     */
    public function setPhoneNumbers(?\ArrayType\EwsArrayOfPhonesType $phoneNumbers = null): self
    {
        $this->PhoneNumbers = $phoneNumbers;
        
        return $this;
    }
    /**
     * Get Urls value
     * @return \ArrayType\EwsArrayOfUrlsType|null
     */
    public function getUrls(): ?\ArrayType\EwsArrayOfUrlsType
    {
        return $this->Urls;
    }
    /**
     * Set Urls value
     * @param \ArrayType\EwsArrayOfUrlsType $urls
     * @return \StructType\EwsContactType
     */
    public function setUrls(?\ArrayType\EwsArrayOfUrlsType $urls = null): self
    {
        $this->Urls = $urls;
        
        return $this;
    }
    /**
     * Get EmailAddresses value
     * @return \ArrayType\EwsArrayOfExtractedEmailAddresses|null
     */
    public function getEmailAddresses(): ?\ArrayType\EwsArrayOfExtractedEmailAddresses
    {
        return $this->EmailAddresses;
    }
    /**
     * Set EmailAddresses value
     * @param \ArrayType\EwsArrayOfExtractedEmailAddresses $emailAddresses
     * @return \StructType\EwsContactType
     */
    public function setEmailAddresses(?\ArrayType\EwsArrayOfExtractedEmailAddresses $emailAddresses = null): self
    {
        $this->EmailAddresses = $emailAddresses;
        
        return $this;
    }
    /**
     * Get Addresses value
     * @return \ArrayType\EwsArrayOfAddressesType|null
     */
    public function getAddresses(): ?\ArrayType\EwsArrayOfAddressesType
    {
        return $this->Addresses;
    }
    /**
     * Set Addresses value
     * @param \ArrayType\EwsArrayOfAddressesType $addresses
     * @return \StructType\EwsContactType
     */
    public function setAddresses(?\ArrayType\EwsArrayOfAddressesType $addresses = null): self
    {
        $this->Addresses = $addresses;
        
        return $this;
    }
    /**
     * Get ContactString value
     * @return string|null
     */
    public function getContactString(): ?string
    {
        return $this->ContactString;
    }
    /**
     * Set ContactString value
     * @param string $contactString
     * @return \StructType\EwsContactType
     */
    public function setContactString(?string $contactString = null): self
    {
        // validation for constraint: string
        if (!is_null($contactString) && !is_string($contactString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactString, true), gettype($contactString)), __LINE__);
        }
        $this->ContactString = $contactString;
        
        return $this;
    }
}
