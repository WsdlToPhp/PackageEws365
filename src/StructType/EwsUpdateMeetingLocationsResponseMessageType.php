<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMeetingLocationsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateMeetingLocationsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The IgnoredMeetingLocations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfMeetingLocationItemType
     */
    protected \ArrayType\EwsArrayOfMeetingLocationItemType $IgnoredMeetingLocations;
    /**
     * Constructor method for UpdateMeetingLocationsResponseMessageType
     * @uses EwsUpdateMeetingLocationsResponseMessageType::setIgnoredMeetingLocations()
     * @param \ArrayType\EwsArrayOfMeetingLocationItemType $ignoredMeetingLocations
     */
    public function __construct(\ArrayType\EwsArrayOfMeetingLocationItemType $ignoredMeetingLocations)
    {
        $this
            ->setIgnoredMeetingLocations($ignoredMeetingLocations);
    }
    /**
     * Get IgnoredMeetingLocations value
     * @return \ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public function getIgnoredMeetingLocations(): \ArrayType\EwsArrayOfMeetingLocationItemType
    {
        return $this->IgnoredMeetingLocations;
    }
    /**
     * Set IgnoredMeetingLocations value
     * @param \ArrayType\EwsArrayOfMeetingLocationItemType $ignoredMeetingLocations
     * @return \StructType\EwsUpdateMeetingLocationsResponseMessageType
     */
    public function setIgnoredMeetingLocations(\ArrayType\EwsArrayOfMeetingLocationItemType $ignoredMeetingLocations): self
    {
        $this->IgnoredMeetingLocations = $ignoredMeetingLocations;
        
        return $this;
    }
}
