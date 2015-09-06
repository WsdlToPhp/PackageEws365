<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The MeetingInstance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMeetingInstanceType
     */
    public $MeetingInstance;
    /**
     * The ContentActivitiesToAdd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities
     */
    public $ContentActivitiesToAdd;
    /**
     * The ParticipantActivitiesToAdd
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     */
    public $ParticipantActivitiesToAdd;
    /**
     * Constructor method for UpdateMeetingInstanceRequestType
     * @uses EwsUpdateMeetingInstanceRequestType::setItemId()
     * @uses EwsUpdateMeetingInstanceRequestType::setMeetingInstance()
     * @uses EwsUpdateMeetingInstanceRequestType::setContentActivitiesToAdd()
     * @uses EwsUpdateMeetingInstanceRequestType::setParticipantActivitiesToAdd()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsMeetingInstanceType $meetingInstance
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities
     * $contentActivitiesToAdd
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     * $participantActivitiesToAdd
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsMeetingInstanceType $meetingInstance = null, \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivitiesToAdd = null, \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivitiesToAdd = null)
    {
        $this
            ->setItemId($itemId)
            ->setMeetingInstance($meetingInstance)
            ->setContentActivitiesToAdd($contentActivitiesToAdd)
            ->setParticipantActivitiesToAdd($participantActivitiesToAdd);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @return \Ews\StructType\EwsUpdateMeetingInstanceRequestType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get MeetingInstance value
     * @return \Ews\StructType\EwsMeetingInstanceType|null
     */
    public function getMeetingInstance()
    {
        return $this->MeetingInstance;
    }
    /**
     * Set MeetingInstance value
     * @param \Ews\StructType\EwsMeetingInstanceType $meetingInstance
     * @return \Ews\StructType\EwsUpdateMeetingInstanceRequestType
     */
    public function setMeetingInstance(\Ews\StructType\EwsMeetingInstanceType $meetingInstance = null)
    {
        $this->MeetingInstance = $meetingInstance;
        return $this;
    }
    /**
     * Get ContentActivitiesToAdd value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities|null
     */
    public function getContentActivitiesToAdd()
    {
        return $this->ContentActivitiesToAdd;
    }
    /**
     * Set ContentActivitiesToAdd value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfContentActivities
     * $contentActivitiesToAdd
     * @return \Ews\StructType\EwsUpdateMeetingInstanceRequestType
     */
    public function setContentActivitiesToAdd(\Ews\ArrayType\EwsNonEmptyArrayOfContentActivities $contentActivitiesToAdd = null)
    {
        $this->ContentActivitiesToAdd = $contentActivitiesToAdd;
        return $this;
    }
    /**
     * Get ParticipantActivitiesToAdd value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities|null
     */
    public function getParticipantActivitiesToAdd()
    {
        return $this->ParticipantActivitiesToAdd;
    }
    /**
     * Set ParticipantActivitiesToAdd value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities
     * $participantActivitiesToAdd
     * @return \Ews\StructType\EwsUpdateMeetingInstanceRequestType
     */
    public function setParticipantActivitiesToAdd(\Ews\ArrayType\EwsNonEmptyArrayOfParticipantActivities $participantActivitiesToAdd = null)
    {
        $this->ParticipantActivitiesToAdd = $participantActivitiesToAdd;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateMeetingInstanceRequestType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
