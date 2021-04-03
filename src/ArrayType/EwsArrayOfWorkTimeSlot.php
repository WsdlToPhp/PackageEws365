<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkTimeSlot ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfWorkTimeSlot extends AbstractStructArrayBase
{
    /**
     * The TimeSlot
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsWorkTimeSlot[]
     */
    protected array $TimeSlot = [];
    /**
     * Constructor method for ArrayOfWorkTimeSlot
     * @uses EwsArrayOfWorkTimeSlot::setTimeSlot()
     * @param \StructType\EwsWorkTimeSlot[] $timeSlot
     */
    public function __construct(array $timeSlot = [])
    {
        $this
            ->setTimeSlot($timeSlot);
    }
    /**
     * Get TimeSlot value
     * @return \StructType\EwsWorkTimeSlot[]
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
        foreach ($values as $arrayOfWorkTimeSlotTimeSlotItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkTimeSlotTimeSlotItem instanceof \StructType\EwsWorkTimeSlot) {
                $invalidValues[] = is_object($arrayOfWorkTimeSlotTimeSlotItem) ? get_class($arrayOfWorkTimeSlotTimeSlotItem) : sprintf('%s(%s)', gettype($arrayOfWorkTimeSlotTimeSlotItem), var_export($arrayOfWorkTimeSlotTimeSlotItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TimeSlot property can only contain items of type \StructType\EwsWorkTimeSlot, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TimeSlot value
     * @throws InvalidArgumentException
     * @param \StructType\EwsWorkTimeSlot[] $timeSlot
     * @return \ArrayType\EwsArrayOfWorkTimeSlot
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
     * @return \StructType\EwsWorkTimeSlot|null
     */
    public function current(): ?\StructType\EwsWorkTimeSlot
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsWorkTimeSlot|null
     */
    public function item($index): ?\StructType\EwsWorkTimeSlot
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsWorkTimeSlot|null
     */
    public function first(): ?\StructType\EwsWorkTimeSlot
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsWorkTimeSlot|null
     */
    public function last(): ?\StructType\EwsWorkTimeSlot
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsWorkTimeSlot|null
     */
    public function offsetGet($offset): ?\StructType\EwsWorkTimeSlot
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsWorkTimeSlot $item
     * @return \ArrayType\EwsArrayOfWorkTimeSlot
     */
    public function add(\StructType\EwsWorkTimeSlot $item): self
    {
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
