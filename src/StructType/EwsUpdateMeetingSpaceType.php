<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ItemId;
    /**
     * The MeetingSpace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsMeetingSpaceType
     */
    public $MeetingSpace;
    /**
     * Constructor method for UpdateMeetingSpaceType
     * @uses EwsUpdateMeetingSpaceType::setItemId()
     * @uses EwsUpdateMeetingSpaceType::setMeetingSpace()
     * @param \Ews\StructType\EwsItemIdType $itemId
     * @param \Ews\StructType\EwsMeetingSpaceType $meetingSpace
     */
    public function __construct(\Ews\StructType\EwsItemIdType $itemId = null, \Ews\StructType\EwsMeetingSpaceType $meetingSpace = null)
    {
        $this
            ->setItemId($itemId)
            ->setMeetingSpace($meetingSpace);
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
     * @return \Ews\StructType\EwsUpdateMeetingSpaceType
     */
    public function setItemId(\Ews\StructType\EwsItemIdType $itemId = null)
    {
        $this->ItemId = $itemId;
        return $this;
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
     * @return \Ews\StructType\EwsUpdateMeetingSpaceType
     */
    public function setMeetingSpace(\Ews\StructType\EwsMeetingSpaceType $meetingSpace = null)
    {
        $this->MeetingSpace = $meetingSpace;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateMeetingSpaceType
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
