<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingTimeCandidate StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingTimeCandidate extends AbstractStructBase
{
    /**
     * The MeetingTimeslot
     * @var \Ews\StructType\EwsTimeSlot
     */
    public $MeetingTimeslot;
    /**
     * The Confidence
     * @var double
     */
    public $Confidence;
    /**
     * The Score
     * @var int
     */
    public $Score;
    /**
     * The OrganizerAvailability
     * @var string
     */
    public $OrganizerAvailability;
    /**
     * The AttendeeAvailabilities
     * @var \Ews\ArrayType\EwsArrayOfAttendeeAvailability
     */
    public $AttendeeAvailabilities;
    /**
     * The Locations
     * @var \Ews\ArrayType\EwsArrayOfMeetingLocation
     */
    public $Locations;
    /**
     * Constructor method for MeetingTimeCandidate
     * @uses EwsMeetingTimeCandidate::setMeetingTimeslot()
     * @uses EwsMeetingTimeCandidate::setConfidence()
     * @uses EwsMeetingTimeCandidate::setScore()
     * @uses EwsMeetingTimeCandidate::setOrganizerAvailability()
     * @uses EwsMeetingTimeCandidate::setAttendeeAvailabilities()
     * @uses EwsMeetingTimeCandidate::setLocations()
     * @param \Ews\StructType\EwsTimeSlot $meetingTimeslot
     * @param double $confidence
     * @param int $score
     * @param string $organizerAvailability
     * @param \Ews\ArrayType\EwsArrayOfAttendeeAvailability $attendeeAvailabilities
     * @param \Ews\ArrayType\EwsArrayOfMeetingLocation $locations
     */
    public function __construct(\Ews\StructType\EwsTimeSlot $meetingTimeslot = null, $confidence = null, $score = null, $organizerAvailability = null, \Ews\ArrayType\EwsArrayOfAttendeeAvailability $attendeeAvailabilities = null, \Ews\ArrayType\EwsArrayOfMeetingLocation $locations = null)
    {
        $this
            ->setMeetingTimeslot($meetingTimeslot)
            ->setConfidence($confidence)
            ->setScore($score)
            ->setOrganizerAvailability($organizerAvailability)
            ->setAttendeeAvailabilities($attendeeAvailabilities)
            ->setLocations($locations);
    }
    /**
     * Get MeetingTimeslot value
     * @return \Ews\StructType\EwsTimeSlot|null
     */
    public function getMeetingTimeslot()
    {
        return $this->MeetingTimeslot;
    }
    /**
     * Set MeetingTimeslot value
     * @param \Ews\StructType\EwsTimeSlot $meetingTimeslot
     * @return \Ews\StructType\EwsMeetingTimeCandidate
     */
    public function setMeetingTimeslot(\Ews\StructType\EwsTimeSlot $meetingTimeslot = null)
    {
        $this->MeetingTimeslot = $meetingTimeslot;
        return $this;
    }
    /**
     * Get Confidence value
     * @return double|null
     */
    public function getConfidence()
    {
        return $this->Confidence;
    }
    /**
     * Set Confidence value
     * @param double $confidence
     * @return \Ews\StructType\EwsMeetingTimeCandidate
     */
    public function setConfidence($confidence = null)
    {
        $this->Confidence = $confidence;
        return $this;
    }
    /**
     * Get Score value
     * @return int|null
     */
    public function getScore()
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param int $score
     * @return \Ews\StructType\EwsMeetingTimeCandidate
     */
    public function setScore($score = null)
    {
        $this->Score = $score;
        return $this;
    }
    /**
     * Get OrganizerAvailability value
     * @return string|null
     */
    public function getOrganizerAvailability()
    {
        return $this->OrganizerAvailability;
    }
    /**
     * Set OrganizerAvailability value
     * @uses \Ews\EnumType\EwsAvailabilityStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsAvailabilityStatusType::getValidValues()
     * @param string $organizerAvailability
     * @return \Ews\StructType\EwsMeetingTimeCandidate
     */
    public function setOrganizerAvailability($organizerAvailability = null)
    {
        if (!\Ews\EnumType\EwsAvailabilityStatusType::valueIsValid($organizerAvailability)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $organizerAvailability, implode(', ', \Ews\EnumType\EwsAvailabilityStatusType::getValidValues())), __LINE__);
        }
        $this->OrganizerAvailability = $organizerAvailability;
        return $this;
    }
    /**
     * Get AttendeeAvailabilities value
     * @return \Ews\ArrayType\EwsArrayOfAttendeeAvailability|null
     */
    public function getAttendeeAvailabilities()
    {
        return $this->AttendeeAvailabilities;
    }
    /**
     * Set AttendeeAvailabilities value
     * @param \Ews\ArrayType\EwsArrayOfAttendeeAvailability $attendeeAvailabilities
     * @return \Ews\StructType\EwsMeetingTimeCandidate
     */
    public function setAttendeeAvailabilities(\Ews\ArrayType\EwsArrayOfAttendeeAvailability $attendeeAvailabilities = null)
    {
        $this->AttendeeAvailabilities = $attendeeAvailabilities;
        return $this;
    }
    /**
     * Get Locations value
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocation|null
     */
    public function getLocations()
    {
        return $this->Locations;
    }
    /**
     * Set Locations value
     * @param \Ews\ArrayType\EwsArrayOfMeetingLocation $locations
     * @return \Ews\StructType\EwsMeetingTimeCandidate
     */
    public function setLocations(\Ews\ArrayType\EwsArrayOfMeetingLocation $locations = null)
    {
        $this->Locations = $locations;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingTimeCandidate
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
