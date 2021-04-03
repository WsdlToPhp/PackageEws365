<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingServiceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBookingServiceType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * The DefaultLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsEnhancedLocationType|null
     */
    protected ?\StructType\EwsEnhancedLocationType $DefaultLocation = null;
    /**
     * The InternalNotes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InternalNotes = null;
    /**
     * The BookingServiceType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BookingServiceType = null;
    /**
     * The DefaultDurationMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DefaultDurationMinutes = null;
    /**
     * The DefaultEmailReminderText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DefaultEmailReminderText = null;
    /**
     * The DefaultEmailReminderMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $DefaultEmailReminderMinutes = null;
    /**
     * The IsDefaultEmailReminderSet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsDefaultEmailReminderSet = null;
    /**
     * The StaffPersonIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfItemIdsType|null
     */
    protected ?\ArrayType\EwsArrayOfItemIdsType $StaffPersonIds = null;
    /**
     * The ServiceId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ServiceId = null;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * Constructor method for BookingServiceType
     * @uses EwsBookingServiceType::setDisplayName()
     * @uses EwsBookingServiceType::setDescription()
     * @uses EwsBookingServiceType::setDefaultLocation()
     * @uses EwsBookingServiceType::setInternalNotes()
     * @uses EwsBookingServiceType::setBookingServiceType()
     * @uses EwsBookingServiceType::setDefaultDurationMinutes()
     * @uses EwsBookingServiceType::setDefaultEmailReminderText()
     * @uses EwsBookingServiceType::setDefaultEmailReminderMinutes()
     * @uses EwsBookingServiceType::setIsDefaultEmailReminderSet()
     * @uses EwsBookingServiceType::setStaffPersonIds()
     * @uses EwsBookingServiceType::setServiceId()
     * @uses EwsBookingServiceType::setItemId()
     * @param string $displayName
     * @param string $description
     * @param \StructType\EwsEnhancedLocationType $defaultLocation
     * @param string $internalNotes
     * @param string $bookingServiceType
     * @param int $defaultDurationMinutes
     * @param string $defaultEmailReminderText
     * @param int $defaultEmailReminderMinutes
     * @param bool $isDefaultEmailReminderSet
     * @param \ArrayType\EwsArrayOfItemIdsType $staffPersonIds
     * @param string $serviceId
     * @param \StructType\EwsItemIdType $itemId
     */
    public function __construct(?string $displayName = null, ?string $description = null, ?\StructType\EwsEnhancedLocationType $defaultLocation = null, ?string $internalNotes = null, ?string $bookingServiceType = null, ?int $defaultDurationMinutes = null, ?string $defaultEmailReminderText = null, ?int $defaultEmailReminderMinutes = null, ?bool $isDefaultEmailReminderSet = null, ?\ArrayType\EwsArrayOfItemIdsType $staffPersonIds = null, ?string $serviceId = null, ?\StructType\EwsItemIdType $itemId = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setDescription($description)
            ->setDefaultLocation($defaultLocation)
            ->setInternalNotes($internalNotes)
            ->setBookingServiceType($bookingServiceType)
            ->setDefaultDurationMinutes($defaultDurationMinutes)
            ->setDefaultEmailReminderText($defaultEmailReminderText)
            ->setDefaultEmailReminderMinutes($defaultEmailReminderMinutes)
            ->setIsDefaultEmailReminderSet($isDefaultEmailReminderSet)
            ->setStaffPersonIds($staffPersonIds)
            ->setServiceId($serviceId)
            ->setItemId($itemId);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsBookingServiceType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\EwsBookingServiceType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
    /**
     * Get DefaultLocation value
     * @return \StructType\EwsEnhancedLocationType|null
     */
    public function getDefaultLocation(): ?\StructType\EwsEnhancedLocationType
    {
        return $this->DefaultLocation;
    }
    /**
     * Set DefaultLocation value
     * @param \StructType\EwsEnhancedLocationType $defaultLocation
     * @return \StructType\EwsBookingServiceType
     */
    public function setDefaultLocation(?\StructType\EwsEnhancedLocationType $defaultLocation = null): self
    {
        $this->DefaultLocation = $defaultLocation;
        
        return $this;
    }
    /**
     * Get InternalNotes value
     * @return string|null
     */
    public function getInternalNotes(): ?string
    {
        return $this->InternalNotes;
    }
    /**
     * Set InternalNotes value
     * @param string $internalNotes
     * @return \StructType\EwsBookingServiceType
     */
    public function setInternalNotes(?string $internalNotes = null): self
    {
        // validation for constraint: string
        if (!is_null($internalNotes) && !is_string($internalNotes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalNotes, true), gettype($internalNotes)), __LINE__);
        }
        $this->InternalNotes = $internalNotes;
        
        return $this;
    }
    /**
     * Get BookingServiceType value
     * @return string|null
     */
    public function getBookingServiceType(): ?string
    {
        return $this->BookingServiceType;
    }
    /**
     * Set BookingServiceType value
     * @uses \EnumType\EwsBookingServiceTypeEnum::valueIsValid()
     * @uses \EnumType\EwsBookingServiceTypeEnum::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bookingServiceType
     * @return \StructType\EwsBookingServiceType
     */
    public function setBookingServiceType(?string $bookingServiceType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsBookingServiceTypeEnum::valueIsValid($bookingServiceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsBookingServiceTypeEnum', is_array($bookingServiceType) ? implode(', ', $bookingServiceType) : var_export($bookingServiceType, true), implode(', ', \EnumType\EwsBookingServiceTypeEnum::getValidValues())), __LINE__);
        }
        $this->BookingServiceType = $bookingServiceType;
        
        return $this;
    }
    /**
     * Get DefaultDurationMinutes value
     * @return int|null
     */
    public function getDefaultDurationMinutes(): ?int
    {
        return $this->DefaultDurationMinutes;
    }
    /**
     * Set DefaultDurationMinutes value
     * @param int $defaultDurationMinutes
     * @return \StructType\EwsBookingServiceType
     */
    public function setDefaultDurationMinutes(?int $defaultDurationMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($defaultDurationMinutes) && !(is_int($defaultDurationMinutes) || ctype_digit($defaultDurationMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultDurationMinutes, true), gettype($defaultDurationMinutes)), __LINE__);
        }
        $this->DefaultDurationMinutes = $defaultDurationMinutes;
        
        return $this;
    }
    /**
     * Get DefaultEmailReminderText value
     * @return string|null
     */
    public function getDefaultEmailReminderText(): ?string
    {
        return $this->DefaultEmailReminderText;
    }
    /**
     * Set DefaultEmailReminderText value
     * @param string $defaultEmailReminderText
     * @return \StructType\EwsBookingServiceType
     */
    public function setDefaultEmailReminderText(?string $defaultEmailReminderText = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultEmailReminderText) && !is_string($defaultEmailReminderText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultEmailReminderText, true), gettype($defaultEmailReminderText)), __LINE__);
        }
        $this->DefaultEmailReminderText = $defaultEmailReminderText;
        
        return $this;
    }
    /**
     * Get DefaultEmailReminderMinutes value
     * @return int|null
     */
    public function getDefaultEmailReminderMinutes(): ?int
    {
        return $this->DefaultEmailReminderMinutes;
    }
    /**
     * Set DefaultEmailReminderMinutes value
     * @param int $defaultEmailReminderMinutes
     * @return \StructType\EwsBookingServiceType
     */
    public function setDefaultEmailReminderMinutes(?int $defaultEmailReminderMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($defaultEmailReminderMinutes) && !(is_int($defaultEmailReminderMinutes) || ctype_digit($defaultEmailReminderMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($defaultEmailReminderMinutes, true), gettype($defaultEmailReminderMinutes)), __LINE__);
        }
        $this->DefaultEmailReminderMinutes = $defaultEmailReminderMinutes;
        
        return $this;
    }
    /**
     * Get IsDefaultEmailReminderSet value
     * @return bool|null
     */
    public function getIsDefaultEmailReminderSet(): ?bool
    {
        return $this->IsDefaultEmailReminderSet;
    }
    /**
     * Set IsDefaultEmailReminderSet value
     * @param bool $isDefaultEmailReminderSet
     * @return \StructType\EwsBookingServiceType
     */
    public function setIsDefaultEmailReminderSet(?bool $isDefaultEmailReminderSet = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isDefaultEmailReminderSet) && !is_bool($isDefaultEmailReminderSet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDefaultEmailReminderSet, true), gettype($isDefaultEmailReminderSet)), __LINE__);
        }
        $this->IsDefaultEmailReminderSet = $isDefaultEmailReminderSet;
        
        return $this;
    }
    /**
     * Get StaffPersonIds value
     * @return \ArrayType\EwsArrayOfItemIdsType|null
     */
    public function getStaffPersonIds(): ?\ArrayType\EwsArrayOfItemIdsType
    {
        return $this->StaffPersonIds;
    }
    /**
     * Set StaffPersonIds value
     * @param \ArrayType\EwsArrayOfItemIdsType $staffPersonIds
     * @return \StructType\EwsBookingServiceType
     */
    public function setStaffPersonIds(?\ArrayType\EwsArrayOfItemIdsType $staffPersonIds = null): self
    {
        $this->StaffPersonIds = $staffPersonIds;
        
        return $this;
    }
    /**
     * Get ServiceId value
     * @return string|null
     */
    public function getServiceId(): ?string
    {
        return $this->ServiceId;
    }
    /**
     * Set ServiceId value
     * @param string $serviceId
     * @return \StructType\EwsBookingServiceType
     */
    public function setServiceId(?string $serviceId = null): self
    {
        // validation for constraint: string
        if (!is_null($serviceId) && !is_string($serviceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceId, true), gettype($serviceId)), __LINE__);
        }
        $this->ServiceId = $serviceId;
        
        return $this;
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsBookingServiceType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
}
