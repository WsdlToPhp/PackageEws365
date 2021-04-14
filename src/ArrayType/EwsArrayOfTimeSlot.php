<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTimeSlot ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTimeSlot extends AbstractStructArrayBase
{
    /**
     * The TimeSlot
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsTimeSlot[]
     */
    protected array $TimeSlot = [];
    /**
     * Constructor method for ArrayOfTimeSlot
     * @uses EwsArrayOfTimeSlot::setTimeSlot()
     * @param \StructType\EwsTimeSlot[] $timeSlot
     */
    public function __construct(array $timeSlot = [])
    {
        $this
            ->setTimeSlot($timeSlot);
    }
    /**
     * Get TimeSlot value
     * @return \StructType\EwsTimeSlot[]
     */
    public function getTimeSlot(): array
    {
        return $this->TimeSlot;
    }
    /**
     * This method is responsible for validating the values passed to the setTimeSlot method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTimeSlot method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTimeSlotForArrayConstraintsFromSetTimeSlot(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTimeSlotTimeSlotItem) {
            // validation for constraint: itemType
            if (!$arrayOfTimeSlotTimeSlotItem instanceof \StructType\EwsTimeSlot) {
                $invalidValues[] = is_object($arrayOfTimeSlotTimeSlotItem) ? get_class($arrayOfTimeSlotTimeSlotItem) : sprintf('%s(%s)', gettype($arrayOfTimeSlotTimeSlotItem), var_export($arrayOfTimeSlotTimeSlotItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TimeSlot property can only contain items of type \StructType\EwsTimeSlot, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TimeSlot value
     * @throws InvalidArgumentException
     * @param \StructType\EwsTimeSlot[] $timeSlot
     * @return \ArrayType\EwsArrayOfTimeSlot
     */
    public function setTimeSlot(array $timeSlot = []): self
    {
        // validation for constraint: array
        if ('' !== ($timeSlotArrayErrorMessage = self::validateTimeSlotForArrayConstraintsFromSetTimeSlot($timeSlot))) {
            throw new InvalidArgumentException($timeSlotArrayErrorMessage, __LINE__);
        }
        $this->TimeSlot = $timeSlot;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsTimeSlot|null
     */
    public function current(): ?\StructType\EwsTimeSlot
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsTimeSlot|null
     */
    public function item($index): ?\StructType\EwsTimeSlot
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsTimeSlot|null
     */
    public function first(): ?\StructType\EwsTimeSlot
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsTimeSlot|null
     */
    public function last(): ?\StructType\EwsTimeSlot
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsTimeSlot|null
     */
    public function offsetGet($offset): ?\StructType\EwsTimeSlot
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsTimeSlot $item
     * @return \ArrayType\EwsArrayOfTimeSlot
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsTimeSlot) {
            throw new InvalidArgumentException(sprintf('The TimeSlot property can only contain items of type \StructType\EwsTimeSlot, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TimeSlot
     */
    public function getAttributeName(): string
    {
        return 'TimeSlot';
    }
}
