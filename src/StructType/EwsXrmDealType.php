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
     * @var double
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
     * @var dateTime
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
     * @var dateTime
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
     * @var boolean
     */
    public $IsReminderSet;
    /**
     * The ReminderDueBy
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
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
     * @var dateTime
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
     * @param double $amount
     * @param string $currencyCode
     * @param int $probability
     * @param dateTime $closeTimeUtc
     * @param string $owner
     * @param string $createdBy
     * @param dateTime $creationTime
     * @param string $lastModifiedBy
     * @param string $notes
     * @param boolean $isReminderSet
     * @param dateTime $reminderDueBy
     * @param string $reminderCustomMessage
     * @param dateTime $reminderNextTime
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
        $this->Stage = $stage;
        return $this;
    }
    /**
     * Get Amount value
     * @return double|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param double $amount
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
        $this->Probability = $probability;
        return $this;
    }
    /**
     * Get CloseTimeUtc value
     * @return dateTime|null
     */
    public function getCloseTimeUtc()
    {
        return $this->CloseTimeUtc;
    }
    /**
     * Set CloseTimeUtc value
     * @param dateTime $closeTimeUtc
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setCloseTimeUtc($closeTimeUtc = null)
    {
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
        $this->CreatedBy = $createdBy;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return dateTime|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param dateTime $creationTime
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setCreationTime($creationTime = null)
    {
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
        $this->Notes = $notes;
        return $this;
    }
    /**
     * Get IsReminderSet value
     * @return boolean|null
     */
    public function getIsReminderSet()
    {
        return $this->IsReminderSet;
    }
    /**
     * Set IsReminderSet value
     * @param boolean $isReminderSet
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setIsReminderSet($isReminderSet = null)
    {
        $this->IsReminderSet = $isReminderSet;
        return $this;
    }
    /**
     * Get ReminderDueBy value
     * @return dateTime|null
     */
    public function getReminderDueBy()
    {
        return $this->ReminderDueBy;
    }
    /**
     * Set ReminderDueBy value
     * @param dateTime $reminderDueBy
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setReminderDueBy($reminderDueBy = null)
    {
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
        $this->ReminderCustomMessage = $reminderCustomMessage;
        return $this;
    }
    /**
     * Get ReminderNextTime value
     * @return dateTime|null
     */
    public function getReminderNextTime()
    {
        return $this->ReminderNextTime;
    }
    /**
     * Set ReminderNextTime value
     * @param dateTime $reminderNextTime
     * @return \Ews\StructType\EwsXrmDealType
     */
    public function setReminderNextTime($reminderNextTime = null)
    {
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
