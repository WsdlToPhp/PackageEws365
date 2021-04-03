<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimesAttendeeConstraints StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingTimesAttendeeConstraints extends AbstractStructBase
{
    /**
     * The AttendeeEntries
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfAttendeeConstraintItems|null
     */
    protected ?\ArrayType\EwsArrayOfAttendeeConstraintItems $AttendeeEntries = null;
    /**
     * Constructor method for FindMeetingTimesAttendeeConstraints
     * @uses EwsFindMeetingTimesAttendeeConstraints::setAttendeeEntries()
     * @param \ArrayType\EwsArrayOfAttendeeConstraintItems $attendeeEntries
     */
    public function __construct(?\ArrayType\EwsArrayOfAttendeeConstraintItems $attendeeEntries = null)
    {
        $this
            ->setAttendeeEntries($attendeeEntries);
    }
    /**
     * Get AttendeeEntries value
     * @return \ArrayType\EwsArrayOfAttendeeConstraintItems|null
     */
    public function getAttendeeEntries(): ?\ArrayType\EwsArrayOfAttendeeConstraintItems
    {
        return $this->AttendeeEntries;
    }
    /**
     * Set AttendeeEntries value
     * @param \ArrayType\EwsArrayOfAttendeeConstraintItems $attendeeEntries
     * @return \StructType\EwsFindMeetingTimesAttendeeConstraints
     */
    public function setAttendeeEntries(?\ArrayType\EwsArrayOfAttendeeConstraintItems $attendeeEntries = null): self
    {
        $this->AttendeeEntries = $attendeeEntries;
        
        return $this;
    }
}
