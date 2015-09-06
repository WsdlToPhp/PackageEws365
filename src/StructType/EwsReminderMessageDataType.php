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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ReminderText;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $EndTime;
    /**
     * The AssociatedCalendarItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifier for a fully resolved item
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
     * @param dateTime $startTime
     * @param dateTime $endTime
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
        $this->Location = $location;
        return $this;
    }
    /**
     * Get StartTime value
     * @return dateTime|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param dateTime $startTime
     * @return \Ews\StructType\EwsReminderMessageDataType
     */
    public function setStartTime($startTime = null)
    {
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return dateTime|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param dateTime $endTime
     * @return \Ews\StructType\EwsReminderMessageDataType
     */
    public function setEndTime($endTime = null)
    {
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsReminderMessageDataType
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
