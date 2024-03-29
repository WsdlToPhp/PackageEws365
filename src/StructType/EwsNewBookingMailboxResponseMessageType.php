<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NewBookingMailboxResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNewBookingMailboxResponseMessageType extends EwsResponseMessageType
{
    /**
     * The SmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SmtpAddress;
    /**
     * Constructor method for NewBookingMailboxResponseMessageType
     * @uses EwsNewBookingMailboxResponseMessageType::setSmtpAddress()
     * @param string $smtpAddress
     */
    public function __construct(string $smtpAddress)
    {
        $this
            ->setSmtpAddress($smtpAddress);
    }
    /**
     * Get SmtpAddress value
     * @return string
     */
    public function getSmtpAddress(): string
    {
        return $this->SmtpAddress;
    }
    /**
     * Set SmtpAddress value
     * @param string $smtpAddress
     * @return \StructType\EwsNewBookingMailboxResponseMessageType
     */
    public function setSmtpAddress(string $smtpAddress): self
    {
        // validation for constraint: string
        if (!is_null($smtpAddress) && !is_string($smtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($smtpAddress, true), gettype($smtpAddress)), __LINE__);
        }
        $this->SmtpAddress = $smtpAddress;
        
        return $this;
    }
}
