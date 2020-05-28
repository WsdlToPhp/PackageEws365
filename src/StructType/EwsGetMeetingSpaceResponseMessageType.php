<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMeetingSpaceResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMeetingSpaceResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MeetingSpace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsMeetingSpaceType
     */
    public $MeetingSpace;
    /**
     * Constructor method for GetMeetingSpaceResponseMessageType
     * @uses EwsGetMeetingSpaceResponseMessageType::setMeetingSpace()
     * @param \Ews\StructType\EwsMeetingSpaceType $meetingSpace
     */
    public function __construct(\Ews\StructType\EwsMeetingSpaceType $meetingSpace = null)
    {
        $this
            ->setMeetingSpace($meetingSpace);
    }
    /**
     * Get MeetingSpace value
     * @return \Ews\StructType\EwsMeetingSpaceType
     */
    public function getMeetingSpace()
    {
        return $this->MeetingSpace;
    }
    /**
     * Set MeetingSpace value
     * @param \Ews\StructType\EwsMeetingSpaceType $meetingSpace
     * @return \Ews\StructType\EwsGetMeetingSpaceResponseMessageType
     */
    public function setMeetingSpace(\Ews\StructType\EwsMeetingSpaceType $meetingSpace = null)
    {
        $this->MeetingSpace = $meetingSpace;
        return $this;
    }
}
