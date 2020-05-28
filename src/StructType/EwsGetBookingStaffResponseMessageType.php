<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingStaffResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetBookingStaffResponseMessageType extends EwsResponseMessageType
{
    /**
     * The StaffList
     * Meta information extracted from the WSDL
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
}
