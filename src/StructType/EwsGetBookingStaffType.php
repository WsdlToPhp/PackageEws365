<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingStaffType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetBookingStaffType extends EwsBaseBookingRequestType
{
    /**
     * The RefreshStaffList
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $RefreshStaffList;
    /**
     * Constructor method for GetBookingStaffType
     * @uses EwsGetBookingStaffType::setRefreshStaffList()
     * @param boolean $refreshStaffList
     */
    public function __construct($refreshStaffList = null)
    {
        $this
            ->setRefreshStaffList($refreshStaffList);
    }
    /**
     * Get RefreshStaffList value
     * @return boolean
     */
    public function getRefreshStaffList()
    {
        return $this->RefreshStaffList;
    }
    /**
     * Set RefreshStaffList value
     * @param boolean $refreshStaffList
     * @return \Ews\StructType\EwsGetBookingStaffType
     */
    public function setRefreshStaffList($refreshStaffList = null)
    {
        $this->RefreshStaffList = $refreshStaffList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetBookingStaffType
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
