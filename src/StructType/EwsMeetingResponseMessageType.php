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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Start;
    /**
     * The End
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $End;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Recurrence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRecurrenceType
     */
    public $Recurrence;
    /**
     * The CalendarItemType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CalendarItemType;
    /**
     * The ProposedStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProposedStart;
    /**
     * The ProposedEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProposedEnd;
    /**
     * The EnhancedLocation
     * Meta information extracted from the WSDL
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
     * @param string $start
     * @param string $end
     * @param string $location
     * @param \Ews\StructType\EwsRecurrenceType $recurrence
     * @param string $calendarItemType
     * @param string $proposedStart
     * @param string $proposedEnd
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
     * @return string|null
     */
    public function getStart()
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setStart($start = null)
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->Start = $start;
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd()
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setEnd($end = null)
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($calendarItemType) && !is_string($calendarItemType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarItemType, true), gettype($calendarItemType)), __LINE__);
        }
        $this->CalendarItemType = $calendarItemType;
        return $this;
    }
    /**
     * Get ProposedStart value
     * @return string|null
     */
    public function getProposedStart()
    {
        return $this->ProposedStart;
    }
    /**
     * Set ProposedStart value
     * @param string $proposedStart
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setProposedStart($proposedStart = null)
    {
        // validation for constraint: string
        if (!is_null($proposedStart) && !is_string($proposedStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposedStart, true), gettype($proposedStart)), __LINE__);
        }
        $this->ProposedStart = $proposedStart;
        return $this;
    }
    /**
     * Get ProposedEnd value
     * @return string|null
     */
    public function getProposedEnd()
    {
        return $this->ProposedEnd;
    }
    /**
     * Set ProposedEnd value
     * @param string $proposedEnd
     * @return \Ews\StructType\EwsMeetingResponseMessageType
     */
    public function setProposedEnd($proposedEnd = null)
    {
        // validation for constraint: string
        if (!is_null($proposedEnd) && !is_string($proposedEnd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposedEnd, true), gettype($proposedEnd)), __LINE__);
        }
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
}
