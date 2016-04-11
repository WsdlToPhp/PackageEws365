<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecipientTrackingEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecipientTrackingEventType extends AbstractStructBase
{
    /**
     * The Date
     * @var string
     */
    public $Date;
    /**
     * The Recipient
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $Recipient;
    /**
     * The DeliveryStatus
     * @var string
     */
    public $DeliveryStatus;
    /**
     * The EventDescription
     * @var string
     */
    public $EventDescription;
    /**
     * The EventData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $EventData;
    /**
     * The Server
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $Server;
    /**
     * The InternalId
     * @var int
     */
    public $InternalId;
    /**
     * The BccRecipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $BccRecipient;
    /**
     * The HiddenRecipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HiddenRecipient;
    /**
     * The UniquePathId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $UniquePathId;
    /**
     * The RootAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $RootAddress;
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public $Properties;
    /**
     * Constructor method for RecipientTrackingEventType
     * @uses EwsRecipientTrackingEventType::setDate()
     * @uses EwsRecipientTrackingEventType::setRecipient()
     * @uses EwsRecipientTrackingEventType::setDeliveryStatus()
     * @uses EwsRecipientTrackingEventType::setEventDescription()
     * @uses EwsRecipientTrackingEventType::setEventData()
     * @uses EwsRecipientTrackingEventType::setServer()
     * @uses EwsRecipientTrackingEventType::setInternalId()
     * @uses EwsRecipientTrackingEventType::setBccRecipient()
     * @uses EwsRecipientTrackingEventType::setHiddenRecipient()
     * @uses EwsRecipientTrackingEventType::setUniquePathId()
     * @uses EwsRecipientTrackingEventType::setRootAddress()
     * @uses EwsRecipientTrackingEventType::setProperties()
     * @param string $date
     * @param \Ews\StructType\EwsEmailAddressType $recipient
     * @param string $deliveryStatus
     * @param string $eventDescription
     * @param \Ews\ArrayType\EwsArrayOfStringsType $eventData
     * @param string $server
     * @param int $internalId
     * @param bool $bccRecipient
     * @param bool $hiddenRecipient
     * @param string $uniquePathId
     * @param string $rootAddress
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct($date = null, \Ews\StructType\EwsEmailAddressType $recipient = null, $deliveryStatus = null, $eventDescription = null, \Ews\ArrayType\EwsArrayOfStringsType $eventData = null, $server = null, $internalId = null, $bccRecipient = null, $hiddenRecipient = null, $uniquePathId = null, $rootAddress = null, \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this
            ->setDate($date)
            ->setRecipient($recipient)
            ->setDeliveryStatus($deliveryStatus)
            ->setEventDescription($eventDescription)
            ->setEventData($eventData)
            ->setServer($server)
            ->setInternalId($internalId)
            ->setBccRecipient($bccRecipient)
            ->setHiddenRecipient($hiddenRecipient)
            ->setUniquePathId($uniquePathId)
            ->setRootAddress($rootAddress)
            ->setProperties($properties);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Ews\StructType\EwsEmailAddressType $recipient
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setRecipient(\Ews\StructType\EwsEmailAddressType $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return string|null
     */
    public function getDeliveryStatus()
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @param string $deliveryStatus
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setDeliveryStatus($deliveryStatus = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryStatus) && !is_string($deliveryStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryStatus)), __LINE__);
        }
        $this->DeliveryStatus = $deliveryStatus;
        return $this;
    }
    /**
     * Get EventDescription value
     * @return string|null
     */
    public function getEventDescription()
    {
        return $this->EventDescription;
    }
    /**
     * Set EventDescription value
     * @param string $eventDescription
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setEventDescription($eventDescription = null)
    {
        // validation for constraint: string
        if (!is_null($eventDescription) && !is_string($eventDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eventDescription)), __LINE__);
        }
        $this->EventDescription = $eventDescription;
        return $this;
    }
    /**
     * Get EventData value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getEventData()
    {
        return $this->EventData;
    }
    /**
     * Set EventData value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $eventData
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setEventData(\Ews\ArrayType\EwsArrayOfStringsType $eventData = null)
    {
        $this->EventData = $eventData;
        return $this;
    }
    /**
     * Get Server value
     * @return string|null
     */
    public function getServer()
    {
        return $this->Server;
    }
    /**
     * Set Server value
     * @param string $server
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setServer($server = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($server) && strlen($server) < 1) || (is_array($server) && count($server) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($server)), __LINE__);
        }
        $this->Server = $server;
        return $this;
    }
    /**
     * Get InternalId value
     * @return int|null
     */
    public function getInternalId()
    {
        return $this->InternalId;
    }
    /**
     * Set InternalId value
     * @param int $internalId
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setInternalId($internalId = null)
    {
        // validation for constraint: int
        if (!is_null($internalId) && !is_int($internalId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($internalId)), __LINE__);
        }
        $this->InternalId = $internalId;
        return $this;
    }
    /**
     * Get BccRecipient value
     * @return bool|null
     */
    public function getBccRecipient()
    {
        return $this->BccRecipient;
    }
    /**
     * Set BccRecipient value
     * @param bool $bccRecipient
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setBccRecipient($bccRecipient = null)
    {
        $this->BccRecipient = $bccRecipient;
        return $this;
    }
    /**
     * Get HiddenRecipient value
     * @return bool|null
     */
    public function getHiddenRecipient()
    {
        return $this->HiddenRecipient;
    }
    /**
     * Set HiddenRecipient value
     * @param bool $hiddenRecipient
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setHiddenRecipient($hiddenRecipient = null)
    {
        $this->HiddenRecipient = $hiddenRecipient;
        return $this;
    }
    /**
     * Get UniquePathId value
     * @return string|null
     */
    public function getUniquePathId()
    {
        return $this->UniquePathId;
    }
    /**
     * Set UniquePathId value
     * @param string $uniquePathId
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setUniquePathId($uniquePathId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($uniquePathId) && strlen($uniquePathId) < 1) || (is_array($uniquePathId) && count($uniquePathId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($uniquePathId) && !is_string($uniquePathId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uniquePathId)), __LINE__);
        }
        $this->UniquePathId = $uniquePathId;
        return $this;
    }
    /**
     * Get RootAddress value
     * @return string|null
     */
    public function getRootAddress()
    {
        return $this->RootAddress;
    }
    /**
     * Set RootAddress value
     * @param string $rootAddress
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setRootAddress($rootAddress = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($rootAddress) && strlen($rootAddress) < 1) || (is_array($rootAddress) && count($rootAddress) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($rootAddress) && !is_string($rootAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rootAddress)), __LINE__);
        }
        $this->RootAddress = $rootAddress;
        return $this;
    }
    /**
     * Get Properties value
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setProperties(\Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRecipientTrackingEventType
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
