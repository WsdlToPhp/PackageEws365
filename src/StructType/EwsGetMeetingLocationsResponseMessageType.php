<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMeetingLocationsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMeetingLocationsResponseMessageType extends EwsResponseMessageType
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
     * Constructor method for GetMeetingLocationsResponseMessageType
     * @uses EwsGetMeetingLocationsResponseMessageType::setMeetingLocations()
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
     * @return \StructType\EwsGetMeetingLocationsResponseMessageType
     */
    public function setMeetingLocations(\ArrayType\EwsArrayOfMeetingLocationItemType $meetingLocations): self
    {
        $this->MeetingLocations = $meetingLocations;
        
        return $this;
    }
}
