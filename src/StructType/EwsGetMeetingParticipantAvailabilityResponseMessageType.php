<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    protected \ArrayType\EwsArrayOfMeetingParticipantAvailability $MeetingParticipantAvailabilities;
    /**
     * Constructor method for GetMeetingParticipantAvailabilityResponseMessageType
     * @uses EwsGetMeetingParticipantAvailabilityResponseMessageType::setMeetingParticipantAvailabilities()
     * @param \ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities
     */
    public function __construct(\ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities)
    {
        $this
            ->setMeetingParticipantAvailabilities($meetingParticipantAvailabilities);
    }
    /**
     * Get MeetingParticipantAvailabilities value
     * @return \ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public function getMeetingParticipantAvailabilities(): \ArrayType\EwsArrayOfMeetingParticipantAvailability
    {
        return $this->MeetingParticipantAvailabilities;
    }
    /**
     * Set MeetingParticipantAvailabilities value
     * @param \ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities
     * @return \StructType\EwsGetMeetingParticipantAvailabilityResponseMessageType
     */
    public function setMeetingParticipantAvailabilities(\ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities): self
    {
        $this->MeetingParticipantAvailabilities = $meetingParticipantAvailabilities;
        
        return $this;
    }
}
