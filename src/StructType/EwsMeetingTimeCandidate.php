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
     * @var float
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
     * @param float $confidence
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
     * @return float|null
     */
    public function getConfidence()
    {
        return $this->Confidence;
    }
    /**
     * Set Confidence value
     * @param float $confidence
     * @return \Ews\StructType\EwsMeetingTimeCandidate
     */
    public function setConfidence($confidence = null)
    {
        // validation for constraint: float
        if (!is_null($confidence) && !(is_float($confidence) || is_numeric($confidence))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($confidence, true), gettype($confidence)), __LINE__);
        }
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
        // validation for constraint: int
        if (!is_null($score) && !(is_int($score) || ctype_digit($score))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($score, true), gettype($score)), __LINE__);
        }
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
     * @throws \InvalidArgumentException
     * @param string $organizerAvailability
     * @return \Ews\StructType\EwsMeetingTimeCandidate
     */
    public function setOrganizerAvailability($organizerAvailability = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsAvailabilityStatusType::valueIsValid($organizerAvailability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsAvailabilityStatusType', is_array($organizerAvailability) ? implode(', ', $organizerAvailability) : var_export($organizerAvailability, true), implode(', ', \Ews\EnumType\EwsAvailabilityStatusType::getValidValues())), __LINE__);
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
}
