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
     * Meta information extracted from the WSDL
     * - choice: GroupedItems
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
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
        return isset($this->GroupedItems) ? $this->GroupedItems : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupedItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupedItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupedItemsForArrayConstraintsFromSetGroupedItems(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGroupedItemsTypeGroupedItemsItem) {
            // validation for constraint: itemType
            if (!$arrayOfGroupedItemsTypeGroupedItemsItem instanceof \Ews\StructType\EwsGroupedItemsType) {
                $invalidValues[] = is_object($arrayOfGroupedItemsTypeGroupedItemsItem) ? get_class($arrayOfGroupedItemsTypeGroupedItemsItem) : sprintf('%s(%s)', gettype($arrayOfGroupedItemsTypeGroupedItemsItem), var_export($arrayOfGroupedItemsTypeGroupedItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupedItems property can only contain items of type \Ews\StructType\EwsGroupedItemsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setGroupedItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupedItems method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateGroupedItemsForChoiceConstraintsFromSetGroupedItems($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GroupedItems can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupedItems, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set GroupedItems value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsGroupedItemsType[] $groupedItems
     * @return \Ews\ArrayType\EwsArrayOfGroupedItemsType
     */
    public function setGroupedItems(array $groupedItems = array())
    {
        // validation for constraint: array
        if ('' !== ($groupedItemsArrayErrorMessage = self::validateGroupedItemsForArrayConstraintsFromSetGroupedItems($groupedItems))) {
            throw new \InvalidArgumentException($groupedItemsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(GroupedItems)
        if ('' !== ($groupedItemsChoiceErrorMessage = self::validateGroupedItemsForChoiceConstraintsFromSetGroupedItems($groupedItems))) {
            throw new \InvalidArgumentException($groupedItemsChoiceErrorMessage, __LINE__);
        }
        if (is_null($groupedItems) || (is_array($groupedItems) && empty($groupedItems))) {
            unset($this->GroupedItems);
        } else {
            $this->GroupedItems = $groupedItems;
        }
        return $this;
    }
    /**
     * This method is responsible for validating the value passed to the addToGroupedItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToGroupedItems method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromAddToGroupedItems($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property GroupedItems can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupedItems, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
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
            throw new \InvalidArgumentException(sprintf('The GroupedItems property can only contain items of type \Ews\StructType\EwsGroupedItemsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(GroupedItems)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromAddToGroupedItems($item))) {
            throw new \InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
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
}
