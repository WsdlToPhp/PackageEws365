<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MailboxSearchScopeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Set of mailbox, search scope and its extended attributes.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMailboxSearchScopeType extends AbstractStructBase
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
     * The SearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SearchScope;
    /**
     * The ExtendedAttributes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: false
     * @var \ArrayType\EwsArrayOfExtendedAttributesType|null
     */
    protected ?\ArrayType\EwsArrayOfExtendedAttributesType $ExtendedAttributes = null;
    /**
     * Constructor method for MailboxSearchScopeType
     * @uses EwsMailboxSearchScopeType::setMailbox()
     * @uses EwsMailboxSearchScopeType::setSearchScope()
     * @uses EwsMailboxSearchScopeType::setExtendedAttributes()
     * @param string $mailbox
     * @param string $searchScope
     * @param \ArrayType\EwsArrayOfExtendedAttributesType $extendedAttributes
     */
    public function __construct(string $mailbox, string $searchScope, ?\ArrayType\EwsArrayOfExtendedAttributesType $extendedAttributes = null)
    {
        $this
            ->setMailbox($mailbox)
            ->setSearchScope($searchScope)
            ->setExtendedAttributes($extendedAttributes);
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
     * @return \StructType\EwsMailboxSearchScopeType
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
     * Get SearchScope value
     * @return string
     */
    public function getSearchScope(): string
    {
        return $this->SearchScope;
    }
    /**
     * Set SearchScope value
     * @uses \EnumType\EwsMailboxSearchLocationType::valueIsValid()
     * @uses \EnumType\EwsMailboxSearchLocationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $searchScope
     * @return \StructType\EwsMailboxSearchScopeType
     */
    public function setSearchScope(string $searchScope): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMailboxSearchLocationType::valueIsValid($searchScope)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMailboxSearchLocationType', is_array($searchScope) ? implode(', ', $searchScope) : var_export($searchScope, true), implode(', ', \EnumType\EwsMailboxSearchLocationType::getValidValues())), __LINE__);
        }
        $this->SearchScope = $searchScope;
        
        return $this;
    }
    /**
     * Get ExtendedAttributes value
     * @return \ArrayType\EwsArrayOfExtendedAttributesType|null
     */
    public function getExtendedAttributes(): ?\ArrayType\EwsArrayOfExtendedAttributesType
    {
        return $this->ExtendedAttributes;
    }
    /**
     * Set ExtendedAttributes value
     * @param \ArrayType\EwsArrayOfExtendedAttributesType $extendedAttributes
     * @return \StructType\EwsMailboxSearchScopeType
     */
    public function setExtendedAttributes(?\ArrayType\EwsArrayOfExtendedAttributesType $extendedAttributes = null): self
    {
        $this->ExtendedAttributes = $extendedAttributes;
        
        return $this;
    }
}
