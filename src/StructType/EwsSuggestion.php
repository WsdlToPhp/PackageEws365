<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Suggestion StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestion extends AbstractStructBase
{
    /**
     * The MeetingTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $MeetingTime;
    /**
     * The IsWorkTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsWorkTime;
    /**
     * The SuggestionQuality
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SuggestionQuality;
    /**
     * The AttendeeConflictDataArray
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsArrayOfAttendeeConflictData
     */
    public $AttendeeConflictDataArray;
    /**
     * Constructor method for Suggestion
     * @uses EwsSuggestion::setMeetingTime()
     * @uses EwsSuggestion::setIsWorkTime()
     * @uses EwsSuggestion::setSuggestionQuality()
     * @uses EwsSuggestion::setAttendeeConflictDataArray()
     * @param string $meetingTime
     * @param bool $isWorkTime
     * @param string $suggestionQuality
     * @param \Ews\StructType\EwsArrayOfAttendeeConflictData $attendeeConflictDataArray
     */
    public function __construct($meetingTime = null, $isWorkTime = null, $suggestionQuality = null, \Ews\StructType\EwsArrayOfAttendeeConflictData $attendeeConflictDataArray = null)
    {
        $this
            ->setMeetingTime($meetingTime)
            ->setIsWorkTime($isWorkTime)
            ->setSuggestionQuality($suggestionQuality)
            ->setAttendeeConflictDataArray($attendeeConflictDataArray);
    }
    /**
     * Get MeetingTime value
     * @return string
     */
    public function getMeetingTime()
    {
        return $this->MeetingTime;
    }
    /**
     * Set MeetingTime value
     * @param string $meetingTime
     * @return \Ews\StructType\EwsSuggestion
     */
    public function setMeetingTime($meetingTime = null)
    {
        // validation for constraint: string
        if (!is_null($meetingTime) && !is_string($meetingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($meetingTime)), __LINE__);
        }
        $this->MeetingTime = $meetingTime;
        return $this;
    }
    /**
     * Get IsWorkTime value
     * @return bool
     */
    public function getIsWorkTime()
    {
        return $this->IsWorkTime;
    }
    /**
     * Set IsWorkTime value
     * @param bool $isWorkTime
     * @return \Ews\StructType\EwsSuggestion
     */
    public function setIsWorkTime($isWorkTime = null)
    {
        $this->IsWorkTime = $isWorkTime;
        return $this;
    }
    /**
     * Get SuggestionQuality value
     * @return string
     */
    public function getSuggestionQuality()
    {
        return $this->SuggestionQuality;
    }
    /**
     * Set SuggestionQuality value
     * @uses \Ews\EnumType\EwsSuggestionQuality::valueIsValid()
     * @uses \Ews\EnumType\EwsSuggestionQuality::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $suggestionQuality
     * @return \Ews\StructType\EwsSuggestion
     */
    public function setSuggestionQuality($suggestionQuality = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSuggestionQuality::valueIsValid($suggestionQuality)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $suggestionQuality, implode(', ', \Ews\EnumType\EwsSuggestionQuality::getValidValues())), __LINE__);
        }
        $this->SuggestionQuality = $suggestionQuality;
        return $this;
    }
    /**
     * Get AttendeeConflictDataArray value
     * @return \Ews\StructType\EwsArrayOfAttendeeConflictData|null
     */
    public function getAttendeeConflictDataArray()
    {
        return $this->AttendeeConflictDataArray;
    }
    /**
     * Set AttendeeConflictDataArray value
     * @param \Ews\StructType\EwsArrayOfAttendeeConflictData $attendeeConflictDataArray
     * @return \Ews\StructType\EwsSuggestion
     */
    public function setAttendeeConflictDataArray(\Ews\StructType\EwsArrayOfAttendeeConflictData $attendeeConflictDataArray = null)
    {
        $this->AttendeeConflictDataArray = $attendeeConflictDataArray;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSuggestion
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
