<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMeetingParticipantAvailabilityResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMeetingParticipantAvailabilityResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MeetingParticipantAvailabilities
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public $MeetingParticipantAvailabilities;
    /**
     * Constructor method for GetMeetingParticipantAvailabilityResponseMessageType
     * @uses EwsGetMeetingParticipantAvailabilityResponseMessageType::setMeetingParticipantAvailabilities()
     * @param \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities = null)
    {
        $this
            ->setMeetingParticipantAvailabilities($meetingParticipantAvailabilities);
    }
    /**
     * Get MeetingParticipantAvailabilities value
     * @return \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public function getMeetingParticipantAvailabilities()
    {
        return $this->MeetingParticipantAvailabilities;
    }
    /**
     * Set MeetingParticipantAvailabilities value
     * @param \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityResponseMessageType
     */
    public function setMeetingParticipantAvailabilities(\Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities = null)
    {
        $this->MeetingParticipantAvailabilities = $meetingParticipantAvailabilities;
        return $this;
    }
}
