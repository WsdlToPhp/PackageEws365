<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimeCandidatesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingTimeCandidatesType extends EwsBaseRequestType
{
    /**
     * The AttendeeConstraints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFindMeetingTimesAttendeeConstraints|null
     */
    protected ?\StructType\EwsFindMeetingTimesAttendeeConstraints $AttendeeConstraints = null;
    /**
     * The LocationConstraints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFindMeetingTimesLocationConstraints|null
     */
    protected ?\StructType\EwsFindMeetingTimesLocationConstraints $LocationConstraints = null;
    /**
     * The SearchConstraints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFindMeetingTimesSearchConstraints|null
     */
    protected ?\StructType\EwsFindMeetingTimesSearchConstraints $SearchConstraints = null;
    /**
     * The Constraints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsFindMeetingTimesConstraints|null
     */
    protected ?\StructType\EwsFindMeetingTimesConstraints $Constraints = null;
    /**
     * Constructor method for FindMeetingTimeCandidatesType
     * @uses EwsFindMeetingTimeCandidatesType::setAttendeeConstraints()
     * @uses EwsFindMeetingTimeCandidatesType::setLocationConstraints()
     * @uses EwsFindMeetingTimeCandidatesType::setSearchConstraints()
     * @uses EwsFindMeetingTimeCandidatesType::setConstraints()
     * @param \StructType\EwsFindMeetingTimesAttendeeConstraints $attendeeConstraints
     * @param \StructType\EwsFindMeetingTimesLocationConstraints $locationConstraints
     * @param \StructType\EwsFindMeetingTimesSearchConstraints $searchConstraints
     * @param \StructType\EwsFindMeetingTimesConstraints $constraints
     */
    public function __construct(?\StructType\EwsFindMeetingTimesAttendeeConstraints $attendeeConstraints = null, ?\StructType\EwsFindMeetingTimesLocationConstraints $locationConstraints = null, ?\StructType\EwsFindMeetingTimesSearchConstraints $searchConstraints = null, ?\StructType\EwsFindMeetingTimesConstraints $constraints = null)
    {
        $this
            ->setAttendeeConstraints($attendeeConstraints)
            ->setLocationConstraints($locationConstraints)
            ->setSearchConstraints($searchConstraints)
            ->setConstraints($constraints);
    }
    /**
     * Get AttendeeConstraints value
     * @return \StructType\EwsFindMeetingTimesAttendeeConstraints|null
     */
    public function getAttendeeConstraints(): ?\StructType\EwsFindMeetingTimesAttendeeConstraints
    {
        return $this->AttendeeConstraints;
    }
    /**
     * Set AttendeeConstraints value
     * @param \StructType\EwsFindMeetingTimesAttendeeConstraints $attendeeConstraints
     * @return \StructType\EwsFindMeetingTimeCandidatesType
     */
    public function setAttendeeConstraints(?\StructType\EwsFindMeetingTimesAttendeeConstraints $attendeeConstraints = null): self
    {
        $this->AttendeeConstraints = $attendeeConstraints;
        
        return $this;
    }
    /**
     * Get LocationConstraints value
     * @return \StructType\EwsFindMeetingTimesLocationConstraints|null
     */
    public function getLocationConstraints(): ?\StructType\EwsFindMeetingTimesLocationConstraints
    {
        return $this->LocationConstraints;
    }
    /**
     * Set LocationConstraints value
     * @param \StructType\EwsFindMeetingTimesLocationConstraints $locationConstraints
     * @return \StructType\EwsFindMeetingTimeCandidatesType
     */
    public function setLocationConstraints(?\StructType\EwsFindMeetingTimesLocationConstraints $locationConstraints = null): self
    {
        $this->LocationConstraints = $locationConstraints;
        
        return $this;
    }
    /**
     * Get SearchConstraints value
     * @return \StructType\EwsFindMeetingTimesSearchConstraints|null
     */
    public function getSearchConstraints(): ?\StructType\EwsFindMeetingTimesSearchConstraints
    {
        return $this->SearchConstraints;
    }
    /**
     * Set SearchConstraints value
     * @param \StructType\EwsFindMeetingTimesSearchConstraints $searchConstraints
     * @return \StructType\EwsFindMeetingTimeCandidatesType
     */
    public function setSearchConstraints(?\StructType\EwsFindMeetingTimesSearchConstraints $searchConstraints = null): self
    {
        $this->SearchConstraints = $searchConstraints;
        
        return $this;
    }
    /**
     * Get Constraints value
     * @return \StructType\EwsFindMeetingTimesConstraints|null
     */
    public function getConstraints(): ?\StructType\EwsFindMeetingTimesConstraints
    {
        return $this->Constraints;
    }
    /**
     * Set Constraints value
     * @param \StructType\EwsFindMeetingTimesConstraints $constraints
     * @return \StructType\EwsFindMeetingTimeCandidatesType
     */
    public function setConstraints(?\StructType\EwsFindMeetingTimesConstraints $constraints = null): self
    {
        $this->Constraints = $constraints;
        
        return $this;
    }
}
