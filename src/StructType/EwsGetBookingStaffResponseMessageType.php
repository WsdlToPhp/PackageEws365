<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfBookingStaffMember
     */
    protected \ArrayType\EwsArrayOfBookingStaffMember $StaffList;
    /**
     * Constructor method for GetBookingStaffResponseMessageType
     * @uses EwsGetBookingStaffResponseMessageType::setStaffList()
     * @param \ArrayType\EwsArrayOfBookingStaffMember $staffList
     */
    public function __construct(\ArrayType\EwsArrayOfBookingStaffMember $staffList)
    {
        $this
            ->setStaffList($staffList);
    }
    /**
     * Get StaffList value
     * @return \ArrayType\EwsArrayOfBookingStaffMember
     */
    public function getStaffList(): \ArrayType\EwsArrayOfBookingStaffMember
    {
        return $this->StaffList;
    }
    /**
     * Set StaffList value
     * @param \ArrayType\EwsArrayOfBookingStaffMember $staffList
     * @return \StructType\EwsGetBookingStaffResponseMessageType
     */
    public function setStaffList(\ArrayType\EwsArrayOfBookingStaffMember $staffList): self
    {
        $this->StaffList = $staffList;
        
        return $this;
    }
}
