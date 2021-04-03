<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsAttendeeType[]
     */
    protected array $Attendee = [];
    /**
     * Constructor method for NonEmptyArrayOfAttendeesType
     * @uses EwsNonEmptyArrayOfAttendeesType::setAttendee()
     * @param \StructType\EwsAttendeeType[] $attendee
     */
    public function __construct(array $attendee = [])
    {
        $this
            ->setAttendee($attendee);
    }
    /**
     * Get Attendee value
     * @return \StructType\EwsAttendeeType[]
     */
    public function getAttendee(): array
    {
        return $this->Attendee;
    }
    /**
     * This method is responsible for validating the values passed to the setAttendee method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttendee method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttendeeForArrayConstraintsFromSetAttendee(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfAttendeesTypeAttendeeItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfAttendeesTypeAttendeeItem instanceof \StructType\EwsAttendeeType) {
                $invalidValues[] = is_object($nonEmptyArrayOfAttendeesTypeAttendeeItem) ? get_class($nonEmptyArrayOfAttendeesTypeAttendeeItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfAttendeesTypeAttendeeItem), var_export($nonEmptyArrayOfAttendeesTypeAttendeeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Attendee property can only contain items of type \StructType\EwsAttendeeType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Attendee value
     * @throws InvalidArgumentException
     * @param \StructType\EwsAttendeeType[] $attendee
     * @return \ArrayType\EwsNonEmptyArrayOfAttendeesType
     */
    public function setAttendee(array $attendee = []): self
    {
        // validation for constraint: array
        if ('' !== ($attendeeArrayErrorMessage = self::validateAttendeeForArrayConstraintsFromSetAttendee($attendee))) {
            throw new InvalidArgumentException($attendeeArrayErrorMessage, __LINE__);
        }
        $this->Attendee = $attendee;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsAttendeeType|null
     */
    public function current(): ?\StructType\EwsAttendeeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsAttendeeType|null
     */
    public function item($index): ?\StructType\EwsAttendeeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsAttendeeType|null
     */
    public function first(): ?\StructType\EwsAttendeeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsAttendeeType|null
     */
    public function last(): ?\StructType\EwsAttendeeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsAttendeeType|null
     */
    public function offsetGet($offset): ?\StructType\EwsAttendeeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsAttendeeType $item
     * @return \ArrayType\EwsNonEmptyArrayOfAttendeesType
     */
    public function add(\StructType\EwsAttendeeType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Attendee
     */
    public function getAttributeName(): string
    {
        return 'Attendee';
    }
}
