<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfItemChangesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfItemChangesType extends AbstractStructArrayBase
{
    /**
     * The ItemChange
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsItemChangeType[]
     */
    public $ItemChange;
    /**
     * Constructor method for NonEmptyArrayOfItemChangesType
     * @uses EwsNonEmptyArrayOfItemChangesType::setItemChange()
     * @param \Ews\StructType\EwsItemChangeType[] $itemChange
     */
    public function __construct(array $itemChange = array())
    {
        $this
            ->setItemChange($itemChange);
    }
    /**
     * Get ItemChange value
     * @return \Ews\StructType\EwsItemChangeType[]|null
     */
    public function getItemChange()
    {
        return $this->ItemChange;
    }
    /**
     * This method is responsible for validating the values passed to the setItemChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemChange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemChangeForArrayConstraintsFromSetItemChange(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfItemChangesTypeItemChangeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfItemChangesTypeItemChangeItem instanceof \Ews\StructType\EwsItemChangeType) {
                $invalidValues[] = is_object($nonEmptyArrayOfItemChangesTypeItemChangeItem) ? get_class($nonEmptyArrayOfItemChangesTypeItemChangeItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfItemChangesTypeItemChangeItem), var_export($nonEmptyArrayOfItemChangesTypeItemChangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemChange property can only contain items of type \Ews\StructType\EwsItemChangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemChange value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemChangeType[] $itemChange
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType
     */
    public function setItemChange(array $itemChange = array())
    {
        // validation for constraint: array
        if ('' !== ($itemChangeArrayErrorMessage = self::validateItemChangeForArrayConstraintsFromSetItemChange($itemChange))) {
            throw new \InvalidArgumentException($itemChangeArrayErrorMessage, __LINE__);
        }
        $this->ItemChange = $itemChange;
        return $this;
    }
    /**
     * Add item to ItemChange value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemChangeType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfItemChangesType
     */
    public function addToItemChange(\Ews\StructType\EwsItemChangeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsItemChangeType) {
            throw new \InvalidArgumentException(sprintf('The ItemChange property can only contain items of type \Ews\StructType\EwsItemChangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemChange[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsItemChangeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemChange
     */
    public function getAttributeName()
    {
        return 'ItemChange';
    }
}
