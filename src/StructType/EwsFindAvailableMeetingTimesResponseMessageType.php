<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    protected \ArrayType\EwsArrayOfMeetingTimeCandidate $MeetingTimeCandidates;
    /**
     * Constructor method for FindAvailableMeetingTimesResponseMessageType
     * @uses EwsFindAvailableMeetingTimesResponseMessageType::setMeetingTimeCandidates()
     * @param \ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates
     */
    public function __construct(\ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates)
    {
        $this
            ->setMeetingTimeCandidates($meetingTimeCandidates);
    }
    /**
     * Get MeetingTimeCandidates value
     * @return \ArrayType\EwsArrayOfMeetingTimeCandidate
     */
    public function getMeetingTimeCandidates(): \ArrayType\EwsArrayOfMeetingTimeCandidate
    {
        return $this->MeetingTimeCandidates;
    }
    /**
     * Set MeetingTimeCandidates value
     * @param \ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates
     * @return \StructType\EwsFindAvailableMeetingTimesResponseMessageType
     */
    public function setMeetingTimeCandidates(\ArrayType\EwsArrayOfMeetingTimeCandidate $meetingTimeCandidates): self
    {
        $this->MeetingTimeCandidates = $meetingTimeCandidates;
        
        return $this;
    }
}
