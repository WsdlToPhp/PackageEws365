<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingStaffResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetBookingStaffResponseMessageType extends EwsResponseMessageType
{
    /**
     * The StaffList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfBookingStaffMember
     */
    public $StaffList;
    /**
     * Constructor method for GetBookingStaffResponseMessageType
     * @uses EwsGetBookingStaffResponseMessageType::setStaffList()
     * @param \Ews\ArrayType\EwsArrayOfBookingStaffMember $staffList
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfBookingStaffMember $staffList = null)
    {
        $this
            ->setStaffList($staffList);
    }
    /**
     * Get StaffList value
     * @return \Ews\ArrayType\EwsArrayOfBookingStaffMember
     */
    public function getStaffList()
    {
        return $this->StaffList;
    }
    /**
     * Set StaffList value
     * @param \Ews\ArrayType\EwsArrayOfBookingStaffMember $staffList
     * @return \Ews\StructType\EwsGetBookingStaffResponseMessageType
     */
    public function setStaffList(\Ews\ArrayType\EwsArrayOfBookingStaffMember $staffList = null)
    {
        $this->StaffList = $staffList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetBookingStaffResponseMessageType
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
