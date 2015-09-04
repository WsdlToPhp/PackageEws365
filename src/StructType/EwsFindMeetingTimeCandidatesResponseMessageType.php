<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingTimeCandidatesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindMeetingTimeCandidatesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MeetingTimeCandidates
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public $MeetingTimeCandidates;
    /**
     * Constructor method for FindMeetingTimeCandidatesResponseMessageType
     * @uses
     * EwsFindMeetingTimeCandidatesResponseMessageType::setMeetingTimeCandidates()
     * @param \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates = null)
    {
        $this
            ->setMeetingTimeCandidates($meetingTimeCandidates);
    }
    /**
     * Get MeetingTimeCandidates value
     * @return \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public function getMeetingTimeCandidates()
    {
        return $this->MeetingTimeCandidates;
    }
    /**
     * Set MeetingTimeCandidates value
     * @param \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates
     * @return \Ews\StructType\EwsFindMeetingTimeCandidatesResponseMessageType
     */
    public function setMeetingTimeCandidates(\Ews\ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates = null)
    {
        $this->MeetingTimeCandidates = $meetingTimeCandidates;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMeetingTimeCandidatesResponseMessageType
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
