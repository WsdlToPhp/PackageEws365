<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationBasedStateDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsLocationBasedStateDefinitionType extends EwsBaseCalendarItemStateDefinitionType
{
    /**
     * The OrganizerLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $OrganizerLocation;
    /**
     * The AttendeeLocation
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $AttendeeLocation;
    /**
     * Constructor method for LocationBasedStateDefinitionType
     * @uses EwsLocationBasedStateDefinitionType::setOrganizerLocation()
     * @uses EwsLocationBasedStateDefinitionType::setAttendeeLocation()
     * @param string $organizerLocation
     * @param string $attendeeLocation
     */
    public function __construct($organizerLocation = null, $attendeeLocation = null)
    {
        $this
            ->setOrganizerLocation($organizerLocation)
            ->setAttendeeLocation($attendeeLocation);
    }
    /**
     * Get OrganizerLocation value
     * @return string
     */
    public function getOrganizerLocation()
    {
        return $this->OrganizerLocation;
    }
    /**
     * Set OrganizerLocation value
     * @param string $organizerLocation
     * @return \Ews\StructType\EwsLocationBasedStateDefinitionType
     */
    public function setOrganizerLocation($organizerLocation = null)
    {
        $this->OrganizerLocation = $organizerLocation;
        return $this;
    }
    /**
     * Get AttendeeLocation value
     * @return string
     */
    public function getAttendeeLocation()
    {
        return $this->AttendeeLocation;
    }
    /**
     * Set AttendeeLocation value
     * @param string $attendeeLocation
     * @return \Ews\StructType\EwsLocationBasedStateDefinitionType
     */
    public function setAttendeeLocation($attendeeLocation = null)
    {
        $this->AttendeeLocation = $attendeeLocation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsLocationBasedStateDefinitionType
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
