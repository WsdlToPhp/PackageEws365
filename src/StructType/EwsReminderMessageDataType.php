<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReminderMessageDataType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsReminderMessageDataType extends AbstractStructBase
{
    /**
     * The ReminderText
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReminderText;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * The AssociatedCalendarItemId
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType
     */
    public $AssociatedCalendarItemId;
    /**
     * Constructor method for ReminderMessageDataType
     * @uses EwsReminderMessageDataType::setReminderText()
     * @uses EwsReminderMessageDataType::setLocation()
     * @uses EwsReminderMessageDataType::setStartTime()
     * @uses EwsReminderMessageDataType::setEndTime()
     * @uses EwsReminderMessageDataType::setAssociatedCalendarItemId()
     * @param string $reminderText
     * @param string $location
     * @param string $startTime
     * @param string $endTime
     * @param \Ews\StructType\EwsItemIdType $associatedCalendarItemId
     */
    public function __construct($reminderText = null, $location = null, $startTime = null, $endTime = null, \Ews\StructType\EwsItemIdType $associatedCalendarItemId = null)
    {
        $this
            ->setReminderText($reminderText)
            ->setLocation($location)
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setAssociatedCalendarItemId($associatedCalendarItemId);
    }
    /**
     * Get ReminderText value
     * @return string|null
     */
    public function getReminderText()
    {
        return $this->ReminderText;
    }
    /**
     * Set ReminderText value
     * @param string $reminderText
     * @return \Ews\StructType\EwsReminderMessageDataType
     */
    public function setReminderText($reminderText = null)
    {
        // validation for constraint: string
        if (!is_null($reminderText) && !is_string($reminderText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reminderText, true), gettype($reminderText)), __LINE__);
        }
        $this->ReminderText = $reminderText;
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
     * @return \Ews\StructType\EwsReminderMessageDataType
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
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Ews\StructType\EwsReminderMessageDataType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \Ews\StructType\EwsReminderMessageDataType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get AssociatedCalendarItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getAssociatedCalendarItemId()
    {
        return $this->AssociatedCalendarItemId;
    }
    /**
     * Set AssociatedCalendarItemId value
     * @param \Ews\StructType\EwsItemIdType $associatedCalendarItemId
     * @return \Ews\StructType\EwsReminderMessageDataType
     */
    public function setAssociatedCalendarItemId(\Ews\StructType\EwsItemIdType $associatedCalendarItemId = null)
    {
        $this->AssociatedCalendarItemId = $associatedCalendarItemId;
        return $this;
    }
}
