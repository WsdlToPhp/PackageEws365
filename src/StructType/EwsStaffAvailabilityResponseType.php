<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StaffAvailabilityResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStaffAvailabilityResponseType extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsResponseMessageInfoType
     */
    public $ResponseMessage;
    /**
     * The StaffEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $StaffEmail;
    /**
     * The CalendarView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsStaffAvailabilityCalendarViewType
     */
    public $CalendarView;
    /**
     * Constructor method for StaffAvailabilityResponseType
     * @uses EwsStaffAvailabilityResponseType::setResponseMessage()
     * @uses EwsStaffAvailabilityResponseType::setStaffEmail()
     * @uses EwsStaffAvailabilityResponseType::setCalendarView()
     * @param \Ews\StructType\EwsResponseMessageInfoType $responseMessage
     * @param string $staffEmail
     * @param \Ews\StructType\EwsStaffAvailabilityCalendarViewType $calendarView
     */
    public function __construct(\Ews\StructType\EwsResponseMessageInfoType $responseMessage = null, $staffEmail = null, \Ews\StructType\EwsStaffAvailabilityCalendarViewType $calendarView = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setStaffEmail($staffEmail)
            ->setCalendarView($calendarView);
    }
    /**
     * Get ResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageInfoType
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageInfoType $responseMessage
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType
     */
    public function setResponseMessage(\Ews\StructType\EwsResponseMessageInfoType $responseMessage = null)
    {
        $this->ResponseMessage = $responseMessage;
        return $this;
    }
    /**
     * Get StaffEmail value
     * @return string
     */
    public function getStaffEmail()
    {
        return $this->StaffEmail;
    }
    /**
     * Set StaffEmail value
     * @param string $staffEmail
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType
     */
    public function setStaffEmail($staffEmail = null)
    {
        // validation for constraint: string
        if (!is_null($staffEmail) && !is_string($staffEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($staffEmail, true), gettype($staffEmail)), __LINE__);
        }
        $this->StaffEmail = $staffEmail;
        return $this;
    }
    /**
     * Get CalendarView value
     * @return \Ews\StructType\EwsStaffAvailabilityCalendarViewType
     */
    public function getCalendarView()
    {
        return $this->CalendarView;
    }
    /**
     * Set CalendarView value
     * @param \Ews\StructType\EwsStaffAvailabilityCalendarViewType $calendarView
     * @return \Ews\StructType\EwsStaffAvailabilityResponseType
     */
    public function setCalendarView(\Ews\StructType\EwsStaffAvailabilityCalendarViewType $calendarView = null)
    {
        $this->CalendarView = $calendarView;
        return $this;
    }
}
