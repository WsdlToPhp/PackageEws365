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
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateMeetingInstanceResponseMessageType
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
