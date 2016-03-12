<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingStaffMemberType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBookingStaffMemberType extends AbstractStructBase
{
    /**
     * The CategoryName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CategoryName;
    /**
     * The CategoryColor
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $CategoryColor;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DisplayName;
    /**
     * The SmtpAddress
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SmtpAddress;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Phone;
    /**
     * The Initials
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Initials;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The PersonId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $PersonId;
    /**
     * The UseBusinessHours
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $UseBusinessHours;
    /**
     * The WorkingHours
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfWorkHours
     */
    public $WorkingHours;
    /**
     * Constructor method for BookingStaffMemberType
     * @uses EwsBookingStaffMemberType::setCategoryName()
     * @uses EwsBookingStaffMemberType::setCategoryColor()
     * @uses EwsBookingStaffMemberType::setDisplayName()
     * @uses EwsBookingStaffMemberType::setSmtpAddress()
     * @uses EwsBookingStaffMemberType::setPhone()
     * @uses EwsBookingStaffMemberType::setInitials()
     * @uses EwsBookingStaffMemberType::setItemId()
     * @uses EwsBookingStaffMemberType::setPersonId()
     * @uses EwsBookingStaffMemberType::setUseBusinessHours()
     * @uses EwsBookingStaffMemberType::setWorkingHours()
     * @param string $categoryName
     * @param int $categoryColor
     * @param string $displayName
     * @param string $smtpAddress
     * @param string $phone
     * @param string $initials
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsItemIdType $personId
     * @param bool $useBusinessHours
     * @param \Ews\ArrayType\EwsArrayOfWorkHours $workingHours
     */
    public function __construct($categoryName = null, $categoryColor = null, $displayName = null, $smtpAddress = null, $phone = null, $initials = null, \Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsItemIdType $personId = null, $useBusinessHours = null, \Ews\ArrayType\EwsArrayOfWorkHours $workingHours = null)
    {
        $this
            ->setCategoryName($categoryName)
            ->setCategoryColor($categoryColor)
            ->setDisplayName($displayName)
            ->setSmtpAddress($smtpAddress)
            ->setPhone($phone)
            ->setInitials($initials)
            ->setItemId($itemId)
            ->setPersonId($personId)
            ->setUseBusinessHours($useBusinessHours)
            ->setWorkingHours($workingHours);
    }
    /**
     * Get CategoryName value
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->CategoryName;
    }
    /**
     * Set CategoryName value
     * @param string $categoryName
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setCategoryName($categoryName = null)
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($categoryName)), __LINE__);
        }
        $this->CategoryName = $categoryName;
        return $this;
    }
    /**
     * Get CategoryColor value
     * @return int|null
     */
    public function getCategoryColor()
    {
        return $this->CategoryColor;
    }
    /**
     * Set CategoryColor value
     * @param int $categoryColor
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setCategoryColor($categoryColor = null)
    {
        // validation for constraint: int
        if (!is_null($categoryColor) && !is_int($categoryColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($categoryColor)), __LINE__);
        }
        $this->CategoryColor = $categoryColor;
        return $this;
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
     * @return \Ews\StructType\EwsBookingStaffMemberType
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
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress()
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setSmtpAddress($smtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Get Initials value
     * @return string|null
     */
    public function getInitials()
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param string $initials
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setInitials($initials = null)
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($initials)), __LINE__);
        }
        $this->Initials = $initials;
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
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get PersonId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getPersonId()
    {
        return $this->PersonId;
    }
    /**
     * Set PersonId value
     * @param \Ews\StructType\EwsItemIdType $personId
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setPersonId(\Ews\StructType\EwsItemIdType $personId = null)
    {
        $this->PersonId = $personId;
        return $this;
    }
    /**
     * Get UseBusinessHours value
     * @return bool|null
     */
    public function getUseBusinessHours()
    {
        return $this->UseBusinessHours;
    }
    /**
     * Set UseBusinessHours value
     * @param bool $useBusinessHours
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setUseBusinessHours($useBusinessHours = null)
    {
        $this->UseBusinessHours = $useBusinessHours;
        return $this;
    }
    /**
     * Get WorkingHours value
     * @return \Ews\ArrayType\EwsArrayOfWorkHours|null
     */
    public function getWorkingHours()
    {
        return $this->WorkingHours;
    }
    /**
     * Set WorkingHours value
     * @param \Ews\ArrayType\EwsArrayOfWorkHours $workingHours
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function setWorkingHours(\Ews\ArrayType\EwsArrayOfWorkHours $workingHours = null)
    {
        $this->WorkingHours = $workingHours;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsBookingStaffMemberType
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
