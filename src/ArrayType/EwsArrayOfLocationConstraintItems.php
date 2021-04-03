<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsLocationConstraintItem[]
     */
    protected array $LocationItem = [];
    /**
     * Constructor method for ArrayOfLocationConstraintItems
     * @uses EwsArrayOfLocationConstraintItems::setLocationItem()
     * @param \StructType\EwsLocationConstraintItem[] $locationItem
     */
    public function __construct(array $locationItem = [])
    {
        $this
            ->setLocationItem($locationItem);
    }
    /**
     * Get LocationItem value
     * @return \StructType\EwsLocationConstraintItem[]
     */
    public function getLocationItem(): array
    {
        return $this->LocationItem;
    }
    /**
     * This method is responsible for validating the values passed to the setLocationItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocationItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocationItemForArrayConstraintsFromSetLocationItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLocationConstraintItemsLocationItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfLocationConstraintItemsLocationItemItem instanceof \StructType\EwsLocationConstraintItem) {
                $invalidValues[] = is_object($arrayOfLocationConstraintItemsLocationItemItem) ? get_class($arrayOfLocationConstraintItemsLocationItemItem) : sprintf('%s(%s)', gettype($arrayOfLocationConstraintItemsLocationItemItem), var_export($arrayOfLocationConstraintItemsLocationItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LocationItem property can only contain items of type \StructType\EwsLocationConstraintItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LocationItem value
     * @throws InvalidArgumentException
     * @param \StructType\EwsLocationConstraintItem[] $locationItem
     * @return \ArrayType\EwsArrayOfLocationConstraintItems
     */
    public function setLocationItem(array $locationItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($locationItemArrayErrorMessage = self::validateLocationItemForArrayConstraintsFromSetLocationItem($locationItem))) {
            throw new InvalidArgumentException($locationItemArrayErrorMessage, __LINE__);
        }
        $this->LocationItem = $locationItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsLocationConstraintItem|null
     */
    public function current(): ?\StructType\EwsLocationConstraintItem
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsLocationConstraintItem|null
     */
    public function item($index): ?\StructType\EwsLocationConstraintItem
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsLocationConstraintItem|null
     */
    public function first(): ?\StructType\EwsLocationConstraintItem
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsLocationConstraintItem|null
     */
    public function last(): ?\StructType\EwsLocationConstraintItem
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsLocationConstraintItem|null
     */
    public function offsetGet($offset): ?\StructType\EwsLocationConstraintItem
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsLocationConstraintItem $item
     * @return \ArrayType\EwsArrayOfLocationConstraintItems
     */
    public function add(\StructType\EwsLocationConstraintItem $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LocationItem
     */
    public function getAttributeName(): string
    {
        return 'LocationItem';
    }
}
