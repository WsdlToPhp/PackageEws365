<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAttendeeAvailability ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAttendeeAvailability extends AbstractStructArrayBase
{
    /**
     * The AttendeeAvailability
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsAttendeeAvailability[]
     */
    protected array $AttendeeAvailability = [];
    /**
     * Constructor method for ArrayOfAttendeeAvailability
     * @uses EwsArrayOfAttendeeAvailability::setAttendeeAvailability()
     * @param \StructType\EwsAttendeeAvailability[] $attendeeAvailability
     */
    public function __construct(array $attendeeAvailability = [])
    {
        $this
            ->setAttendeeAvailability($attendeeAvailability);
    }
    /**
     * Get AttendeeAvailability value
     * @return \StructType\EwsAttendeeAvailability[]
     */
    public function getAttendeeAvailability(): array
    {
        return $this->AttendeeAvailability;
    }
    /**
     * This method is responsible for validating the values passed to the setAttendeeAvailability method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttendeeAvailability method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttendeeAvailabilityForArrayConstraintsFromSetAttendeeAvailability(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAttendeeAvailabilityAttendeeAvailabilityItem) {
            // validation for constraint: itemType
            if (!$arrayOfAttendeeAvailabilityAttendeeAvailabilityItem instanceof \StructType\EwsAttendeeAvailability) {
                $invalidValues[] = is_object($arrayOfAttendeeAvailabilityAttendeeAvailabilityItem) ? get_class($arrayOfAttendeeAvailabilityAttendeeAvailabilityItem) : sprintf('%s(%s)', gettype($arrayOfAttendeeAvailabilityAttendeeAvailabilityItem), var_export($arrayOfAttendeeAvailabilityAttendeeAvailabilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttendeeAvailability property can only contain items of type \StructType\EwsAttendeeAvailability, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AttendeeAvailability value
     * @throws InvalidArgumentException
     * @param \StructType\EwsAttendeeAvailability[] $attendeeAvailability
     * @return \ArrayType\EwsArrayOfAttendeeAvailability
     */
    public function setAttendeeAvailability(array $attendeeAvailability = []): self
    {
        // validation for constraint: array
        if ('' !== ($attendeeAvailabilityArrayErrorMessage = self::validateAttendeeAvailabilityForArrayConstraintsFromSetAttendeeAvailability($attendeeAvailability))) {
            throw new InvalidArgumentException($attendeeAvailabilityArrayErrorMessage, __LINE__);
        }
        $this->AttendeeAvailability = $attendeeAvailability;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsAttendeeAvailability|null
     */
    public function current(): ?\StructType\EwsAttendeeAvailability
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsAttendeeAvailability|null
     */
    public function item($index): ?\StructType\EwsAttendeeAvailability
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsAttendeeAvailability|null
     */
    public function first(): ?\StructType\EwsAttendeeAvailability
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsAttendeeAvailability|null
     */
    public function last(): ?\StructType\EwsAttendeeAvailability
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsAttendeeAvailability|null
     */
    public function offsetGet($offset): ?\StructType\EwsAttendeeAvailability
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsAttendeeAvailability $item
     * @return \ArrayType\EwsArrayOfAttendeeAvailability
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsAttendeeAvailability) {
            throw new InvalidArgumentException(sprintf('The AttendeeAvailability property can only contain items of type \StructType\EwsAttendeeAvailability, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttendeeAvailability
     */
    public function getAttributeName(): string
    {
        return 'AttendeeAvailability';
    }
}
