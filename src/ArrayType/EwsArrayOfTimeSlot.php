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
     * Meta informations extracted from the WSDL
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
     * Set TimeSlot value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsTimeSlot[] $timeSlot
     * @return \Ews\ArrayType\EwsArrayOfTimeSlot
     */
    public function setTimeSlot(array $timeSlot = array())
    {
        foreach ($timeSlot as $arrayOfTimeSlotTimeSlotItem) {
            // validation for constraint: itemType
            if (!$arrayOfTimeSlotTimeSlotItem instanceof \Ews\StructType\EwsTimeSlot) {
                throw new \InvalidArgumentException(sprintf('The TimeSlot property can only contain items of \Ews\StructType\EwsTimeSlot, "%s" given', is_object($arrayOfTimeSlotTimeSlotItem) ? get_class($arrayOfTimeSlotTimeSlotItem) : gettype($arrayOfTimeSlotTimeSlotItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The TimeSlot property can only contain items of \Ews\StructType\EwsTimeSlot, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfTimeSlot
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
