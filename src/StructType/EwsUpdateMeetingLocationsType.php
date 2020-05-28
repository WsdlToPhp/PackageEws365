<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMeetingLocationsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateMeetingLocationsType extends EwsBaseRequestType
{
    /**
     * The MeetingLocations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public $MeetingLocations;
    /**
     * Constructor method for UpdateMeetingLocationsType
     * @uses EwsUpdateMeetingLocationsType::setMeetingLocations()
     * @param \Ews\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations = null)
    {
        $this
            ->setMeetingLocations($meetingLocations);
    }
    /**
     * Get MeetingLocations value
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public function getMeetingLocations()
    {
        return $this->MeetingLocations;
    }
    /**
     * Set MeetingLocations value
     * @param \Ews\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations
     * @return \Ews\StructType\EwsUpdateMeetingLocationsType
     */
    public function setMeetingLocations(\Ews\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations = null)
    {
        $this->MeetingLocations = $meetingLocations;
        return $this;
    }
}
