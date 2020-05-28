<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocationBasedStateDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsLocationBasedStateDefinitionType extends EwsBaseCalendarItemStateDefinitionType
{
    /**
     * The OrganizerLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    public $OrganizerLocation;
    /**
     * The AttendeeLocation
     * Meta information extracted from the WSDL
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
        // validation for constraint: string
        if (!is_null($organizerLocation) && !is_string($organizerLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizerLocation, true), gettype($organizerLocation)), __LINE__);
        }
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
        // validation for constraint: string
        if (!is_null($attendeeLocation) && !is_string($attendeeLocation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attendeeLocation, true), gettype($attendeeLocation)), __LINE__);
        }
        $this->AttendeeLocation = $attendeeLocation;
        return $this;
    }
}
