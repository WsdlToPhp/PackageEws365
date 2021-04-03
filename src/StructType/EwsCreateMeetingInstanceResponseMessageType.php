<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMeetingInstanceResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateMeetingInstanceResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MeetingInstance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsMeetingInstanceType
     */
    protected \StructType\EwsMeetingInstanceType $MeetingInstance;
    /**
     * Constructor method for CreateMeetingInstanceResponseMessageType
     * @uses EwsCreateMeetingInstanceResponseMessageType::setMeetingInstance()
     * @param \StructType\EwsMeetingInstanceType $meetingInstance
     */
    public function __construct(\StructType\EwsMeetingInstanceType $meetingInstance)
    {
        $this
            ->setMeetingInstance($meetingInstance);
    }
    /**
     * Get MeetingInstance value
     * @return \StructType\EwsMeetingInstanceType
     */
    public function getMeetingInstance(): \StructType\EwsMeetingInstanceType
    {
        return $this->MeetingInstance;
    }
    /**
     * Set MeetingInstance value
     * @param \StructType\EwsMeetingInstanceType $meetingInstance
     * @return \StructType\EwsCreateMeetingInstanceResponseMessageType
     */
    public function setMeetingInstance(\StructType\EwsMeetingInstanceType $meetingInstance): self
    {
        $this->MeetingInstance = $meetingInstance;
        
        return $this;
    }
}
