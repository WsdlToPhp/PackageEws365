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
     * @var \Ews\StructType\EwsSearchableMailboxType[]
     */
    public $SearchableMailbox;
    /**
     * Constructor method for ArrayOfSearchableMailboxesType
     * @uses EwsArrayOfSearchableMailboxesType::setSearchableMailbox()
     * @param \Ews\StructType\EwsSearchableMailboxType[] $searchableMailbox
     */
    public function __construct(array $searchableMailbox = array())
    {
        $this
            ->setSearchableMailbox($searchableMailbox);
    }
    /**
     * Get SearchableMailbox value
     * @return \Ews\StructType\EwsSearchableMailboxType[]|null
     */
    public function getSearchableMailbox()
    {
        return $this->SearchableMailbox;
    }
    /**
     * Set SearchableMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchableMailboxType[] $searchableMailbox
     * @return \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public function setSearchableMailbox(array $searchableMailbox = array())
    {
        foreach ($searchableMailbox as $arrayOfSearchableMailboxesTypeSearchableMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfSearchableMailboxesTypeSearchableMailboxItem instanceof \Ews\StructType\EwsSearchableMailboxType) {
                throw new \InvalidArgumentException(sprintf('The SearchableMailbox property can only contain items of \Ews\StructType\EwsSearchableMailboxType, "%s" given', is_object($arrayOfSearchableMailboxesTypeSearchableMailboxItem) ? get_class($arrayOfSearchableMailboxesTypeSearchableMailboxItem) : gettype($arrayOfSearchableMailboxesTypeSearchableMailboxItem)), __LINE__);
            }
        }
        $this->SearchableMailbox = $searchableMailbox;
        return $this;
    }
    /**
     * Add item to SearchableMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSearchableMailboxType $item
     * @return \Ews\ArrayType\EwsArrayOfSearchableMailboxesType
     */
    public function addToSearchableMailbox(\Ews\StructType\EwsSearchableMailboxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSearchableMailboxType) {
            throw new \InvalidArgumentException(sprintf('The SearchableMailbox property can only contain items of \Ews\StructType\EwsSearchableMailboxType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SearchableMailbox[] = $item;
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
