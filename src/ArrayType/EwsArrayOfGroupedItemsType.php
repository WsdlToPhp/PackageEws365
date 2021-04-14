<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsGroupedItemsType[]
     */
    protected array $GroupedItems = [];
    /**
     * Constructor method for ArrayOfGroupedItemsType
     * @uses EwsArrayOfGroupedItemsType::setGroupedItems()
     * @param \StructType\EwsGroupedItemsType[] $groupedItems
     */
    public function __construct(array $groupedItems = [])
    {
        $this
            ->setGroupedItems($groupedItems);
    }
    /**
     * Get GroupedItems value
     * @return \StructType\EwsGroupedItemsType[]
     */
    public function getGroupedItems(): array
    {
        return isset($this->GroupedItems) ? $this->GroupedItems : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGroupedItems method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGroupedItems method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGroupedItemsForArrayConstraintsFromSetGroupedItems(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGroupedItemsTypeGroupedItemsItem) {
            // validation for constraint: itemType
            if (!$arrayOfGroupedItemsTypeGroupedItemsItem instanceof \StructType\EwsGroupedItemsType) {
                $invalidValues[] = is_object($arrayOfGroupedItemsTypeGroupedItemsItem) ? get_class($arrayOfGroupedItemsTypeGroupedItemsItem) : sprintf('%s(%s)', gettype($arrayOfGroupedItemsTypeGroupedItemsItem), var_export($arrayOfGroupedItemsTypeGroupedItemsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GroupedItems property can only contain items of type \StructType\EwsGroupedItemsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
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
    public function validateGroupedItemsForChoiceConstraintsFromSetGroupedItems($value): string
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
                    throw new InvalidArgumentException(sprintf('The property GroupedItems can\'t be set as the property %s is already set. Only one property must be set among these properties: GroupedItems, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set GroupedItems value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \StructType\EwsGroupedItemsType[] $groupedItems
     * @return \ArrayType\EwsArrayOfGroupedItemsType
     */
    public function setGroupedItems(array $groupedItems = []): self
    {
        // validation for constraint: array
        if ('' !== ($groupedItemsArrayErrorMessage = self::validateGroupedItemsForArrayConstraintsFromSetGroupedItems($groupedItems))) {
            throw new InvalidArgumentException($groupedItemsArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(GroupedItems)
        if ('' !== ($groupedItemsChoiceErrorMessage = self::validateGroupedItemsForChoiceConstraintsFromSetGroupedItems($groupedItems))) {
            throw new InvalidArgumentException($groupedItemsChoiceErrorMessage, __LINE__);
        }
        if (is_null($groupedItems) || (is_array($groupedItems) && empty($groupedItems))) {
            unset($this->GroupedItems);
        } else {
            $this->GroupedItems = $groupedItems;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsGroupedItemsType|null
     */
    public function current(): ?\StructType\EwsGroupedItemsType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsGroupedItemsType|null
     */
    public function item($index): ?\StructType\EwsGroupedItemsType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsGroupedItemsType|null
     */
    public function first(): ?\StructType\EwsGroupedItemsType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsGroupedItemsType|null
     */
    public function last(): ?\StructType\EwsGroupedItemsType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsGroupedItemsType|null
     */
    public function offsetGet($offset): ?\StructType\EwsGroupedItemsType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsGroupedItemsType $item
     * @return \ArrayType\EwsArrayOfGroupedItemsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsGroupedItemsType) {
            throw new InvalidArgumentException(sprintf('The GroupedItems property can only contain items of type \StructType\EwsGroupedItemsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GroupedItems
     */
    public function getAttributeName(): string
    {
        return 'GroupedItems';
    }
}
