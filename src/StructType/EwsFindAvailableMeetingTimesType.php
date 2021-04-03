<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindAvailableMeetingTimesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindAvailableMeetingTimesType extends EwsBaseRequestType
{
    /**
     * The Attendees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    protected ?\ArrayType\EwsArrayOfSmtpAddressType $Attendees = null;
    /**
     * The SearchWindowStart
     * @var string|null
     */
    protected ?string $SearchWindowStart = null;
    /**
     * The SearchWindowDuration
     * @var string|null
     */
    protected ?string $SearchWindowDuration = null;
    /**
     * The MeetingDurationInMinutes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MeetingDurationInMinutes = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The MaxCandidates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxCandidates = null;
    /**
     * The ActivityDomain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActivityDomain = null;
    /**
     * Constructor method for FindAvailableMeetingTimesType
     * @uses EwsFindAvailableMeetingTimesType::setAttendees()
     * @uses EwsFindAvailableMeetingTimesType::setSearchWindowStart()
     * @uses EwsFindAvailableMeetingTimesType::setSearchWindowDuration()
     * @uses EwsFindAvailableMeetingTimesType::setMeetingDurationInMinutes()
     * @uses EwsFindAvailableMeetingTimesType::setLocation()
     * @uses EwsFindAvailableMeetingTimesType::setMaxCandidates()
     * @uses EwsFindAvailableMeetingTimesType::setActivityDomain()
     * @param \ArrayType\EwsArrayOfSmtpAddressType $attendees
     * @param string $searchWindowStart
     * @param string $searchWindowDuration
     * @param int $meetingDurationInMinutes
     * @param string $location
     * @param int $maxCandidates
     * @param string $activityDomain
     */
    public function __construct(?\ArrayType\EwsArrayOfSmtpAddressType $attendees = null, ?string $searchWindowStart = null, ?string $searchWindowDuration = null, ?int $meetingDurationInMinutes = null, ?string $location = null, ?int $maxCandidates = null, ?string $activityDomain = null)
    {
        $this
            ->setAttendees($attendees)
            ->setSearchWindowStart($searchWindowStart)
            ->setSearchWindowDuration($searchWindowDuration)
            ->setMeetingDurationInMinutes($meetingDurationInMinutes)
            ->setLocation($location)
            ->setMaxCandidates($maxCandidates)
            ->setActivityDomain($activityDomain);
    }
    /**
     * Get Attendees value
     * @return \ArrayType\EwsArrayOfSmtpAddressType|null
     */
    public function getAttendees(): ?\ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->Attendees;
    }
    /**
     * Set Attendees value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $attendees
     * @return \StructType\EwsFindAvailableMeetingTimesType
     */
    public function setAttendees(?\ArrayType\EwsArrayOfSmtpAddressType $attendees = null): self
    {
        $this->Attendees = $attendees;
        
        return $this;
    }
    /**
     * Get SearchWindowStart value
     * @return string|null
     */
    public function getSearchWindowStart(): ?string
    {
        return $this->SearchWindowStart;
    }
    /**
     * Set SearchWindowStart value
     * @param string $searchWindowStart
     * @return \StructType\EwsFindAvailableMeetingTimesType
     */
    public function setSearchWindowStart(?string $searchWindowStart = null): self
    {
        // validation for constraint: string
        if (!is_null($searchWindowStart) && !is_string($searchWindowStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchWindowStart, true), gettype($searchWindowStart)), __LINE__);
        }
        $this->SearchWindowStart = $searchWindowStart;
        
        return $this;
    }
    /**
     * Get SearchWindowDuration value
     * @return string|null
     */
    public function getSearchWindowDuration(): ?string
    {
        return $this->SearchWindowDuration;
    }
    /**
     * Set SearchWindowDuration value
     * @param string $searchWindowDuration
     * @return \StructType\EwsFindAvailableMeetingTimesType
     */
    public function setSearchWindowDuration(?string $searchWindowDuration = null): self
    {
        // validation for constraint: string
        if (!is_null($searchWindowDuration) && !is_string($searchWindowDuration)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchWindowDuration, true), gettype($searchWindowDuration)), __LINE__);
        }
        $this->SearchWindowDuration = $searchWindowDuration;
        
        return $this;
    }
    /**
     * Get MeetingDurationInMinutes value
     * @return int|null
     */
    public function getMeetingDurationInMinutes(): ?int
    {
        return $this->MeetingDurationInMinutes;
    }
    /**
     * Set MeetingDurationInMinutes value
     * @param int $meetingDurationInMinutes
     * @return \StructType\EwsFindAvailableMeetingTimesType
     */
    public function setMeetingDurationInMinutes(?int $meetingDurationInMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($meetingDurationInMinutes) && !(is_int($meetingDurationInMinutes) || ctype_digit($meetingDurationInMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meetingDurationInMinutes, true), gettype($meetingDurationInMinutes)), __LINE__);
        }
        $this->MeetingDurationInMinutes = $meetingDurationInMinutes;
        
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
     * @return \StructType\EwsFindAvailableMeetingTimesType
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
     * Get MaxCandidates value
     * @return int|null
     */
    public function getMaxCandidates(): ?int
    {
        return $this->MaxCandidates;
    }
    /**
     * Set MaxCandidates value
     * @param int $maxCandidates
     * @return \StructType\EwsFindAvailableMeetingTimesType
     */
    public function setMaxCandidates(?int $maxCandidates = null): self
    {
        // validation for constraint: int
        if (!is_null($maxCandidates) && !(is_int($maxCandidates) || ctype_digit($maxCandidates))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxCandidates, true), gettype($maxCandidates)), __LINE__);
        }
        $this->MaxCandidates = $maxCandidates;
        
        return $this;
    }
    /**
     * Get ActivityDomain value
     * @return string|null
     */
    public function getActivityDomain(): ?string
    {
        return $this->ActivityDomain;
    }
    /**
     * Set ActivityDomain value
     * @uses \EnumType\EwsActivityDomainType::valueIsValid()
     * @uses \EnumType\EwsActivityDomainType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $activityDomain
     * @return \StructType\EwsFindAvailableMeetingTimesType
     */
    public function setActivityDomain(?string $activityDomain = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsActivityDomainType::valueIsValid($activityDomain)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsActivityDomainType', is_array($activityDomain) ? implode(', ', $activityDomain) : var_export($activityDomain, true), implode(', ', \EnumType\EwsActivityDomainType::getValidValues())), __LINE__);
        }
        $this->ActivityDomain = $activityDomain;
        
        return $this;
    }
}
