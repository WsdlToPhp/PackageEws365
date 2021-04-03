<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkingPeriod ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfWorkingPeriod extends AbstractStructArrayBase
{
    /**
     * The WorkingPeriod
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsWorkingPeriod[]
     */
    protected array $WorkingPeriod = [];
    /**
     * Constructor method for ArrayOfWorkingPeriod
     * @uses EwsArrayOfWorkingPeriod::setWorkingPeriod()
     * @param \StructType\EwsWorkingPeriod[] $workingPeriod
     */
    public function __construct(array $workingPeriod = [])
    {
        $this
            ->setWorkingPeriod($workingPeriod);
    }
    /**
     * Get WorkingPeriod value
     * @return \StructType\EwsWorkingPeriod[]
     */
    public function getWorkingPeriod(): array
    {
        return $this->WorkingPeriod;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkingPeriod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkingPeriod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkingPeriodForArrayConstraintsFromSetWorkingPeriod(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkingPeriodWorkingPeriodItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkingPeriodWorkingPeriodItem instanceof \StructType\EwsWorkingPeriod) {
                $invalidValues[] = is_object($arrayOfWorkingPeriodWorkingPeriodItem) ? get_class($arrayOfWorkingPeriodWorkingPeriodItem) : sprintf('%s(%s)', gettype($arrayOfWorkingPeriodWorkingPeriodItem), var_export($arrayOfWorkingPeriodWorkingPeriodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkingPeriod property can only contain items of type \StructType\EwsWorkingPeriod, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkingPeriod value
     * @throws InvalidArgumentException
     * @param \StructType\EwsWorkingPeriod[] $workingPeriod
     * @return \ArrayType\EwsArrayOfWorkingPeriod
     */
    public function setWorkingPeriod(array $workingPeriod = []): self
    {
        // validation for constraint: array
        if ('' !== ($workingPeriodArrayErrorMessage = self::validateWorkingPeriodForArrayConstraintsFromSetWorkingPeriod($workingPeriod))) {
            throw new InvalidArgumentException($workingPeriodArrayErrorMessage, __LINE__);
        }
        $this->WorkingPeriod = $workingPeriod;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsWorkingPeriod|null
     */
    public function current(): ?\StructType\EwsWorkingPeriod
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsWorkingPeriod|null
     */
    public function item($index): ?\StructType\EwsWorkingPeriod
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsWorkingPeriod|null
     */
    public function first(): ?\StructType\EwsWorkingPeriod
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsWorkingPeriod|null
     */
    public function last(): ?\StructType\EwsWorkingPeriod
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsWorkingPeriod|null
     */
    public function offsetGet($offset): ?\StructType\EwsWorkingPeriod
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsWorkingPeriod $item
     * @return \ArrayType\EwsArrayOfWorkingPeriod
     */
    public function add(\StructType\EwsWorkingPeriod $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkingPeriod
     */
    public function getAttributeName(): string
    {
        return 'WorkingPeriod';
    }
}
