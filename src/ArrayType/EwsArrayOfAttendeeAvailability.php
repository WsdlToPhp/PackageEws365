<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsAttendeeAvailability[]
     */
    public $AttendeeAvailability;
    /**
     * Constructor method for ArrayOfAttendeeAvailability
     * @uses EwsArrayOfAttendeeAvailability::setAttendeeAvailability()
     * @param \Ews\StructType\EwsAttendeeAvailability[] $attendeeAvailability
     */
    public function __construct(array $attendeeAvailability = array())
    {
        $this
            ->setAttendeeAvailability($attendeeAvailability);
    }
    /**
     * Get AttendeeAvailability value
     * @return \Ews\StructType\EwsAttendeeAvailability[]|null
     */
    public function getAttendeeAvailability()
    {
        return $this->AttendeeAvailability;
    }
    /**
     * This method is responsible for validating the values passed to the setAttendeeAvailability method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttendeeAvailability method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAttendeeAvailabilityForArrayConstraintsFromSetAttendeeAvailability(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAttendeeAvailabilityAttendeeAvailabilityItem) {
            // validation for constraint: itemType
            if (!$arrayOfAttendeeAvailabilityAttendeeAvailabilityItem instanceof \Ews\StructType\EwsAttendeeAvailability) {
                $invalidValues[] = is_object($arrayOfAttendeeAvailabilityAttendeeAvailabilityItem) ? get_class($arrayOfAttendeeAvailabilityAttendeeAvailabilityItem) : sprintf('%s(%s)', gettype($arrayOfAttendeeAvailabilityAttendeeAvailabilityItem), var_export($arrayOfAttendeeAvailabilityAttendeeAvailabilityItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AttendeeAvailability property can only contain items of type \Ews\StructType\EwsAttendeeAvailability, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AttendeeAvailability value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttendeeAvailability[] $attendeeAvailability
     * @return \Ews\ArrayType\EwsArrayOfAttendeeAvailability
     */
    public function setAttendeeAvailability(array $attendeeAvailability = array())
    {
        // validation for constraint: array
        if ('' !== ($attendeeAvailabilityArrayErrorMessage = self::validateAttendeeAvailabilityForArrayConstraintsFromSetAttendeeAvailability($attendeeAvailability))) {
            throw new \InvalidArgumentException($attendeeAvailabilityArrayErrorMessage, __LINE__);
        }
        $this->AttendeeAvailability = $attendeeAvailability;
        return $this;
    }
    /**
     * Add item to AttendeeAvailability value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAttendeeAvailability $item
     * @return \Ews\ArrayType\EwsArrayOfAttendeeAvailability
     */
    public function addToAttendeeAvailability(\Ews\StructType\EwsAttendeeAvailability $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsAttendeeAvailability) {
            throw new \InvalidArgumentException(sprintf('The AttendeeAvailability property can only contain items of type \Ews\StructType\EwsAttendeeAvailability, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AttendeeAvailability[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsAttendeeAvailability|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsAttendeeAvailability|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsAttendeeAvailability|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsAttendeeAvailability|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsAttendeeAvailability|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttendeeAvailability
     */
    public function getAttributeName()
    {
        return 'AttendeeAvailability';
    }
}
