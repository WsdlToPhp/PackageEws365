<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsMeetingSpaceType|null
     */
    protected ?\StructType\EwsMeetingSpaceType $MeetingSpace = null;
    /**
     * Constructor method for FindMeetingSpaceByJoinUrlResponseMessageType
     * @uses EwsFindMeetingSpaceByJoinUrlResponseMessageType::setMeetingSpace()
     * @param \StructType\EwsMeetingSpaceType $meetingSpace
     */
    public function __construct(?\StructType\EwsMeetingSpaceType $meetingSpace = null)
    {
        $this
            ->setMeetingSpace($meetingSpace);
    }
    /**
     * Get MeetingSpace value
     * @return \StructType\EwsMeetingSpaceType|null
     */
    public function getMeetingSpace(): ?\StructType\EwsMeetingSpaceType
    {
        return $this->MeetingSpace;
    }
    /**
     * Set MeetingSpace value
     * @param \StructType\EwsMeetingSpaceType $meetingSpace
     * @return \StructType\EwsFindMeetingSpaceByJoinUrlResponseMessageType
     */
    public function setMeetingSpace(?\StructType\EwsMeetingSpaceType $meetingSpace = null): self
    {
        $this->MeetingSpace = $meetingSpace;
        
        return $this;
    }
}
