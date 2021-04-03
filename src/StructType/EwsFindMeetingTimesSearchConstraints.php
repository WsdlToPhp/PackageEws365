<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfTimeSlot|null
     */
    protected ?\ArrayType\EwsArrayOfTimeSlot $SearchWindows = null;
    /**
     * The MeetingDurationInMinutes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MeetingDurationInMinutes = null;
    /**
     * The ActivityDomain
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ActivityDomain = null;
    /**
     * Constructor method for FindMeetingTimesSearchConstraints
     * @uses EwsFindMeetingTimesSearchConstraints::setSearchWindows()
     * @uses EwsFindMeetingTimesSearchConstraints::setMeetingDurationInMinutes()
     * @uses EwsFindMeetingTimesSearchConstraints::setActivityDomain()
     * @param \ArrayType\EwsArrayOfTimeSlot $searchWindows
     * @param int $meetingDurationInMinutes
     * @param string $activityDomain
     */
    public function __construct(?\ArrayType\EwsArrayOfTimeSlot $searchWindows = null, ?int $meetingDurationInMinutes = null, ?string $activityDomain = null)
    {
        $this
            ->setSearchWindows($searchWindows)
            ->setMeetingDurationInMinutes($meetingDurationInMinutes)
            ->setActivityDomain($activityDomain);
    }
    /**
     * Get SearchWindows value
     * @return \ArrayType\EwsArrayOfTimeSlot|null
     */
    public function getSearchWindows(): ?\ArrayType\EwsArrayOfTimeSlot
    {
        return $this->SearchWindows;
    }
    /**
     * Set SearchWindows value
     * @param \ArrayType\EwsArrayOfTimeSlot $searchWindows
     * @return \StructType\EwsFindMeetingTimesSearchConstraints
     */
    public function setSearchWindows(?\ArrayType\EwsArrayOfTimeSlot $searchWindows = null): self
    {
        $this->SearchWindows = $searchWindows;
        
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
     * @return \StructType\EwsFindMeetingTimesSearchConstraints
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
     * @return \StructType\EwsFindMeetingTimesSearchConstraints
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
