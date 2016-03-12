<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for XrmDealType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsXrmDealType extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The XrmId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $XrmId;
    /**
     * The Stage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Stage;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CurrencyCode;
    /**
     * The Probability
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Probability;
    /**
     * The CloseTimeUtc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CloseTimeUtc;
    /**
     * The Owner
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Owner;
    /**
     * The CreatedBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreatedBy;
    /**
     * The CreationTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The LastModifiedBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedBy;
    /**
     * The Notes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Notes;
    /**
     * The IsReminderSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsReminderSet;
    /**
     * The ReminderDueBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReminderDueBy;
    /**
     * The ReminderCustomMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReminderCustomMessage;
    /**
     * The ReminderNextTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReminderNextTime;
    /**
     * Constructor method for XrmDealType
     * @uses EwsXrmDealType::setName()
     * @uses EwsXrmDealType::setId()
     * @uses EwsXrmDealType::setXrmId()
     * @uses EwsXrmDealType::setStage()
     * @uses EwsXrmDealType::setAmount()
     * @uses EwsXrmDealType::setCurrencyCode()
     * @uses EwsXrmDealType::setProbability()
     * @uses EwsXrmDealType::setCloseTimeUtc()
     * @uses EwsXrmDealType::setOwner()
     * @uses EwsXrmDealType::setCreatedBy()
     * @uses EwsXrmDealType::setCreationTime()
     * @uses EwsXrmDealType::setLastModifiedBy()
     * @uses EwsXrmDealType::setNotes()
     * @uses EwsXrmDealType::setIsReminderSet()
     * @uses EwsXrmDealType::setReminderDueBy()
     * @uses EwsXrmDealType::setReminderCustomMessage()
     * @uses EwsXrmDealType::setReminderNextTime()
     * @param string $name
     * @param string $id
     * @param string $xrmId
     * @param string $stage
     * @param float $amount
     * @param string $currencyCode
     * @param int $probability
     * @param string $closeTimeUtc
     * @param string $owner
     * @param string $createdBy
     * @param string $creationTime
     * @param string $lastModifiedBy
     * @param string $notes
     * @param bool $isReminderSet
     * @param string $reminderDueBy
     * @param string $reminderCustomMessage
     * @param string $reminderNextTime
     */
    public function __construct($name = null, $id = null, $xrmId = null, $stage = null, $amount = null, $currencyCode = null, $probability = null, $closeTimeUtc = null, $owner = null, $createdBy = null, $creationTime = null, $lastModifiedBy = null, $notes = null, $isReminderSet = null, $reminderDueBy = null, $reminderCustomMessage = null, $reminderNextTime = null)
    {
        $this
            ->setName($name)
            ->setId($id)
            ->setXrmId($xrmId)
            ->setStage($stage)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setProbability($probability)
            ->setCloseTimeUtc($closeTimeUtc)
            ->setOwner($owner)
            ->setCreatedBy($createdBy)
            ->setCreationTime($creationTime)
            ->setLastModifiedBy($lastModifiedBy)
            ->setNotes($notes)
            ->setIsReminderSet($isReminderSet)
            ->setReminderDueBy($reminderDueBy)
            ->setReminderCustomMessage($reminderCustomMessage)
            ->setReminderNextTime($reminderNextTime);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsXrmDealType
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
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get XrmId value
     * @return string|null
     */
    public function getXrmId()
    {
        return $this->XrmId;
    }
    /**
     * Set XrmId value
     * @param string $xrmId
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setXrmId($xrmId = null)
    {
        // validation for constraint: pattern
        if (!is_null($xrmId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $xrmId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($xrmId)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($xrmId) && !is_string($xrmId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($xrmId)), __LINE__);
        }
        $this->XrmId = $xrmId;
        return $this;
    }
    /**
     * Get Stage value
     * @return string|null
     */
    public function getStage()
    {
        return $this->Stage;
    }
    /**
     * Set Stage value
     * @param string $stage
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setStage($stage = null)
    {
        // validation for constraint: string
        if (!is_null($stage) && !is_string($stage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stage)), __LINE__);
        }
        $this->Stage = $stage;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setAmount($amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get Probability value
     * @return int|null
     */
    public function getProbability()
    {
        return $this->Probability;
    }
    /**
     * Set Probability value
     * @param int $probability
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setProbability($probability = null)
    {
        // validation for constraint: int
        if (!is_null($probability) && !is_int($probability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($probability)), __LINE__);
        }
        $this->Probability = $probability;
        return $this;
    }
    /**
     * Get CloseTimeUtc value
     * @return string|null
     */
    public function getCloseTimeUtc()
    {
        return $this->CloseTimeUtc;
    }
    /**
     * Set CloseTimeUtc value
     * @param string $closeTimeUtc
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setCloseTimeUtc($closeTimeUtc = null)
    {
        // validation for constraint: string
        if (!is_null($closeTimeUtc) && !is_string($closeTimeUtc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($closeTimeUtc)), __LINE__);
        }
        $this->CloseTimeUtc = $closeTimeUtc;
        return $this;
    }
    /**
     * Get Owner value
     * @return string|null
     */
    public function getOwner()
    {
        return $this->Owner;
    }
    /**
     * Set Owner value
     * @param string $owner
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setOwner($owner = null)
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owner)), __LINE__);
        }
        $this->Owner = $owner;
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setCreatedBy($createdBy = null)
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createdBy)), __LINE__);
        }
        $this->CreatedBy = $createdBy;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get LastModifiedBy value
     * @return string|null
     */
    public function getLastModifiedBy()
    {
        return $this->LastModifiedBy;
    }
    /**
     * Set LastModifiedBy value
     * @param string $lastModifiedBy
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setLastModifiedBy($lastModifiedBy = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedBy) && !is_string($lastModifiedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastModifiedBy)), __LINE__);
        }
        $this->LastModifiedBy = $lastModifiedBy;
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes()
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setNotes($notes = null)
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get IsReminderSet value
     * @return bool|null
     */
    public function getIsReminderSet()
    {
        return $this->IsReminderSet;
    }
    /**
     * Set IsReminderSet value
     * @param bool $isReminderSet
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setIsReminderSet($isReminderSet = null)
    {
        $this->IsReminderSet = $isReminderSet;
        return $this;
    }
    /**
     * Get ReminderDueBy value
     * @return string|null
     */
    public function getReminderDueBy()
    {
        return $this->ReminderDueBy;
    }
    /**
     * Set ReminderDueBy value
     * @param string $reminderDueBy
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setReminderDueBy($reminderDueBy = null)
    {
        // validation for constraint: string
        if (!is_null($reminderDueBy) && !is_string($reminderDueBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reminderDueBy)), __LINE__);
        }
        $this->ReminderDueBy = $reminderDueBy;
        return $this;
    }
    /**
     * Get ReminderCustomMessage value
     * @return string|null
     */
    public function getReminderCustomMessage()
    {
        return $this->ReminderCustomMessage;
    }
    /**
     * Set ReminderCustomMessage value
     * @param string $reminderCustomMessage
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setReminderCustomMessage($reminderCustomMessage = null)
    {
        // validation for constraint: string
        if (!is_null($reminderCustomMessage) && !is_string($reminderCustomMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reminderCustomMessage)), __LINE__);
        }
        $this->ReminderCustomMessage = $reminderCustomMessage;
        return $this;
    }
    /**
     * Get ReminderNextTime value
     * @return string|null
     */
    public function getReminderNextTime()
    {
        return $this->ReminderNextTime;
    }
    /**
     * Set ReminderNextTime value
     * @param string $reminderNextTime
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setReminderNextTime($reminderNextTime = null)
    {
        // validation for constraint: string
        if (!is_null($reminderNextTime) && !is_string($reminderNextTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($reminderNextTime)), __LINE__);
        }
        $this->ReminderNextTime = $reminderNextTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsXrmDealType
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
