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
     * Meta informations extracted from the WSDL
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
     * Set TimeSlot value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsWorkTimeSlot[] $timeSlot
     * @return \Ews\ArrayType\EwsArrayOfWorkTimeSlot
     */
    public function setTimeSlot(array $timeSlot = array())
    {
        foreach ($timeSlot as $arrayOfWorkTimeSlotTimeSlotItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkTimeSlotTimeSlotItem instanceof \Ews\StructType\EwsWorkTimeSlot) {
                throw new \InvalidArgumentException(sprintf('The TimeSlot property can only contain items of \Ews\StructType\EwsWorkTimeSlot, "%s" given', is_object($arrayOfWorkTimeSlotTimeSlotItem) ? get_class($arrayOfWorkTimeSlotTimeSlotItem) : gettype($arrayOfWorkTimeSlotTimeSlotItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The TimeSlot property can only contain items of \Ews\StructType\EwsWorkTimeSlot, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfWorkTimeSlot
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
