<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestionsViewOptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestionsViewOptionsType extends AbstractStructBase
{
    /**
     * The DetailedSuggestionsWindow
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDuration
     */
    public $DetailedSuggestionsWindow;
    /**
     * The GoodThreshold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GoodThreshold;
    /**
     * The MaximumResultsByDay
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaximumResultsByDay;
    /**
     * The MaximumNonWorkHourResultsByDay
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaximumNonWorkHourResultsByDay;
    /**
     * The MeetingDurationInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MeetingDurationInMinutes;
    /**
     * The MinimumSuggestionQuality
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MinimumSuggestionQuality;
    /**
     * The CurrentMeetingTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CurrentMeetingTime;
    /**
     * The GlobalObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $GlobalObjectId;
    /**
     * Constructor method for SuggestionsViewOptionsType
     * @uses EwsSuggestionsViewOptionsType::setDetailedSuggestionsWindow()
     * @uses EwsSuggestionsViewOptionsType::setGoodThreshold()
     * @uses EwsSuggestionsViewOptionsType::setMaximumResultsByDay()
     * @uses EwsSuggestionsViewOptionsType::setMaximumNonWorkHourResultsByDay()
     * @uses EwsSuggestionsViewOptionsType::setMeetingDurationInMinutes()
     * @uses EwsSuggestionsViewOptionsType::setMinimumSuggestionQuality()
     * @uses EwsSuggestionsViewOptionsType::setCurrentMeetingTime()
     * @uses EwsSuggestionsViewOptionsType::setGlobalObjectId()
     * @param \Ews\StructType\EwsDuration $detailedSuggestionsWindow
     * @param int $goodThreshold
     * @param int $maximumResultsByDay
     * @param int $maximumNonWorkHourResultsByDay
     * @param int $meetingDurationInMinutes
     * @param string $minimumSuggestionQuality
     * @param string $currentMeetingTime
     * @param string $globalObjectId
     */
    public function __construct(\Ews\StructType\EwsDuration $detailedSuggestionsWindow = null, $goodThreshold = null, $maximumResultsByDay = null, $maximumNonWorkHourResultsByDay = null, $meetingDurationInMinutes = null, $minimumSuggestionQuality = null, $currentMeetingTime = null, $globalObjectId = null)
    {
        $this
            ->setDetailedSuggestionsWindow($detailedSuggestionsWindow)
            ->setGoodThreshold($goodThreshold)
            ->setMaximumResultsByDay($maximumResultsByDay)
            ->setMaximumNonWorkHourResultsByDay($maximumNonWorkHourResultsByDay)
            ->setMeetingDurationInMinutes($meetingDurationInMinutes)
            ->setMinimumSuggestionQuality($minimumSuggestionQuality)
            ->setCurrentMeetingTime($currentMeetingTime)
            ->setGlobalObjectId($globalObjectId);
    }
    /**
     * Get DetailedSuggestionsWindow value
     * @return \Ews\StructType\EwsDuration
     */
    public function getDetailedSuggestionsWindow()
    {
        return $this->DetailedSuggestionsWindow;
    }
    /**
     * Set DetailedSuggestionsWindow value
     * @param \Ews\StructType\EwsDuration $detailedSuggestionsWindow
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setDetailedSuggestionsWindow(\Ews\StructType\EwsDuration $detailedSuggestionsWindow = null)
    {
        $this->DetailedSuggestionsWindow = $detailedSuggestionsWindow;
        return $this;
    }
    /**
     * Get GoodThreshold value
     * @return int|null
     */
    public function getGoodThreshold()
    {
        return $this->GoodThreshold;
    }
    /**
     * Set GoodThreshold value
     * @param int $goodThreshold
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setGoodThreshold($goodThreshold = null)
    {
        // validation for constraint: int
        if (!is_null($goodThreshold) && !(is_int($goodThreshold) || ctype_digit($goodThreshold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goodThreshold, true), gettype($goodThreshold)), __LINE__);
        }
        $this->GoodThreshold = $goodThreshold;
        return $this;
    }
    /**
     * Get MaximumResultsByDay value
     * @return int|null
     */
    public function getMaximumResultsByDay()
    {
        return $this->MaximumResultsByDay;
    }
    /**
     * Set MaximumResultsByDay value
     * @param int $maximumResultsByDay
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setMaximumResultsByDay($maximumResultsByDay = null)
    {
        // validation for constraint: int
        if (!is_null($maximumResultsByDay) && !(is_int($maximumResultsByDay) || ctype_digit($maximumResultsByDay))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumResultsByDay, true), gettype($maximumResultsByDay)), __LINE__);
        }
        $this->MaximumResultsByDay = $maximumResultsByDay;
        return $this;
    }
    /**
     * Get MaximumNonWorkHourResultsByDay value
     * @return int|null
     */
    public function getMaximumNonWorkHourResultsByDay()
    {
        return $this->MaximumNonWorkHourResultsByDay;
    }
    /**
     * Set MaximumNonWorkHourResultsByDay value
     * @param int $maximumNonWorkHourResultsByDay
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setMaximumNonWorkHourResultsByDay($maximumNonWorkHourResultsByDay = null)
    {
        // validation for constraint: int
        if (!is_null($maximumNonWorkHourResultsByDay) && !(is_int($maximumNonWorkHourResultsByDay) || ctype_digit($maximumNonWorkHourResultsByDay))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumNonWorkHourResultsByDay, true), gettype($maximumNonWorkHourResultsByDay)), __LINE__);
        }
        $this->MaximumNonWorkHourResultsByDay = $maximumNonWorkHourResultsByDay;
        return $this;
    }
    /**
     * Get MeetingDurationInMinutes value
     * @return int|null
     */
    public function getMeetingDurationInMinutes()
    {
        return $this->MeetingDurationInMinutes;
    }
    /**
     * Set MeetingDurationInMinutes value
     * @param int $meetingDurationInMinutes
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setMeetingDurationInMinutes($meetingDurationInMinutes = null)
    {
        // validation for constraint: int
        if (!is_null($meetingDurationInMinutes) && !(is_int($meetingDurationInMinutes) || ctype_digit($meetingDurationInMinutes))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meetingDurationInMinutes, true), gettype($meetingDurationInMinutes)), __LINE__);
        }
        $this->MeetingDurationInMinutes = $meetingDurationInMinutes;
        return $this;
    }
    /**
     * Get MinimumSuggestionQuality value
     * @return string|null
     */
    public function getMinimumSuggestionQuality()
    {
        return $this->MinimumSuggestionQuality;
    }
    /**
     * Set MinimumSuggestionQuality value
     * @uses \Ews\EnumType\EwsSuggestionQuality::valueIsValid()
     * @uses \Ews\EnumType\EwsSuggestionQuality::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $minimumSuggestionQuality
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setMinimumSuggestionQuality($minimumSuggestionQuality = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSuggestionQuality::valueIsValid($minimumSuggestionQuality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSuggestionQuality', is_array($minimumSuggestionQuality) ? implode(', ', $minimumSuggestionQuality) : var_export($minimumSuggestionQuality, true), implode(', ', \Ews\EnumType\EwsSuggestionQuality::getValidValues())), __LINE__);
        }
        $this->MinimumSuggestionQuality = $minimumSuggestionQuality;
        return $this;
    }
    /**
     * Get CurrentMeetingTime value
     * @return string|null
     */
    public function getCurrentMeetingTime()
    {
        return $this->CurrentMeetingTime;
    }
    /**
     * Set CurrentMeetingTime value
     * @param string $currentMeetingTime
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setCurrentMeetingTime($currentMeetingTime = null)
    {
        // validation for constraint: string
        if (!is_null($currentMeetingTime) && !is_string($currentMeetingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentMeetingTime, true), gettype($currentMeetingTime)), __LINE__);
        }
        $this->CurrentMeetingTime = $currentMeetingTime;
        return $this;
    }
    /**
     * Get GlobalObjectId value
     * @return string|null
     */
    public function getGlobalObjectId()
    {
        return $this->GlobalObjectId;
    }
    /**
     * Set GlobalObjectId value
     * @param string $globalObjectId
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setGlobalObjectId($globalObjectId = null)
    {
        // validation for constraint: string
        if (!is_null($globalObjectId) && !is_string($globalObjectId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($globalObjectId, true), gettype($globalObjectId)), __LINE__);
        }
        $this->GlobalObjectId = $globalObjectId;
        return $this;
    }
}
