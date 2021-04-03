<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingInsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingInsightValue extends EwsInsightValue
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The StartUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StartUtcTicks = null;
    /**
     * The EndUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EndUtcTicks = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The Organizer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsProfileInsightValue|null
     */
    protected ?\StructType\EwsProfileInsightValue $Organizer = null;
    /**
     * The Attendees
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    protected ?\ArrayType\EwsArrayOfProfileInsightValue $Attendees = null;
    /**
     * Constructor method for MeetingInsightValue
     * @uses EwsMeetingInsightValue::setId()
     * @uses EwsMeetingInsightValue::setSubject()
     * @uses EwsMeetingInsightValue::setStartUtcTicks()
     * @uses EwsMeetingInsightValue::setEndUtcTicks()
     * @uses EwsMeetingInsightValue::setLocation()
     * @uses EwsMeetingInsightValue::setOrganizer()
     * @uses EwsMeetingInsightValue::setAttendees()
     * @param string $id
     * @param string $subject
     * @param int $startUtcTicks
     * @param int $endUtcTicks
     * @param string $location
     * @param \StructType\EwsProfileInsightValue $organizer
     * @param \ArrayType\EwsArrayOfProfileInsightValue $attendees
     */
    public function __construct(?string $id = null, ?string $subject = null, ?int $startUtcTicks = null, ?int $endUtcTicks = null, ?string $location = null, ?\StructType\EwsProfileInsightValue $organizer = null, ?\ArrayType\EwsArrayOfProfileInsightValue $attendees = null)
    {
        $this
            ->setId($id)
            ->setSubject($subject)
            ->setStartUtcTicks($startUtcTicks)
            ->setEndUtcTicks($endUtcTicks)
            ->setLocation($location)
            ->setOrganizer($organizer)
            ->setAttendees($attendees);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\EwsMeetingInsightValue
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \StructType\EwsMeetingInsightValue
     */
    public function setSubject(?string $subject = null): self
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        
        return $this;
    }
    /**
     * Get StartUtcTicks value
     * @return int|null
     */
    public function getStartUtcTicks(): ?int
    {
        return $this->StartUtcTicks;
    }
    /**
     * Set StartUtcTicks value
     * @param int $startUtcTicks
     * @return \StructType\EwsMeetingInsightValue
     */
    public function setStartUtcTicks(?int $startUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($startUtcTicks) && !(is_int($startUtcTicks) || ctype_digit($startUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startUtcTicks, true), gettype($startUtcTicks)), __LINE__);
        }
        $this->StartUtcTicks = $startUtcTicks;
        
        return $this;
    }
    /**
     * Get EndUtcTicks value
     * @return int|null
     */
    public function getEndUtcTicks(): ?int
    {
        return $this->EndUtcTicks;
    }
    /**
     * Set EndUtcTicks value
     * @param int $endUtcTicks
     * @return \StructType\EwsMeetingInsightValue
     */
    public function setEndUtcTicks(?int $endUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($endUtcTicks) && !(is_int($endUtcTicks) || ctype_digit($endUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($endUtcTicks, true), gettype($endUtcTicks)), __LINE__);
        }
        $this->EndUtcTicks = $endUtcTicks;
        
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
     * @return \StructType\EwsMeetingInsightValue
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
     * Get Organizer value
     * @return \StructType\EwsProfileInsightValue|null
     */
    public function getOrganizer(): ?\StructType\EwsProfileInsightValue
    {
        return $this->Organizer;
    }
    /**
     * Set Organizer value
     * @param \StructType\EwsProfileInsightValue $organizer
     * @return \StructType\EwsMeetingInsightValue
     */
    public function setOrganizer(?\StructType\EwsProfileInsightValue $organizer = null): self
    {
        $this->Organizer = $organizer;
        
        return $this;
    }
    /**
     * Get Attendees value
     * @return \ArrayType\EwsArrayOfProfileInsightValue|null
     */
    public function getAttendees(): ?\ArrayType\EwsArrayOfProfileInsightValue
    {
        return $this->Attendees;
    }
    /**
     * Set Attendees value
     * @param \ArrayType\EwsArrayOfProfileInsightValue $attendees
     * @return \StructType\EwsMeetingInsightValue
     */
    public function setAttendees(?\ArrayType\EwsArrayOfProfileInsightValue $attendees = null): self
    {
        $this->Attendees = $attendees;
        
        return $this;
    }
}
