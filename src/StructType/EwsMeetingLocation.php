<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingLocation StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingLocation extends AbstractStructBase
{
    /**
     * The EmailAddress
     * @var string|null
     */
    protected ?string $EmailAddress = null;
    /**
     * The DisplayName
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * Constructor method for MeetingLocation
     * @uses EwsMeetingLocation::setEmailAddress()
     * @uses EwsMeetingLocation::setDisplayName()
     * @param string $emailAddress
     * @param string $displayName
     */
    public function __construct(?string $emailAddress = null, ?string $displayName = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setDisplayName($displayName);
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
     * @return \StructType\EwsMeetingLocation
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
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsMeetingLocation
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
}
