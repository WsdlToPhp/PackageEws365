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
     * Meta informations extracted from the WSDL
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
     * Set Range value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsOccurrencesRangeType[] $range
     * @return \Ews\ArrayType\EwsArrayOfOccurrenceRangesType
     */
    public function setRange(array $range = array())
    {
        foreach ($range as $arrayOfOccurrenceRangesTypeRangeItem) {
            // validation for constraint: itemType
            if (!$arrayOfOccurrenceRangesTypeRangeItem instanceof \Ews\StructType\EwsOccurrencesRangeType) {
                throw new \InvalidArgumentException(sprintf('The Range property can only contain items of \Ews\StructType\EwsOccurrencesRangeType, "%s" given', is_object($arrayOfOccurrenceRangesTypeRangeItem) ? get_class($arrayOfOccurrenceRangesTypeRangeItem) : gettype($arrayOfOccurrenceRangesTypeRangeItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Range property can only contain items of \Ews\StructType\EwsOccurrencesRangeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfOccurrenceRangesType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
