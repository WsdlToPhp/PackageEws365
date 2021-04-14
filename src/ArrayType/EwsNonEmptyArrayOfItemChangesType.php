<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsItemChangeType[]
     */
    protected array $ItemChange = [];
    /**
     * Constructor method for NonEmptyArrayOfItemChangesType
     * @uses EwsNonEmptyArrayOfItemChangesType::setItemChange()
     * @param \StructType\EwsItemChangeType[] $itemChange
     */
    public function __construct(array $itemChange = [])
    {
        $this
            ->setItemChange($itemChange);
    }
    /**
     * Get ItemChange value
     * @return \StructType\EwsItemChangeType[]
     */
    public function getItemChange(): array
    {
        return $this->ItemChange;
    }
    /**
     * This method is responsible for validating the values passed to the setItemChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemChange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemChangeForArrayConstraintsFromSetItemChange(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfItemChangesTypeItemChangeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfItemChangesTypeItemChangeItem instanceof \StructType\EwsItemChangeType) {
                $invalidValues[] = is_object($nonEmptyArrayOfItemChangesTypeItemChangeItem) ? get_class($nonEmptyArrayOfItemChangesTypeItemChangeItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfItemChangesTypeItemChangeItem), var_export($nonEmptyArrayOfItemChangesTypeItemChangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemChange property can only contain items of type \StructType\EwsItemChangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ItemChange value
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemChangeType[] $itemChange
     * @return \ArrayType\EwsNonEmptyArrayOfItemChangesType
     */
    public function setItemChange(array $itemChange = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemChangeArrayErrorMessage = self::validateItemChangeForArrayConstraintsFromSetItemChange($itemChange))) {
            throw new InvalidArgumentException($itemChangeArrayErrorMessage, __LINE__);
        }
        $this->ItemChange = $itemChange;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsItemChangeType|null
     */
    public function current(): ?\StructType\EwsItemChangeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsItemChangeType|null
     */
    public function item($index): ?\StructType\EwsItemChangeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsItemChangeType|null
     */
    public function first(): ?\StructType\EwsItemChangeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsItemChangeType|null
     */
    public function last(): ?\StructType\EwsItemChangeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsItemChangeType|null
     */
    public function offsetGet($offset): ?\StructType\EwsItemChangeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemChangeType $item
     * @return \ArrayType\EwsNonEmptyArrayOfItemChangesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsItemChangeType) {
            throw new InvalidArgumentException(sprintf('The ItemChange property can only contain items of type \StructType\EwsItemChangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ItemChange
     */
    public function getAttributeName(): string
    {
        return 'ItemChange';
    }
}
