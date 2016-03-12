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
     * Meta informations extracted from the WSDL
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
     * Set AttendeeItem value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttendeeConstraintItem[] $attendeeItem
     * @return \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems
     */
    public function setAttendeeItem(array $attendeeItem = array())
    {
        foreach ($attendeeItem as $arrayOfAttendeeConstraintItemsAttendeeItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfAttendeeConstraintItemsAttendeeItemItem instanceof \Ews\StructType\EwsAttendeeConstraintItem) {
                throw new \InvalidArgumentException(sprintf('The AttendeeItem property can only contain items of \Ews\StructType\EwsAttendeeConstraintItem, "%s" given', is_object($arrayOfAttendeeConstraintItemsAttendeeItemItem) ? get_class($arrayOfAttendeeConstraintItemsAttendeeItemItem) : gettype($arrayOfAttendeeConstraintItemsAttendeeItemItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The AttendeeItem property can only contain items of \Ews\StructType\EwsAttendeeConstraintItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
