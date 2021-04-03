<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateInboxRulesRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateInboxRulesRequestType extends EwsBaseRequestType
{
    /**
     * The Operations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsArrayOfRuleOperationsType
     */
    protected \StructType\EwsArrayOfRuleOperationsType $Operations;
    /**
     * The MailboxSmtpAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MailboxSmtpAddress = null;
    /**
     * The RemoveOutlookRuleBlob
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $RemoveOutlookRuleBlob = null;
    /**
     * Constructor method for UpdateInboxRulesRequestType
     * @uses EwsUpdateInboxRulesRequestType::setOperations()
     * @uses EwsUpdateInboxRulesRequestType::setMailboxSmtpAddress()
     * @uses EwsUpdateInboxRulesRequestType::setRemoveOutlookRuleBlob()
     * @param \StructType\EwsArrayOfRuleOperationsType $operations
     * @param string $mailboxSmtpAddress
     * @param bool $removeOutlookRuleBlob
     */
    public function __construct(\StructType\EwsArrayOfRuleOperationsType $operations, ?string $mailboxSmtpAddress = null, ?bool $removeOutlookRuleBlob = null)
    {
        $this
            ->setOperations($operations)
            ->setMailboxSmtpAddress($mailboxSmtpAddress)
            ->setRemoveOutlookRuleBlob($removeOutlookRuleBlob);
    }
    /**
     * Get Operations value
     * @return \StructType\EwsArrayOfRuleOperationsType
     */
    public function getOperations(): \StructType\EwsArrayOfRuleOperationsType
    {
        return $this->Operations;
    }
    /**
     * Set Operations value
     * @param \StructType\EwsArrayOfRuleOperationsType $operations
     * @return \StructType\EwsUpdateInboxRulesRequestType
     */
    public function setOperations(\StructType\EwsArrayOfRuleOperationsType $operations): self
    {
        $this->Operations = $operations;
        
        return $this;
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
     * @return \StructType\EwsUpdateInboxRulesRequestType
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
    /**
     * Get RemoveOutlookRuleBlob value
     * @return bool|null
     */
    public function getRemoveOutlookRuleBlob(): ?bool
    {
        return $this->RemoveOutlookRuleBlob;
    }
    /**
     * Set RemoveOutlookRuleBlob value
     * @param bool $removeOutlookRuleBlob
     * @return \StructType\EwsUpdateInboxRulesRequestType
     */
    public function setRemoveOutlookRuleBlob(?bool $removeOutlookRuleBlob = null): self
    {
        // validation for constraint: boolean
        if (!is_null($removeOutlookRuleBlob) && !is_bool($removeOutlookRuleBlob)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($removeOutlookRuleBlob, true), gettype($removeOutlookRuleBlob)), __LINE__);
        }
        $this->RemoveOutlookRuleBlob = $removeOutlookRuleBlob;
        
        return $this;
    }
}
