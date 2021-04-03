<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMeetingSpaceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateMeetingSpaceType extends EwsBaseRequestType
{
    /**
     * The MeetingSpace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsMeetingSpaceType
     */
    protected \StructType\EwsMeetingSpaceType $MeetingSpace;
    /**
     * Constructor method for CreateMeetingSpaceType
     * @uses EwsCreateMeetingSpaceType::setMeetingSpace()
     * @param \StructType\EwsMeetingSpaceType $meetingSpace
     */
    public function __construct(\StructType\EwsMeetingSpaceType $meetingSpace)
    {
        $this
            ->setMeetingSpace($meetingSpace);
    }
    /**
     * Get MeetingSpace value
     * @return \StructType\EwsMeetingSpaceType
     */
    public function getMeetingSpace(): \StructType\EwsMeetingSpaceType
    {
        return $this->MeetingSpace;
    }
    /**
     * Set MeetingSpace value
     * @param \StructType\EwsMeetingSpaceType $meetingSpace
     * @return \StructType\EwsCreateMeetingSpaceType
     */
    public function setMeetingSpace(\StructType\EwsMeetingSpaceType $meetingSpace): self
    {
        $this->MeetingSpace = $meetingSpace;
        
        return $this;
    }
}
