<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStaffAvailabilityType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetStaffAvailabilityType extends EwsBaseBookingRequestType
{
    /**
     * The StaffEmails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public $StaffEmails;
    /**
     * The TimeWindow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDuration
     */
    public $TimeWindow;
    /**
     * Constructor method for GetStaffAvailabilityType
     * @uses EwsGetStaffAvailabilityType::setStaffEmails()
     * @uses EwsGetStaffAvailabilityType::setTimeWindow()
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $staffEmails
     * @param \Ews\StructType\EwsDuration $timeWindow
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfSmtpAddressType $staffEmails = null, \Ews\StructType\EwsDuration $timeWindow = null)
    {
        $this
            ->setStaffEmails($staffEmails)
            ->setTimeWindow($timeWindow);
    }
    /**
     * Get StaffEmails value
     * @return \Ews\ArrayType\EwsArrayOfSmtpAddressType
     */
    public function getStaffEmails()
    {
        return $this->StaffEmails;
    }
    /**
     * Set StaffEmails value
     * @param \Ews\ArrayType\EwsArrayOfSmtpAddressType $staffEmails
     * @return \Ews\StructType\EwsGetStaffAvailabilityType
     */
    public function setStaffEmails(\Ews\ArrayType\EwsArrayOfSmtpAddressType $staffEmails = null)
    {
        $this->StaffEmails = $staffEmails;
        return $this;
    }
    /**
     * Get TimeWindow value
     * @return \Ews\StructType\EwsDuration
     */
    public function getTimeWindow()
    {
        return $this->TimeWindow;
    }
    /**
     * Set TimeWindow value
     * @param \Ews\StructType\EwsDuration $timeWindow
     * @return \Ews\StructType\EwsGetStaffAvailabilityType
     */
    public function setTimeWindow(\Ews\StructType\EwsDuration $timeWindow = null)
    {
        $this->TimeWindow = $timeWindow;
        return $this;
    }
}
