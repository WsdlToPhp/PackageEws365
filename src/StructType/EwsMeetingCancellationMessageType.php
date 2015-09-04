<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingCancellationMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsMeetingCancellationMessageType extends EwsMeetingMessageType
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
     * The EnhancedLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEnhancedLocationType
     */
    public $EnhancedLocation;
    /**
     * Constructor method for MeetingCancellationMessageType
     * @uses EwsMeetingCancellationMessageType::setStart()
     * @uses EwsMeetingCancellationMessageType::setEnd()
     * @uses EwsMeetingCancellationMessageType::setLocation()
     * @uses EwsMeetingCancellationMessageType::setRecurrence()
     * @uses EwsMeetingCancellationMessageType::setCalendarItemType()
     * @uses EwsMeetingCancellationMessageType::setEnhancedLocation()
     * @param dateTime $start
     * @param dateTime $end
     * @param string $location
     * @param \Ews\StructType\EwsRecurrenceType $recurrence
     * @param string $calendarItemType
     * @param \Ews\StructType\EwsEnhancedLocationType $enhancedLocation
     */
    public function __construct($start = null, $end = null, $location = null, \Ews\StructType\EwsRecurrenceType $recurrence = null, $calendarItemType = null, \Ews\StructType\EwsEnhancedLocationType $enhancedLocation = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setLocation($location)
            ->setRecurrence($recurrence)
            ->setCalendarItemType($calendarItemType)
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
     * @return \Ews\StructType\EwsMeetingCancellationMessageType
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
     * @return \Ews\StructType\EwsMeetingCancellationMessageType
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
     * @return \Ews\StructType\EwsMeetingCancellationMessageType
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
     * @return \Ews\StructType\EwsMeetingCancellationMessageType
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
     * @return \Ews\StructType\EwsMeetingCancellationMessageType
     */
    public function setCalendarItemType($calendarItemType = null)
    {
        $this->CalendarItemType = $calendarItemType;
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
     * @return \Ews\StructType\EwsMeetingCancellationMessageType
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
     * @return \Ews\StructType\EwsMeetingCancellationMessageType
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
