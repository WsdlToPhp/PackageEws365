<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsTimeSlot|null
     */
    protected ?\StructType\EwsTimeSlot $MeetingTimeslot = null;
    /**
     * The Confidence
     * @var float|null
     */
    protected ?float $Confidence = null;
    /**
     * The Score
     * @var int|null
     */
    protected ?int $Score = null;
    /**
     * The OrganizerAvailability
     * @var string|null
     */
    protected ?string $OrganizerAvailability = null;
    /**
     * The AttendeeAvailabilities
     * @var \ArrayType\EwsArrayOfAttendeeAvailability|null
     */
    protected ?\ArrayType\EwsArrayOfAttendeeAvailability $AttendeeAvailabilities = null;
    /**
     * The Locations
     * @var \ArrayType\EwsArrayOfMeetingLocation|null
     */
    protected ?\ArrayType\EwsArrayOfMeetingLocation $Locations = null;
    /**
     * Constructor method for MeetingTimeCandidate
     * @uses EwsMeetingTimeCandidate::setMeetingTimeslot()
     * @uses EwsMeetingTimeCandidate::setConfidence()
     * @uses EwsMeetingTimeCandidate::setScore()
     * @uses EwsMeetingTimeCandidate::setOrganizerAvailability()
     * @uses EwsMeetingTimeCandidate::setAttendeeAvailabilities()
     * @uses EwsMeetingTimeCandidate::setLocations()
     * @param \StructType\EwsTimeSlot $meetingTimeslot
     * @param float $confidence
     * @param int $score
     * @param string $organizerAvailability
     * @param \ArrayType\EwsArrayOfAttendeeAvailability $attendeeAvailabilities
     * @param \ArrayType\EwsArrayOfMeetingLocation $locations
     */
    public function __construct(?\StructType\EwsTimeSlot $meetingTimeslot = null, ?float $confidence = null, ?int $score = null, ?string $organizerAvailability = null, ?\ArrayType\EwsArrayOfAttendeeAvailability $attendeeAvailabilities = null, ?\ArrayType\EwsArrayOfMeetingLocation $locations = null)
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
     * @return \StructType\EwsTimeSlot|null
     */
    public function getMeetingTimeslot(): ?\StructType\EwsTimeSlot
    {
        return $this->MeetingTimeslot;
    }
    /**
     * Set MeetingTimeslot value
     * @param \StructType\EwsTimeSlot $meetingTimeslot
     * @return \StructType\EwsMeetingTimeCandidate
     */
    public function setMeetingTimeslot(?\StructType\EwsTimeSlot $meetingTimeslot = null): self
    {
        $this->MeetingTimeslot = $meetingTimeslot;
        
        return $this;
    }
    /**
     * Get Confidence value
     * @return float|null
     */
    public function getConfidence(): ?float
    {
        return $this->Confidence;
    }
    /**
     * Set Confidence value
     * @param float $confidence
     * @return \StructType\EwsMeetingTimeCandidate
     */
    public function setConfidence(?float $confidence = null): self
    {
        // validation for constraint: float
        if (!is_null($confidence) && !(is_float($confidence) || is_numeric($confidence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($confidence, true), gettype($confidence)), __LINE__);
        }
        $this->Confidence = $confidence;
        
        return $this;
    }
    /**
     * Get Score value
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->Score;
    }
    /**
     * Set Score value
     * @param int $score
     * @return \StructType\EwsMeetingTimeCandidate
     */
    public function setScore(?int $score = null): self
    {
        // validation for constraint: int
        if (!is_null($score) && !(is_int($score) || ctype_digit($score))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($score, true), gettype($score)), __LINE__);
        }
        $this->Score = $score;
        
        return $this;
    }
    /**
     * Get OrganizerAvailability value
     * @return string|null
     */
    public function getOrganizerAvailability(): ?string
    {
        return $this->OrganizerAvailability;
    }
    /**
     * Set OrganizerAvailability value
     * @uses \EnumType\EwsAvailabilityStatusType::valueIsValid()
     * @uses \EnumType\EwsAvailabilityStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $organizerAvailability
     * @return \StructType\EwsMeetingTimeCandidate
     */
    public function setOrganizerAvailability(?string $organizerAvailability = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsAvailabilityStatusType::valueIsValid($organizerAvailability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsAvailabilityStatusType', is_array($organizerAvailability) ? implode(', ', $organizerAvailability) : var_export($organizerAvailability, true), implode(', ', \EnumType\EwsAvailabilityStatusType::getValidValues())), __LINE__);
        }
        $this->OrganizerAvailability = $organizerAvailability;
        
        return $this;
    }
    /**
     * Get AttendeeAvailabilities value
     * @return \ArrayType\EwsArrayOfAttendeeAvailability|null
     */
    public function getAttendeeAvailabilities(): ?\ArrayType\EwsArrayOfAttendeeAvailability
    {
        return $this->AttendeeAvailabilities;
    }
    /**
     * Set AttendeeAvailabilities value
     * @param \ArrayType\EwsArrayOfAttendeeAvailability $attendeeAvailabilities
     * @return \StructType\EwsMeetingTimeCandidate
     */
    public function setAttendeeAvailabilities(?\ArrayType\EwsArrayOfAttendeeAvailability $attendeeAvailabilities = null): self
    {
        $this->AttendeeAvailabilities = $attendeeAvailabilities;
        
        return $this;
    }
    /**
     * Get Locations value
     * @return \ArrayType\EwsArrayOfMeetingLocation|null
     */
    public function getLocations(): ?\ArrayType\EwsArrayOfMeetingLocation
    {
        return $this->Locations;
    }
    /**
     * Set Locations value
     * @param \ArrayType\EwsArrayOfMeetingLocation $locations
     * @return \StructType\EwsMeetingTimeCandidate
     */
    public function setLocations(?\ArrayType\EwsArrayOfMeetingLocation $locations = null): self
    {
        $this->Locations = $locations;
        
        return $this;
    }
}
