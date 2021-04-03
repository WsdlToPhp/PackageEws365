<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfSmtpAddressType
     */
    protected \ArrayType\EwsArrayOfSmtpAddressType $StaffEmails;
    /**
     * The TimeWindow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsDuration
     */
    protected \StructType\EwsDuration $TimeWindow;
    /**
     * Constructor method for GetStaffAvailabilityType
     * @uses EwsGetStaffAvailabilityType::setStaffEmails()
     * @uses EwsGetStaffAvailabilityType::setTimeWindow()
     * @param \ArrayType\EwsArrayOfSmtpAddressType $staffEmails
     * @param \StructType\EwsDuration $timeWindow
     */
    public function __construct(\ArrayType\EwsArrayOfSmtpAddressType $staffEmails, \StructType\EwsDuration $timeWindow)
    {
        $this
            ->setStaffEmails($staffEmails)
            ->setTimeWindow($timeWindow);
    }
    /**
     * Get StaffEmails value
     * @return \ArrayType\EwsArrayOfSmtpAddressType
     */
    public function getStaffEmails(): \ArrayType\EwsArrayOfSmtpAddressType
    {
        return $this->StaffEmails;
    }
    /**
     * Set StaffEmails value
     * @param \ArrayType\EwsArrayOfSmtpAddressType $staffEmails
     * @return \StructType\EwsGetStaffAvailabilityType
     */
    public function setStaffEmails(\ArrayType\EwsArrayOfSmtpAddressType $staffEmails): self
    {
        $this->StaffEmails = $staffEmails;
        
        return $this;
    }
    /**
     * Get TimeWindow value
     * @return \StructType\EwsDuration
     */
    public function getTimeWindow(): \StructType\EwsDuration
    {
        return $this->TimeWindow;
    }
    /**
     * Set TimeWindow value
     * @param \StructType\EwsDuration $timeWindow
     * @return \StructType\EwsGetStaffAvailabilityType
     */
    public function setTimeWindow(\StructType\EwsDuration $timeWindow): self
    {
        $this->TimeWindow = $timeWindow;
        
        return $this;
    }
}
