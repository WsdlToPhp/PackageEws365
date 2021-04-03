<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookingMailboxType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBookingMailboxType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SmtpAddress = null;
    /**
     * Constructor method for BookingMailboxType
     * @uses EwsBookingMailboxType::setName()
     * @uses EwsBookingMailboxType::setDisplayName()
     * @uses EwsBookingMailboxType::setSmtpAddress()
     * @param string $name
     * @param string $displayName
     * @param string $smtpAddress
     */
    public function __construct(?string $name = null, ?string $displayName = null, ?string $smtpAddress = null)
    {
        $this
            ->setName($name)
            ->setDisplayName($displayName)
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsBookingMailboxType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        
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
     * @return \StructType\EwsBookingMailboxType
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
    /**
     * Get SmtpAddress value
     * @return string|null
     */
    public function getSmtpAddress(): ?string
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \StructType\EwsBookingMailboxType
     */
    public function setSmtpAddress(?string $smtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
        return $this;
    }
}
