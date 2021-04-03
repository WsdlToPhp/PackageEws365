<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfItemsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfItemsType extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - choice: Item
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsItemType|null
     */
    protected ?\StructType\EwsItemType $Item = null;
    /**
     * Constructor method for ArrayOfItemsType
     * @uses EwsArrayOfItemsType::setItem()
     * @param \StructType\EwsItemType $item
     */
    public function __construct(?\StructType\EwsItemType $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\EwsItemType|null
     */
    public function getItem(): ?\StructType\EwsItemType
    {
        return isset($this->Item) ? $this->Item : null;
    }
    /**
     * This method is responsible for validating the value passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintsFromSetItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Item can\'t be set as the property %s is already set. Only one property must be set among these properties: Item, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Item value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemType $item
     * @return \ArrayType\EwsArrayOfItemsType
     */
    public function setItem(?\StructType\EwsItemType $item = null): self
    {
        // validation for constraint: choice(Item)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        if (is_null($item) || (is_array($item) && empty($item))) {
            unset($this->Item);
        } else {
            $this->Item = $item;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsItemType|null
     */
    public function current(): ?\StructType\EwsItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsItemType|null
     */
    public function item($index): ?\StructType\EwsItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsItemType|null
     */
    public function first(): ?\StructType\EwsItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsItemType|null
     */
    public function last(): ?\StructType\EwsItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsItemType|null
     */
    public function offsetGet($offset): ?\StructType\EwsItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemType $item
     * @return \ArrayType\EwsArrayOfItemsType
     */
    public function add(\StructType\EwsItemType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Item
     */
    public function getAttributeName(): string
    {
        return 'Item';
    }
}
