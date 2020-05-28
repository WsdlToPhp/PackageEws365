<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $ClientEventTimeUTC;
    /**
     * The ClientEventTimeLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ClientEventTimeLocal;
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
    public $ClientSessionId;
    /**
     * The ClientVersion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ClientVersion;
    /**
     * The ClientId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ClientId;
    /**
     * The EntrySequenceNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EntrySequenceNumber;
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EventType;
    /**
     * The TransactionId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionId;
    /**
     * The TargetEntityList
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TargetEntityList;
    /**
     * The EntityAddSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EntityAddSource;
    /**
     * The JsonPropertyBag
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $JsonPropertyBag;
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
    public function __construct($clientEventTimeUTC = null, $clientEventTimeLocal = null, $clientSessionId = null, $clientVersion = null, $clientId = null, $entrySequenceNumber = null, $eventType = null, $transactionId = null, $targetEntityList = null, $entityAddSource = null, $jsonPropertyBag = null)
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
    public function getClientEventTimeUTC()
    {
        return $this->ClientEventTimeUTC;
    }
    /**
     * Set ClientEventTimeUTC value
     * @param string $clientEventTimeUTC
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setClientEventTimeUTC($clientEventTimeUTC = null)
    {
        // validation for constraint: string
        if (!is_null($clientEventTimeUTC) && !is_string($clientEventTimeUTC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientEventTimeUTC, true), gettype($clientEventTimeUTC)), __LINE__);
        }
        $this->ClientEventTimeUTC = $clientEventTimeUTC;
        return $this;
    }
    /**
     * Get ClientEventTimeLocal value
     * @return string
     */
    public function getClientEventTimeLocal()
    {
        return $this->ClientEventTimeLocal;
    }
    /**
     * Set ClientEventTimeLocal value
     * @param string $clientEventTimeLocal
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setClientEventTimeLocal($clientEventTimeLocal = null)
    {
        // validation for constraint: string
        if (!is_null($clientEventTimeLocal) && !is_string($clientEventTimeLocal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientEventTimeLocal, true), gettype($clientEventTimeLocal)), __LINE__);
        }
        $this->ClientEventTimeLocal = $clientEventTimeLocal;
        return $this;
    }
    /**
     * Get ClientSessionId value
     * @return string
     */
    public function getClientSessionId()
    {
        return $this->ClientSessionId;
    }
    /**
     * Set ClientSessionId value
     * @param string $clientSessionId
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setClientSessionId($clientSessionId = null)
    {
        // validation for constraint: string
        if (!is_null($clientSessionId) && !is_string($clientSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientSessionId, true), gettype($clientSessionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($clientSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $clientSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($clientSessionId, true)), __LINE__);
        }
        $this->ClientSessionId = $clientSessionId;
        return $this;
    }
    /**
     * Get ClientVersion value
     * @return string
     */
    public function getClientVersion()
    {
        return $this->ClientVersion;
    }
    /**
     * Set ClientVersion value
     * @param string $clientVersion
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setClientVersion($clientVersion = null)
    {
        // validation for constraint: string
        if (!is_null($clientVersion) && !is_string($clientVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientVersion, true), gettype($clientVersion)), __LINE__);
        }
        $this->ClientVersion = $clientVersion;
        return $this;
    }
    /**
     * Get ClientId value
     * @return string
     */
    public function getClientId()
    {
        return $this->ClientId;
    }
    /**
     * Set ClientId value
     * @uses \Ews\EnumType\EwsClientIdType::valueIsValid()
     * @uses \Ews\EnumType\EwsClientIdType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $clientId
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setClientId($clientId = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsClientIdType::valueIsValid($clientId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsClientIdType', is_array($clientId) ? implode(', ', $clientId) : var_export($clientId, true), implode(', ', \Ews\EnumType\EwsClientIdType::getValidValues())), __LINE__);
        }
        $this->ClientId = $clientId;
        return $this;
    }
    /**
     * Get EntrySequenceNumber value
     * @return int
     */
    public function getEntrySequenceNumber()
    {
        return $this->EntrySequenceNumber;
    }
    /**
     * Set EntrySequenceNumber value
     * @param int $entrySequenceNumber
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setEntrySequenceNumber($entrySequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($entrySequenceNumber) && !(is_int($entrySequenceNumber) || ctype_digit($entrySequenceNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($entrySequenceNumber, true), gettype($entrySequenceNumber)), __LINE__);
        }
        $this->EntrySequenceNumber = $entrySequenceNumber;
        return $this;
    }
    /**
     * Get EventType value
     * @return string
     */
    public function getEventType()
    {
        return $this->EventType;
    }
    /**
     * Set EventType value
     * @param string $eventType
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setEventType($eventType = null)
    {
        // validation for constraint: string
        if (!is_null($eventType) && !is_string($eventType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventType, true), gettype($eventType)), __LINE__);
        }
        $this->EventType = $eventType;
        return $this;
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setTransactionId($transactionId = null)
    {
        // validation for constraint: string
        if (!is_null($transactionId) && !is_string($transactionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->TransactionId = $transactionId;
        return $this;
    }
    /**
     * Get TargetEntityList value
     * @return string|null
     */
    public function getTargetEntityList()
    {
        return $this->TargetEntityList;
    }
    /**
     * Set TargetEntityList value
     * @param string $targetEntityList
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setTargetEntityList($targetEntityList = null)
    {
        // validation for constraint: string
        if (!is_null($targetEntityList) && !is_string($targetEntityList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($targetEntityList, true), gettype($targetEntityList)), __LINE__);
        }
        $this->TargetEntityList = $targetEntityList;
        return $this;
    }
    /**
     * Get EntityAddSource value
     * @return string|null
     */
    public function getEntityAddSource()
    {
        return $this->EntityAddSource;
    }
    /**
     * Set EntityAddSource value
     * @uses \Ews\EnumType\EwsEntityFeedbackEntityAddSourceType::valueIsValid()
     * @uses \Ews\EnumType\EwsEntityFeedbackEntityAddSourceType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $entityAddSource
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setEntityAddSource($entityAddSource = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsEntityFeedbackEntityAddSourceType::valueIsValid($entityAddSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsEntityFeedbackEntityAddSourceType', is_array($entityAddSource) ? implode(', ', $entityAddSource) : var_export($entityAddSource, true), implode(', ', \Ews\EnumType\EwsEntityFeedbackEntityAddSourceType::getValidValues())), __LINE__);
        }
        $this->EntityAddSource = $entityAddSource;
        return $this;
    }
    /**
     * Get JsonPropertyBag value
     * @return string|null
     */
    public function getJsonPropertyBag()
    {
        return $this->JsonPropertyBag;
    }
    /**
     * Set JsonPropertyBag value
     * @param string $jsonPropertyBag
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setJsonPropertyBag($jsonPropertyBag = null)
    {
        // validation for constraint: string
        if (!is_null($jsonPropertyBag) && !is_string($jsonPropertyBag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jsonPropertyBag, true), gettype($jsonPropertyBag)), __LINE__);
        }
        $this->JsonPropertyBag = $jsonPropertyBag;
        return $this;
    }
}
