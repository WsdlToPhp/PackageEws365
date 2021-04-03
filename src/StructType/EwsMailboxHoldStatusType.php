<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxHoldStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Mailbox hold status.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxHoldStatusType extends AbstractStructBase
{
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Mailbox;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Status;
    /**
     * The AdditionalInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AdditionalInfo = null;
    /**
     * Constructor method for MailboxHoldStatusType
     * @uses EwsMailboxHoldStatusType::setMailbox()
     * @uses EwsMailboxHoldStatusType::setStatus()
     * @uses EwsMailboxHoldStatusType::setAdditionalInfo()
     * @param string $mailbox
     * @param string $status
     * @param string $additionalInfo
     */
    public function __construct(string $mailbox, string $status, ?string $additionalInfo = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setStatus($status)
            ->setAdditionalInfo($additionalInfo);
    }
    /**
     * Get Mailbox value
     * @return string
     */
    public function getMailbox(): string
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param string $mailbox
     * @return \StructType\EwsMailboxHoldStatusType
     */
    public function setMailbox(string $mailbox): self
    {
        // validation for constraint: string
        if (!is_null($mailbox) && !is_string($mailbox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailbox, true), gettype($mailbox)), __LINE__);
        }
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string
     */
    public function getStatus(): string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\EwsHoldStatusType::valueIsValid()
     * @uses \EnumType\EwsHoldStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \StructType\EwsMailboxHoldStatusType
     */
    public function setStatus(string $status): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsHoldStatusType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsHoldStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\EwsHoldStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return string|null
     */
    public function getAdditionalInfo(): ?string
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param string $additionalInfo
     * @return \StructType\EwsMailboxHoldStatusType
     */
    public function setAdditionalInfo(?string $additionalInfo = null): self
    {
        // validation for constraint: string
        if (!is_null($additionalInfo) && !is_string($additionalInfo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalInfo, true), gettype($additionalInfo)), __LINE__);
        }
        $this->AdditionalInfo = $additionalInfo;
        
        return $this;
    }
}
