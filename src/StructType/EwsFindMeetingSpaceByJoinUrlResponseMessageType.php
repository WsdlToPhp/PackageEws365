<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingSpaceByJoinUrlResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingSpaceByJoinUrlResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MeetingSpace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMeetingSpaceType
     */
    public $MeetingSpace;
    /**
     * Constructor method for FindMeetingSpaceByJoinUrlResponseMessageType
     * @uses EwsFindMeetingSpaceByJoinUrlResponseMessageType::setMeetingSpace()
     * @param \Ews\StructType\EwsMeetingSpaceType $meetingSpace
     */
    public function __construct(\Ews\StructType\EwsMeetingSpaceType $meetingSpace = null)
    {
        $this
            ->setMeetingSpace($meetingSpace);
    }
    /**
     * Get MeetingSpace value
     * @return \Ews\StructType\EwsMeetingSpaceType|null
     */
    public function getMeetingSpace()
    {
        return $this->MeetingSpace;
    }
    /**
     * Set MeetingSpace value
     * @param \Ews\StructType\EwsMeetingSpaceType $meetingSpace
     * @return \Ews\StructType\EwsFindMeetingSpaceByJoinUrlResponseMessageType
     */
    public function setMeetingSpace(\Ews\StructType\EwsMeetingSpaceType $meetingSpace = null)
    {
        $this->MeetingSpace = $meetingSpace;
        return $this;
    }
}
