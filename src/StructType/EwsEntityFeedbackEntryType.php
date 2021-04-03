<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityFeedbackEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEntityFeedbackEntryType extends AbstractStructBase
{
    /**
     * The ClientEventTimeUTC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ClientEventTimeUTC;
    /**
     * The ClientEventTimeLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ClientEventTimeLocal;
    /**
     * The ClientSessionId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $ClientSessionId;
    /**
     * The ClientVersion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ClientVersion;
    /**
     * The ClientId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ClientId;
    /**
     * The EntrySequenceNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $EntrySequenceNumber;
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EventType;
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionId = null;
    /**
     * The TargetEntityList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TargetEntityList = null;
    /**
     * The EntityAddSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EntityAddSource = null;
    /**
     * The JsonPropertyBag
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $JsonPropertyBag = null;
    /**
     * Constructor method for EntityFeedbackEntryType
     * @uses EwsEntityFeedbackEntryType::setClientEventTimeUTC()
     * @uses EwsEntityFeedbackEntryType::setClientEventTimeLocal()
     * @uses EwsEntityFeedbackEntryType::setClientSessionId()
     * @uses EwsEntityFeedbackEntryType::setClientVersion()
     * @uses EwsEntityFeedbackEntryType::setClientId()
     * @uses EwsEntityFeedbackEntryType::setEntrySequenceNumber()
     * @uses EwsEntityFeedbackEntryType::setEventType()
     * @uses EwsEntityFeedbackEntryType::setTransactionId()
     * @uses EwsEntityFeedbackEntryType::setTargetEntityList()
     * @uses EwsEntityFeedbackEntryType::setEntityAddSource()
     * @uses EwsEntityFeedbackEntryType::setJsonPropertyBag()
     * @param string $clientEventTimeUTC
     * @param string $clientEventTimeLocal
     * @param string $clientSessionId
     * @param string $clientVersion
     * @param string $clientId
     * @param int $entrySequenceNumber
     * @param string $eventType
     * @param string $transactionId
     * @param string $targetEntityList
     * @param string $entityAddSource
     * @param string $jsonPropertyBag
     */
    public function __construct(string $clientEventTimeUTC, string $clientEventTimeLocal, string $clientSessionId, string $clientVersion, string $clientId, int $entrySequenceNumber, string $eventType, ?string $transactionId = null, ?string $targetEntityList = null, ?string $entityAddSource = null, ?string $jsonPropertyBag = null)
    {
        $this
            ->setClientEventTimeUTC($clientEventTimeUTC)
            ->setClientEventTimeLocal($clientEventTimeLocal)
            ->setClientSessionId($clientSessionId)
            ->setClientVersion($clientVersion)
            ->setClientId($clientId)
            ->setEntrySequenceNumber($entrySequenceNumber)
            ->setEventType($eventType)
            ->setTransactionId($transactionId)
            ->setTargetEntityList($targetEntityList)
            ->setEntityAddSource($entityAddSource)
            ->setJsonPropertyBag($jsonPropertyBag);
    }
    /**
     * Get ClientEventTimeUTC value
     * @return string
     */
    public function getClientEventTimeUTC(): string
    {
        return $this->ClientEventTimeUTC;
    }
    /**
     * Set ClientEventTimeUTC value
     * @param string $clientEventTimeUTC
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setClientEventTimeUTC(string $clientEventTimeUTC): self
    {
        // validation for constraint: string
        if (!is_null($clientEventTimeUTC) && !is_string($clientEventTimeUTC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientEventTimeUTC, true), gettype($clientEventTimeUTC)), __LINE__);
        }
        $this->ClientEventTimeUTC = $clientEventTimeUTC;
        
        return $this;
    }
    /**
     * Get ClientEventTimeLocal value
     * @return string
     */
    public function getClientEventTimeLocal(): string
    {
        return $this->ClientEventTimeLocal;
    }
    /**
     * Set ClientEventTimeLocal value
     * @param string $clientEventTimeLocal
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setClientEventTimeLocal(string $clientEventTimeLocal): self
    {
        // validation for constraint: string
        if (!is_null($clientEventTimeLocal) && !is_string($clientEventTimeLocal)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientEventTimeLocal, true), gettype($clientEventTimeLocal)), __LINE__);
        }
        $this->ClientEventTimeLocal = $clientEventTimeLocal;
        
        return $this;
    }
    /**
     * Get ClientSessionId value
     * @return string
     */
    public function getClientSessionId(): string
    {
        return $this->ClientSessionId;
    }
    /**
     * Set ClientSessionId value
     * @param string $clientSessionId
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setClientSessionId(string $clientSessionId): self
    {
        // validation for constraint: string
        if (!is_null($clientSessionId) && !is_string($clientSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientSessionId, true), gettype($clientSessionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($clientSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $clientSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($clientSessionId, true)), __LINE__);
        }
        $this->ClientSessionId = $clientSessionId;
        
        return $this;
    }
    /**
     * Get ClientVersion value
     * @return string
     */
    public function getClientVersion(): string
    {
        return $this->ClientVersion;
    }
    /**
     * Set ClientVersion value
     * @param string $clientVersion
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setClientVersion(string $clientVersion): self
    {
        // validation for constraint: string
        if (!is_null($clientVersion) && !is_string($clientVersion)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientVersion, true), gettype($clientVersion)), __LINE__);
        }
        $this->ClientVersion = $clientVersion;
        
        return $this;
    }
    /**
     * Get ClientId value
     * @return string
     */
    public function getClientId(): string
    {
        return $this->ClientId;
    }
    /**
     * Set ClientId value
     * @uses \EnumType\EwsClientIdType::valueIsValid()
     * @uses \EnumType\EwsClientIdType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $clientId
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setClientId(string $clientId): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsClientIdType::valueIsValid($clientId)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsClientIdType', is_array($clientId) ? implode(', ', $clientId) : var_export($clientId, true), implode(', ', \EnumType\EwsClientIdType::getValidValues())), __LINE__);
        }
        $this->ClientId = $clientId;
        
        return $this;
    }
    /**
     * Get EntrySequenceNumber value
     * @return int
     */
    public function getEntrySequenceNumber(): int
    {
        return $this->EntrySequenceNumber;
    }
    /**
     * Set EntrySequenceNumber value
     * @param int $entrySequenceNumber
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setEntrySequenceNumber(int $entrySequenceNumber): self
    {
        // validation for constraint: int
        if (!is_null($entrySequenceNumber) && !(is_int($entrySequenceNumber) || ctype_digit($entrySequenceNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entrySequenceNumber, true), gettype($entrySequenceNumber)), __LINE__);
        }
        $this->EntrySequenceNumber = $entrySequenceNumber;
        
        return $this;
    }
    /**
     * Get EventType value
     * @return string
     */
    public function getEventType(): string
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @param string $eventType
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setEventType(string $eventType): self
    {
        // validation for constraint: string
        if (!is_null($eventType) && !is_string($eventType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventType, true), gettype($eventType)), __LINE__);
        }
        $this->EventType = $eventType;
        
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setTransactionId(?string $transactionId = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        
        return $this;
    }
    /**
     * Get TargetEntityList value
     * @return string|null
     */
    public function getTargetEntityList(): ?string
    {
        return $this->TargetEntityList;
    }
    /**
     * Set TargetEntityList value
     * @param string $targetEntityList
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setTargetEntityList(?string $targetEntityList = null): self
    {
        // validation for constraint: string
        if (!is_null($targetEntityList) && !is_string($targetEntityList)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetEntityList, true), gettype($targetEntityList)), __LINE__);
        }
        $this->TargetEntityList = $targetEntityList;
        
        return $this;
    }
    /**
     * Get EntityAddSource value
     * @return string|null
     */
    public function getEntityAddSource(): ?string
    {
        return $this->EntityAddSource;
    }
    /**
     * Set EntityAddSource value
     * @uses \EnumType\EwsEntityFeedbackEntityAddSourceType::valueIsValid()
     * @uses \EnumType\EwsEntityFeedbackEntityAddSourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $entityAddSource
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setEntityAddSource(?string $entityAddSource = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsEntityFeedbackEntityAddSourceType::valueIsValid($entityAddSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsEntityFeedbackEntityAddSourceType', is_array($entityAddSource) ? implode(', ', $entityAddSource) : var_export($entityAddSource, true), implode(', ', \EnumType\EwsEntityFeedbackEntityAddSourceType::getValidValues())), __LINE__);
        }
        $this->EntityAddSource = $entityAddSource;
        
        return $this;
    }
    /**
     * Get JsonPropertyBag value
     * @return string|null
     */
    public function getJsonPropertyBag(): ?string
    {
        return $this->JsonPropertyBag;
    }
    /**
     * Set JsonPropertyBag value
     * @param string $jsonPropertyBag
     * @return \StructType\EwsEntityFeedbackEntryType
     */
    public function setJsonPropertyBag(?string $jsonPropertyBag = null): self
    {
        // validation for constraint: string
        if (!is_null($jsonPropertyBag) && !is_string($jsonPropertyBag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jsonPropertyBag, true), gettype($jsonPropertyBag)), __LINE__);
        }
        $this->JsonPropertyBag = $jsonPropertyBag;
        
        return $this;
    }
}
