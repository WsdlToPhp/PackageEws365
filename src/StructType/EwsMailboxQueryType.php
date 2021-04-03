<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Query;
    /**
     * The MailboxSearchScopes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    protected \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $MailboxSearchScopes;
    /**
     * Constructor method for MailboxQueryType
     * @uses EwsMailboxQueryType::setQuery()
     * @uses EwsMailboxQueryType::setMailboxSearchScopes()
     * @param string $query
     * @param \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes
     */
    public function __construct(string $query, \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes)
    {
        $this
            ->setQuery($query)
            ->setMailboxSearchScopes($mailboxSearchScopes);
    }
    /**
     * Get Query value
     * @return string
     */
    public function getQuery(): string
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \StructType\EwsMailboxQueryType
     */
    public function setQuery(string $query): self
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
        
        return $this;
    }
    /**
     * Get MailboxSearchScopes value
     * @return \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public function getMailboxSearchScopes(): \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
    {
        return $this->MailboxSearchScopes;
    }
    /**
     * Set MailboxSearchScopes value
     * @param \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes
     * @return \StructType\EwsMailboxQueryType
     */
    public function setMailboxSearchScopes(\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType $mailboxSearchScopes): self
    {
        $this->MailboxSearchScopes = $mailboxSearchScopes;
        
        return $this;
    }
}
