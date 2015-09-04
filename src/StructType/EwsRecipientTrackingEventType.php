<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecipientTrackingEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsRecipientTrackingEventType extends AbstractStructBase
{
    /**
     * The Date
     * @var dateTime
     */
    public $Date;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - documentation: Identifier for a fully resolved email address
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
     * @var nonNegativeInteger
     */
    public $InternalId;
    /**
     * The BccRecipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $BccRecipient;
    /**
     * The HiddenRecipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
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
     * @param dateTime $date
     * @param \Ews\StructType\EwsEmailAddressType $recipient
     * @param string $deliveryStatus
     * @param string $eventDescription
     * @param \Ews\ArrayType\EwsArrayOfStringsType $eventData
     * @param string $server
     * @param nonNegativeInteger $internalId
     * @param boolean $bccRecipient
     * @param boolean $hiddenRecipient
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
     * @return dateTime|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param dateTime $date
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setDate($date = null)
    {
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
        $this->Server = $server;
        return $this;
    }
    /**
     * Get InternalId value
     * @return nonNegativeInteger|null
     */
    public function getInternalId()
    {
        return $this->InternalId;
    }
    /**
     * Set InternalId value
     * @param nonNegativeInteger $internalId
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setInternalId($internalId = null)
    {
        $this->InternalId = $internalId;
        return $this;
    }
    /**
     * Get BccRecipient value
     * @return boolean|null
     */
    public function getBccRecipient()
    {
        return $this->BccRecipient;
    }
    /**
     * Set BccRecipient value
     * @param boolean $bccRecipient
     * @return \Ews\StructType\EwsRecipientTrackingEventType
     */
    public function setBccRecipient($bccRecipient = null)
    {
        $this->BccRecipient = $bccRecipient;
        return $this;
    }
    /**
     * Get HiddenRecipient value
     * @return boolean|null
     */
    public function getHiddenRecipient()
    {
        return $this->HiddenRecipient;
    }
    /**
     * Set HiddenRecipient value
     * @param boolean $hiddenRecipient
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
