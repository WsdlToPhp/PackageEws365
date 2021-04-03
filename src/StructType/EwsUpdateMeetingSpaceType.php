<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMeetingSpaceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateMeetingSpaceType extends EwsBaseRequestType
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ItemId;
    /**
     * The MeetingSpace
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsMeetingSpaceType
     */
    protected \StructType\EwsMeetingSpaceType $MeetingSpace;
    /**
     * Constructor method for UpdateMeetingSpaceType
     * @uses EwsUpdateMeetingSpaceType::setItemId()
     * @uses EwsUpdateMeetingSpaceType::setMeetingSpace()
     * @param \StructType\EwsItemIdType $itemId
     * @param \StructType\EwsMeetingSpaceType $meetingSpace
     */
    public function __construct(\StructType\EwsItemIdType $itemId, \StructType\EwsMeetingSpaceType $meetingSpace)
    {
        $this
            ->setItemId($itemId)
            ->setMeetingSpace($meetingSpace);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getItemId(): \StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsUpdateMeetingSpaceType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
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
     * @return \StructType\EwsUpdateMeetingSpaceType
     */
    public function setMeetingSpace(\StructType\EwsMeetingSpaceType $meetingSpace): self
    {
        $this->MeetingSpace = $meetingSpace;
        
        return $this;
    }
}
