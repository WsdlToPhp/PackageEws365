<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EntityFeedbackEntryType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsEntityFeedbackEntryType extends AbstractStructBase
{
    /**
     * The ClientEventTimeUTC
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var dateTime
     */
    public $ClientEventTimeUTC;
    /**
     * The ClientEventTimeLocal
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var dateTime
     */
    public $ClientEventTimeLocal;
    /**
     * The ClientSessionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ClientSessionId;
    /**
     * The ClientVersion
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ClientVersion;
    /**
     * The ClientId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ClientId;
    /**
     * The EntrySequenceNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $EntrySequenceNumber;
    /**
     * The EventType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EventType;
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TransactionId;
    /**
     * The TargetEntityList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $TargetEntityList;
    /**
     * The EntityAddSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $EntityAddSource;
    /**
     * The JsonPropertyBag
     * Meta informations extracted from the WSDL
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
     * @param dateTime $clientEventTimeUTC
     * @param dateTime $clientEventTimeLocal
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
     * @return dateTime
     */
    public function getClientEventTimeUTC()
    {
        return $this->ClientEventTimeUTC;
    }
    /**
     * Set ClientEventTimeUTC value
     * @param dateTime $clientEventTimeUTC
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setClientEventTimeUTC($clientEventTimeUTC = null)
    {
        $this->ClientEventTimeUTC = $clientEventTimeUTC;
        return $this;
    }
    /**
     * Get ClientEventTimeLocal value
     * @return dateTime
     */
    public function getClientEventTimeLocal()
    {
        return $this->ClientEventTimeLocal;
    }
    /**
     * Set ClientEventTimeLocal value
     * @param dateTime $clientEventTimeLocal
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setClientEventTimeLocal($clientEventTimeLocal = null)
    {
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
     * @param string $clientId
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setClientId($clientId = null)
    {
        if (!\Ews\EnumType\EwsClientIdType::valueIsValid($clientId)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $clientId, implode(', ', \Ews\EnumType\EwsClientIdType::getValidValues())), __LINE__);
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
     * @param string $entityAddSource
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
     */
    public function setEntityAddSource($entityAddSource = null)
    {
        if (!\Ews\EnumType\EwsEntityFeedbackEntityAddSourceType::valueIsValid($entityAddSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $entityAddSource, implode(', ', \Ews\EnumType\EwsEntityFeedbackEntityAddSourceType::getValidValues())), __LINE__);
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
        $this->JsonPropertyBag = $jsonPropertyBag;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEntityFeedbackEntryType
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
