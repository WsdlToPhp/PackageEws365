<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimesSearchConstraints StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingTimesSearchConstraints extends AbstractStructBase
{
    /**
     * The SearchWindows
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTimeSlot
     */
    public $SearchWindows;
    /**
     * The MeetingDurationInMinutes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MeetingDurationInMinutes;
    /**
     * The ActivityDomain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActivityDomain;
    /**
     * Constructor method for FindMeetingTimesSearchConstraints
     * @uses EwsFindMeetingTimesSearchConstraints::setSearchWindows()
     * @uses EwsFindMeetingTimesSearchConstraints::setMeetingDurationInMinutes()
     * @uses EwsFindMeetingTimesSearchConstraints::setActivityDomain()
     * @param \Ews\ArrayType\EwsArrayOfTimeSlot $searchWindows
     * @param int $meetingDurationInMinutes
     * @param string $activityDomain
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfTimeSlot $searchWindows = null, $meetingDurationInMinutes = null, $activityDomain = null)
    {
        $this
            ->setSearchWindows($searchWindows)
            ->setMeetingDurationInMinutes($meetingDurationInMinutes)
            ->setActivityDomain($activityDomain);
    }
    /**
     * Get SearchWindows value
     * @return \Ews\ArrayType\EwsArrayOfTimeSlot|null
     */
    public function getSearchWindows()
    {
        return $this->SearchWindows;
    }
    /**
     * Set SearchWindows value
     * @param \Ews\ArrayType\EwsArrayOfTimeSlot $searchWindows
     * @return \Ews\StructType\EwsFindMeetingTimesSearchConstraints
     */
    public function setSearchWindows(\Ews\ArrayType\EwsArrayOfTimeSlot $searchWindows = null)
    {
        $this->SearchWindows = $searchWindows;
        return $this;
    }
    /**
     * Get MeetingDurationInMinutes value
     * @return int|null
     */
    public function getMeetingDurationInMinutes()
    {
        return $this->MeetingDurationInMinutes;
    }
    /**
     * Set MeetingDurationInMinutes value
     * @param int $meetingDurationInMinutes
     * @return \Ews\StructType\EwsFindMeetingTimesSearchConstraints
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
     * @return string|null
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
     * @return \Ews\StructType\EwsFindMeetingTimesSearchConstraints
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
