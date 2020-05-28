<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindAvailableMeetingTimesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindAvailableMeetingTimesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MeetingTimeCandidates
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public $MeetingTimeCandidates;
    /**
     * Constructor method for FindAvailableMeetingTimesResponseMessageType
     * @uses EwsFindAvailableMeetingTimesResponseMessageType::setMeetingTimeCandidates()
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
     * @return \Ews\StructType\EwsFindAvailableMeetingTimesResponseMessageType
     */
    public function setMeetingTimeCandidates(\Ews\ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates = null)
    {
        $this->MeetingTimeCandidates = $meetingTimeCandidates;
        return $this;
    }
}
