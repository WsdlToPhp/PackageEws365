<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MeetingSuggestionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMeetingSuggestionType extends EwsEntityType
{
    /**
     * The Attendees
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfEmailUsersType
     */
    public $Attendees;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Location;
    /**
     * The Subject
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Subject;
    /**
     * The MeetingString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MeetingString;
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The EndTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndTime;
    /**
     * Constructor method for MeetingSuggestionType
     * @uses EwsMeetingSuggestionType::setAttendees()
     * @uses EwsMeetingSuggestionType::setLocation()
     * @uses EwsMeetingSuggestionType::setSubject()
     * @uses EwsMeetingSuggestionType::setMeetingString()
     * @uses EwsMeetingSuggestionType::setStartTime()
     * @uses EwsMeetingSuggestionType::setEndTime()
     * @param \Ews\ArrayType\EwsArrayOfEmailUsersType $attendees
     * @param string $location
     * @param string $subject
     * @param string $meetingString
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfEmailUsersType $attendees = null, $location = null, $subject = null, $meetingString = null, $startTime = null, $endTime = null)
    {
        $this
            ->setAttendees($attendees)
            ->setLocation($location)
            ->setSubject($subject)
            ->setMeetingString($meetingString)
            ->setStartTime($startTime)
            ->setEndTime($endTime);
    }
    /**
     * Get Attendees value
     * @return \Ews\ArrayType\EwsArrayOfEmailUsersType|null
     */
    public function getAttendees()
    {
        return $this->Attendees;
    }
    /**
     * Set Attendees value
     * @param \Ews\ArrayType\EwsArrayOfEmailUsersType $attendees
     * @return \Ews\StructType\EwsMeetingSuggestionType
     */
    public function setAttendees(\Ews\ArrayType\EwsArrayOfEmailUsersType $attendees = null)
    {
        $this->Attendees = $attendees;
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
     * @return \Ews\StructType\EwsMeetingSuggestionType
     */
    public function setLocation($location = null)
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($location)), __LINE__);
        }
        $this->Location = $location;
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
     * @return \Ews\StructType\EwsMeetingSuggestionType
     */
    public function setSubject($subject = null)
    {
        // validation for constraint: string
        if (!is_null($subject) && !is_string($subject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subject)), __LINE__);
        }
        $this->Subject = $subject;
        return $this;
    }
    /**
     * Get MeetingString value
     * @return string|null
     */
    public function getMeetingString()
    {
        return $this->MeetingString;
    }
    /**
     * Set MeetingString value
     * @param string $meetingString
     * @return \Ews\StructType\EwsMeetingSuggestionType
     */
    public function setMeetingString($meetingString = null)
    {
        // validation for constraint: string
        if (!is_null($meetingString) && !is_string($meetingString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meetingString)), __LINE__);
        }
        $this->MeetingString = $meetingString;
        return $this;
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Ews\StructType\EwsMeetingSuggestionType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get EndTime value
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \Ews\StructType\EwsMeetingSuggestionType
     */
    public function setEndTime($endTime = null)
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsMeetingSuggestionType
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
