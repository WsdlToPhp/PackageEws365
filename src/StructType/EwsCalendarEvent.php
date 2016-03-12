<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarEvent StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarEvent extends AbstractStructBase
{
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $EndTime;
    /**
     * The BusyType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BusyType;
    /**
     * The CalendarEventDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsCalendarEventDetails
     */
    public $CalendarEventDetails;
    /**
     * Constructor method for CalendarEvent
     * @uses EwsCalendarEvent::setStartTime()
     * @uses EwsCalendarEvent::setEndTime()
     * @uses EwsCalendarEvent::setBusyType()
     * @uses EwsCalendarEvent::setCalendarEventDetails()
     * @param string $startTime
     * @param string $endTime
     * @param string $busyType
     * @param \Ews\StructType\EwsCalendarEventDetails $calendarEventDetails
     */
    public function __construct($startTime = null, $endTime = null, $busyType = null, \Ews\StructType\EwsCalendarEventDetails $calendarEventDetails = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setBusyType($busyType)
            ->setCalendarEventDetails($calendarEventDetails);
    }
    /**
     * Get StartTime value
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Ews\StructType\EwsCalendarEvent
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \Ews\StructType\EwsCalendarEvent
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Get BusyType value
     * @return string
     */
    public function getBusyType()
    {
        return $this->BusyType;
    }
    /**
     * Set BusyType value
     * @uses \Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid()
     * @uses \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $busyType
     * @return \Ews\StructType\EwsCalendarEvent
     */
    public function setBusyType($busyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsLegacyFreeBusyType::valueIsValid($busyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $busyType, implode(', ', \Ews\EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->BusyType = $busyType;
        return $this;
    }
    /**
     * Get CalendarEventDetails value
     * @return \Ews\StructType\EwsCalendarEventDetails|null
     */
    public function getCalendarEventDetails()
    {
        return $this->CalendarEventDetails;
    }
    /**
     * Set CalendarEventDetails value
     * @param \Ews\StructType\EwsCalendarEventDetails $calendarEventDetails
     * @return \Ews\StructType\EwsCalendarEvent
     */
    public function setCalendarEventDetails(\Ews\StructType\EwsCalendarEventDetails $calendarEventDetails = null)
    {
        $this->CalendarEventDetails = $calendarEventDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCalendarEvent
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
