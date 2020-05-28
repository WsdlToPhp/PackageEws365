<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $Subject;
    /**
     * The ReminderTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReminderTime;
    /**
     * The StartDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EndDate;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The UID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $UID;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The RecurringMasterItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $RecurringMasterItemId;
    /**
     * The ReminderGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ReminderGroup;
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
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param string $uID
     * @param string $location
     * @param \Ews\StructType\EwsItemIdType $recurringMasterItemId
     * @param string $reminderGroup
     */
    public function __construct($subject = null, $reminderTime = null, $startDate = null, $endDate = null, \Ews\StructType\EwsItemIdType $itemId = null, $uID = null, $location = null, \Ews\StructType\EwsItemIdType $recurringMasterItemId = null, $reminderGroup = null)
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
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsReminderType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get ReminderTime value
     * @return string
     */
    public function getReminderTime()
    {
        return $this->ReminderTime;
    }
    /**
     * Set ReminderTime value
     * @param string $reminderTime
     * @return \Ews\StructType\EwsReminderType
     */
    public function setReminderTime($reminderTime = null)
    {
        // validation for constraint: string
        if (!is_null($reminderTime) && !is_string($reminderTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderTime, true), gettype($reminderTime)), __LINE__);
        }
        $this->ReminderTime = $reminderTime;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Ews\StructType\EwsReminderType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDate, true), gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Ews\StructType\EwsReminderType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsReminderType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get UID value
     * @return string
     */
    public function getUID()
    {
        return $this->UID;
    }
    /**
     * Set UID value
     * @param string $uID
     * @return \Ews\StructType\EwsReminderType
     */
    public function setUID($uID = null)
    {
        // validation for constraint: string
        if (!is_null($uID) && !is_string($uID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uID, true), gettype($uID)), __LINE__);
        }
        $this->UID = $uID;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Ews\StructType\EwsReminderType
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
    /**
     * Get RecurringMasterItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getRecurringMasterItemId()
    {
        return $this->RecurringMasterItemId;
    }
    /**
     * Set RecurringMasterItemId value
     * @param \Ews\StructType\EwsItemIdType $recurringMasterItemId
     * @return \Ews\StructType\EwsReminderType
     */
    public function setRecurringMasterItemId(\Ews\StructType\EwsItemIdType $recurringMasterItemId = null)
    {
        $this->RecurringMasterItemId = $recurringMasterItemId;
        return $this;
    }
    /**
     * Get ReminderGroup value
     * @return string|null
     */
    public function getReminderGroup()
    {
        return $this->ReminderGroup;
    }
    /**
     * Set ReminderGroup value
     * @uses \Ews\EnumType\EwsReminderGroupType::valueIsValid()
     * @uses \Ews\EnumType\EwsReminderGroupType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reminderGroup
     * @return \Ews\StructType\EwsReminderType
     */
    public function setReminderGroup($reminderGroup = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsReminderGroupType::valueIsValid($reminderGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsReminderGroupType', is_array($reminderGroup) ? implode(', ', $reminderGroup) : var_export($reminderGroup, true), implode(', ', \Ews\EnumType\EwsReminderGroupType::getValidValues())), __LINE__);
        }
        $this->ReminderGroup = $reminderGroup;
        return $this;
    }
}
