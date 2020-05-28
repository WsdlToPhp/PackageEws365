<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkTimeSlot ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfWorkTimeSlot extends AbstractStructArrayBase
{
    /**
     * The TimeSlot
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsWorkTimeSlot[]
     */
    public $TimeSlot;
    /**
     * Constructor method for ArrayOfWorkTimeSlot
     * @uses EwsArrayOfWorkTimeSlot::setTimeSlot()
     * @param \Ews\StructType\EwsWorkTimeSlot[] $timeSlot
     */
    public function __construct(array $timeSlot = array())
    {
        $this
            ->setTimeSlot($timeSlot);
    }
    /**
     * Get TimeSlot value
     * @return \Ews\StructType\EwsWorkTimeSlot[]|null
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
        foreach ($values as $arrayOfWorkTimeSlotTimeSlotItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkTimeSlotTimeSlotItem instanceof \Ews\StructType\EwsWorkTimeSlot) {
                $invalidValues[] = is_object($arrayOfWorkTimeSlotTimeSlotItem) ? get_class($arrayOfWorkTimeSlotTimeSlotItem) : sprintf('%s(%s)', gettype($arrayOfWorkTimeSlotTimeSlotItem), var_export($arrayOfWorkTimeSlotTimeSlotItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TimeSlot property can only contain items of type \Ews\StructType\EwsWorkTimeSlot, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TimeSlot value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsWorkTimeSlot[] $timeSlot
     * @return \Ews\ArrayType\EwsArrayOfWorkTimeSlot
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
     * @param \Ews\StructType\EwsWorkTimeSlot $item
     * @return \Ews\ArrayType\EwsArrayOfWorkTimeSlot
     */
    public function addToTimeSlot(\Ews\StructType\EwsWorkTimeSlot $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsWorkTimeSlot) {
            throw new \InvalidArgumentException(sprintf('The TimeSlot property can only contain items of type \Ews\StructType\EwsWorkTimeSlot, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TimeSlot[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsWorkTimeSlot|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsWorkTimeSlot|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsWorkTimeSlot|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsWorkTimeSlot|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsWorkTimeSlot|null
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
