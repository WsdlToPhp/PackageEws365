<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $MeetingTime;
    /**
     * The IsWorkTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsWorkTime;
    /**
     * The SuggestionQuality
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SuggestionQuality;
    /**
     * The AttendeeConflictDataArray
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsArrayOfAttendeeConflictData|null
     */
    protected ?\StructType\EwsArrayOfAttendeeConflictData $AttendeeConflictDataArray = null;
    /**
     * Constructor method for Suggestion
     * @uses EwsSuggestion::setMeetingTime()
     * @uses EwsSuggestion::setIsWorkTime()
     * @uses EwsSuggestion::setSuggestionQuality()
     * @uses EwsSuggestion::setAttendeeConflictDataArray()
     * @param string $meetingTime
     * @param bool $isWorkTime
     * @param string $suggestionQuality
     * @param \StructType\EwsArrayOfAttendeeConflictData $attendeeConflictDataArray
     */
    public function __construct(string $meetingTime, bool $isWorkTime, string $suggestionQuality, ?\StructType\EwsArrayOfAttendeeConflictData $attendeeConflictDataArray = null)
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
    public function getMeetingTime(): string
    {
        return $this->MeetingTime;
    }
    /**
     * Set MeetingTime value
     * @param string $meetingTime
     * @return \StructType\EwsSuggestion
     */
    public function setMeetingTime(string $meetingTime): self
    {
        // validation for constraint: string
        if (!is_null($meetingTime) && !is_string($meetingTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($meetingTime, true), gettype($meetingTime)), __LINE__);
        }
        $this->MeetingTime = $meetingTime;
        
        return $this;
    }
    /**
     * Get IsWorkTime value
     * @return bool
     */
    public function getIsWorkTime(): bool
    {
        return $this->IsWorkTime;
    }
    /**
     * Set IsWorkTime value
     * @param bool $isWorkTime
     * @return \StructType\EwsSuggestion
     */
    public function setIsWorkTime(bool $isWorkTime): self
    {
        // validation for constraint: boolean
        if (!is_null($isWorkTime) && !is_bool($isWorkTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isWorkTime, true), gettype($isWorkTime)), __LINE__);
        }
        $this->IsWorkTime = $isWorkTime;
        
        return $this;
    }
    /**
     * Get SuggestionQuality value
     * @return string
     */
    public function getSuggestionQuality(): string
    {
        return $this->SuggestionQuality;
    }
    /**
     * Set SuggestionQuality value
     * @uses \EnumType\EwsSuggestionQuality::valueIsValid()
     * @uses \EnumType\EwsSuggestionQuality::getValidValues()
     * @throws InvalidArgumentException
     * @param string $suggestionQuality
     * @return \StructType\EwsSuggestion
     */
    public function setSuggestionQuality(string $suggestionQuality): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSuggestionQuality::valueIsValid($suggestionQuality)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSuggestionQuality', is_array($suggestionQuality) ? implode(', ', $suggestionQuality) : var_export($suggestionQuality, true), implode(', ', \EnumType\EwsSuggestionQuality::getValidValues())), __LINE__);
        }
        $this->SuggestionQuality = $suggestionQuality;
        
        return $this;
    }
    /**
     * Get AttendeeConflictDataArray value
     * @return \StructType\EwsArrayOfAttendeeConflictData|null
     */
    public function getAttendeeConflictDataArray(): ?\StructType\EwsArrayOfAttendeeConflictData
    {
        return $this->AttendeeConflictDataArray;
    }
    /**
     * Set AttendeeConflictDataArray value
     * @param \StructType\EwsArrayOfAttendeeConflictData $attendeeConflictDataArray
     * @return \StructType\EwsSuggestion
     */
    public function setAttendeeConflictDataArray(?\StructType\EwsArrayOfAttendeeConflictData $attendeeConflictDataArray = null): self
    {
        $this->AttendeeConflictDataArray = $attendeeConflictDataArray;
        
        return $this;
    }
}
