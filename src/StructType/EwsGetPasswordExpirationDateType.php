<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPasswordExpirationDateType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetPasswordExpirationDateType extends EwsBaseRequestType
{
    /**
     * The MailboxSmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MailboxSmtpAddress;
    /**
     * Constructor method for GetPasswordExpirationDateType
     * @uses EwsGetPasswordExpirationDateType::setMailboxSmtpAddress()
     * @param string $mailboxSmtpAddress
     */
    public function __construct($mailboxSmtpAddress = null)
    {
        $this
            ->setMailboxSmtpAddress($mailboxSmtpAddress);
    }
    /**
     * Get MailboxSmtpAddress value
     * @return string|null
     */
    public function getMailboxSmtpAddress()
    {
        return $this->MailboxSmtpAddress;
    }
    /**
     * Set MailboxSmtpAddress value
     * @param string $mailboxSmtpAddress
     * @return \Ews\StructType\EwsGetPasswordExpirationDateType
     */
    public function setMailboxSmtpAddress($mailboxSmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($mailboxSmtpAddress) && !is_string($mailboxSmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxSmtpAddress, true), gettype($mailboxSmtpAddress)), __LINE__);
        }
        $this->MailboxSmtpAddress = $mailboxSmtpAddress;
        return $this;
    }
}
