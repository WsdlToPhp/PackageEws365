<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfMailboxSearchScopesType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of mailbox and its search scope.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfMailboxSearchScopesType extends AbstractStructArrayBase
{
    /**
     * The MailboxSearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - documentation: Set of mailbox, search scope and its extended attributes.
     * @var array
     */
    public $MailboxSearchScope;
    /**
     * Constructor method for NonEmptyArrayOfMailboxSearchScopesType
     * @uses EwsNonEmptyArrayOfMailboxSearchScopesType::setMailboxSearchScope()
     * @param array $mailboxSearchScope
     */
    public function __construct(array $mailboxSearchScope = array())
    {
        $this
            ->setMailboxSearchScope($mailboxSearchScope);
    }
    /**
     * Get MailboxSearchScope value
     * @return array
     */
    public function getMailboxSearchScope()
    {
        return $this->MailboxSearchScope;
    }
    /**
     * Set MailboxSearchScope value
     * @param array $mailboxSearchScope
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public function setMailboxSearchScope(array $mailboxSearchScope = array())
    {
        $this->MailboxSearchScope = $mailboxSearchScope;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxSearchScopesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
