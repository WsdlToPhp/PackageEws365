<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsResponseMessageInfoType
     */
    protected \StructType\EwsResponseMessageInfoType $ResponseMessage;
    /**
     * The StaffEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StaffEmail;
    /**
     * The CalendarView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsStaffAvailabilityCalendarViewType
     */
    protected \StructType\EwsStaffAvailabilityCalendarViewType $CalendarView;
    /**
     * Constructor method for StaffAvailabilityResponseType
     * @uses EwsStaffAvailabilityResponseType::setResponseMessage()
     * @uses EwsStaffAvailabilityResponseType::setStaffEmail()
     * @uses EwsStaffAvailabilityResponseType::setCalendarView()
     * @param \StructType\EwsResponseMessageInfoType $responseMessage
     * @param string $staffEmail
     * @param \StructType\EwsStaffAvailabilityCalendarViewType $calendarView
     */
    public function __construct(\StructType\EwsResponseMessageInfoType $responseMessage, string $staffEmail, \StructType\EwsStaffAvailabilityCalendarViewType $calendarView)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setStaffEmail($staffEmail)
            ->setCalendarView($calendarView);
    }
    /**
     * Get ResponseMessage value
     * @return \StructType\EwsResponseMessageInfoType
     */
    public function getResponseMessage(): \StructType\EwsResponseMessageInfoType
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \StructType\EwsResponseMessageInfoType $responseMessage
     * @return \StructType\EwsStaffAvailabilityResponseType
     */
    public function setResponseMessage(\StructType\EwsResponseMessageInfoType $responseMessage): self
    {
        $this->ResponseMessage = $responseMessage;
        
        return $this;
    }
    /**
     * Get StaffEmail value
     * @return string
     */
    public function getStaffEmail(): string
    {
        return $this->StaffEmail;
    }
    /**
     * Set StaffEmail value
     * @param string $staffEmail
     * @return \StructType\EwsStaffAvailabilityResponseType
     */
    public function setStaffEmail(string $staffEmail): self
    {
        // validation for constraint: string
        if (!is_null($staffEmail) && !is_string($staffEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($staffEmail, true), gettype($staffEmail)), __LINE__);
        }
        $this->StaffEmail = $staffEmail;
        
        return $this;
    }
    /**
     * Get CalendarView value
     * @return \StructType\EwsStaffAvailabilityCalendarViewType
     */
    public function getCalendarView(): \StructType\EwsStaffAvailabilityCalendarViewType
    {
        return $this->CalendarView;
    }
    /**
     * Set CalendarView value
     * @param \StructType\EwsStaffAvailabilityCalendarViewType $calendarView
     * @return \StructType\EwsStaffAvailabilityResponseType
     */
    public function setCalendarView(\StructType\EwsStaffAvailabilityCalendarViewType $calendarView): self
    {
        $this->CalendarView = $calendarView;
        
        return $this;
    }
}
