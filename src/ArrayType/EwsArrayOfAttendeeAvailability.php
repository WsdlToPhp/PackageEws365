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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $AttendeeAvailability;
    /**
     * Constructor method for ArrayOfAttendeeAvailability
     * @uses EwsArrayOfAttendeeAvailability::setAttendeeAvailability()
     * @param array $attendeeAvailability
     */
    public function __construct(array $attendeeAvailability = array())
    {
        $this
            ->setAttendeeAvailability($attendeeAvailability);
    }
    /**
     * Get AttendeeAvailability value
     * @return array
     */
    public function getAttendeeAvailability()
    {
        return $this->AttendeeAvailability;
    }
    /**
     * Set AttendeeAvailability value
     * @param array $attendeeAvailability
     * @return \Ews\ArrayType\EwsArrayOfAttendeeAvailability
     */
    public function setAttendeeAvailability(array $attendeeAvailability = array())
    {
        $this->AttendeeAvailability = $attendeeAvailability;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfAttendeeAvailability
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
