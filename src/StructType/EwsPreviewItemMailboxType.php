<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviewItemMailboxType StructType
 * Meta information extracted from the WSDL
 * - documentation: Mailbox information for each preview item.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPreviewItemMailboxType extends AbstractStructBase
{
    /**
     * The MailboxId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MailboxId;
    /**
     * The PrimarySmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PrimarySmtpAddress;
    /**
     * Constructor method for PreviewItemMailboxType
     * @uses EwsPreviewItemMailboxType::setMailboxId()
     * @uses EwsPreviewItemMailboxType::setPrimarySmtpAddress()
     * @param string $mailboxId
     * @param string $primarySmtpAddress
     */
    public function __construct($mailboxId = null, $primarySmtpAddress = null)
    {
        $this
            ->setMailboxId($mailboxId)
            ->setPrimarySmtpAddress($primarySmtpAddress);
    }
    /**
     * Get MailboxId value
     * @return string
     */
    public function getMailboxId()
    {
        return $this->MailboxId;
    }
    /**
     * Set MailboxId value
     * @param string $mailboxId
     * @return \Ews\StructType\EwsPreviewItemMailboxType
     */
    public function setMailboxId($mailboxId = null)
    {
        // validation for constraint: string
        if (!is_null($mailboxId) && !is_string($mailboxId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailboxId, true), gettype($mailboxId)), __LINE__);
        }
        $this->MailboxId = $mailboxId;
        return $this;
    }
    /**
     * Get PrimarySmtpAddress value
     * @return string
     */
    public function getPrimarySmtpAddress()
    {
        return $this->PrimarySmtpAddress;
    }
    /**
     * Set PrimarySmtpAddress value
     * @param string $primarySmtpAddress
     * @return \Ews\StructType\EwsPreviewItemMailboxType
     */
    public function setPrimarySmtpAddress($primarySmtpAddress = null)
    {
        // validation for constraint: string
        if (!is_null($primarySmtpAddress) && !is_string($primarySmtpAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($primarySmtpAddress, true), gettype($primarySmtpAddress)), __LINE__);
        }
        $this->PrimarySmtpAddress = $primarySmtpAddress;
        return $this;
    }
}
