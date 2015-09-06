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
     * @var array
     */
    public $AttendeeItem;
    /**
     * Constructor method for ArrayOfAttendeeConstraintItems
     * @uses EwsArrayOfAttendeeConstraintItems::setAttendeeItem()
     * @param array $attendeeItem
     */
    public function __construct(array $attendeeItem = array())
    {
        $this
            ->setAttendeeItem($attendeeItem);
    }
    /**
     * Get AttendeeItem value
     * @return array
     */
    public function getAttendeeItem()
    {
        return $this->AttendeeItem;
    }
    /**
     * Set AttendeeItem value
     * @param array $attendeeItem
     * @return \Ews\ArrayType\EwsArrayOfAttendeeConstraintItems
     */
    public function setAttendeeItem(array $attendeeItem = array())
    {
        $this->AttendeeItem = $attendeeItem;
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
