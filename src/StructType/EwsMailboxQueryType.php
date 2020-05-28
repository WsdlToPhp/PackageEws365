<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxQueryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Pair of query and a set of mailbox search scopes.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxQueryType extends AbstractStructBase
{
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Query;
    /**
     * The MailboxSearchScopes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public $MailboxSearchScopes;
    /**
     * Constructor method for MailboxQueryType
     * @uses EwsMailboxQueryType::setQuery()
     * @uses EwsMailboxQueryType::setMailboxSearchScopes()
     * @param string $query
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes
     */
    public function __construct($query = null, \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes = null)
    {
        $this
            ->setQuery($query)
            ->setMailboxSearchScopes($mailboxSearchScopes);
    }
    /**
     * Get Query value
     * @return string
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \Ews\StructType\EwsMailboxQueryType
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
     * Get MailboxSearchScopes value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public function getMailboxSearchScopes()
    {
        return $this->MailboxSearchScopes;
    }
    /**
     * Set MailboxSearchScopes value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function setMailboxSearchScopes(\Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes = null)
    {
        $this->MailboxSearchScopes = $mailboxSearchScopes;
        return $this;
    }
}
