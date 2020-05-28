<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $SearchWindowStart;
    /**
     * The SearchWindowDuration
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchWindowDuration;
    /**
     * The MeetingDurationInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MeetingDurationInMinutes;
    /**
     * The ActivityDomain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ActivityDomain;
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
    public function __construct($searchWindowStart = null, $searchWindowDuration = null, $meetingDurationInMinutes = null, $activityDomain = null)
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
    public function getSearchWindowStart()
    {
        return $this->SearchWindowStart;
    }
    /**
     * Set SearchWindowStart value
     * @param string $searchWindowStart
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setSearchWindowStart($searchWindowStart = null)
    {
        // validation for constraint: string
        if (!is_null($searchWindowStart) && !is_string($searchWindowStart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchWindowStart, true), gettype($searchWindowStart)), __LINE__);
        }
        $this->SearchWindowStart = $searchWindowStart;
        return $this;
    }
    /**
     * Get SearchWindowDuration value
     * @return string
     */
    public function getSearchWindowDuration()
    {
        return $this->SearchWindowDuration;
    }
    /**
     * Set SearchWindowDuration value
     * @param string $searchWindowDuration
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setSearchWindowDuration($searchWindowDuration = null)
    {
        // validation for constraint: string
        if (!is_null($searchWindowDuration) && !is_string($searchWindowDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchWindowDuration, true), gettype($searchWindowDuration)), __LINE__);
        }
        $this->SearchWindowDuration = $searchWindowDuration;
        return $this;
    }
    /**
     * Get MeetingDurationInMinutes value
     * @return int
     */
    public function getMeetingDurationInMinutes()
    {
        return $this->MeetingDurationInMinutes;
    }
    /**
     * Set MeetingDurationInMinutes value
     * @param int $meetingDurationInMinutes
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setMeetingDurationInMinutes($meetingDurationInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($meetingDurationInMinutes) && !(is_int($meetingDurationInMinutes) || ctype_digit($meetingDurationInMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meetingDurationInMinutes, true), gettype($meetingDurationInMinutes)), __LINE__);
        }
        $this->MeetingDurationInMinutes = $meetingDurationInMinutes;
        return $this;
    }
    /**
     * Get ActivityDomain value
     * @return string
     */
    public function getActivityDomain()
    {
        return $this->ActivityDomain;
    }
    /**
     * Set ActivityDomain value
     * @uses \Ews\EnumType\EwsActivityDomainType::valueIsValid()
     * @uses \Ews\EnumType\EwsActivityDomainType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $activityDomain
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setActivityDomain($activityDomain = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsActivityDomainType::valueIsValid($activityDomain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsActivityDomainType', is_array($activityDomain) ? implode(', ', $activityDomain) : var_export($activityDomain, true), implode(', ', \Ews\EnumType\EwsActivityDomainType::getValidValues())), __LINE__);
        }
        $this->ActivityDomain = $activityDomain;
        return $this;
    }
}
