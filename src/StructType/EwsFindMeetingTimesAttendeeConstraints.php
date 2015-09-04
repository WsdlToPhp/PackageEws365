<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimesAttendeeConstraints StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindMeetingTimesAttendeeConstraints extends AbstractStructBase
{
    /**
     * The AttendeeEntries
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMeetingTimesAttendeeConstraints
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
