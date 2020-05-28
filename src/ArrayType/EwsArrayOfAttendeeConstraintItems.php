<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsAttendeeConstraintItem[]
     */
    public $AttendeeItem;
    /**
     * Constructor method for ArrayOfAttendeeConstraintItems
     * @uses EwsArrayOfAttendeeConstraintItems::setAttendeeItem()
     * @param \Ews\StructType\EwsAttendeeConstraintItem[] $attendeeItem
     */
    public function __construct(array $attendeeItem = array())
    {
        $this
            ->setAttendeeItem($attendeeItem);
    }
    /**
     * Get AttendeeItem value
     * @return \Ews\StructType\EwsAttendeeConstraintItem[]|null
     */
    public function getAttendeeItem()
    {
        return $this->AttendeeItem;
    }
    /**
     * This method is responsible for validating the values passed to the setAttendeeItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttendeeItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttendeeItemForArrayConstraintsFromSetAttendeeItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAttendeeConstraintItemsAttendeeItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfAttendeeConstraintItemsAttendeeItemItem instanceof \Ews\StructType\EwsAttendeeConstraintItem) {
                $invalidValues[] = is_object($arrayOfAttendeeConstraintItemsAttendeeItemItem) ? get_class($arrayOfAttendeeConstraintItemsAttendeeItemItem) : sprintf('%s(%s)', gettype($arrayOfAttendeeConstraintItemsAttendeeItemItem), var_export($arrayOfAttendeeConstraintItemsAttendeeItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttendeeItem property can only contain items of type \Ews\StructType\EwsAttendeeConstraintItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AttendeeItem value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttendeeConstraintItem[] $attendeeItem
     * @return \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems
     */
    public function setAttendeeItem(array $attendeeItem = array())
    {
        // validation for constraint: array
        if ('' !== ($attendeeItemArrayErrorMessage = self::validateAttendeeItemForArrayConstraintsFromSetAttendeeItem($attendeeItem))) {
            throw new \InvalidArgumentException($attendeeItemArrayErrorMessage, __LINE__);
        }
        $this->AttendeeItem = $attendeeItem;
        return $this;
    }
    /**
     * Add item to AttendeeItem value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttendeeConstraintItem $item
     * @return \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems
     */
    public function addToAttendeeItem(\Ews\StructType\EwsAttendeeConstraintItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsAttendeeConstraintItem) {
            throw new \InvalidArgumentException(sprintf('The AttendeeItem property can only contain items of type \Ews\StructType\EwsAttendeeConstraintItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AttendeeItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsAttendeeConstraintItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsAttendeeConstraintItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsAttendeeConstraintItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsAttendeeConstraintItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsAttendeeConstraintItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttendeeItem
     */
    public function getAttributeName()
    {
        return 'AttendeeItem';
    }
}
