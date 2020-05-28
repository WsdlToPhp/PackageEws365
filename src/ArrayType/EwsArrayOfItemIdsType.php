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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIdForArrayConstraintsFromSetItemId(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfItemIdsTypeItemIdItem) {
            // validation for constraint: itemType
            if (!$arrayOfItemIdsTypeItemIdItem instanceof \Ews\StructType\EwsItemIdType) {
                $invalidValues[] = is_object($arrayOfItemIdsTypeItemIdItem) ? get_class($arrayOfItemIdsTypeItemIdItem) : sprintf('%s(%s)', gettype($arrayOfItemIdsTypeItemIdItem), var_export($arrayOfItemIdsTypeItemIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemId property can only contain items of type \Ews\StructType\EwsItemIdType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemId value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemIdType[] $itemId
     * @return \Ews\ArrayType\EwsArrayOfItemIdsType
     */
    public function setItemId(array $itemId = array())
    {
        // validation for constraint: array
        if ('' !== ($itemIdArrayErrorMessage = self::validateItemIdForArrayConstraintsFromSetItemId($itemId))) {
            throw new \InvalidArgumentException($itemIdArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ItemId property can only contain items of type \Ews\StructType\EwsItemIdType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
