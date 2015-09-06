<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGroupedItemsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfGroupedItemsType extends AbstractStructArrayBase
{
    /**
     * The GroupedItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $GroupedItems;
    /**
     * Constructor method for ArrayOfGroupedItemsType
     * @uses EwsArrayOfGroupedItemsType::setGroupedItems()
     * @param array $groupedItems
     */
    public function __construct(array $groupedItems = array())
    {
        $this
            ->setGroupedItems($groupedItems);
    }
    /**
     * Get GroupedItems value
     * @return array
     */
    public function getGroupedItems()
    {
        return $this->GroupedItems;
    }
    /**
     * Set GroupedItems value
     * @param array $groupedItems
     * @return \Ews\ArrayType\EwsArrayOfGroupedItemsType
     */
    public function setGroupedItems(array $groupedItems = array())
    {
        $this->GroupedItems = $groupedItems;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsGroupedItemsType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsGroupedItemsType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsGroupedItemsType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsGroupedItemsType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsGroupedItemsType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GroupedItems
     */
    public function getAttributeName()
    {
        return 'GroupedItems';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfGroupedItemsType
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
