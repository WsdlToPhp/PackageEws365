<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfAttendeesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfAttendeesType extends AbstractStructArrayBase
{
    /**
     * The Attendee
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsAttendeeType[]
     */
    public $Attendee;
    /**
     * Constructor method for NonEmptyArrayOfAttendeesType
     * @uses EwsNonEmptyArrayOfAttendeesType::setAttendee()
     * @param \Ews\StructType\EwsAttendeeType[] $attendee
     */
    public function __construct(array $attendee = array())
    {
        $this
            ->setAttendee($attendee);
    }
    /**
     * Get Attendee value
     * @return \Ews\StructType\EwsAttendeeType[]|null
     */
    public function getAttendee()
    {
        return $this->Attendee;
    }
    /**
     * Set Attendee value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttendeeType[] $attendee
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType
     */
    public function setAttendee(array $attendee = array())
    {
        foreach ($attendee as $nonEmptyArrayOfAttendeesTypeAttendeeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfAttendeesTypeAttendeeItem instanceof \Ews\StructType\EwsAttendeeType) {
                throw new \InvalidArgumentException(sprintf('The Attendee property can only contain items of \Ews\StructType\EwsAttendeeType, "%s" given', is_object($nonEmptyArrayOfAttendeesTypeAttendeeItem) ? get_class($nonEmptyArrayOfAttendeesTypeAttendeeItem) : gettype($nonEmptyArrayOfAttendeesTypeAttendeeItem)), __LINE__);
            }
        }
        $this->Attendee = $attendee;
        return $this;
    }
    /**
     * Add item to Attendee value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttendeeType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType
     */
    public function addToAttendee(\Ews\StructType\EwsAttendeeType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsAttendeeType) {
            throw new \InvalidArgumentException(sprintf('The Attendee property can only contain items of \Ews\StructType\EwsAttendeeType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Attendee[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsAttendeeType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsAttendeeType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsAttendeeType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsAttendeeType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsAttendeeType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Attendee
     */
    public function getAttributeName()
    {
        return 'Attendee';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType
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
