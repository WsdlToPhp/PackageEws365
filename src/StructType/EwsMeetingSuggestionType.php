<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingSuggestionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingSuggestionType extends EwsEntityType
{
    /**
     * The Attendees
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfEmailUsersType|null
     */
    protected ?\ArrayType\EwsArrayOfEmailUsersType $Attendees = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The MeetingString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MeetingString = null;
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTime = null;
    /**
     * Constructor method for MeetingSuggestionType
     * @uses EwsMeetingSuggestionType::setAttendees()
     * @uses EwsMeetingSuggestionType::setLocation()
     * @uses EwsMeetingSuggestionType::setSubject()
     * @uses EwsMeetingSuggestionType::setMeetingString()
     * @uses EwsMeetingSuggestionType::setStartTime()
     * @uses EwsMeetingSuggestionType::setEndTime()
     * @param \ArrayType\EwsArrayOfEmailUsersType $attendees
     * @param string $location
     * @param string $subject
     * @param string $meetingString
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct(?\ArrayType\EwsArrayOfEmailUsersType $attendees = null, ?string $location = null, ?string $subject = null, ?string $meetingString = null, ?string $startTime = null, ?string $endTime = null)
    {
        $this
            ->setAttendees($attendees)
            ->setLocation($location)
            ->setSubject($subject)
            ->setMeetingString($meetingString)
            ->setStartTime($startTime)
            ->setEndTime($endTime);
    }
    /**
     * Get Attendees value
     * @return \ArrayType\EwsArrayOfEmailUsersType|null
     */
    public function getAttendees(): ?\ArrayType\EwsArrayOfEmailUsersType
    {
        return $this->Attendees;
    }
    /**
     * Set Attendees value
     * @param \ArrayType\EwsArrayOfEmailUsersType $attendees
     * @return \StructType\EwsMeetingSuggestionType
     */
    public function setAttendees(?\ArrayType\EwsArrayOfEmailUsersType $attendees = null): self
    {
        $this->Attendees = $attendees;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \StructType\EwsMeetingSuggestionType
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsMeetingSuggestionType
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
        return $this;
    }
    /**
     * Get MeetingString value
     * @return string|null
     */
    public function getMeetingString(): ?string
    {
        return $this->MeetingString;
    }
    /**
     * Set MeetingString value
     * @param string $meetingString
     * @return \StructType\EwsMeetingSuggestionType
     */
    public function setMeetingString(?string $meetingString = null): self
    {
        // validation for constraint: string
        if (!is_null($meetingString) && !is_string($meetingString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meetingString, true), gettype($meetingString)), __LINE__);
        }
        $this->MeetingString = $meetingString;
        
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\EwsMeetingSuggestionType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\EwsMeetingSuggestionType
     */
    public function setEndTime(?string $endTime = null): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
}
