<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTimeSlot ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfTimeSlot extends AbstractStructArrayBase
{
    /**
     * The TimeSlot
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsTimeSlot[]
     */
    public $TimeSlot;
    /**
     * Constructor method for ArrayOfTimeSlot
     * @uses EwsArrayOfTimeSlot::setTimeSlot()
     * @param \Ews\StructType\EwsTimeSlot[] $timeSlot
     */
    public function __construct(array $timeSlot = array())
    {
        $this
            ->setTimeSlot($timeSlot);
    }
    /**
     * Get TimeSlot value
     * @return \Ews\StructType\EwsTimeSlot[]|null
     */
    public function getTimeSlot()
    {
        return $this->TimeSlot;
    }
    /**
     * This method is responsible for validating the values passed to the setTimeSlot method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTimeSlot method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTimeSlotForArrayConstraintsFromSetTimeSlot(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTimeSlotTimeSlotItem) {
            // validation for constraint: itemType
            if (!$arrayOfTimeSlotTimeSlotItem instanceof \Ews\StructType\EwsTimeSlot) {
                $invalidValues[] = is_object($arrayOfTimeSlotTimeSlotItem) ? get_class($arrayOfTimeSlotTimeSlotItem) : sprintf('%s(%s)', gettype($arrayOfTimeSlotTimeSlotItem), var_export($arrayOfTimeSlotTimeSlotItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TimeSlot property can only contain items of type \Ews\StructType\EwsTimeSlot, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TimeSlot value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTimeSlot[] $timeSlot
     * @return \Ews\ArrayType\EwsArrayOfTimeSlot
     */
    public function setTimeSlot(array $timeSlot = array())
    {
        // validation for constraint: array
        if ('' !== ($timeSlotArrayErrorMessage = self::validateTimeSlotForArrayConstraintsFromSetTimeSlot($timeSlot))) {
            throw new \InvalidArgumentException($timeSlotArrayErrorMessage, __LINE__);
        }
        $this->TimeSlot = $timeSlot;
        return $this;
    }
    /**
     * Add item to TimeSlot value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTimeSlot $item
     * @return \Ews\ArrayType\EwsArrayOfTimeSlot
     */
    public function addToTimeSlot(\Ews\StructType\EwsTimeSlot $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsTimeSlot) {
            throw new \InvalidArgumentException(sprintf('The TimeSlot property can only contain items of type \Ews\StructType\EwsTimeSlot, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TimeSlot[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsTimeSlot|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsTimeSlot|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsTimeSlot|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsTimeSlot|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsTimeSlot|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TimeSlot
     */
    public function getAttributeName()
    {
        return 'TimeSlot';
    }
}
