<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $OrganizerLocation;
    /**
     * The AttendeeLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $AttendeeLocation;
    /**
     * Constructor method for LocationBasedStateDefinitionType
     * @uses EwsLocationBasedStateDefinitionType::setOrganizerLocation()
     * @uses EwsLocationBasedStateDefinitionType::setAttendeeLocation()
     * @param string $organizerLocation
     * @param string $attendeeLocation
     */
    public function __construct(string $organizerLocation, string $attendeeLocation)
    {
        $this
            ->setOrganizerLocation($organizerLocation)
            ->setAttendeeLocation($attendeeLocation);
    }
    /**
     * Get OrganizerLocation value
     * @return string
     */
    public function getOrganizerLocation(): string
    {
        return $this->OrganizerLocation;
    }
    /**
     * Set OrganizerLocation value
     * @param string $organizerLocation
     * @return \StructType\EwsLocationBasedStateDefinitionType
     */
    public function setOrganizerLocation(string $organizerLocation): self
    {
        // validation for constraint: string
        if (!is_null($organizerLocation) && !is_string($organizerLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organizerLocation, true), gettype($organizerLocation)), __LINE__);
        }
        $this->OrganizerLocation = $organizerLocation;
        
        return $this;
    }
    /**
     * Get AttendeeLocation value
     * @return string
     */
    public function getAttendeeLocation(): string
    {
        return $this->AttendeeLocation;
    }
    /**
     * Set AttendeeLocation value
     * @param string $attendeeLocation
     * @return \StructType\EwsLocationBasedStateDefinitionType
     */
    public function setAttendeeLocation(string $attendeeLocation): self
    {
        // validation for constraint: string
        if (!is_null($attendeeLocation) && !is_string($attendeeLocation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attendeeLocation, true), gettype($attendeeLocation)), __LINE__);
        }
        $this->AttendeeLocation = $attendeeLocation;
        
        return $this;
    }
}
