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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsMeeting;
    /**
     * The IsRecurring
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsRecurring;
    /**
     * The IsException
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsException;
    /**
     * The IsReminderSet
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsReminderSet;
    /**
     * The IsPrivate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsPrivate;
    /**
     * The ID
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ID;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The Location
     * Meta informations extracted from the WSDL
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
     * @param boolean $isMeeting
     * @param boolean $isRecurring
     * @param boolean $isException
     * @param boolean $isReminderSet
     * @param boolean $isPrivate
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
     * @return boolean
     */
    public function getIsMeeting()
    {
        return $this->IsMeeting;
    }
    /**
     * Set IsMeeting value
     * @param boolean $isMeeting
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsMeeting($isMeeting = null)
    {
        $this->IsMeeting = $isMeeting;
        return $this;
    }
    /**
     * Get IsRecurring value
     * @return boolean
     */
    public function getIsRecurring()
    {
        return $this->IsRecurring;
    }
    /**
     * Set IsRecurring value
     * @param boolean $isRecurring
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsRecurring($isRecurring = null)
    {
        $this->IsRecurring = $isRecurring;
        return $this;
    }
    /**
     * Get IsException value
     * @return boolean
     */
    public function getIsException()
    {
        return $this->IsException;
    }
    /**
     * Set IsException value
     * @param boolean $isException
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsException($isException = null)
    {
        $this->IsException = $isException;
        return $this;
    }
    /**
     * Get IsReminderSet value
     * @return boolean
     */
    public function getIsReminderSet()
    {
        return $this->IsReminderSet;
    }
    /**
     * Set IsReminderSet value
     * @param boolean $isReminderSet
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsReminderSet($isReminderSet = null)
    {
        $this->IsReminderSet = $isReminderSet;
        return $this;
    }
    /**
     * Get IsPrivate value
     * @return boolean
     */
    public function getIsPrivate()
    {
        return $this->IsPrivate;
    }
    /**
     * Set IsPrivate value
     * @param boolean $isPrivate
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public function setIsPrivate($isPrivate = null)
    {
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
        $this->Location = $location;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCalendarEventDetails
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
