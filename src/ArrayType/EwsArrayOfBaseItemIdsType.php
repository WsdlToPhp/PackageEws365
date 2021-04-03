<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBaseItemIdsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBaseItemIdsType extends AbstractStructArrayBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - choice: ItemId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * Constructor method for ArrayOfBaseItemIdsType
     * @uses EwsArrayOfBaseItemIdsType::setItemId()
     * @param \StructType\EwsItemIdType $itemId
     */
    public function __construct(?\StructType\EwsItemIdType $itemId = null)
    {
        $this
            ->setItemId($itemId);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return isset($this->ItemId) ? $this->ItemId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemIdForChoiceConstraintsFromSetItemId($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ItemId can\'t be set as the property %s is already set. Only one property must be set among these properties: ItemId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ItemId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemIdType $itemId
     * @return \ArrayType\EwsArrayOfBaseItemIdsType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        // validation for constraint: choice(ItemId)
        if ('' !== ($itemIdChoiceErrorMessage = self::validateItemIdForChoiceConstraintsFromSetItemId($itemId))) {
            throw new InvalidArgumentException($itemIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($itemId) || (is_array($itemId) && empty($itemId))) {
            unset($this->ItemId);
        } else {
            $this->ItemId = $itemId;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsItemIdType|null
     */
    public function current(): ?\StructType\EwsItemIdType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsItemIdType|null
     */
    public function item($index): ?\StructType\EwsItemIdType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsItemIdType|null
     */
    public function first(): ?\StructType\EwsItemIdType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsItemIdType|null
     */
    public function last(): ?\StructType\EwsItemIdType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsItemIdType|null
     */
    public function offsetGet($offset): ?\StructType\EwsItemIdType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemIdType $item
     * @return \ArrayType\EwsArrayOfBaseItemIdsType
     */
    public function add(\StructType\EwsItemIdType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemId
     */
    public function getAttributeName(): string
    {
        return 'ItemId';
    }
}
