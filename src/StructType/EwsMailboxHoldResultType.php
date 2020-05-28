<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $HoldId;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Query;
    /**
     * The MailboxHoldStatuses
     * @var \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType
     */
    public $MailboxHoldStatuses;
    /**
     * Constructor method for MailboxHoldResultType
     * @uses EwsMailboxHoldResultType::setHoldId()
     * @uses EwsMailboxHoldResultType::setQuery()
     * @uses EwsMailboxHoldResultType::setMailboxHoldStatuses()
     * @param string $holdId
     * @param string $query
     * @param \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses
     */
    public function __construct($holdId = null, $query = null, \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses = null)
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
    public function getHoldId()
    {
        return $this->HoldId;
    }
    /**
     * Set HoldId value
     * @param string $holdId
     * @return \Ews\StructType\EwsMailboxHoldResultType
     */
    public function setHoldId($holdId = null)
    {
        // validation for constraint: string
        if (!is_null($holdId) && !is_string($holdId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($holdId, true), gettype($holdId)), __LINE__);
        }
        $this->HoldId = $holdId;
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \Ews\StructType\EwsMailboxHoldResultType
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
        return $this;
    }
    /**
     * Get MailboxHoldStatuses value
     * @return \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType|null
     */
    public function getMailboxHoldStatuses()
    {
        return $this->MailboxHoldStatuses;
    }
    /**
     * Set MailboxHoldStatuses value
     * @param \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses
     * @return \Ews\StructType\EwsMailboxHoldResultType
     */
    public function setMailboxHoldStatuses(\Ews\ArrayType\EwsArrayOfMailboxHoldStatusType $mailboxHoldStatuses = null)
    {
        $this->MailboxHoldStatuses = $mailboxHoldStatuses;
        return $this;
    }
}
