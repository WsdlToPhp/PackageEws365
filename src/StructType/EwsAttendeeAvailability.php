<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The Availability
     * @var string|null
     */
    protected ?string $Availability = null;
    /**
     * Constructor method for AttendeeAvailability
     * @uses EwsAttendeeAvailability::setEmailAddress()
     * @uses EwsAttendeeAvailability::setAvailability()
     * @param string $emailAddress
     * @param string $availability
     */
    public function __construct(?string $emailAddress = null, ?string $availability = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setAvailability($availability);
    }
    /**
     * Get EmailAddress value
     * @return string|null
     */
    public function getEmailAddress(): ?string
    {
        return $this->EmailAddress;
    }
    /**
     * Set EmailAddress value
     * @param string $emailAddress
     * @return \StructType\EwsAttendeeAvailability
     */
    public function setEmailAddress(?string $emailAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        $this->EmailAddress = $emailAddress;
        
        return $this;
    }
    /**
     * Get Availability value
     * @return string|null
     */
    public function getAvailability(): ?string
    {
        return $this->Availability;
    }
    /**
     * Set Availability value
     * @uses \EnumType\EwsAvailabilityStatusType::valueIsValid()
     * @uses \EnumType\EwsAvailabilityStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $availability
     * @return \StructType\EwsAttendeeAvailability
     */
    public function setAvailability(?string $availability = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsAvailabilityStatusType::valueIsValid($availability)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsAvailabilityStatusType', is_array($availability) ? implode(', ', $availability) : var_export($availability, true), implode(', ', \EnumType\EwsAvailabilityStatusType::getValidValues())), __LINE__);
        }
        $this->Availability = $availability;
        
        return $this;
    }
}
