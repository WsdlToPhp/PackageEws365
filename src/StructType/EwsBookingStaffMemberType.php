<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CategoryName = null;
    /**
     * The CategoryColor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $CategoryColor = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SmtpAddress = null;
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Phone = null;
    /**
     * The Initials
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Initials = null;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The PersonId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $PersonId = null;
    /**
     * The UseBusinessHours
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $UseBusinessHours = null;
    /**
     * The WorkingHours
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfWorkHours|null
     */
    protected ?\ArrayType\EwsArrayOfWorkHours $WorkingHours = null;
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
     * @param \StructType\EwsItemIdType $itemId
     * @param \StructType\EwsItemIdType $personId
     * @param bool $useBusinessHours
     * @param \ArrayType\EwsArrayOfWorkHours $workingHours
     */
    public function __construct(?string $categoryName = null, ?int $categoryColor = null, ?string $displayName = null, ?string $smtpAddress = null, ?string $phone = null, ?string $initials = null, ?\StructType\EwsItemIdType $itemId = null, ?\StructType\EwsItemIdType $personId = null, ?bool $useBusinessHours = null, ?\ArrayType\EwsArrayOfWorkHours $workingHours = null)
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
    public function getCategoryName(): ?string
    {
        return $this->CategoryName;
    }
    /**
     * Set CategoryName value
     * @param string $categoryName
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setCategoryName(?string $categoryName = null): self
    {
        // validation for constraint: string
        if (!is_null($categoryName) && !is_string($categoryName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryName, true), gettype($categoryName)), __LINE__);
        }
        $this->CategoryName = $categoryName;
        
        return $this;
    }
    /**
     * Get CategoryColor value
     * @return int|null
     */
    public function getCategoryColor(): ?int
    {
        return $this->CategoryColor;
    }
    /**
     * Set CategoryColor value
     * @param int $categoryColor
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setCategoryColor(?int $categoryColor = null): self
    {
        // validation for constraint: int
        if (!is_null($categoryColor) && !(is_int($categoryColor) || ctype_digit($categoryColor))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryColor, true), gettype($categoryColor)), __LINE__);
        }
        $this->CategoryColor = $categoryColor;
        
        return $this;
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
     * @return \StructType\EwsBookingStaffMemberType
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
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress(): ?string
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setSmtpAddress(?string $smtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        
        return $this;
    }
    /**
     * Get Initials value
     * @return string|null
     */
    public function getInitials(): ?string
    {
        return $this->Initials;
    }
    /**
     * Set Initials value
     * @param string $initials
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setInitials(?string $initials = null): self
    {
        // validation for constraint: string
        if (!is_null($initials) && !is_string($initials)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initials, true), gettype($initials)), __LINE__);
        }
        $this->Initials = $initials;
        
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
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get PersonId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getPersonId(): ?\StructType\EwsItemIdType
    {
        return $this->PersonId;
    }
    /**
     * Set PersonId value
     * @param \StructType\EwsItemIdType $personId
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setPersonId(?\StructType\EwsItemIdType $personId = null): self
    {
        $this->PersonId = $personId;
        
        return $this;
    }
    /**
     * Get UseBusinessHours value
     * @return bool|null
     */
    public function getUseBusinessHours(): ?bool
    {
        return $this->UseBusinessHours;
    }
    /**
     * Set UseBusinessHours value
     * @param bool $useBusinessHours
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setUseBusinessHours(?bool $useBusinessHours = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useBusinessHours) && !is_bool($useBusinessHours)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useBusinessHours, true), gettype($useBusinessHours)), __LINE__);
        }
        $this->UseBusinessHours = $useBusinessHours;
        
        return $this;
    }
    /**
     * Get WorkingHours value
     * @return \ArrayType\EwsArrayOfWorkHours|null
     */
    public function getWorkingHours(): ?\ArrayType\EwsArrayOfWorkHours
    {
        return $this->WorkingHours;
    }
    /**
     * Set WorkingHours value
     * @param \ArrayType\EwsArrayOfWorkHours $workingHours
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function setWorkingHours(?\ArrayType\EwsArrayOfWorkHours $workingHours = null): self
    {
        $this->WorkingHours = $workingHours;
        
        return $this;
    }
}
