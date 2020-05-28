<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsMailboxSearchScopeType[]
     */
    public $MailboxSearchScope;
    /**
     * Constructor method for NonEmptyArrayOfMailboxSearchScopesType
     * @uses EwsNonEmptyArrayOfMailboxSearchScopesType::setMailboxSearchScope()
     * @param \Ews\StructType\EwsMailboxSearchScopeType[] $mailboxSearchScope
     */
    public function __construct(array $mailboxSearchScope = array())
    {
        $this
            ->setMailboxSearchScope($mailboxSearchScope);
    }
    /**
     * Get MailboxSearchScope value
     * @return \Ews\StructType\EwsMailboxSearchScopeType[]
     */
    public function getMailboxSearchScope()
    {
        return $this->MailboxSearchScope;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxSearchScope method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxSearchScope method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxSearchScopeForArrayConstraintsFromSetMailboxSearchScope(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem instanceof \Ews\StructType\EwsMailboxSearchScopeType) {
                $invalidValues[] = is_object($nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem) ? get_class($nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem), var_export($nonEmptyArrayOfMailboxSearchScopesTypeMailboxSearchScopeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxSearchScope property can only contain items of type \Ews\StructType\EwsMailboxSearchScopeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MailboxSearchScope value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxSearchScopeType[] $mailboxSearchScope
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public function setMailboxSearchScope(array $mailboxSearchScope = array())
    {
        // validation for constraint: array
        if ('' !== ($mailboxSearchScopeArrayErrorMessage = self::validateMailboxSearchScopeForArrayConstraintsFromSetMailboxSearchScope($mailboxSearchScope))) {
            throw new \InvalidArgumentException($mailboxSearchScopeArrayErrorMessage, __LINE__);
        }
        $this->MailboxSearchScope = $mailboxSearchScope;
        return $this;
    }
    /**
     * Add item to MailboxSearchScope value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxSearchScopeType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public function addToMailboxSearchScope(\Ews\StructType\EwsMailboxSearchScopeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMailboxSearchScopeType) {
            throw new \InvalidArgumentException(sprintf('The MailboxSearchScope property can only contain items of type \Ews\StructType\EwsMailboxSearchScopeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MailboxSearchScope[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMailboxSearchScopeType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMailboxSearchScopeType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMailboxSearchScopeType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMailboxSearchScopeType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMailboxSearchScopeType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxSearchScope
     */
    public function getAttributeName()
    {
        return 'MailboxSearchScope';
    }
}
