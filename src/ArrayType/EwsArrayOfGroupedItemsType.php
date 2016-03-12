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
     * @var \Ews\StructType\EwsGroupedItemsType[]
     */
    public $GroupedItems;
    /**
     * Constructor method for ArrayOfGroupedItemsType
     * @uses EwsArrayOfGroupedItemsType::setGroupedItems()
     * @param \Ews\StructType\EwsGroupedItemsType[] $groupedItems
     */
    public function __construct(array $groupedItems = array())
    {
        $this
            ->setGroupedItems($groupedItems);
    }
    /**
     * Get GroupedItems value
     * @return \Ews\StructType\EwsGroupedItemsType[]|null
     */
    public function getGroupedItems()
    {
        return $this->GroupedItems;
    }
    /**
     * Set GroupedItems value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGroupedItemsType[] $groupedItems
     * @return \Ews\ArrayType\EwsArrayOfGroupedItemsType
     */
    public function setGroupedItems(array $groupedItems = array())
    {
        foreach ($groupedItems as $arrayOfGroupedItemsTypeGroupedItemsItem) {
            // validation for constraint: itemType
            if (!$arrayOfGroupedItemsTypeGroupedItemsItem instanceof \Ews\StructType\EwsGroupedItemsType) {
                throw new \InvalidArgumentException(sprintf('The GroupedItems property can only contain items of \Ews\StructType\EwsGroupedItemsType, "%s" given', is_object($arrayOfGroupedItemsTypeGroupedItemsItem) ? get_class($arrayOfGroupedItemsTypeGroupedItemsItem) : gettype($arrayOfGroupedItemsTypeGroupedItemsItem)), __LINE__);
            }
        }
        $this->GroupedItems = $groupedItems;
        return $this;
    }
    /**
     * Add item to GroupedItems value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGroupedItemsType $item
     * @return \Ews\ArrayType\EwsArrayOfGroupedItemsType
     */
    public function addToGroupedItems(\Ews\StructType\EwsGroupedItemsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsGroupedItemsType) {
            throw new \InvalidArgumentException(sprintf('The GroupedItems property can only contain items of \Ews\StructType\EwsGroupedItemsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GroupedItems[] = $item;
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
