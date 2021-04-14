<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOccurrenceRangesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfOccurrenceRangesType extends AbstractStructArrayBase
{
    /**
     * The Range
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsOccurrencesRangeType[]
     */
    protected array $Range = [];
    /**
     * Constructor method for ArrayOfOccurrenceRangesType
     * @uses EwsArrayOfOccurrenceRangesType::setRange()
     * @param \StructType\EwsOccurrencesRangeType[] $range
     */
    public function __construct(array $range = [])
    {
        $this
            ->setRange($range);
    }
    /**
     * Get Range value
     * @return \StructType\EwsOccurrencesRangeType[]
     */
    public function getRange(): array
    {
        return $this->Range;
    }
    /**
     * This method is responsible for validating the values passed to the setRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRangeForArrayConstraintsFromSetRange(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOccurrenceRangesTypeRangeItem) {
            // validation for constraint: itemType
            if (!$arrayOfOccurrenceRangesTypeRangeItem instanceof \StructType\EwsOccurrencesRangeType) {
                $invalidValues[] = is_object($arrayOfOccurrenceRangesTypeRangeItem) ? get_class($arrayOfOccurrenceRangesTypeRangeItem) : sprintf('%s(%s)', gettype($arrayOfOccurrenceRangesTypeRangeItem), var_export($arrayOfOccurrenceRangesTypeRangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Range property can only contain items of type \StructType\EwsOccurrencesRangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Range value
     * @throws InvalidArgumentException
     * @param \StructType\EwsOccurrencesRangeType[] $range
     * @return \ArrayType\EwsArrayOfOccurrenceRangesType
     */
    public function setRange(array $range = []): self
    {
        // validation for constraint: array
        if ('' !== ($rangeArrayErrorMessage = self::validateRangeForArrayConstraintsFromSetRange($range))) {
            throw new InvalidArgumentException($rangeArrayErrorMessage, __LINE__);
        }
        $this->Range = $range;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsOccurrencesRangeType|null
     */
    public function current(): ?\StructType\EwsOccurrencesRangeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsOccurrencesRangeType|null
     */
    public function item($index): ?\StructType\EwsOccurrencesRangeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsOccurrencesRangeType|null
     */
    public function first(): ?\StructType\EwsOccurrencesRangeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsOccurrencesRangeType|null
     */
    public function last(): ?\StructType\EwsOccurrencesRangeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsOccurrencesRangeType|null
     */
    public function offsetGet($offset): ?\StructType\EwsOccurrencesRangeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsOccurrencesRangeType $item
     * @return \ArrayType\EwsArrayOfOccurrenceRangesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsOccurrencesRangeType) {
            throw new InvalidArgumentException(sprintf('The Range property can only contain items of type \StructType\EwsOccurrencesRangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Range
     */
    public function getAttributeName(): string
    {
        return 'Range';
    }
}
