<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsBookingStaffMemberType
     */
    public $Staff;
    /**
     * Constructor method for UpdateBookingStaffType
     * @uses EwsUpdateBookingStaffType::setStaff()
     * @param \Ews\StructType\EwsBookingStaffMemberType $staff
     */
    public function __construct(\Ews\StructType\EwsBookingStaffMemberType $staff = null)
    {
        $this
            ->setStaff($staff);
    }
    /**
     * Get Staff value
     * @return \Ews\StructType\EwsBookingStaffMemberType
     */
    public function getStaff()
    {
        return $this->Staff;
    }
    /**
     * Set Staff value
     * @param \Ews\StructType\EwsBookingStaffMemberType $staff
     * @return \Ews\StructType\EwsUpdateBookingStaffType
     */
    public function setStaff(\Ews\StructType\EwsBookingStaffMemberType $staff = null)
    {
        $this->Staff = $staff;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateBookingStaffType
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
