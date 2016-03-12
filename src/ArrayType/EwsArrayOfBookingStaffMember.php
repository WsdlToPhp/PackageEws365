<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookingStaffMember ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBookingStaffMember extends AbstractStructArrayBase
{
    /**
     * The StaffMember
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsBookingStaffMemberType[]
     */
    public $StaffMember;
    /**
     * Constructor method for ArrayOfBookingStaffMember
     * @uses EwsArrayOfBookingStaffMember::setStaffMember()
     * @param \Ews\StructType\EwsBookingStaffMemberType[] $staffMember
     */
    public function __construct(array $staffMember = array())
    {
        $this
            ->setStaffMember($staffMember);
    }
    /**
     * Get StaffMember value
     * @return \Ews\StructType\EwsBookingStaffMemberType[]|null
     */
    public function getStaffMember()
    {
        return $this->StaffMember;
    }
    /**
     * Set StaffMember value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBookingStaffMemberType[] $staffMember
     * @return \Ews\ArrayType\EwsArrayOfBookingStaffMember
     */
    public function setStaffMember(array $staffMember = array())
    {
        foreach ($staffMember as $arrayOfBookingStaffMemberStaffMemberItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingStaffMemberStaffMemberItem instanceof \Ews\StructType\EwsBookingStaffMemberType) {
                throw new \InvalidArgumentException(sprintf('The StaffMember property can only contain items of \Ews\StructType\EwsBookingStaffMemberType, "%s" given', is_object($arrayOfBookingStaffMemberStaffMemberItem) ? get_class($arrayOfBookingStaffMemberStaffMemberItem) : gettype($arrayOfBookingStaffMemberStaffMemberItem)), __LINE__);
            }
        }
        $this->StaffMember = $staffMember;
        return $this;
    }
    /**
     * Add item to StaffMember value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBookingStaffMemberType $item
     * @return \Ews\ArrayType\EwsArrayOfBookingStaffMember
     */
    public function addToStaffMember(\Ews\StructType\EwsBookingStaffMemberType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsBookingStaffMemberType) {
            throw new \InvalidArgumentException(sprintf('The StaffMember property can only contain items of \Ews\StructType\EwsBookingStaffMemberType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StaffMember[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsBookingStaffMemberType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsBookingStaffMemberType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsBookingStaffMemberType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsBookingStaffMemberType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsBookingStaffMemberType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StaffMember
     */
    public function getAttributeName()
    {
        return 'StaffMember';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfBookingStaffMember
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
