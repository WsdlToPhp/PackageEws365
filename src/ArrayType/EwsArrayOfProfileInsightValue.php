<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProfileInsightValue ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfProfileInsightValue extends AbstractStructArrayBase
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsProfileInsightValue[]
     */
    protected array $Item = [];
    /**
     * Constructor method for ArrayOfProfileInsightValue
     * @uses EwsArrayOfProfileInsightValue::setItem()
     * @param \StructType\EwsProfileInsightValue[] $item
     */
    public function __construct(array $item = [])
    {
        $this
            ->setItem($item);
    }
    /**
     * Get Item value
     * @return \StructType\EwsProfileInsightValue[]
     */
    public function getItem(): array
    {
        return $this->Item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfProfileInsightValueItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfProfileInsightValueItemItem instanceof \StructType\EwsProfileInsightValue) {
                $invalidValues[] = is_object($arrayOfProfileInsightValueItemItem) ? get_class($arrayOfProfileInsightValueItemItem) : sprintf('%s(%s)', gettype($arrayOfProfileInsightValueItemItem), var_export($arrayOfProfileInsightValueItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Item property can only contain items of type \StructType\EwsProfileInsightValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Item value
     * @throws InvalidArgumentException
     * @param \StructType\EwsProfileInsightValue[] $item
     * @return \ArrayType\EwsArrayOfProfileInsightValue
     */
    public function setItem(array $item = []): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->Item = $item;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsProfileInsightValue|null
     */
    public function current(): ?\StructType\EwsProfileInsightValue
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsProfileInsightValue|null
     */
    public function item($index): ?\StructType\EwsProfileInsightValue
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsProfileInsightValue|null
     */
    public function first(): ?\StructType\EwsProfileInsightValue
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsProfileInsightValue|null
     */
    public function last(): ?\StructType\EwsProfileInsightValue
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsProfileInsightValue|null
     */
    public function offsetGet($offset): ?\StructType\EwsProfileInsightValue
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsProfileInsightValue $item
     * @return \ArrayType\EwsArrayOfProfileInsightValue
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsProfileInsightValue) {
            throw new InvalidArgumentException(sprintf('The Item property can only contain items of type \StructType\EwsProfileInsightValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
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
