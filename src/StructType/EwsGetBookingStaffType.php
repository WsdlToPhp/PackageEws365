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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $RefreshStaffList;
    /**
     * Constructor method for GetBookingStaffType
     * @uses EwsGetBookingStaffType::setRefreshStaffList()
     * @param bool $refreshStaffList
     */
    public function __construct($refreshStaffList = null)
    {
        $this
            ->setRefreshStaffList($refreshStaffList);
    }
    /**
     * Get RefreshStaffList value
     * @return bool
     */
    public function getRefreshStaffList()
    {
        return $this->RefreshStaffList;
    }
    /**
     * Set RefreshStaffList value
     * @param bool $refreshStaffList
     * @return \Ews\StructType\EwsGetBookingStaffType
     */
    public function setRefreshStaffList($refreshStaffList = null)
    {
        // validation for constraint: boolean
        if (!is_null($refreshStaffList) && !is_bool($refreshStaffList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refreshStaffList, true), gettype($refreshStaffList)), __LINE__);
        }
        $this->RefreshStaffList = $refreshStaffList;
        return $this;
    }
}
