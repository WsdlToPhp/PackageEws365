<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMeetingInstanceRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateMeetingInstanceRequestType extends EwsBaseRequestType
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
     * The MeetingInstance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsMeetingInstanceType|null
     */
    protected ?\StructType\EwsMeetingInstanceType $MeetingInstance = null;
    /**
     * The ContentActivitiesToAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfContentActivities|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfContentActivities $ContentActivitiesToAdd = null;
    /**
     * The ParticipantActivitiesToAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfParticipantActivities|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfParticipantActivities $ParticipantActivitiesToAdd = null;
    /**
     * Constructor method for UpdateMeetingInstanceRequestType
     * @uses EwsUpdateMeetingInstanceRequestType::setItemId()
     * @uses EwsUpdateMeetingInstanceRequestType::setMeetingInstance()
     * @uses EwsUpdateMeetingInstanceRequestType::setContentActivitiesToAdd()
     * @uses EwsUpdateMeetingInstanceRequestType::setParticipantActivitiesToAdd()
     * @param \StructType\EwsItemIdType $itemId
     * @param \StructType\EwsMeetingInstanceType $meetingInstance
     * @param \ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivitiesToAdd
     * @param \ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivitiesToAdd
     */
    public function __construct(\StructType\EwsItemIdType $itemId, ?\StructType\EwsMeetingInstanceType $meetingInstance = null, ?\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivitiesToAdd = null, ?\ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivitiesToAdd = null)
    {
        $this
            ->setItemId($itemId)
            ->setMeetingInstance($meetingInstance)
            ->setContentActivitiesToAdd($contentActivitiesToAdd)
            ->setParticipantActivitiesToAdd($participantActivitiesToAdd);
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
     * @return \StructType\EwsUpdateMeetingInstanceRequestType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get MeetingInstance value
     * @return \StructType\EwsMeetingInstanceType|null
     */
    public function getMeetingInstance(): ?\StructType\EwsMeetingInstanceType
    {
        return $this->MeetingInstance;
    }
    /**
     * Set MeetingInstance value
     * @param \StructType\EwsMeetingInstanceType $meetingInstance
     * @return \StructType\EwsUpdateMeetingInstanceRequestType
     */
    public function setMeetingInstance(?\StructType\EwsMeetingInstanceType $meetingInstance = null): self
    {
        $this->MeetingInstance = $meetingInstance;
        
        return $this;
    }
    /**
     * Get ContentActivitiesToAdd value
     * @return \ArrayType\EwsNonEmptyArrayOfContentActivities|null
     */
    public function getContentActivitiesToAdd(): ?\ArrayType\EwsNonEmptyArrayOfContentActivities
    {
        return $this->ContentActivitiesToAdd;
    }
    /**
     * Set ContentActivitiesToAdd value
     * @param \ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivitiesToAdd
     * @return \StructType\EwsUpdateMeetingInstanceRequestType
     */
    public function setContentActivitiesToAdd(?\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivitiesToAdd = null): self
    {
        $this->ContentActivitiesToAdd = $contentActivitiesToAdd;
        
        return $this;
    }
    /**
     * Get ParticipantActivitiesToAdd value
     * @return \ArrayType\EwsNonEmptyArrayOfParticipantActivities|null
     */
    public function getParticipantActivitiesToAdd(): ?\ArrayType\EwsNonEmptyArrayOfParticipantActivities
    {
        return $this->ParticipantActivitiesToAdd;
    }
    /**
     * Set ParticipantActivitiesToAdd value
     * @param \ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivitiesToAdd
     * @return \StructType\EwsUpdateMeetingInstanceRequestType
     */
    public function setParticipantActivitiesToAdd(?\ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivitiesToAdd = null): self
    {
        $this->ParticipantActivitiesToAdd = $participantActivitiesToAdd;
        
        return $this;
    }
}
