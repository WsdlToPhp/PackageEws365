<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Name;
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The XrmId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $XrmId = null;
    /**
     * The Stage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Stage = null;
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $Amount = null;
    /**
     * The CurrencyCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CurrencyCode = null;
    /**
     * The Probability
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Probability = null;
    /**
     * The CloseTimeUtc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CloseTimeUtc = null;
    /**
     * The Owner
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Owner = null;
    /**
     * The CreatedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreatedBy = null;
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CreationTime = null;
    /**
     * The LastModifiedBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastModifiedBy = null;
    /**
     * The Notes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Notes = null;
    /**
     * The IsReminderSet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsReminderSet = null;
    /**
     * The ReminderDueBy
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReminderDueBy = null;
    /**
     * The ReminderCustomMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReminderCustomMessage = null;
    /**
     * The ReminderNextTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReminderNextTime = null;
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
    public function __construct(string $name, ?string $id = null, ?string $xrmId = null, ?string $stage = null, ?float $amount = null, ?string $currencyCode = null, ?int $probability = null, ?string $closeTimeUtc = null, ?string $owner = null, ?string $createdBy = null, ?string $creationTime = null, ?string $lastModifiedBy = null, ?string $notes = null, ?bool $isReminderSet = null, ?string $reminderDueBy = null, ?string $reminderCustomMessage = null, ?string $reminderNextTime = null)
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
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsXrmDealType
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsXrmDealType
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get XrmId value
     * @return string|null
     */
    public function getXrmId(): ?string
    {
        return $this->XrmId;
    }
    /**
     * Set XrmId value
     * @param string $xrmId
     * @return \StructType\EwsXrmDealType
     */
    public function setXrmId(?string $xrmId = null): self
    {
        // validation for constraint: string
        if (!is_null($xrmId) && !is_string($xrmId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xrmId, true), gettype($xrmId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($xrmId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $xrmId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($xrmId, true)), __LINE__);
        }
        $this->XrmId = $xrmId;
        
        return $this;
    }
    /**
     * Get Stage value
     * @return string|null
     */
    public function getStage(): ?string
    {
        return $this->Stage;
    }
    /**
     * Set Stage value
     * @param string $stage
     * @return \StructType\EwsXrmDealType
     */
    public function setStage(?string $stage = null): self
    {
        // validation for constraint: string
        if (!is_null($stage) && !is_string($stage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stage, true), gettype($stage)), __LINE__);
        }
        $this->Stage = $stage;
        
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \StructType\EwsXrmDealType
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \StructType\EwsXrmDealType
     */
    public function setCurrencyCode(?string $currencyCode = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyCode, true), gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        
        return $this;
    }
    /**
     * Get Probability value
     * @return int|null
     */
    public function getProbability(): ?int
    {
        return $this->Probability;
    }
    /**
     * Set Probability value
     * @param int $probability
     * @return \StructType\EwsXrmDealType
     */
    public function setProbability(?int $probability = null): self
    {
        // validation for constraint: int
        if (!is_null($probability) && !(is_int($probability) || ctype_digit($probability))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($probability, true), gettype($probability)), __LINE__);
        }
        $this->Probability = $probability;
        
        return $this;
    }
    /**
     * Get CloseTimeUtc value
     * @return string|null
     */
    public function getCloseTimeUtc(): ?string
    {
        return $this->CloseTimeUtc;
    }
    /**
     * Set CloseTimeUtc value
     * @param string $closeTimeUtc
     * @return \StructType\EwsXrmDealType
     */
    public function setCloseTimeUtc(?string $closeTimeUtc = null): self
    {
        // validation for constraint: string
        if (!is_null($closeTimeUtc) && !is_string($closeTimeUtc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($closeTimeUtc, true), gettype($closeTimeUtc)), __LINE__);
        }
        $this->CloseTimeUtc = $closeTimeUtc;
        
        return $this;
    }
    /**
     * Get Owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->Owner;
    }
    /**
     * Set Owner value
     * @param string $owner
     * @return \StructType\EwsXrmDealType
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->Owner = $owner;
        
        return $this;
    }
    /**
     * Get CreatedBy value
     * @return string|null
     */
    public function getCreatedBy(): ?string
    {
        return $this->CreatedBy;
    }
    /**
     * Set CreatedBy value
     * @param string $createdBy
     * @return \StructType\EwsXrmDealType
     */
    public function setCreatedBy(?string $createdBy = null): self
    {
        // validation for constraint: string
        if (!is_null($createdBy) && !is_string($createdBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdBy, true), gettype($createdBy)), __LINE__);
        }
        $this->CreatedBy = $createdBy;
        
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \StructType\EwsXrmDealType
     */
    public function setCreationTime(?string $creationTime = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        
        return $this;
    }
    /**
     * Get LastModifiedBy value
     * @return string|null
     */
    public function getLastModifiedBy(): ?string
    {
        return $this->LastModifiedBy;
    }
    /**
     * Set LastModifiedBy value
     * @param string $lastModifiedBy
     * @return \StructType\EwsXrmDealType
     */
    public function setLastModifiedBy(?string $lastModifiedBy = null): self
    {
        // validation for constraint: string
        if (!is_null($lastModifiedBy) && !is_string($lastModifiedBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedBy, true), gettype($lastModifiedBy)), __LINE__);
        }
        $this->LastModifiedBy = $lastModifiedBy;
        
        return $this;
    }
    /**
     * Get Notes value
     * @return string|null
     */
    public function getNotes(): ?string
    {
        return $this->Notes;
    }
    /**
     * Set Notes value
     * @param string $notes
     * @return \StructType\EwsXrmDealType
     */
    public function setNotes(?string $notes = null): self
    {
        // validation for constraint: string
        if (!is_null($notes) && !is_string($notes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notes, true), gettype($notes)), __LINE__);
        }
        $this->Notes = $notes;
        
        return $this;
    }
    /**
     * Get IsReminderSet value
     * @return bool|null
     */
    public function getIsReminderSet(): ?bool
    {
        return $this->IsReminderSet;
    }
    /**
     * Set IsReminderSet value
     * @param bool $isReminderSet
     * @return \StructType\EwsXrmDealType
     */
    public function setIsReminderSet(?bool $isReminderSet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isReminderSet) && !is_bool($isReminderSet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReminderSet, true), gettype($isReminderSet)), __LINE__);
        }
        $this->IsReminderSet = $isReminderSet;
        
        return $this;
    }
    /**
     * Get ReminderDueBy value
     * @return string|null
     */
    public function getReminderDueBy(): ?string
    {
        return $this->ReminderDueBy;
    }
    /**
     * Set ReminderDueBy value
     * @param string $reminderDueBy
     * @return \StructType\EwsXrmDealType
     */
    public function setReminderDueBy(?string $reminderDueBy = null): self
    {
        // validation for constraint: string
        if (!is_null($reminderDueBy) && !is_string($reminderDueBy)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderDueBy, true), gettype($reminderDueBy)), __LINE__);
        }
        $this->ReminderDueBy = $reminderDueBy;
        
        return $this;
    }
    /**
     * Get ReminderCustomMessage value
     * @return string|null
     */
    public function getReminderCustomMessage(): ?string
    {
        return $this->ReminderCustomMessage;
    }
    /**
     * Set ReminderCustomMessage value
     * @param string $reminderCustomMessage
     * @return \StructType\EwsXrmDealType
     */
    public function setReminderCustomMessage(?string $reminderCustomMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($reminderCustomMessage) && !is_string($reminderCustomMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderCustomMessage, true), gettype($reminderCustomMessage)), __LINE__);
        }
        $this->ReminderCustomMessage = $reminderCustomMessage;
        
        return $this;
    }
    /**
     * Get ReminderNextTime value
     * @return string|null
     */
    public function getReminderNextTime(): ?string
    {
        return $this->ReminderNextTime;
    }
    /**
     * Set ReminderNextTime value
     * @param string $reminderNextTime
     * @return \StructType\EwsXrmDealType
     */
    public function setReminderNextTime(?string $reminderNextTime = null): self
    {
        // validation for constraint: string
        if (!is_null($reminderNextTime) && !is_string($reminderNextTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderNextTime, true), gettype($reminderNextTime)), __LINE__);
        }
        $this->ReminderNextTime = $reminderNextTime;
        
        return $this;
    }
}
