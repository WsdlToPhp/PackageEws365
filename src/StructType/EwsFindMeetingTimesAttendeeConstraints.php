<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems
     */
    public $AttendeeEntries;
    /**
     * Constructor method for FindMeetingTimesAttendeeConstraints
     * @uses EwsFindMeetingTimesAttendeeConstraints::setAttendeeEntries()
     * @param \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems $attendeeEntries
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfAttendeeConstraintItems $attendeeEntries = null)
    {
        $this
            ->setAttendeeEntries($attendeeEntries);
    }
    /**
     * Get AttendeeEntries value
     * @return \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems|null
     */
    public function getAttendeeEntries()
    {
        return $this->AttendeeEntries;
    }
    /**
     * Set AttendeeEntries value
     * @param \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems $attendeeEntries
     * @return \Ews\StructType\EwsFindMeetingTimesAttendeeConstraints
     */
    public function setAttendeeEntries(\Ews\ArrayType\EwsArrayOfAttendeeConstraintItems $attendeeEntries = null)
    {
        $this->AttendeeEntries = $attendeeEntries;
        return $this;
    }
}
