<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsNonIndexableItemStatisticType[]
     */
    protected array $NonIndexableItemStatistic = [];
    /**
     * Constructor method for ArrayOfNonIndexableItemStatisticsType
     * @uses EwsArrayOfNonIndexableItemStatisticsType::setNonIndexableItemStatistic()
     * @param \StructType\EwsNonIndexableItemStatisticType[] $nonIndexableItemStatistic
     */
    public function __construct(array $nonIndexableItemStatistic = [])
    {
        $this
            ->setNonIndexableItemStatistic($nonIndexableItemStatistic);
    }
    /**
     * Get NonIndexableItemStatistic value
     * @return \StructType\EwsNonIndexableItemStatisticType[]
     */
    public function getNonIndexableItemStatistic(): array
    {
        return $this->NonIndexableItemStatistic;
    }
    /**
     * This method is responsible for validating the values passed to the setNonIndexableItemStatistic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNonIndexableItemStatistic method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNonIndexableItemStatisticForArrayConstraintsFromSetNonIndexableItemStatistic(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem) {
            // validation for constraint: itemType
            if (!$arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem instanceof \StructType\EwsNonIndexableItemStatisticType) {
                $invalidValues[] = is_object($arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem) ? get_class($arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem) : sprintf('%s(%s)', gettype($arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem), var_export($arrayOfNonIndexableItemStatisticsTypeNonIndexableItemStatisticItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NonIndexableItemStatistic property can only contain items of type \StructType\EwsNonIndexableItemStatisticType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set NonIndexableItemStatistic value
     * @throws InvalidArgumentException
     * @param \StructType\EwsNonIndexableItemStatisticType[] $nonIndexableItemStatistic
     * @return \ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     */
    public function setNonIndexableItemStatistic(array $nonIndexableItemStatistic = []): self
    {
        // validation for constraint: array
        if ('' !== ($nonIndexableItemStatisticArrayErrorMessage = self::validateNonIndexableItemStatisticForArrayConstraintsFromSetNonIndexableItemStatistic($nonIndexableItemStatistic))) {
            throw new InvalidArgumentException($nonIndexableItemStatisticArrayErrorMessage, __LINE__);
        }
        $this->NonIndexableItemStatistic = $nonIndexableItemStatistic;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsNonIndexableItemStatisticType|null
     */
    public function current(): ?\StructType\EwsNonIndexableItemStatisticType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsNonIndexableItemStatisticType|null
     */
    public function item($index): ?\StructType\EwsNonIndexableItemStatisticType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsNonIndexableItemStatisticType|null
     */
    public function first(): ?\StructType\EwsNonIndexableItemStatisticType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsNonIndexableItemStatisticType|null
     */
    public function last(): ?\StructType\EwsNonIndexableItemStatisticType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsNonIndexableItemStatisticType|null
     */
    public function offsetGet($offset): ?\StructType\EwsNonIndexableItemStatisticType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsNonIndexableItemStatisticType $item
     * @return \ArrayType\EwsArrayOfNonIndexableItemStatisticsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsNonIndexableItemStatisticType) {
            throw new InvalidArgumentException(sprintf('The NonIndexableItemStatistic property can only contain items of type \StructType\EwsNonIndexableItemStatisticType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NonIndexableItemStatistic
     */
    public function getAttributeName(): string
    {
        return 'NonIndexableItemStatistic';
    }
}
