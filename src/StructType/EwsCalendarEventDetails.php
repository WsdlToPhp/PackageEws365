<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $IsMeeting;
    /**
     * The IsRecurring
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsRecurring;
    /**
     * The IsException
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsException;
    /**
     * The IsReminderSet
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsReminderSet;
    /**
     * The IsPrivate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsPrivate;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Subject
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Location;
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
    public function __construct($isMeeting = null, $isRecurring = null, $isException = null, $isReminderSet = null, $isPrivate = null, $iD = null, $subject = null, $location = null)
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
    public function getIsMeeting()
    {
        return $this->IsMeeting;
    }
    /**
     * Set IsMeeting value
     * @param bool $isMeeting
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsMeeting($isMeeting = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMeeting) && !is_bool($isMeeting)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isMeeting, true), gettype($isMeeting)), __LINE__);
        }
        $this->IsMeeting = $isMeeting;
        return $this;
    }
    /**
     * Get IsRecurring value
     * @return bool
     */
    public function getIsRecurring()
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param bool $isRecurring
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsRecurring($isRecurring = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRecurring) && !is_bool($isRecurring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isRecurring, true), gettype($isRecurring)), __LINE__);
        }
        $this->IsRecurring = $isRecurring;
        return $this;
    }
    /**
     * Get IsException value
     * @return bool
     */
    public function getIsException()
    {
        return $this->IsException;
    }
    /**
     * Set IsException value
     * @param bool $isException
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsException($isException = null)
    {
        // validation for constraint: boolean
        if (!is_null($isException) && !is_bool($isException)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isException, true), gettype($isException)), __LINE__);
        }
        $this->IsException = $isException;
        return $this;
    }
    /**
     * Get IsReminderSet value
     * @return bool
     */
    public function getIsReminderSet()
    {
        return $this->IsReminderSet;
    }
    /**
     * Set IsReminderSet value
     * @param bool $isReminderSet
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsReminderSet($isReminderSet = null)
    {
        // validation for constraint: boolean
        if (!is_null($isReminderSet) && !is_bool($isReminderSet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isReminderSet, true), gettype($isReminderSet)), __LINE__);
        }
        $this->IsReminderSet = $isReminderSet;
        return $this;
    }
    /**
     * Get IsPrivate value
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->IsPrivate;
    }
    /**
     * Set IsPrivate value
     * @param bool $isPrivate
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsPrivate($isPrivate = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPrivate) && !is_bool($isPrivate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPrivate, true), gettype($isPrivate)), __LINE__);
        }
        $this->IsPrivate = $isPrivate;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Subject value
     * @return string|null
     */
    public function getSubject()
    {
        return $this->Subject;
    }
    /**
     * Set Subject value
     * @param string $subject
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subject, true), gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        return $this;
    }
}
