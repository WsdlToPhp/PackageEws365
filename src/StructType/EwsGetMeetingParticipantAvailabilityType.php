<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMeetingParticipantAvailabilityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMeetingParticipantAvailabilityType extends EwsBaseRequestType
{
    /**
     * The SearchWindowStart
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SearchWindowStart;
    /**
     * The SearchWindowDuration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SearchWindowDuration;
    /**
     * The MeetingDurationInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $MeetingDurationInMinutes;
    /**
     * The ActivityDomain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ActivityDomain;
    /**
     * Constructor method for GetMeetingParticipantAvailabilityType
     * @uses EwsGetMeetingParticipantAvailabilityType::setSearchWindowStart()
     * @uses EwsGetMeetingParticipantAvailabilityType::setSearchWindowDuration()
     * @uses EwsGetMeetingParticipantAvailabilityType::setMeetingDurationInMinutes()
     * @uses EwsGetMeetingParticipantAvailabilityType::setActivityDomain()
     * @param string $searchWindowStart
     * @param string $searchWindowDuration
     * @param int $meetingDurationInMinutes
     * @param string $activityDomain
     */
    public function __construct(string $searchWindowStart, string $searchWindowDuration, int $meetingDurationInMinutes, string $activityDomain)
    {
        $this
            ->setSearchWindowStart($searchWindowStart)
            ->setSearchWindowDuration($searchWindowDuration)
            ->setMeetingDurationInMinutes($meetingDurationInMinutes)
            ->setActivityDomain($activityDomain);
    }
    /**
     * Get SearchWindowStart value
     * @return string
     */
    public function getSearchWindowStart(): string
    {
        return $this->SearchWindowStart;
    }
    /**
     * Set SearchWindowStart value
     * @param string $searchWindowStart
     * @return \StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setSearchWindowStart(string $searchWindowStart): self
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
     * @return string
     */
    public function getSearchWindowDuration(): string
    {
        return $this->SearchWindowDuration;
    }
    /**
     * Set SearchWindowDuration value
     * @param string $searchWindowDuration
     * @return \StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setSearchWindowDuration(string $searchWindowDuration): self
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
     * @return int
     */
    public function getMeetingDurationInMinutes(): int
    {
        return $this->MeetingDurationInMinutes;
    }
    /**
     * Set MeetingDurationInMinutes value
     * @param int $meetingDurationInMinutes
     * @return \StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setMeetingDurationInMinutes(int $meetingDurationInMinutes): self
    {
        // validation for constraint: int
        if (!is_null($meetingDurationInMinutes) && !(is_int($meetingDurationInMinutes) || ctype_digit($meetingDurationInMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meetingDurationInMinutes, true), gettype($meetingDurationInMinutes)), __LINE__);
        }
        $this->MeetingDurationInMinutes = $meetingDurationInMinutes;
        
        return $this;
    }
    /**
     * Get ActivityDomain value
     * @return string
     */
    public function getActivityDomain(): string
    {
        return $this->ActivityDomain;
    }
    /**
     * Set ActivityDomain value
     * @uses \EnumType\EwsActivityDomainType::valueIsValid()
     * @uses \EnumType\EwsActivityDomainType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $activityDomain
     * @return \StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setActivityDomain(string $activityDomain): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsActivityDomainType::valueIsValid($activityDomain)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsActivityDomainType', is_array($activityDomain) ? implode(', ', $activityDomain) : var_export($activityDomain, true), implode(', ', \EnumType\EwsActivityDomainType::getValidValues())), __LINE__);
        }
        $this->ActivityDomain = $activityDomain;
        
        return $this;
    }
}
