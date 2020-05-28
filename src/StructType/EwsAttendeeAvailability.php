<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttendeeAvailability StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttendeeAvailability extends AbstractStructBase
{
    /**
     * The EmailAddress
     * @var string
     */
    public $EmailAddress;
    /**
     * The Availability
     * @var string
     */
    public $Availability;
    /**
     * Constructor method for AttendeeAvailability
     * @uses EwsAttendeeAvailability::setEmailAddress()
     * @uses EwsAttendeeAvailability::setAvailability()
     * @param string $emailAddress
     * @param string $availability
     */
    public function __construct($emailAddress = null, $availability = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setAvailability($availability);
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \Ews\StructType\EwsAttendeeAvailability
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    /**
     * Get Availability value
     * @return string|null
     */
    public function getAvailability()
    {
        return $this->Availability;
    }
    /**
     * Set Availability value
     * @uses \Ews\EnumType\EwsAvailabilityStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsAvailabilityStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $availability
     * @return \Ews\StructType\EwsAttendeeAvailability
     */
    public function setAvailability($availability = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsAvailabilityStatusType::valueIsValid($availability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsAvailabilityStatusType', is_array($availability) ? implode(', ', $availability) : var_export($availability, true), implode(', ', \Ews\EnumType\EwsAvailabilityStatusType::getValidValues())), __LINE__);
        }
        $this->Availability = $availability;
        return $this;
    }
}
