<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarEvent StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarEvent extends AbstractStructBase
{
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EndTime;
    /**
     * The BusyType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $BusyType;
    /**
     * The CalendarEventDetails
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsCalendarEventDetails|null
     */
    protected ?\StructType\EwsCalendarEventDetails $CalendarEventDetails = null;
    /**
     * Constructor method for CalendarEvent
     * @uses EwsCalendarEvent::setStartTime()
     * @uses EwsCalendarEvent::setEndTime()
     * @uses EwsCalendarEvent::setBusyType()
     * @uses EwsCalendarEvent::setCalendarEventDetails()
     * @param string $startTime
     * @param string $endTime
     * @param string $busyType
     * @param \StructType\EwsCalendarEventDetails $calendarEventDetails
     */
    public function __construct(string $startTime, string $endTime, string $busyType, ?\StructType\EwsCalendarEventDetails $calendarEventDetails = null)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime)
            ->setBusyType($busyType)
            ->setCalendarEventDetails($calendarEventDetails);
    }
    /**
     * Get StartTime value
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\EwsCalendarEvent
     */
    public function setStartTime(string $startTime): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\EwsCalendarEvent
     */
    public function setEndTime(string $endTime): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
    /**
     * Get BusyType value
     * @return string
     */
    public function getBusyType(): string
    {
        return $this->BusyType;
    }
    /**
     * Set BusyType value
     * @uses \EnumType\EwsLegacyFreeBusyType::valueIsValid()
     * @uses \EnumType\EwsLegacyFreeBusyType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $busyType
     * @return \StructType\EwsCalendarEvent
     */
    public function setBusyType(string $busyType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsLegacyFreeBusyType::valueIsValid($busyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsLegacyFreeBusyType', is_array($busyType) ? implode(', ', $busyType) : var_export($busyType, true), implode(', ', \EnumType\EwsLegacyFreeBusyType::getValidValues())), __LINE__);
        }
        $this->BusyType = $busyType;
        
        return $this;
    }
    /**
     * Get CalendarEventDetails value
     * @return \StructType\EwsCalendarEventDetails|null
     */
    public function getCalendarEventDetails(): ?\StructType\EwsCalendarEventDetails
    {
        return $this->CalendarEventDetails;
    }
    /**
     * Set CalendarEventDetails value
     * @param \StructType\EwsCalendarEventDetails $calendarEventDetails
     * @return \StructType\EwsCalendarEvent
     */
    public function setCalendarEventDetails(?\StructType\EwsCalendarEventDetails $calendarEventDetails = null): self
    {
        $this->CalendarEventDetails = $calendarEventDetails;
        
        return $this;
    }
}
