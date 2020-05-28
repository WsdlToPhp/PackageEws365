<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public $IgnoredMeetingLocations;
    /**
     * Constructor method for UpdateMeetingLocationsResponseMessageType
     * @uses EwsUpdateMeetingLocationsResponseMessageType::setIgnoredMeetingLocations()
     * @param \Ews\ArrayType\EwsArrayOfMeetingLocationItemType $ignoredMeetingLocations
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfMeetingLocationItemType $ignoredMeetingLocations = null)
    {
        $this
            ->setIgnoredMeetingLocations($ignoredMeetingLocations);
    }
    /**
     * Get IgnoredMeetingLocations value
     * @return \Ews\ArrayType\EwsArrayOfMeetingLocationItemType
     */
    public function getIgnoredMeetingLocations()
    {
        return $this->IgnoredMeetingLocations;
    }
    /**
     * Set IgnoredMeetingLocations value
     * @param \Ews\ArrayType\EwsArrayOfMeetingLocationItemType $ignoredMeetingLocations
     * @return \Ews\StructType\EwsUpdateMeetingLocationsResponseMessageType
     */
    public function setIgnoredMeetingLocations(\Ews\ArrayType\EwsArrayOfMeetingLocationItemType $ignoredMeetingLocations = null)
    {
        $this->IgnoredMeetingLocations = $ignoredMeetingLocations;
        return $this;
    }
}
