<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $Date = null;
    /**
     * The Recipient
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Recipient = null;
    /**
     * The DeliveryStatus
     * @var string|null
     */
    protected ?string $DeliveryStatus = null;
    /**
     * The EventDescription
     * @var string|null
     */
    protected ?string $EventDescription = null;
    /**
     * The EventData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $EventData = null;
    /**
     * The Server
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $Server = null;
    /**
     * The InternalId
     * @var int|null
     */
    protected ?int $InternalId = null;
    /**
     * The BccRecipient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BccRecipient = null;
    /**
     * The HiddenRecipient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $HiddenRecipient = null;
    /**
     * The UniquePathId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UniquePathId = null;
    /**
     * The RootAddress
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RootAddress = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    protected ?\ArrayType\EwsArrayOfTrackingPropertiesType $Properties = null;
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
     * @param \StructType\EwsEmailAddressType $recipient
     * @param string $deliveryStatus
     * @param string $eventDescription
     * @param \ArrayType\EwsArrayOfStringsType $eventData
     * @param string $server
     * @param int $internalId
     * @param bool $bccRecipient
     * @param bool $hiddenRecipient
     * @param string $uniquePathId
     * @param string $rootAddress
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(?string $date = null, ?\StructType\EwsEmailAddressType $recipient = null, ?string $deliveryStatus = null, ?string $eventDescription = null, ?\ArrayType\EwsArrayOfStringsType $eventData = null, ?string $server = null, ?int $internalId = null, ?bool $bccRecipient = null, ?bool $hiddenRecipient = null, ?string $uniquePathId = null, ?string $rootAddress = null, ?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
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
    public function getDate(): ?string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get Recipient value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getRecipient(): ?\StructType\EwsEmailAddressType
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \StructType\EwsEmailAddressType $recipient
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setRecipient(?\StructType\EwsEmailAddressType $recipient = null): self
    {
        $this->Recipient = $recipient;
        
        return $this;
    }
    /**
     * Get DeliveryStatus value
     * @return string|null
     */
    public function getDeliveryStatus(): ?string
    {
        return $this->DeliveryStatus;
    }
    /**
     * Set DeliveryStatus value
     * @param string $deliveryStatus
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setDeliveryStatus(?string $deliveryStatus = null): self
    {
        // validation for constraint: string
        if (!is_null($deliveryStatus) && !is_string($deliveryStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryStatus, true), gettype($deliveryStatus)), __LINE__);
        }
        $this->DeliveryStatus = $deliveryStatus;
        
        return $this;
    }
    /**
     * Get EventDescription value
     * @return string|null
     */
    public function getEventDescription(): ?string
    {
        return $this->EventDescription;
    }
    /**
     * Set EventDescription value
     * @param string $eventDescription
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setEventDescription(?string $eventDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($eventDescription) && !is_string($eventDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eventDescription, true), gettype($eventDescription)), __LINE__);
        }
        $this->EventDescription = $eventDescription;
        
        return $this;
    }
    /**
     * Get EventData value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getEventData(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->EventData;
    }
    /**
     * Set EventData value
     * @param \ArrayType\EwsArrayOfStringsType $eventData
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setEventData(?\ArrayType\EwsArrayOfStringsType $eventData = null): self
    {
        $this->EventData = $eventData;
        
        return $this;
    }
    /**
     * Get Server value
     * @return string|null
     */
    public function getServer(): ?string
    {
        return $this->Server;
    }
    /**
     * Set Server value
     * @param string $server
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setServer(?string $server = null): self
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($server, true), gettype($server)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($server) && mb_strlen((string) $server) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $server)), __LINE__);
        }
        $this->Server = $server;
        
        return $this;
    }
    /**
     * Get InternalId value
     * @return int|null
     */
    public function getInternalId(): ?int
    {
        return $this->InternalId;
    }
    /**
     * Set InternalId value
     * @param int $internalId
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setInternalId(?int $internalId = null): self
    {
        // validation for constraint: int
        if (!is_null($internalId) && !(is_int($internalId) || ctype_digit($internalId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalId, true), gettype($internalId)), __LINE__);
        }
        $this->InternalId = $internalId;
        
        return $this;
    }
    /**
     * Get BccRecipient value
     * @return bool|null
     */
    public function getBccRecipient(): ?bool
    {
        return $this->BccRecipient;
    }
    /**
     * Set BccRecipient value
     * @param bool $bccRecipient
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setBccRecipient(?bool $bccRecipient = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bccRecipient) && !is_bool($bccRecipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bccRecipient, true), gettype($bccRecipient)), __LINE__);
        }
        $this->BccRecipient = $bccRecipient;
        
        return $this;
    }
    /**
     * Get HiddenRecipient value
     * @return bool|null
     */
    public function getHiddenRecipient(): ?bool
    {
        return $this->HiddenRecipient;
    }
    /**
     * Set HiddenRecipient value
     * @param bool $hiddenRecipient
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setHiddenRecipient(?bool $hiddenRecipient = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hiddenRecipient) && !is_bool($hiddenRecipient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hiddenRecipient, true), gettype($hiddenRecipient)), __LINE__);
        }
        $this->HiddenRecipient = $hiddenRecipient;
        
        return $this;
    }
    /**
     * Get UniquePathId value
     * @return string|null
     */
    public function getUniquePathId(): ?string
    {
        return $this->UniquePathId;
    }
    /**
     * Set UniquePathId value
     * @param string $uniquePathId
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setUniquePathId(?string $uniquePathId = null): self
    {
        // validation for constraint: string
        if (!is_null($uniquePathId) && !is_string($uniquePathId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniquePathId, true), gettype($uniquePathId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($uniquePathId) && mb_strlen((string) $uniquePathId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $uniquePathId)), __LINE__);
        }
        $this->UniquePathId = $uniquePathId;
        
        return $this;
    }
    /**
     * Get RootAddress value
     * @return string|null
     */
    public function getRootAddress(): ?string
    {
        return $this->RootAddress;
    }
    /**
     * Set RootAddress value
     * @param string $rootAddress
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setRootAddress(?string $rootAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($rootAddress) && !is_string($rootAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rootAddress, true), gettype($rootAddress)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($rootAddress) && mb_strlen((string) $rootAddress) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $rootAddress)), __LINE__);
        }
        $this->RootAddress = $rootAddress;
        
        return $this;
    }
    /**
     * Get Properties value
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function getProperties(): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     * @return \StructType\EwsRecipientTrackingEventType
     */
    public function setProperties(?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null): self
    {
        $this->Properties = $properties;
        
        return $this;
    }
}
