<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNonIndexableItemStatisticsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of non indexable item statistics.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfNonIndexableItemStatisticsType extends AbstractStructArrayBase
{
    /**
     * The NonIndexableItemStatistic
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonIndexableItemStatisticType[]
     */
    public $NonIndexableItemStatistic;
    /**
     * Constructor method for ArrayOfNonIndexableItemStatisticsType
     * @uses EwsArrayOfNonIndexableItemStatisticsType::setNonIndexableItemStatistic()
     * @param \Ews\StructType\EwsNonIndexableItemStatisticType[] $nonIndexableItemStatistic
     */
    public function __construct(array $nonIndexableItemStatistic = array())
    {
        $this
            ->setNonIndexableItemStatistic($nonIndexableItemStatistic);
    }
    /**
     * Get NonIndexableItemStatistic value
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType[]|null
     */
    public function getNonIndexableItemStatistic()
    {
        return $this->NonIndexableItemStatistic;
    }
    /**
     * This method is responsible for validating the values passed to the setNonIndexableItemStatistic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNonIndexableItemStatistic method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNonIndexableItemStatisticForArrayConstraintsFromSetNonIndexableItemStatistic(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem) {
            // validation for constraint: itemType
            if (!$arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem instanceof \Ews\StructType\EwsNonIndexableItemStatisticType) {
                $invalidValues[] = is_object($arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem) ? get_class($arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem) : sprintf('%s(%s)', gettype($arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem), var_export($arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NonIndexableItemStatistic property can only contain items of type \Ews\StructType\EwsNonIndexableItemStatisticType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NonIndexableItemStatistic value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNonIndexableItemStatisticType[] $nonIndexableItemStatistic
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     */
    public function setNonIndexableItemStatistic(array $nonIndexableItemStatistic = array())
    {
        // validation for constraint: array
        if ('' !== ($nonIndexableItemStatisticArrayErrorMessage = self::validateNonIndexableItemStatisticForArrayConstraintsFromSetNonIndexableItemStatistic($nonIndexableItemStatistic))) {
            throw new \InvalidArgumentException($nonIndexableItemStatisticArrayErrorMessage, __LINE__);
        }
        $this->NonIndexableItemStatistic = $nonIndexableItemStatistic;
        return $this;
    }
    /**
     * Add item to NonIndexableItemStatistic value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNonIndexableItemStatisticType $item
     * @return \Ews\ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     */
    public function addToNonIndexableItemStatistic(\Ews\StructType\EwsNonIndexableItemStatisticType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsNonIndexableItemStatisticType) {
            throw new \InvalidArgumentException(sprintf('The NonIndexableItemStatistic property can only contain items of type \Ews\StructType\EwsNonIndexableItemStatisticType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NonIndexableItemStatistic[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsNonIndexableItemStatisticType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NonIndexableItemStatistic
     */
    public function getAttributeName()
    {
        return 'NonIndexableItemStatistic';
    }
}
