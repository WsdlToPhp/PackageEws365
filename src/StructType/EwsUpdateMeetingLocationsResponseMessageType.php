<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateMeetingLocationsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUpdateMeetingLocationsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The IgnoredMeetingLocations
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateMeetingLocationsResponseMessageType
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
