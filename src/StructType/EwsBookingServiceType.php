<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DefaultLocation
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEnhancedLocationType
     */
    public $DefaultLocation;
    /**
     * The InternalNotes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InternalNotes;
    /**
     * The BookingServiceType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $BookingServiceType;
    /**
     * The DefaultDurationMinutes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DefaultDurationMinutes;
    /**
     * The DefaultEmailReminderText
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DefaultEmailReminderText;
    /**
     * The DefaultEmailReminderMinutes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $DefaultEmailReminderMinutes;
    /**
     * The IsDefaultEmailReminderSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsDefaultEmailReminderSet;
    /**
     * The StaffPersonIds
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfItemIdsType
     */
    public $StaffPersonIds;
    /**
     * The ServiceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ServiceId;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
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
     * @param \Ews\StructType\EwsEnhancedLocationType $defaultLocation
     * @param string $internalNotes
     * @param string $bookingServiceType
     * @param int $defaultDurationMinutes
     * @param string $defaultEmailReminderText
     * @param int $defaultEmailReminderMinutes
     * @param bool $isDefaultEmailReminderSet
     * @param \Ews\ArrayType\EwsArrayOfItemIdsType $staffPersonIds
     * @param string $serviceId
     * @param \Ews\StructType\EwsItemIdType $itemId
     */
    public function __construct($displayName = null, $description = null, \Ews\StructType\EwsEnhancedLocationType $defaultLocation = null, $internalNotes = null, $bookingServiceType = null, $defaultDurationMinutes = null, $defaultEmailReminderText = null, $defaultEmailReminderMinutes = null, $isDefaultEmailReminderSet = null, \Ews\ArrayType\EwsArrayOfItemIdsType $staffPersonIds = null, $serviceId = null, \Ews\StructType\EwsItemIdType $itemId = null)
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
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DefaultLocation value
     * @return \Ews\StructType\EwsEnhancedLocationType|null
     */
    public function getDefaultLocation()
    {
        return $this->DefaultLocation;
    }
    /**
     * Set DefaultLocation value
     * @param \Ews\StructType\EwsEnhancedLocationType $defaultLocation
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setDefaultLocation(\Ews\StructType\EwsEnhancedLocationType $defaultLocation = null)
    {
        $this->DefaultLocation = $defaultLocation;
        return $this;
    }
    /**
     * Get InternalNotes value
     * @return string|null
     */
    public function getInternalNotes()
    {
        return $this->InternalNotes;
    }
    /**
     * Set InternalNotes value
     * @param string $internalNotes
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setInternalNotes($internalNotes = null)
    {
        // validation for constraint: string
        if (!is_null($internalNotes) && !is_string($internalNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($internalNotes)), __LINE__);
        }
        $this->InternalNotes = $internalNotes;
        return $this;
    }
    /**
     * Get BookingServiceType value
     * @return string|null
     */
    public function getBookingServiceType()
    {
        return $this->BookingServiceType;
    }
    /**
     * Set BookingServiceType value
     * @uses \Ews\EnumType\EwsBookingServiceTypeEnum::valueIsValid()
     * @uses \Ews\EnumType\EwsBookingServiceTypeEnum::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bookingServiceType
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setBookingServiceType($bookingServiceType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsBookingServiceTypeEnum::valueIsValid($bookingServiceType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bookingServiceType, implode(', ', \Ews\EnumType\EwsBookingServiceTypeEnum::getValidValues())), __LINE__);
        }
        $this->BookingServiceType = $bookingServiceType;
        return $this;
    }
    /**
     * Get DefaultDurationMinutes value
     * @return int|null
     */
    public function getDefaultDurationMinutes()
    {
        return $this->DefaultDurationMinutes;
    }
    /**
     * Set DefaultDurationMinutes value
     * @param int $defaultDurationMinutes
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setDefaultDurationMinutes($defaultDurationMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($defaultDurationMinutes) && !is_int($defaultDurationMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($defaultDurationMinutes)), __LINE__);
        }
        $this->DefaultDurationMinutes = $defaultDurationMinutes;
        return $this;
    }
    /**
     * Get DefaultEmailReminderText value
     * @return string|null
     */
    public function getDefaultEmailReminderText()
    {
        return $this->DefaultEmailReminderText;
    }
    /**
     * Set DefaultEmailReminderText value
     * @param string $defaultEmailReminderText
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setDefaultEmailReminderText($defaultEmailReminderText = null)
    {
        // validation for constraint: string
        if (!is_null($defaultEmailReminderText) && !is_string($defaultEmailReminderText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($defaultEmailReminderText)), __LINE__);
        }
        $this->DefaultEmailReminderText = $defaultEmailReminderText;
        return $this;
    }
    /**
     * Get DefaultEmailReminderMinutes value
     * @return int|null
     */
    public function getDefaultEmailReminderMinutes()
    {
        return $this->DefaultEmailReminderMinutes;
    }
    /**
     * Set DefaultEmailReminderMinutes value
     * @param int $defaultEmailReminderMinutes
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setDefaultEmailReminderMinutes($defaultEmailReminderMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($defaultEmailReminderMinutes) && !is_int($defaultEmailReminderMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($defaultEmailReminderMinutes)), __LINE__);
        }
        $this->DefaultEmailReminderMinutes = $defaultEmailReminderMinutes;
        return $this;
    }
    /**
     * Get IsDefaultEmailReminderSet value
     * @return bool|null
     */
    public function getIsDefaultEmailReminderSet()
    {
        return $this->IsDefaultEmailReminderSet;
    }
    /**
     * Set IsDefaultEmailReminderSet value
     * @param bool $isDefaultEmailReminderSet
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setIsDefaultEmailReminderSet($isDefaultEmailReminderSet = null)
    {
        $this->IsDefaultEmailReminderSet = $isDefaultEmailReminderSet;
        return $this;
    }
    /**
     * Get StaffPersonIds value
     * @return \Ews\ArrayType\EwsArrayOfItemIdsType|null
     */
    public function getStaffPersonIds()
    {
        return $this->StaffPersonIds;
    }
    /**
     * Set StaffPersonIds value
     * @param \Ews\ArrayType\EwsArrayOfItemIdsType $staffPersonIds
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setStaffPersonIds(\Ews\ArrayType\EwsArrayOfItemIdsType $staffPersonIds = null)
    {
        $this->StaffPersonIds = $staffPersonIds;
        return $this;
    }
    /**
     * Get ServiceId value
     * @return string|null
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    /**
     * Set ServiceId value
     * @param string $serviceId
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setServiceId($serviceId = null)
    {
        // validation for constraint: string
        if (!is_null($serviceId) && !is_string($serviceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serviceId)), __LINE__);
        }
        $this->ServiceId = $serviceId;
        return $this;
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBookingServiceType
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
