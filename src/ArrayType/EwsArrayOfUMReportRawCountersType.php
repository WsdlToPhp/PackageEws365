<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUMReportRawCountersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUMReportRawCountersType extends AbstractStructArrayBase
{
    /**
     * The UMReportRawCounters
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsUMReportRawCountersType[]
     */
    protected array $UMReportRawCounters = [];
    /**
     * Constructor method for ArrayOfUMReportRawCountersType
     * @uses EwsArrayOfUMReportRawCountersType::setUMReportRawCounters()
     * @param \StructType\EwsUMReportRawCountersType[] $uMReportRawCounters
     */
    public function __construct(array $uMReportRawCounters = [])
    {
        $this
            ->setUMReportRawCounters($uMReportRawCounters);
    }
    /**
     * Get UMReportRawCounters value
     * @return \StructType\EwsUMReportRawCountersType[]
     */
    public function getUMReportRawCounters(): array
    {
        return $this->UMReportRawCounters;
    }
    /**
     * This method is responsible for validating the values passed to the setUMReportRawCounters method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUMReportRawCounters method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUMReportRawCountersForArrayConstraintsFromSetUMReportRawCounters(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUMReportRawCountersTypeUMReportRawCountersItem) {
            // validation for constraint: itemType
            if (!$arrayOfUMReportRawCountersTypeUMReportRawCountersItem instanceof \StructType\EwsUMReportRawCountersType) {
                $invalidValues[] = is_object($arrayOfUMReportRawCountersTypeUMReportRawCountersItem) ? get_class($arrayOfUMReportRawCountersTypeUMReportRawCountersItem) : sprintf('%s(%s)', gettype($arrayOfUMReportRawCountersTypeUMReportRawCountersItem), var_export($arrayOfUMReportRawCountersTypeUMReportRawCountersItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UMReportRawCounters property can only contain items of type \StructType\EwsUMReportRawCountersType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UMReportRawCounters value
     * @throws InvalidArgumentException
     * @param \StructType\EwsUMReportRawCountersType[] $uMReportRawCounters
     * @return \ArrayType\EwsArrayOfUMReportRawCountersType
     */
    public function setUMReportRawCounters(array $uMReportRawCounters = []): self
    {
        // validation for constraint: array
        if ('' !== ($uMReportRawCountersArrayErrorMessage = self::validateUMReportRawCountersForArrayConstraintsFromSetUMReportRawCounters($uMReportRawCounters))) {
            throw new InvalidArgumentException($uMReportRawCountersArrayErrorMessage, __LINE__);
        }
        $this->UMReportRawCounters = $uMReportRawCounters;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsUMReportRawCountersType|null
     */
    public function current(): ?\StructType\EwsUMReportRawCountersType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsUMReportRawCountersType|null
     */
    public function item($index): ?\StructType\EwsUMReportRawCountersType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsUMReportRawCountersType|null
     */
    public function first(): ?\StructType\EwsUMReportRawCountersType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsUMReportRawCountersType|null
     */
    public function last(): ?\StructType\EwsUMReportRawCountersType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsUMReportRawCountersType|null
     */
    public function offsetGet($offset): ?\StructType\EwsUMReportRawCountersType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsUMReportRawCountersType $item
     * @return \ArrayType\EwsArrayOfUMReportRawCountersType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsUMReportRawCountersType) {
            throw new InvalidArgumentException(sprintf('The UMReportRawCounters property can only contain items of type \StructType\EwsUMReportRawCountersType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UMReportRawCounters
     */
    public function getAttributeName(): string
    {
        return 'UMReportRawCounters';
    }
}
