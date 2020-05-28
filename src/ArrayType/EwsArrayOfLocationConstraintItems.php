<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLocationConstraintItems ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfLocationConstraintItems extends AbstractStructArrayBase
{
    /**
     * The LocationItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsLocationConstraintItem[]
     */
    public $LocationItem;
    /**
     * Constructor method for ArrayOfLocationConstraintItems
     * @uses EwsArrayOfLocationConstraintItems::setLocationItem()
     * @param \Ews\StructType\EwsLocationConstraintItem[] $locationItem
     */
    public function __construct(array $locationItem = array())
    {
        $this
            ->setLocationItem($locationItem);
    }
    /**
     * Get LocationItem value
     * @return \Ews\StructType\EwsLocationConstraintItem[]|null
     */
    public function getLocationItem()
    {
        return $this->LocationItem;
    }
    /**
     * This method is responsible for validating the values passed to the setLocationItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocationItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocationItemForArrayConstraintsFromSetLocationItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLocationConstraintItemsLocationItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfLocationConstraintItemsLocationItemItem instanceof \Ews\StructType\EwsLocationConstraintItem) {
                $invalidValues[] = is_object($arrayOfLocationConstraintItemsLocationItemItem) ? get_class($arrayOfLocationConstraintItemsLocationItemItem) : sprintf('%s(%s)', gettype($arrayOfLocationConstraintItemsLocationItemItem), var_export($arrayOfLocationConstraintItemsLocationItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LocationItem property can only contain items of type \Ews\StructType\EwsLocationConstraintItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LocationItem value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsLocationConstraintItem[] $locationItem
     * @return \Ews\ArrayType\EwsArrayOfLocationConstraintItems
     */
    public function setLocationItem(array $locationItem = array())
    {
        // validation for constraint: array
        if ('' !== ($locationItemArrayErrorMessage = self::validateLocationItemForArrayConstraintsFromSetLocationItem($locationItem))) {
            throw new \InvalidArgumentException($locationItemArrayErrorMessage, __LINE__);
        }
        $this->LocationItem = $locationItem;
        return $this;
    }
    /**
     * Add item to LocationItem value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsLocationConstraintItem $item
     * @return \Ews\ArrayType\EwsArrayOfLocationConstraintItems
     */
    public function addToLocationItem(\Ews\StructType\EwsLocationConstraintItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsLocationConstraintItem) {
            throw new \InvalidArgumentException(sprintf('The LocationItem property can only contain items of type \Ews\StructType\EwsLocationConstraintItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LocationItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsLocationConstraintItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsLocationConstraintItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsLocationConstraintItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsLocationConstraintItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsLocationConstraintItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LocationItem
     */
    public function getAttributeName()
    {
        return 'LocationItem';
    }
}
