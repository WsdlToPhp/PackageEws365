<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfMailboxSearchScopesType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of mailbox and its search scope.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfMailboxSearchScopesType extends AbstractStructArrayBase
{
    /**
     * The MailboxSearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsMailboxSearchScopeType[]
     */
    protected array $MailboxSearchScope = [];
    /**
     * Constructor method for NonEmptyArrayOfMailboxSearchScopesType
     * @uses EwsNonEmptyArrayOfMailboxSearchScopesType::setMailboxSearchScope()
     * @param \StructType\EwsMailboxSearchScopeType[] $mailboxSearchScope
     */
    public function __construct(array $mailboxSearchScope)
    {
        $this
            ->setMailboxSearchScope($mailboxSearchScope);
    }
    /**
     * Get MailboxSearchScope value
     * @return \StructType\EwsMailboxSearchScopeType[]
     */
    public function getMailboxSearchScope(): array
    {
        return $this->MailboxSearchScope;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxSearchScope method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxSearchScope method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxSearchScopeForArrayConstraintsFromSetMailboxSearchScope(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem instanceof \StructType\EwsMailboxSearchScopeType) {
                $invalidValues[] = is_object($nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem) ? get_class($nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem), var_export($nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxSearchScope property can only contain items of type \StructType\EwsMailboxSearchScopeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MailboxSearchScope value
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailboxSearchScopeType[] $mailboxSearchScope
     * @return \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public function setMailboxSearchScope(array $mailboxSearchScope): self
    {
        // validation for constraint: array
        if ('' !== ($mailboxSearchScopeArrayErrorMessage = self::validateMailboxSearchScopeForArrayConstraintsFromSetMailboxSearchScope($mailboxSearchScope))) {
            throw new InvalidArgumentException($mailboxSearchScopeArrayErrorMessage, __LINE__);
        }
        $this->MailboxSearchScope = $mailboxSearchScope;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsMailboxSearchScopeType|null
     */
    public function current(): ?\StructType\EwsMailboxSearchScopeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsMailboxSearchScopeType|null
     */
    public function item($index): ?\StructType\EwsMailboxSearchScopeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsMailboxSearchScopeType|null
     */
    public function first(): ?\StructType\EwsMailboxSearchScopeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsMailboxSearchScopeType|null
     */
    public function last(): ?\StructType\EwsMailboxSearchScopeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsMailboxSearchScopeType|null
     */
    public function offsetGet($offset): ?\StructType\EwsMailboxSearchScopeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsMailboxSearchScopeType $item
     * @return \ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public function add(\StructType\EwsMailboxSearchScopeType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxSearchScope
     */
    public function getAttributeName(): string
    {
        return 'MailboxSearchScope';
    }
}
