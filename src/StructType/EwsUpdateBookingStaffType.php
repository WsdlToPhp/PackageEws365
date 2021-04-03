<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBookingStaffType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateBookingStaffType extends EwsBaseBookingRequestType
{
    /**
     * The Staff
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsBookingStaffMemberType
     */
    protected \StructType\EwsBookingStaffMemberType $Staff;
    /**
     * Constructor method for UpdateBookingStaffType
     * @uses EwsUpdateBookingStaffType::setStaff()
     * @param \StructType\EwsBookingStaffMemberType $staff
     */
    public function __construct(\StructType\EwsBookingStaffMemberType $staff)
    {
        $this
            ->setStaff($staff);
    }
    /**
     * Get Staff value
     * @return \StructType\EwsBookingStaffMemberType
     */
    public function getStaff(): \StructType\EwsBookingStaffMemberType
    {
        return $this->Staff;
    }
    /**
     * Set Staff value
     * @param \StructType\EwsBookingStaffMemberType $staff
     * @return \StructType\EwsUpdateBookingStaffType
     */
    public function setStaff(\StructType\EwsBookingStaffMemberType $staff): self
    {
        $this->Staff = $staff;
        
        return $this;
    }
}
