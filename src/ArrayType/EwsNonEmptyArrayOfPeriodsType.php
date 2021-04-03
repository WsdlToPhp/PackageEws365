<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfPeriodsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfPeriodsType extends AbstractStructArrayBase
{
    /**
     * The Period
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsPeriodType[]
     */
    protected array $Period = [];
    /**
     * Constructor method for NonEmptyArrayOfPeriodsType
     * @uses EwsNonEmptyArrayOfPeriodsType::setPeriod()
     * @param \StructType\EwsPeriodType[] $period
     */
    public function __construct(array $period = [])
    {
        $this
            ->setPeriod($period);
    }
    /**
     * Get Period value
     * @return \StructType\EwsPeriodType[]
     */
    public function getPeriod(): array
    {
        return $this->Period;
    }
    /**
     * This method is responsible for validating the values passed to the setPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPeriod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePeriodForArrayConstraintsFromSetPeriod(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfPeriodsTypePeriodItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfPeriodsTypePeriodItem instanceof \StructType\EwsPeriodType) {
                $invalidValues[] = is_object($nonEmptyArrayOfPeriodsTypePeriodItem) ? get_class($nonEmptyArrayOfPeriodsTypePeriodItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfPeriodsTypePeriodItem), var_export($nonEmptyArrayOfPeriodsTypePeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Period property can only contain items of type \StructType\EwsPeriodType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Period value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPeriodType[] $period
     * @return \ArrayType\EwsNonEmptyArrayOfPeriodsType
     */
    public function setPeriod(array $period = []): self
    {
        // validation for constraint: array
        if ('' !== ($periodArrayErrorMessage = self::validatePeriodForArrayConstraintsFromSetPeriod($period))) {
            throw new InvalidArgumentException($periodArrayErrorMessage, __LINE__);
        }
        $this->Period = $period;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPeriodType|null
     */
    public function current(): ?\StructType\EwsPeriodType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPeriodType|null
     */
    public function item($index): ?\StructType\EwsPeriodType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPeriodType|null
     */
    public function first(): ?\StructType\EwsPeriodType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPeriodType|null
     */
    public function last(): ?\StructType\EwsPeriodType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPeriodType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPeriodType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPeriodType $item
     * @return \ArrayType\EwsNonEmptyArrayOfPeriodsType
     */
    public function add(\StructType\EwsPeriodType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Period
     */
    public function getAttributeName(): string
    {
        return 'Period';
    }
}
