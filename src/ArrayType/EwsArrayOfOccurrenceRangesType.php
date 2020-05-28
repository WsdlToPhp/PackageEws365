<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsOccurrencesRangeType[]
     */
    public $Range;
    /**
     * Constructor method for ArrayOfOccurrenceRangesType
     * @uses EwsArrayOfOccurrenceRangesType::setRange()
     * @param \Ews\StructType\EwsOccurrencesRangeType[] $range
     */
    public function __construct(array $range = array())
    {
        $this
            ->setRange($range);
    }
    /**
     * Get Range value
     * @return \Ews\StructType\EwsOccurrencesRangeType[]|null
     */
    public function getRange()
    {
        return $this->Range;
    }
    /**
     * This method is responsible for validating the values passed to the setRange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRange method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRangeForArrayConstraintsFromSetRange(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOccurrenceRangesTypeRangeItem) {
            // validation for constraint: itemType
            if (!$arrayOfOccurrenceRangesTypeRangeItem instanceof \Ews\StructType\EwsOccurrencesRangeType) {
                $invalidValues[] = is_object($arrayOfOccurrenceRangesTypeRangeItem) ? get_class($arrayOfOccurrenceRangesTypeRangeItem) : sprintf('%s(%s)', gettype($arrayOfOccurrenceRangesTypeRangeItem), var_export($arrayOfOccurrenceRangesTypeRangeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Range property can only contain items of type \Ews\StructType\EwsOccurrencesRangeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Range value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsOccurrencesRangeType[] $range
     * @return \Ews\ArrayType\EwsArrayOfOccurrenceRangesType
     */
    public function setRange(array $range = array())
    {
        // validation for constraint: array
        if ('' !== ($rangeArrayErrorMessage = self::validateRangeForArrayConstraintsFromSetRange($range))) {
            throw new \InvalidArgumentException($rangeArrayErrorMessage, __LINE__);
        }
        $this->Range = $range;
        return $this;
    }
    /**
     * Add item to Range value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsOccurrencesRangeType $item
     * @return \Ews\ArrayType\EwsArrayOfOccurrenceRangesType
     */
    public function addToRange(\Ews\StructType\EwsOccurrencesRangeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsOccurrencesRangeType) {
            throw new \InvalidArgumentException(sprintf('The Range property can only contain items of type \Ews\StructType\EwsOccurrencesRangeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Range[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsOccurrencesRangeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsOccurrencesRangeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsOccurrencesRangeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsOccurrencesRangeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsOccurrencesRangeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Range
     */
    public function getAttributeName()
    {
        return 'Range';
    }
}
