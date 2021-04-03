<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BusinessInfoType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBusinessInfoType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Address = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Email = null;
    /**
     * The EmailDisplayAs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EmailDisplayAs = null;
    /**
     * The Website
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Website = null;
    /**
     * The BusinessHours
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfWorkHours|null
     */
    protected ?\ArrayType\EwsArrayOfWorkHours $BusinessHours = null;
    /**
     * Constructor method for BusinessInfoType
     * @uses EwsBusinessInfoType::setName()
     * @uses EwsBusinessInfoType::setAddress()
     * @uses EwsBusinessInfoType::setPhone()
     * @uses EwsBusinessInfoType::setEmail()
     * @uses EwsBusinessInfoType::setEmailDisplayAs()
     * @uses EwsBusinessInfoType::setWebsite()
     * @uses EwsBusinessInfoType::setBusinessHours()
     * @param string $name
     * @param string $address
     * @param string $phone
     * @param string $email
     * @param string $emailDisplayAs
     * @param string $website
     * @param \ArrayType\EwsArrayOfWorkHours $businessHours
     */
    public function __construct(?string $name = null, ?string $address = null, ?string $phone = null, ?string $email = null, ?string $emailDisplayAs = null, ?string $website = null, ?\ArrayType\EwsArrayOfWorkHours $businessHours = null)
    {
        $this
            ->setName($name)
            ->setAddress($address)
            ->setPhone($phone)
            ->setEmail($email)
            ->setEmailDisplayAs($emailDisplayAs)
            ->setWebsite($website)
            ->setBusinessHours($businessHours);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsBusinessInfoType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \StructType\EwsBusinessInfoType
     */
    public function setAddress(?string $address = null): self
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($address, true), gettype($address)), __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \StructType\EwsBusinessInfoType
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\EwsBusinessInfoType
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        
        return $this;
    }
    /**
     * Get EmailDisplayAs value
     * @return string|null
     */
    public function getEmailDisplayAs(): ?string
    {
        return $this->EmailDisplayAs;
    }
    /**
     * Set EmailDisplayAs value
     * @param string $emailDisplayAs
     * @return \StructType\EwsBusinessInfoType
     */
    public function setEmailDisplayAs(?string $emailDisplayAs = null): self
    {
        // validation for constraint: string
        if (!is_null($emailDisplayAs) && !is_string($emailDisplayAs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailDisplayAs, true), gettype($emailDisplayAs)), __LINE__);
        }
        $this->EmailDisplayAs = $emailDisplayAs;
        
        return $this;
    }
    /**
     * Get Website value
     * @return string|null
     */
    public function getWebsite(): ?string
    {
        return $this->Website;
    }
    /**
     * Set Website value
     * @param string $website
     * @return \StructType\EwsBusinessInfoType
     */
    public function setWebsite(?string $website = null): self
    {
        // validation for constraint: string
        if (!is_null($website) && !is_string($website)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($website, true), gettype($website)), __LINE__);
        }
        $this->Website = $website;
        
        return $this;
    }
    /**
     * Get BusinessHours value
     * @return \ArrayType\EwsArrayOfWorkHours|null
     */
    public function getBusinessHours(): ?\ArrayType\EwsArrayOfWorkHours
    {
        return $this->BusinessHours;
    }
    /**
     * Set BusinessHours value
     * @param \ArrayType\EwsArrayOfWorkHours $businessHours
     * @return \StructType\EwsBusinessInfoType
     */
    public function setBusinessHours(?\ArrayType\EwsArrayOfWorkHours $businessHours = null): self
    {
        $this->BusinessHours = $businessHours;
        
        return $this;
    }
}
