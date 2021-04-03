<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReminderType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderType extends AbstractStructBase
{
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Subject;
    /**
     * The ReminderTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ReminderTime;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StartDate;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EndDate;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ItemId;
    /**
     * The UID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $UID;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The RecurringMasterItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $RecurringMasterItemId = null;
    /**
     * The ReminderGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ReminderGroup = null;
    /**
     * Constructor method for ReminderType
     * @uses EwsReminderType::setSubject()
     * @uses EwsReminderType::setReminderTime()
     * @uses EwsReminderType::setStartDate()
     * @uses EwsReminderType::setEndDate()
     * @uses EwsReminderType::setItemId()
     * @uses EwsReminderType::setUID()
     * @uses EwsReminderType::setLocation()
     * @uses EwsReminderType::setRecurringMasterItemId()
     * @uses EwsReminderType::setReminderGroup()
     * @param string $subject
     * @param string $reminderTime
     * @param string $startDate
     * @param string $endDate
     * @param \StructType\EwsItemIdType $itemId
     * @param string $uID
     * @param string $location
     * @param \StructType\EwsItemIdType $recurringMasterItemId
     * @param string $reminderGroup
     */
    public function __construct(string $subject, string $reminderTime, string $startDate, string $endDate, \StructType\EwsItemIdType $itemId, string $uID, ?string $location = null, ?\StructType\EwsItemIdType $recurringMasterItemId = null, ?string $reminderGroup = null)
    {
        $this
            ->setSubject($subject)
            ->setReminderTime($reminderTime)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setItemId($itemId)
            ->setUID($uID)
            ->setLocation($location)
            ->setRecurringMasterItemId($recurringMasterItemId)
            ->setReminderGroup($reminderGroup);
    }
    /**
     * Get Subject value
     * @return string
     */
    public function getSubject(): string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsReminderType
     */
    public function setSubject(string $subject): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
        return $this;
    }
    /**
     * Get ReminderTime value
     * @return string
     */
    public function getReminderTime(): string
    {
        return $this->ReminderTime;
    }
    /**
     * Set ReminderTime value
     * @param string $reminderTime
     * @return \StructType\EwsReminderType
     */
    public function setReminderTime(string $reminderTime): self
    {
        // validation for constraint: string
        if (!is_null($reminderTime) && !is_string($reminderTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderTime, true), gettype($reminderTime)), __LINE__);
        }
        $this->ReminderTime = $reminderTime;
        
        return $this;
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate(): string
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \StructType\EwsReminderType
     */
    public function setStartDate(string $startDate): self
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        
        return $this;
    }
    /**
     * Get EndDate value
     * @return string
     */
    public function getEndDate(): string
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \StructType\EwsReminderType
     */
    public function setEndDate(string $endDate): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        
        return $this;
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getItemId(): \StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsReminderType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get UID value
     * @return string
     */
    public function getUID(): string
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \StructType\EwsReminderType
     */
    public function setUID(string $uID): self
    {
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uID, true), gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \StructType\EwsReminderType
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get RecurringMasterItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getRecurringMasterItemId(): ?\StructType\EwsItemIdType
    {
        return $this->RecurringMasterItemId;
    }
    /**
     * Set RecurringMasterItemId value
     * @param \StructType\EwsItemIdType $recurringMasterItemId
     * @return \StructType\EwsReminderType
     */
    public function setRecurringMasterItemId(?\StructType\EwsItemIdType $recurringMasterItemId = null): self
    {
        $this->RecurringMasterItemId = $recurringMasterItemId;
        
        return $this;
    }
    /**
     * Get ReminderGroup value
     * @return string|null
     */
    public function getReminderGroup(): ?string
    {
        return $this->ReminderGroup;
    }
    /**
     * Set ReminderGroup value
     * @uses \EnumType\EwsReminderGroupType::valueIsValid()
     * @uses \EnumType\EwsReminderGroupType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $reminderGroup
     * @return \StructType\EwsReminderType
     */
    public function setReminderGroup(?string $reminderGroup = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsReminderGroupType::valueIsValid($reminderGroup)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsReminderGroupType', is_array($reminderGroup) ? implode(', ', $reminderGroup) : var_export($reminderGroup, true), implode(', ', \EnumType\EwsReminderGroupType::getValidValues())), __LINE__);
        }
        $this->ReminderGroup = $reminderGroup;
        
        return $this;
    }
}
