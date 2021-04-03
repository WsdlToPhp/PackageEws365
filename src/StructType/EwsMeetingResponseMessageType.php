<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingResponseMessageType extends EwsMeetingMessageType
{
    /**
     * The Start
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Start = null;
    /**
     * The End
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $End = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The Recurrence
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsRecurrenceType|null
     */
    protected ?\StructType\EwsRecurrenceType $Recurrence = null;
    /**
     * The CalendarItemType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CalendarItemType = null;
    /**
     * The ProposedStart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProposedStart = null;
    /**
     * The ProposedEnd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ProposedEnd = null;
    /**
     * The EnhancedLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEnhancedLocationType|null
     */
    protected ?\StructType\EwsEnhancedLocationType $EnhancedLocation = null;
    /**
     * Constructor method for MeetingResponseMessageType
     * @uses EwsMeetingResponseMessageType::setStart()
     * @uses EwsMeetingResponseMessageType::setEnd()
     * @uses EwsMeetingResponseMessageType::setLocation()
     * @uses EwsMeetingResponseMessageType::setRecurrence()
     * @uses EwsMeetingResponseMessageType::setCalendarItemType()
     * @uses EwsMeetingResponseMessageType::setProposedStart()
     * @uses EwsMeetingResponseMessageType::setProposedEnd()
     * @uses EwsMeetingResponseMessageType::setEnhancedLocation()
     * @param string $start
     * @param string $end
     * @param string $location
     * @param \StructType\EwsRecurrenceType $recurrence
     * @param string $calendarItemType
     * @param string $proposedStart
     * @param string $proposedEnd
     * @param \StructType\EwsEnhancedLocationType $enhancedLocation
     */
    public function __construct(?string $start = null, ?string $end = null, ?string $location = null, ?\StructType\EwsRecurrenceType $recurrence = null, ?string $calendarItemType = null, ?string $proposedStart = null, ?string $proposedEnd = null, ?\StructType\EwsEnhancedLocationType $enhancedLocation = null)
    {
        $this
            ->setStart($start)
            ->setEnd($end)
            ->setLocation($location)
            ->setRecurrence($recurrence)
            ->setCalendarItemType($calendarItemType)
            ->setProposedStart($proposedStart)
            ->setProposedEnd($proposedEnd)
            ->setEnhancedLocation($enhancedLocation);
    }
    /**
     * Get Start value
     * @return string|null
     */
    public function getStart(): ?string
    {
        return $this->Start;
    }
    /**
     * Set Start value
     * @param string $start
     * @return \StructType\EwsMeetingResponseMessageType
     */
    public function setStart(?string $start = null): self
    {
        // validation for constraint: string
        if (!is_null($start) && !is_string($start)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($start, true), gettype($start)), __LINE__);
        }
        $this->Start = $start;
        
        return $this;
    }
    /**
     * Get End value
     * @return string|null
     */
    public function getEnd(): ?string
    {
        return $this->End;
    }
    /**
     * Set End value
     * @param string $end
     * @return \StructType\EwsMeetingResponseMessageType
     */
    public function setEnd(?string $end = null): self
    {
        // validation for constraint: string
        if (!is_null($end) && !is_string($end)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($end, true), gettype($end)), __LINE__);
        }
        $this->End = $end;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \StructType\EwsMeetingResponseMessageType
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get Recurrence value
     * @return \StructType\EwsRecurrenceType|null
     */
    public function getRecurrence(): ?\StructType\EwsRecurrenceType
    {
        return $this->Recurrence;
    }
    /**
     * Set Recurrence value
     * @param \StructType\EwsRecurrenceType $recurrence
     * @return \StructType\EwsMeetingResponseMessageType
     */
    public function setRecurrence(?\StructType\EwsRecurrenceType $recurrence = null): self
    {
        $this->Recurrence = $recurrence;
        
        return $this;
    }
    /**
     * Get CalendarItemType value
     * @return string|null
     */
    public function getCalendarItemType(): ?string
    {
        return $this->CalendarItemType;
    }
    /**
     * Set CalendarItemType value
     * @param string $calendarItemType
     * @return \StructType\EwsMeetingResponseMessageType
     */
    public function setCalendarItemType(?string $calendarItemType = null): self
    {
        // validation for constraint: string
        if (!is_null($calendarItemType) && !is_string($calendarItemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($calendarItemType, true), gettype($calendarItemType)), __LINE__);
        }
        $this->CalendarItemType = $calendarItemType;
        
        return $this;
    }
    /**
     * Get ProposedStart value
     * @return string|null
     */
    public function getProposedStart(): ?string
    {
        return $this->ProposedStart;
    }
    /**
     * Set ProposedStart value
     * @param string $proposedStart
     * @return \StructType\EwsMeetingResponseMessageType
     */
    public function setProposedStart(?string $proposedStart = null): self
    {
        // validation for constraint: string
        if (!is_null($proposedStart) && !is_string($proposedStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposedStart, true), gettype($proposedStart)), __LINE__);
        }
        $this->ProposedStart = $proposedStart;
        
        return $this;
    }
    /**
     * Get ProposedEnd value
     * @return string|null
     */
    public function getProposedEnd(): ?string
    {
        return $this->ProposedEnd;
    }
    /**
     * Set ProposedEnd value
     * @param string $proposedEnd
     * @return \StructType\EwsMeetingResponseMessageType
     */
    public function setProposedEnd(?string $proposedEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($proposedEnd) && !is_string($proposedEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($proposedEnd, true), gettype($proposedEnd)), __LINE__);
        }
        $this->ProposedEnd = $proposedEnd;
        
        return $this;
    }
    /**
     * Get EnhancedLocation value
     * @return \StructType\EwsEnhancedLocationType|null
     */
    public function getEnhancedLocation(): ?\StructType\EwsEnhancedLocationType
    {
        return $this->EnhancedLocation;
    }
    /**
     * Set EnhancedLocation value
     * @param \StructType\EwsEnhancedLocationType $enhancedLocation
     * @return \StructType\EwsMeetingResponseMessageType
     */
    public function setEnhancedLocation(?\StructType\EwsEnhancedLocationType $enhancedLocation = null): self
    {
        $this->EnhancedLocation = $enhancedLocation;
        
        return $this;
    }
}
