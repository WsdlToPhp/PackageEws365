<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAttendeeConstraintItems ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAttendeeConstraintItems extends AbstractStructArrayBase
{
    /**
     * The AttendeeItem
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsAttendeeConstraintItem[]
     */
    protected array $AttendeeItem = [];
    /**
     * Constructor method for ArrayOfAttendeeConstraintItems
     * @uses EwsArrayOfAttendeeConstraintItems::setAttendeeItem()
     * @param \StructType\EwsAttendeeConstraintItem[] $attendeeItem
     */
    public function __construct(array $attendeeItem = [])
    {
        $this
            ->setAttendeeItem($attendeeItem);
    }
    /**
     * Get AttendeeItem value
     * @return \StructType\EwsAttendeeConstraintItem[]
     */
    public function getAttendeeItem(): array
    {
        return $this->AttendeeItem;
    }
    /**
     * This method is responsible for validating the values passed to the setAttendeeItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttendeeItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttendeeItemForArrayConstraintsFromSetAttendeeItem(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAttendeeConstraintItemsAttendeeItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfAttendeeConstraintItemsAttendeeItemItem instanceof \StructType\EwsAttendeeConstraintItem) {
                $invalidValues[] = is_object($arrayOfAttendeeConstraintItemsAttendeeItemItem) ? get_class($arrayOfAttendeeConstraintItemsAttendeeItemItem) : sprintf('%s(%s)', gettype($arrayOfAttendeeConstraintItemsAttendeeItemItem), var_export($arrayOfAttendeeConstraintItemsAttendeeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttendeeItem property can only contain items of type \StructType\EwsAttendeeConstraintItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AttendeeItem value
     * @throws InvalidArgumentException
     * @param \StructType\EwsAttendeeConstraintItem[] $attendeeItem
     * @return \ArrayType\EwsArrayOfAttendeeConstraintItems
     */
    public function setAttendeeItem(array $attendeeItem = []): self
    {
        // validation for constraint: array
        if ('' !== ($attendeeItemArrayErrorMessage = self::validateAttendeeItemForArrayConstraintsFromSetAttendeeItem($attendeeItem))) {
            throw new InvalidArgumentException($attendeeItemArrayErrorMessage, __LINE__);
        }
        $this->AttendeeItem = $attendeeItem;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsAttendeeConstraintItem|null
     */
    public function current(): ?\StructType\EwsAttendeeConstraintItem
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsAttendeeConstraintItem|null
     */
    public function item($index): ?\StructType\EwsAttendeeConstraintItem
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsAttendeeConstraintItem|null
     */
    public function first(): ?\StructType\EwsAttendeeConstraintItem
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsAttendeeConstraintItem|null
     */
    public function last(): ?\StructType\EwsAttendeeConstraintItem
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsAttendeeConstraintItem|null
     */
    public function offsetGet($offset): ?\StructType\EwsAttendeeConstraintItem
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsAttendeeConstraintItem $item
     * @return \ArrayType\EwsArrayOfAttendeeConstraintItems
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsAttendeeConstraintItem) {
            throw new InvalidArgumentException(sprintf('The AttendeeItem property can only contain items of type \StructType\EwsAttendeeConstraintItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttendeeItem
     */
    public function getAttributeName(): string
    {
        return 'AttendeeItem';
    }
}
