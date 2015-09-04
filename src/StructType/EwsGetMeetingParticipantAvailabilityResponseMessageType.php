<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMeetingParticipantAvailabilityResponseMessageType
 * StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetMeetingParticipantAvailabilityResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MeetingParticipantAvailabilities
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public $MeetingParticipantAvailabilities;
    /**
     * Constructor method for GetMeetingParticipantAvailabilityResponseMessageType
     * @uses
     * EwsGetMeetingParticipantAvailabilityResponseMessageType::setMeetingParticipantAv
     * ailabilities()
     * @param \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     * $meetingParticipantAvailabilities
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities = null)
    {
        $this
            ->setMeetingParticipantAvailabilities($meetingParticipantAvailabilities);
    }
    /**
     * Get MeetingParticipantAvailabilities value
     * @return \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     */
    public function getMeetingParticipantAvailabilities()
    {
        return $this->MeetingParticipantAvailabilities;
    }
    /**
     * Set MeetingParticipantAvailabilities value
     * @param \Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability
     * $meetingParticipantAvailabilities
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityResponseMessageType
     */
    public function setMeetingParticipantAvailabilities(\Ews\ArrayType\EwsArrayOfMeetingParticipantAvailability $meetingParticipantAvailabilities = null)
    {
        $this->MeetingParticipantAvailabilities = $meetingParticipantAvailabilities;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetMeetingParticipantAvailabilityResponseMessageType
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
