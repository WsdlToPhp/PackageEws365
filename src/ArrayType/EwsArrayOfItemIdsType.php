<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemIdsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfItemIdsType extends AbstractStructArrayBase
{
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsItemIdType[]
     */
    public $ItemId;
    /**
     * Constructor method for ArrayOfItemIdsType
     * @uses EwsArrayOfItemIdsType::setItemId()
     * @param \Ews\StructType\EwsItemIdType[] $itemId
     */
    public function __construct(array $itemId = array())
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return \Ews\StructType\EwsItemIdType[]|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemIdType[] $itemId
     * @return \Ews\ArrayType\EwsArrayOfItemIdsType
     */
    public function setItemId(array $itemId = array())
    {
        foreach ($itemId as $arrayOfItemIdsTypeItemIdItem) {
            // validation for constraint: itemType
            if (!$arrayOfItemIdsTypeItemIdItem instanceof \Ews\StructType\EwsItemIdType) {
                throw new \InvalidArgumentException(sprintf('The ItemId property can only contain items of \Ews\StructType\EwsItemIdType, "%s" given', is_object($arrayOfItemIdsTypeItemIdItem) ? get_class($arrayOfItemIdsTypeItemIdItem) : gettype($arrayOfItemIdsTypeItemIdItem)), __LINE__);
            }
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Add item to ItemId value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemIdType $item
     * @return \Ews\ArrayType\EwsArrayOfItemIdsType
     */
    public function addToItemId(\Ews\StructType\EwsItemIdType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsItemIdType) {
            throw new \InvalidArgumentException(sprintf('The ItemId property can only contain items of \Ews\StructType\EwsItemIdType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ItemId[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemId
     */
    public function getAttributeName()
    {
        return 'ItemId';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfItemIdsType
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
