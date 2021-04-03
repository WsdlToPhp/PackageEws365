<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInboxRulesRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetInboxRulesRequestType extends EwsBaseRequestType
{
    /**
     * The MailboxSmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MailboxSmtpAddress = null;
    /**
     * Constructor method for GetInboxRulesRequestType
     * @uses EwsGetInboxRulesRequestType::setMailboxSmtpAddress()
     * @param string $mailboxSmtpAddress
     */
    public function __construct(?string $mailboxSmtpAddress = null)
    {
        $this
            ->setMailboxSmtpAddress($mailboxSmtpAddress);
    }
    /**
     * Get MailboxSmtpAddress value
     * @return string|null
     */
    public function getMailboxSmtpAddress(): ?string
    {
        return $this->MailboxSmtpAddress;
    }
    /**
     * Set MailboxSmtpAddress value
     * @param string $mailboxSmtpAddress
     * @return \StructType\EwsGetInboxRulesRequestType
     */
    public function setMailboxSmtpAddress(?string $mailboxSmtpAddress = null): self
    {
        // validation for constraint: string
        if (!is_null($mailboxSmtpAddress) && !is_string($mailboxSmtpAddress)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxSmtpAddress, true), gettype($mailboxSmtpAddress)), __LINE__);
        }
        $this->MailboxSmtpAddress = $mailboxSmtpAddress;
        
        return $this;
    }
}
