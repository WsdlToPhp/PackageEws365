<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkHours ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfWorkHours extends AbstractStructArrayBase
{
    /**
     * The WorkHours
     * Meta information extracted from the WSDL
     * - maxOccurs: 7
     * - minOccurs: 0
     * @var \StructType\EwsWorkHoursType[]
     */
    protected array $WorkHours = [];
    /**
     * Constructor method for ArrayOfWorkHours
     * @uses EwsArrayOfWorkHours::setWorkHours()
     * @param \StructType\EwsWorkHoursType[] $workHours
     */
    public function __construct(array $workHours = [])
    {
        $this
            ->setWorkHours($workHours);
    }
    /**
     * Get WorkHours value
     * @return \StructType\EwsWorkHoursType[]
     */
    public function getWorkHours(): array
    {
        return $this->WorkHours;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkHours method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkHours method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkHoursForArrayConstraintsFromSetWorkHours(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkHoursWorkHoursItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkHoursWorkHoursItem instanceof \StructType\EwsWorkHoursType) {
                $invalidValues[] = is_object($arrayOfWorkHoursWorkHoursItem) ? get_class($arrayOfWorkHoursWorkHoursItem) : sprintf('%s(%s)', gettype($arrayOfWorkHoursWorkHoursItem), var_export($arrayOfWorkHoursWorkHoursItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkHours property can only contain items of type \StructType\EwsWorkHoursType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkHours value
     * @throws InvalidArgumentException
     * @param \StructType\EwsWorkHoursType[] $workHours
     * @return \ArrayType\EwsArrayOfWorkHours
     */
    public function setWorkHours(array $workHours = []): self
    {
        // validation for constraint: array
        if ('' !== ($workHoursArrayErrorMessage = self::validateWorkHoursForArrayConstraintsFromSetWorkHours($workHours))) {
            throw new InvalidArgumentException($workHoursArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($workHours) && count($workHours) > 7) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 7', count($workHours)), __LINE__);
        }
        $this->WorkHours = $workHours;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsWorkHoursType|null
     */
    public function current(): ?\StructType\EwsWorkHoursType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsWorkHoursType|null
     */
    public function item($index): ?\StructType\EwsWorkHoursType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsWorkHoursType|null
     */
    public function first(): ?\StructType\EwsWorkHoursType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsWorkHoursType|null
     */
    public function last(): ?\StructType\EwsWorkHoursType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsWorkHoursType|null
     */
    public function offsetGet($offset): ?\StructType\EwsWorkHoursType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsWorkHoursType $item
     * @return \ArrayType\EwsArrayOfWorkHours
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsWorkHoursType) {
            throw new InvalidArgumentException(sprintf('The WorkHours property can only contain items of type \StructType\EwsWorkHoursType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkHours
     */
    public function getAttributeName(): string
    {
        return 'WorkHours';
    }
}
