<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalendarEventDetails StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCalendarEventDetails extends AbstractStructBase
{
    /**
     * The IsMeeting
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsMeeting;
    /**
     * The IsRecurring
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsRecurring;
    /**
     * The IsException
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsException;
    /**
     * The IsReminderSet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsReminderSet;
    /**
     * The IsPrivate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsPrivate;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ID = null;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Subject = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * Constructor method for CalendarEventDetails
     * @uses EwsCalendarEventDetails::setIsMeeting()
     * @uses EwsCalendarEventDetails::setIsRecurring()
     * @uses EwsCalendarEventDetails::setIsException()
     * @uses EwsCalendarEventDetails::setIsReminderSet()
     * @uses EwsCalendarEventDetails::setIsPrivate()
     * @uses EwsCalendarEventDetails::setID()
     * @uses EwsCalendarEventDetails::setSubject()
     * @uses EwsCalendarEventDetails::setLocation()
     * @param bool $isMeeting
     * @param bool $isRecurring
     * @param bool $isException
     * @param bool $isReminderSet
     * @param bool $isPrivate
     * @param string $iD
     * @param string $subject
     * @param string $location
     */
    public function __construct(bool $isMeeting, bool $isRecurring, bool $isException, bool $isReminderSet, bool $isPrivate, ?string $iD = null, ?string $subject = null, ?string $location = null)
    {
        $this
            ->setIsMeeting($isMeeting)
            ->setIsRecurring($isRecurring)
            ->setIsException($isException)
            ->setIsReminderSet($isReminderSet)
            ->setIsPrivate($isPrivate)
            ->setID($iD)
            ->setSubject($subject)
            ->setLocation($location);
    }
    /**
     * Get IsMeeting value
     * @return bool
     */
    public function getIsMeeting(): bool
    {
        return $this->IsMeeting;
    }
    /**
     * Set IsMeeting value
     * @param bool $isMeeting
     * @return \StructType\EwsCalendarEventDetails
     */
    public function setIsMeeting(bool $isMeeting): self
    {
        // validation for constraint: boolean
        if (!is_null($isMeeting) && !is_bool($isMeeting)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMeeting, true), gettype($isMeeting)), __LINE__);
        }
        $this->IsMeeting = $isMeeting;
        
        return $this;
    }
    /**
     * Get IsRecurring value
     * @return bool
     */
    public function getIsRecurring(): bool
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param bool $isRecurring
     * @return \StructType\EwsCalendarEventDetails
     */
    public function setIsRecurring(bool $isRecurring): self
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->IsRecurring = $isRecurring;
        
        return $this;
    }
    /**
     * Get IsException value
     * @return bool
     */
    public function getIsException(): bool
    {
        return $this->IsException;
    }
    /**
     * Set IsException value
     * @param bool $isException
     * @return \StructType\EwsCalendarEventDetails
     */
    public function setIsException(bool $isException): self
    {
        // validation for constraint: boolean
        if (!is_null($isException) && !is_bool($isException)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isException, true), gettype($isException)), __LINE__);
        }
        $this->IsException = $isException;
        
        return $this;
    }
    /**
     * Get IsReminderSet value
     * @return bool
     */
    public function getIsReminderSet(): bool
    {
        return $this->IsReminderSet;
    }
    /**
     * Set IsReminderSet value
     * @param bool $isReminderSet
     * @return \StructType\EwsCalendarEventDetails
     */
    public function setIsReminderSet(bool $isReminderSet): self
    {
        // validation for constraint: boolean
        if (!is_null($isReminderSet) && !is_bool($isReminderSet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReminderSet, true), gettype($isReminderSet)), __LINE__);
        }
        $this->IsReminderSet = $isReminderSet;
        
        return $this;
    }
    /**
     * Get IsPrivate value
     * @return bool
     */
    public function getIsPrivate(): bool
    {
        return $this->IsPrivate;
    }
    /**
     * Set IsPrivate value
     * @param bool $isPrivate
     * @return \StructType\EwsCalendarEventDetails
     */
    public function setIsPrivate(bool $isPrivate): self
    {
        // validation for constraint: boolean
        if (!is_null($isPrivate) && !is_bool($isPrivate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrivate, true), gettype($isPrivate)), __LINE__);
        }
        $this->IsPrivate = $isPrivate;
        
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \StructType\EwsCalendarEventDetails
     */
    public function setID(?string $iD = null): self
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        
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
     * @return \StructType\EwsCalendarEventDetails
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
     * @return \StructType\EwsCalendarEventDetails
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
}
