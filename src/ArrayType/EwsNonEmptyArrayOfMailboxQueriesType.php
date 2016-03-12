<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfMailboxQueriesType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of query and mailboxes.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfMailboxQueriesType extends AbstractStructArrayBase
{
    /**
     * The MailboxQuery
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsMailboxQueryType[]
     */
    public $MailboxQuery;
    /**
     * Constructor method for NonEmptyArrayOfMailboxQueriesType
     * @uses EwsNonEmptyArrayOfMailboxQueriesType::setMailboxQuery()
     * @param \Ews\StructType\EwsMailboxQueryType[] $mailboxQuery
     */
    public function __construct(array $mailboxQuery = array())
    {
        $this
            ->setMailboxQuery($mailboxQuery);
    }
    /**
     * Get MailboxQuery value
     * @return \Ews\StructType\EwsMailboxQueryType[]
     */
    public function getMailboxQuery()
    {
        return $this->MailboxQuery;
    }
    /**
     * Set MailboxQuery value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxQueryType[] $mailboxQuery
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function setMailboxQuery(array $mailboxQuery = array())
    {
        foreach ($mailboxQuery as $nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem instanceof \Ews\StructType\EwsMailboxQueryType) {
                throw new \InvalidArgumentException(sprintf('The MailboxQuery property can only contain items of \Ews\StructType\EwsMailboxQueryType, "%s" given', is_object($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) ? get_class($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem) : gettype($nonEmptyArrayOfMailboxQueriesTypeMailboxQueryItem)), __LINE__);
            }
        }
        $this->MailboxQuery = $mailboxQuery;
        return $this;
    }
    /**
     * Add item to MailboxQuery value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxQueryType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
     */
    public function addToMailboxQuery(\Ews\StructType\EwsMailboxQueryType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMailboxQueryType) {
            throw new \InvalidArgumentException(sprintf('The MailboxQuery property can only contain items of \Ews\StructType\EwsMailboxQueryType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MailboxQuery[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMailboxQueryType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxQuery
     */
    public function getAttributeName()
    {
        return 'MailboxQuery';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfMailboxQueriesType
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
