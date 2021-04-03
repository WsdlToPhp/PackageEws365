<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfMeetingLocationItemType
     */
    protected \ArrayType\EwsArrayOfMeetingLocationItemType $MeetingLocations;
    /**
     * Constructor method for UpdateMeetingLocationsType
     * @uses EwsUpdateMeetingLocationsType::setMeetingLocations()
     * @param \ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations
     */
    public function __construct(\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations)
    {
        $this
            ->setMeetingLocations($meetingLocations);
    }
    /**
     * Get MeetingLocations value
     * @return \ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public function getMeetingLocations(): \ArrayType\EwsArrayOfMeetingLocationItemType
    {
        return $this->MeetingLocations;
    }
    /**
     * Set MeetingLocations value
     * @param \ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations
     * @return \StructType\EwsUpdateMeetingLocationsType
     */
    public function setMeetingLocations(\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations): self
    {
        $this->MeetingLocations = $meetingLocations;
        
        return $this;
    }
}
