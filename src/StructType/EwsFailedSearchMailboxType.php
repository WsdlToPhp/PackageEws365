<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FailedSearchMailboxType StructType
 * Meta information extracted from the WSDL
 * - documentation: Mailbox failed on search and its error message.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFailedSearchMailboxType extends AbstractStructBase
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
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ErrorCode;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ErrorMessage;
    /**
     * The IsArchive
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsArchive;
    /**
     * Constructor method for FailedSearchMailboxType
     * @uses EwsFailedSearchMailboxType::setMailbox()
     * @uses EwsFailedSearchMailboxType::setErrorCode()
     * @uses EwsFailedSearchMailboxType::setErrorMessage()
     * @uses EwsFailedSearchMailboxType::setIsArchive()
     * @param string $mailbox
     * @param int $errorCode
     * @param string $errorMessage
     * @param bool $isArchive
     */
    public function __construct(string $mailbox, int $errorCode, string $errorMessage, bool $isArchive)
    {
        $this
            ->setMailbox($mailbox)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setIsArchive($isArchive);
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
     * @return \StructType\EwsFailedSearchMailboxType
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
     * Get ErrorCode value
     * @return int
     */
    public function getErrorCode(): int
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @param int $errorCode
     * @return \StructType\EwsFailedSearchMailboxType
     */
    public function setErrorCode(int $errorCode): self
    {
        // validation for constraint: int
        if (!is_null($errorCode) && !(is_int($errorCode) || ctype_digit($errorCode))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($errorCode, true), gettype($errorCode)), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \StructType\EwsFailedSearchMailboxType
     */
    public function setErrorMessage(string $errorMessage): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get IsArchive value
     * @return bool
     */
    public function getIsArchive(): bool
    {
        return $this->IsArchive;
    }
    /**
     * Set IsArchive value
     * @param bool $isArchive
     * @return \StructType\EwsFailedSearchMailboxType
     */
    public function setIsArchive(bool $isArchive): self
    {
        // validation for constraint: boolean
        if (!is_null($isArchive) && !is_bool($isArchive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isArchive, true), gettype($isArchive)), __LINE__);
        }
        $this->IsArchive = $isArchive;
        
        return $this;
    }
}
