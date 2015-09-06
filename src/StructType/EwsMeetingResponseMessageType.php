<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingResponseMessageType extends EwsMeetingMessageType
{
    /**
     * The Start
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $Start;
    /**
     * The End
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $End;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Recurrence
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRecurrenceType
     */
    public $Recurrence;
    /**
     * The CalendarItemType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CalendarItemType;
    /**
     * The ProposedStart
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ProposedStart;
    /**
     * The ProposedEnd
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var dateTime
     */
    public $ProposedEnd;
    /**
     * The EnhancedLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEnhancedLocationType
     */
    public $EnhancedLocation;
    /**
     * Constructor method for MeetingResponseMessageType
     * @uses EwsMeetingResponseMessageType::setStart()
     * @uses EwsMeetingResponseMessageType::setEnd()
     * @uses EwsMeetingResponseMessageType::setLocation()
     * @uses EwsMeetingResponseMessageType::setRecurrence()
     * @uses EwsMeetingResponseMessageType::setCalendarItemType()
     * @uses EwsMeetingResponseMessageType::setProposedStart()
     * @uses EwsMeetingResponseMessageType::setProposedEnd()
     * @uses EwsMeetingResponseMessageType::setEnhancedLocation()
     * @param dateTime $start
     * @param dateTime $end
     * @param string $location
     * @param \Ews\StructType\EwsRecurrenceType $recurrence
     * @param string $calendarItemType
     * @param dateTime $proposedStart
     * @param dateTime $proposedEnd
     * @param \Ews\StructType\EwsEnhancedLocationType $enhancedLocation
     */
    public function __construct($start = null, $end = null, $location = null, \Ews\StructType\EwsRecurrenceType $recurrence = null, $calendarItemType = null, $proposedStart = null, $proposedEnd = null, \Ews\StructType\EwsEnhancedLocationType $enhancedLocation = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setLocation($location)
            ->setRecurrence($recurrence)
            ->setCalendarItemType($calendarItemType)
            ->setProposedStart($proposedStart)
            ->setProposedEnd($proposedEnd)
            ->setEnhancedLocation($enhancedLocation);
    }
    /**
     * Get Start value
     * @return dateTime|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param dateTime $start
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setStart($start = null)
    {
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return dateTime|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param dateTime $end
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setEnd($end = null)
    {
        $this->End = $end;
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
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setLocation($location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Recurrence value
     * @return \Ews\StructType\EwsRecurrenceType|null
     */
    public function getRecurrence()
    {
        return $this->Recurrence;
    }
    /**
     * Set Recurrence value
     * @param \Ews\StructType\EwsRecurrenceType $recurrence
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setRecurrence(\Ews\StructType\EwsRecurrenceType $recurrence = null)
    {
        $this->Recurrence = $recurrence;
        return $this;
    }
    /**
     * Get CalendarItemType value
     * @return string|null
     */
    public function getCalendarItemType()
    {
        return $this->CalendarItemType;
    }
    /**
     * Set CalendarItemType value
     * @param string $calendarItemType
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setCalendarItemType($calendarItemType = null)
    {
        $this->CalendarItemType = $calendarItemType;
        return $this;
    }
    /**
     * Get ProposedStart value
     * @return dateTime|null
     */
    public function getProposedStart()
    {
        return $this->ProposedStart;
    }
    /**
     * Set ProposedStart value
     * @param dateTime $proposedStart
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setProposedStart($proposedStart = null)
    {
        $this->ProposedStart = $proposedStart;
        return $this;
    }
    /**
     * Get ProposedEnd value
     * @return dateTime|null
     */
    public function getProposedEnd()
    {
        return $this->ProposedEnd;
    }
    /**
     * Set ProposedEnd value
     * @param dateTime $proposedEnd
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setProposedEnd($proposedEnd = null)
    {
        $this->ProposedEnd = $proposedEnd;
        return $this;
    }
    /**
     * Get EnhancedLocation value
     * @return \Ews\StructType\EwsEnhancedLocationType|null
     */
    public function getEnhancedLocation()
    {
        return $this->EnhancedLocation;
    }
    /**
     * Set EnhancedLocation value
     * @param \Ews\StructType\EwsEnhancedLocationType $enhancedLocation
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setEnhancedLocation(\Ews\StructType\EwsEnhancedLocationType $enhancedLocation = null)
    {
        $this->EnhancedLocation = $enhancedLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingResponseMessageType
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
