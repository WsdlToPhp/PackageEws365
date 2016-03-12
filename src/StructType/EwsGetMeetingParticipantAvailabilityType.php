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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SearchWindowStart;
    /**
     * The SearchWindowDuration
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SearchWindowDuration;
    /**
     * The MeetingDurationInMinutes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $MeetingDurationInMinutes;
    /**
     * The ActivityDomain
     * Meta informations extracted from the WSDL
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
     * @param int $searchWindowDuration
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchWindowStart)), __LINE__);
        }
        $this->SearchWindowStart = $searchWindowStart;
        return $this;
    }
    /**
     * Get SearchWindowDuration value
     * @return int
     */
    public function getSearchWindowDuration()
    {
        return $this->SearchWindowDuration;
    }
    /**
     * Set SearchWindowDuration value
     * @param int $searchWindowDuration
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityType
     */
    public function setSearchWindowDuration($searchWindowDuration = null)
    {
        // validation for constraint: int
        if (!is_null($searchWindowDuration) && !is_int($searchWindowDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($searchWindowDuration)), __LINE__);
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
        if (!is_null($meetingDurationInMinutes) && !is_int($meetingDurationInMinutes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($meetingDurationInMinutes)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $activityDomain, implode(', ', \Ews\EnumType\EwsActivityDomainType::getValidValues())), __LINE__);
        }
        $this->ActivityDomain = $activityDomain;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityType
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
