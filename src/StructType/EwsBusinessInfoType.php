<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Address;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The EmailDisplayAs
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EmailDisplayAs;
    /**
     * The Website
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Website;
    /**
     * The BusinessHours
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfWorkHours
     */
    public $BusinessHours;
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
     * @param \Ews\ArrayType\EwsArrayOfWorkHours $businessHours
     */
    public function __construct($name = null, $address = null, $phone = null, $email = null, $emailDisplayAs = null, $website = null, \Ews\ArrayType\EwsArrayOfWorkHours $businessHours = null)
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
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param string $address
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function setAddress($address = null)
    {
        // validation for constraint: string
        if (!is_null($address) && !is_string($address)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($address)), __LINE__);
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get EmailDisplayAs value
     * @return string|null
     */
    public function getEmailDisplayAs()
    {
        return $this->EmailDisplayAs;
    }
    /**
     * Set EmailDisplayAs value
     * @param string $emailDisplayAs
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function setEmailDisplayAs($emailDisplayAs = null)
    {
        // validation for constraint: string
        if (!is_null($emailDisplayAs) && !is_string($emailDisplayAs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailDisplayAs)), __LINE__);
        }
        $this->EmailDisplayAs = $emailDisplayAs;
        return $this;
    }
    /**
     * Get Website value
     * @return string|null
     */
    public function getWebsite()
    {
        return $this->Website;
    }
    /**
     * Set Website value
     * @param string $website
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function setWebsite($website = null)
    {
        // validation for constraint: string
        if (!is_null($website) && !is_string($website)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($website)), __LINE__);
        }
        $this->Website = $website;
        return $this;
    }
    /**
     * Get BusinessHours value
     * @return \Ews\ArrayType\EwsArrayOfWorkHours|null
     */
    public function getBusinessHours()
    {
        return $this->BusinessHours;
    }
    /**
     * Set BusinessHours value
     * @param \Ews\ArrayType\EwsArrayOfWorkHours $businessHours
     * @return \Ews\StructType\EwsBusinessInfoType
     */
    public function setBusinessHours(\Ews\ArrayType\EwsArrayOfWorkHours $businessHours = null)
    {
        $this->BusinessHours = $businessHours;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBusinessInfoType
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
