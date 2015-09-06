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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDuration
     */
    public $DetailedSuggestionsWindow;
    /**
     * The GoodThreshold
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GoodThreshold;
    /**
     * The MaximumResultsByDay
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaximumResultsByDay;
    /**
     * The MaximumNonWorkHourResultsByDay
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaximumNonWorkHourResultsByDay;
    /**
     * The MeetingDurationInMinutes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MeetingDurationInMinutes;
    /**
     * The MinimumSuggestionQuality
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $MinimumSuggestionQuality;
    /**
     * The CurrentMeetingTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var dateTime
     */
    public $CurrentMeetingTime;
    /**
     * The GlobalObjectId
     * Meta informations extracted from the WSDL
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
     * @param dateTime $currentMeetingTime
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
     * @param string $minimumSuggestionQuality
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setMinimumSuggestionQuality($minimumSuggestionQuality = null)
    {
        if (!\Ews\EnumType\EwsSuggestionQuality::valueIsValid($minimumSuggestionQuality)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $minimumSuggestionQuality, implode(', ', \Ews\EnumType\EwsSuggestionQuality::getValidValues())), __LINE__);
        }
        $this->MinimumSuggestionQuality = $minimumSuggestionQuality;
        return $this;
    }
    /**
     * Get CurrentMeetingTime value
     * @return dateTime|null
     */
    public function getCurrentMeetingTime()
    {
        return $this->CurrentMeetingTime;
    }
    /**
     * Set CurrentMeetingTime value
     * @param dateTime $currentMeetingTime
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
     */
    public function setCurrentMeetingTime($currentMeetingTime = null)
    {
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
        $this->GlobalObjectId = $globalObjectId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSuggestionsViewOptionsType
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
