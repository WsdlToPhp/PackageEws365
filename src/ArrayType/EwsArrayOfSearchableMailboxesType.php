<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSearchableMailboxesType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of searchable mailbox.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfSearchableMailboxesType extends AbstractStructArrayBase
{
    /**
     * The SearchableMailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Searchable mailbox.
     * @var array
     */
    public $SearchableMailbox;
    /**
     * Constructor method for ArrayOfSearchableMailboxesType
     * @uses EwsArrayOfSearchableMailboxesType::setSearchableMailbox()
     * @param array $searchableMailbox
     */
    public function __construct(array $searchableMailbox = array())
    {
        $this
            ->setSearchableMailbox($searchableMailbox);
    }
    /**
     * Get SearchableMailbox value
     * @return array
     */
    public function getSearchableMailbox()
    {
        return $this->SearchableMailbox;
    }
    /**
     * Set SearchableMailbox value
     * @param array $searchableMailbox
     * @return \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public function setSearchableMailbox(array $searchableMailbox = array())
    {
        $this->SearchableMailbox = $searchableMailbox;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSearchableMailboxType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SearchableMailbox
     */
    public function getAttributeName()
    {
        return 'SearchableMailbox';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
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
