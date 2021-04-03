<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxHoldResultType StructType
 * Meta information extracted from the WSDL
 * - documentation: Mailbox hold result.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxHoldResultType extends AbstractStructBase
{
    /**
     * The HoldId
     * @var string|null
     */
    protected ?string $HoldId = null;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Query = null;
    /**
     * The MailboxHoldStatuses
     * @var \ArrayType\EwsArrayOfMailboxHoldStatusType|null
     */
    protected ?\ArrayType\EwsArrayOfMailboxHoldStatusType $MailboxHoldStatuses = null;
    /**
     * Constructor method for MailboxHoldResultType
     * @uses EwsMailboxHoldResultType::setHoldId()
     * @uses EwsMailboxHoldResultType::setQuery()
     * @uses EwsMailboxHoldResultType::setMailboxHoldStatuses()
     * @param string $holdId
     * @param string $query
     * @param \ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses
     */
    public function __construct(?string $holdId = null, ?string $query = null, ?\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses = null)
    {
        $this
            ->setHoldId($holdId)
            ->setQuery($query)
            ->setMailboxHoldStatuses($mailboxHoldStatuses);
    }
    /**
     * Get HoldId value
     * @return string|null
     */
    public function getHoldId(): ?string
    {
        return $this->HoldId;
    }
    /**
     * Set HoldId value
     * @param string $holdId
     * @return \StructType\EwsMailboxHoldResultType
     */
    public function setHoldId(?string $holdId = null): self
    {
        // validation for constraint: string
        if (!is_null($holdId) && !is_string($holdId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holdId, true), gettype($holdId)), __LINE__);
        }
        $this->HoldId = $holdId;
        
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \StructType\EwsMailboxHoldResultType
     */
    public function setQuery(?string $query = null): self
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
        
        return $this;
    }
    /**
     * Get MailboxHoldStatuses value
     * @return \ArrayType\EwsArrayOfMailboxHoldStatusType|null
     */
    public function getMailboxHoldStatuses(): ?\ArrayType\EwsArrayOfMailboxHoldStatusType
    {
        return $this->MailboxHoldStatuses;
    }
    /**
     * Set MailboxHoldStatuses value
     * @param \ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses
     * @return \StructType\EwsMailboxHoldResultType
     */
    public function setMailboxHoldStatuses(?\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses = null): self
    {
        $this->MailboxHoldStatuses = $mailboxHoldStatuses;
        
        return $this;
    }
}
