<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsDuration
     */
    protected \StructType\EwsDuration $DetailedSuggestionsWindow;
    /**
     * The GoodThreshold
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GoodThreshold = null;
    /**
     * The MaximumResultsByDay
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaximumResultsByDay = null;
    /**
     * The MaximumNonWorkHourResultsByDay
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaximumNonWorkHourResultsByDay = null;
    /**
     * The MeetingDurationInMinutes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MeetingDurationInMinutes = null;
    /**
     * The MinimumSuggestionQuality
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $MinimumSuggestionQuality = null;
    /**
     * The CurrentMeetingTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $CurrentMeetingTime = null;
    /**
     * The GlobalObjectId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GlobalObjectId = null;
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
     * @param \StructType\EwsDuration $detailedSuggestionsWindow
     * @param int $goodThreshold
     * @param int $maximumResultsByDay
     * @param int $maximumNonWorkHourResultsByDay
     * @param int $meetingDurationInMinutes
     * @param string $minimumSuggestionQuality
     * @param string $currentMeetingTime
     * @param string $globalObjectId
     */
    public function __construct(\StructType\EwsDuration $detailedSuggestionsWindow, ?int $goodThreshold = null, ?int $maximumResultsByDay = null, ?int $maximumNonWorkHourResultsByDay = null, ?int $meetingDurationInMinutes = null, ?string $minimumSuggestionQuality = null, ?string $currentMeetingTime = null, ?string $globalObjectId = null)
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
     * @return \StructType\EwsDuration
     */
    public function getDetailedSuggestionsWindow(): \StructType\EwsDuration
    {
        return $this->DetailedSuggestionsWindow;
    }
    /**
     * Set DetailedSuggestionsWindow value
     * @param \StructType\EwsDuration $detailedSuggestionsWindow
     * @return \StructType\EwsSuggestionsViewOptionsType
     */
    public function setDetailedSuggestionsWindow(\StructType\EwsDuration $detailedSuggestionsWindow): self
    {
        $this->DetailedSuggestionsWindow = $detailedSuggestionsWindow;
        
        return $this;
    }
    /**
     * Get GoodThreshold value
     * @return int|null
     */
    public function getGoodThreshold(): ?int
    {
        return $this->GoodThreshold;
    }
    /**
     * Set GoodThreshold value
     * @param int $goodThreshold
     * @return \StructType\EwsSuggestionsViewOptionsType
     */
    public function setGoodThreshold(?int $goodThreshold = null): self
    {
        // validation for constraint: int
        if (!is_null($goodThreshold) && !(is_int($goodThreshold) || ctype_digit($goodThreshold))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goodThreshold, true), gettype($goodThreshold)), __LINE__);
        }
        $this->GoodThreshold = $goodThreshold;
        
        return $this;
    }
    /**
     * Get MaximumResultsByDay value
     * @return int|null
     */
    public function getMaximumResultsByDay(): ?int
    {
        return $this->MaximumResultsByDay;
    }
    /**
     * Set MaximumResultsByDay value
     * @param int $maximumResultsByDay
     * @return \StructType\EwsSuggestionsViewOptionsType
     */
    public function setMaximumResultsByDay(?int $maximumResultsByDay = null): self
    {
        // validation for constraint: int
        if (!is_null($maximumResultsByDay) && !(is_int($maximumResultsByDay) || ctype_digit($maximumResultsByDay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumResultsByDay, true), gettype($maximumResultsByDay)), __LINE__);
        }
        $this->MaximumResultsByDay = $maximumResultsByDay;
        
        return $this;
    }
    /**
     * Get MaximumNonWorkHourResultsByDay value
     * @return int|null
     */
    public function getMaximumNonWorkHourResultsByDay(): ?int
    {
        return $this->MaximumNonWorkHourResultsByDay;
    }
    /**
     * Set MaximumNonWorkHourResultsByDay value
     * @param int $maximumNonWorkHourResultsByDay
     * @return \StructType\EwsSuggestionsViewOptionsType
     */
    public function setMaximumNonWorkHourResultsByDay(?int $maximumNonWorkHourResultsByDay = null): self
    {
        // validation for constraint: int
        if (!is_null($maximumNonWorkHourResultsByDay) && !(is_int($maximumNonWorkHourResultsByDay) || ctype_digit($maximumNonWorkHourResultsByDay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumNonWorkHourResultsByDay, true), gettype($maximumNonWorkHourResultsByDay)), __LINE__);
        }
        $this->MaximumNonWorkHourResultsByDay = $maximumNonWorkHourResultsByDay;
        
        return $this;
    }
    /**
     * Get MeetingDurationInMinutes value
     * @return int|null
     */
    public function getMeetingDurationInMinutes(): ?int
    {
        return $this->MeetingDurationInMinutes;
    }
    /**
     * Set MeetingDurationInMinutes value
     * @param int $meetingDurationInMinutes
     * @return \StructType\EwsSuggestionsViewOptionsType
     */
    public function setMeetingDurationInMinutes(?int $meetingDurationInMinutes = null): self
    {
        // validation for constraint: int
        if (!is_null($meetingDurationInMinutes) && !(is_int($meetingDurationInMinutes) || ctype_digit($meetingDurationInMinutes))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($meetingDurationInMinutes, true), gettype($meetingDurationInMinutes)), __LINE__);
        }
        $this->MeetingDurationInMinutes = $meetingDurationInMinutes;
        
        return $this;
    }
    /**
     * Get MinimumSuggestionQuality value
     * @return string|null
     */
    public function getMinimumSuggestionQuality(): ?string
    {
        return $this->MinimumSuggestionQuality;
    }
    /**
     * Set MinimumSuggestionQuality value
     * @uses \EnumType\EwsSuggestionQuality::valueIsValid()
     * @uses \EnumType\EwsSuggestionQuality::getValidValues()
     * @throws InvalidArgumentException
     * @param string $minimumSuggestionQuality
     * @return \StructType\EwsSuggestionsViewOptionsType
     */
    public function setMinimumSuggestionQuality(?string $minimumSuggestionQuality = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSuggestionQuality::valueIsValid($minimumSuggestionQuality)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSuggestionQuality', is_array($minimumSuggestionQuality) ? implode(', ', $minimumSuggestionQuality) : var_export($minimumSuggestionQuality, true), implode(', ', \EnumType\EwsSuggestionQuality::getValidValues())), __LINE__);
        }
        $this->MinimumSuggestionQuality = $minimumSuggestionQuality;
        
        return $this;
    }
    /**
     * Get CurrentMeetingTime value
     * @return string|null
     */
    public function getCurrentMeetingTime(): ?string
    {
        return $this->CurrentMeetingTime;
    }
    /**
     * Set CurrentMeetingTime value
     * @param string $currentMeetingTime
     * @return \StructType\EwsSuggestionsViewOptionsType
     */
    public function setCurrentMeetingTime(?string $currentMeetingTime = null): self
    {
        // validation for constraint: string
        if (!is_null($currentMeetingTime) && !is_string($currentMeetingTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentMeetingTime, true), gettype($currentMeetingTime)), __LINE__);
        }
        $this->CurrentMeetingTime = $currentMeetingTime;
        
        return $this;
    }
    /**
     * Get GlobalObjectId value
     * @return string|null
     */
    public function getGlobalObjectId(): ?string
    {
        return $this->GlobalObjectId;
    }
    /**
     * Set GlobalObjectId value
     * @param string $globalObjectId
     * @return \StructType\EwsSuggestionsViewOptionsType
     */
    public function setGlobalObjectId(?string $globalObjectId = null): self
    {
        // validation for constraint: string
        if (!is_null($globalObjectId) && !is_string($globalObjectId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($globalObjectId, true), gettype($globalObjectId)), __LINE__);
        }
        $this->GlobalObjectId = $globalObjectId;
        
        return $this;
    }
}
