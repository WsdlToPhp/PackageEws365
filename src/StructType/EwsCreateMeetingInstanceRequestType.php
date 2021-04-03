<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMeetingInstanceRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateMeetingInstanceRequestType extends EwsBaseRequestType
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
     * Constructor method for CreateMeetingInstanceRequestType
     * @uses EwsCreateMeetingInstanceRequestType::setMeetingInstance()
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
     * @return \StructType\EwsCreateMeetingInstanceRequestType
     */
    public function setMeetingInstance(\StructType\EwsMeetingInstanceType $meetingInstance): self
    {
        $this->MeetingInstance = $meetingInstance;
        
        return $this;
    }
}
