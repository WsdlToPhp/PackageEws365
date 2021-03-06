<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMeetingInstanceResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateMeetingInstanceResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MeetingInstance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsMeetingInstanceType
     */
    public $MeetingInstance;
    /**
     * Constructor method for UpdateMeetingInstanceResponseMessageType
     * @uses EwsUpdateMeetingInstanceResponseMessageType::setMeetingInstance()
     * @param \Ews\StructType\EwsMeetingInstanceType $meetingInstance
     */
    public function __construct(\Ews\StructType\EwsMeetingInstanceType $meetingInstance = null)
    {
        $this
            ->setMeetingInstance($meetingInstance);
    }
    /**
     * Get MeetingInstance value
     * @return \Ews\StructType\EwsMeetingInstanceType
     */
    public function getMeetingInstance()
    {
        return $this->MeetingInstance;
    }
    /**
     * Set MeetingInstance value
     * @param \Ews\StructType\EwsMeetingInstanceType $meetingInstance
     * @return \Ews\StructType\EwsUpdateMeetingInstanceResponseMessageType
     */
    public function setMeetingInstance(\Ews\StructType\EwsMeetingInstanceType $meetingInstance = null)
    {
        $this->MeetingInstance = $meetingInstance;
        return $this;
    }
}
