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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setAttendee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttendee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttendeeForArrayConstraintsFromSetAttendee(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfAttendeesTypeAttendeeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfAttendeesTypeAttendeeItem instanceof \Ews\StructType\EwsAttendeeType) {
                $invalidValues[] = is_object($nonEmptyArrayOfAttendeesTypeAttendeeItem) ? get_class($nonEmptyArrayOfAttendeesTypeAttendeeItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfAttendeesTypeAttendeeItem), var_export($nonEmptyArrayOfAttendeesTypeAttendeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attendee property can only contain items of type \Ews\StructType\EwsAttendeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Attendee value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttendeeType[] $attendee
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfAttendeesType
     */
    public function setAttendee(array $attendee = array())
    {
        // validation for constraint: array
        if ('' !== ($attendeeArrayErrorMessage = self::validateAttendeeForArrayConstraintsFromSetAttendee($attendee))) {
            throw new \InvalidArgumentException($attendeeArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Attendee property can only contain items of type \Ews\StructType\EwsAttendeeType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
