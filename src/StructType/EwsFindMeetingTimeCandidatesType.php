<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFindMeetingTimesAttendeeConstraints
     */
    public $AttendeeConstraints;
    /**
     * The LocationConstraints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFindMeetingTimesLocationConstraints
     */
    public $LocationConstraints;
    /**
     * The SearchConstraints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFindMeetingTimesSearchConstraints
     */
    public $SearchConstraints;
    /**
     * The Constraints
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsFindMeetingTimesConstraints
     */
    public $Constraints;
    /**
     * Constructor method for FindMeetingTimeCandidatesType
     * @uses EwsFindMeetingTimeCandidatesType::setAttendeeConstraints()
     * @uses EwsFindMeetingTimeCandidatesType::setLocationConstraints()
     * @uses EwsFindMeetingTimeCandidatesType::setSearchConstraints()
     * @uses EwsFindMeetingTimeCandidatesType::setConstraints()
     * @param \Ews\StructType\EwsFindMeetingTimesAttendeeConstraints $attendeeConstraints
     * @param \Ews\StructType\EwsFindMeetingTimesLocationConstraints $locationConstraints
     * @param \Ews\StructType\EwsFindMeetingTimesSearchConstraints $searchConstraints
     * @param \Ews\StructType\EwsFindMeetingTimesConstraints $constraints
     */
    public function __construct(\Ews\StructType\EwsFindMeetingTimesAttendeeConstraints $attendeeConstraints = null, \Ews\StructType\EwsFindMeetingTimesLocationConstraints $locationConstraints = null, \Ews\StructType\EwsFindMeetingTimesSearchConstraints $searchConstraints = null, \Ews\StructType\EwsFindMeetingTimesConstraints $constraints = null)
    {
        $this
            ->setAttendeeConstraints($attendeeConstraints)
            ->setLocationConstraints($locationConstraints)
            ->setSearchConstraints($searchConstraints)
            ->setConstraints($constraints);
    }
    /**
     * Get AttendeeConstraints value
     * @return \Ews\StructType\EwsFindMeetingTimesAttendeeConstraints|null
     */
    public function getAttendeeConstraints()
    {
        return $this->AttendeeConstraints;
    }
    /**
     * Set AttendeeConstraints value
     * @param \Ews\StructType\EwsFindMeetingTimesAttendeeConstraints $attendeeConstraints
     * @return \Ews\StructType\EwsFindMeetingTimeCandidatesType
     */
    public function setAttendeeConstraints(\Ews\StructType\EwsFindMeetingTimesAttendeeConstraints $attendeeConstraints = null)
    {
        $this->AttendeeConstraints = $attendeeConstraints;
        return $this;
    }
    /**
     * Get LocationConstraints value
     * @return \Ews\StructType\EwsFindMeetingTimesLocationConstraints|null
     */
    public function getLocationConstraints()
    {
        return $this->LocationConstraints;
    }
    /**
     * Set LocationConstraints value
     * @param \Ews\StructType\EwsFindMeetingTimesLocationConstraints $locationConstraints
     * @return \Ews\StructType\EwsFindMeetingTimeCandidatesType
     */
    public function setLocationConstraints(\Ews\StructType\EwsFindMeetingTimesLocationConstraints $locationConstraints = null)
    {
        $this->LocationConstraints = $locationConstraints;
        return $this;
    }
    /**
     * Get SearchConstraints value
     * @return \Ews\StructType\EwsFindMeetingTimesSearchConstraints|null
     */
    public function getSearchConstraints()
    {
        return $this->SearchConstraints;
    }
    /**
     * Set SearchConstraints value
     * @param \Ews\StructType\EwsFindMeetingTimesSearchConstraints $searchConstraints
     * @return \Ews\StructType\EwsFindMeetingTimeCandidatesType
     */
    public function setSearchConstraints(\Ews\StructType\EwsFindMeetingTimesSearchConstraints $searchConstraints = null)
    {
        $this->SearchConstraints = $searchConstraints;
        return $this;
    }
    /**
     * Get Constraints value
     * @return \Ews\StructType\EwsFindMeetingTimesConstraints|null
     */
    public function getConstraints()
    {
        return $this->Constraints;
    }
    /**
     * Set Constraints value
     * @param \Ews\StructType\EwsFindMeetingTimesConstraints $constraints
     * @return \Ews\StructType\EwsFindMeetingTimeCandidatesType
     */
    public function setConstraints(\Ews\StructType\EwsFindMeetingTimesConstraints $constraints = null)
    {
        $this->Constraints = $constraints;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMeetingTimeCandidatesType
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
