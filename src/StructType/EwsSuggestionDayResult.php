<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestionDayResult StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestionDayResult extends AbstractStructBase
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Date;
    /**
     * The DayQuality
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DayQuality;
    /**
     * The SuggestionArray
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSuggestion
     */
    public $SuggestionArray;
    /**
     * Constructor method for SuggestionDayResult
     * @uses EwsSuggestionDayResult::setDate()
     * @uses EwsSuggestionDayResult::setDayQuality()
     * @uses EwsSuggestionDayResult::setSuggestionArray()
     * @param string $date
     * @param string $dayQuality
     * @param \Ews\ArrayType\EwsArrayOfSuggestion $suggestionArray
     */
    public function __construct($date = null, $dayQuality = null, \Ews\ArrayType\EwsArrayOfSuggestion $suggestionArray = null)
    {
        $this
            ->setDate($date)
            ->setDayQuality($dayQuality)
            ->setSuggestionArray($suggestionArray);
    }
    /**
     * Get Date value
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Ews\StructType\EwsSuggestionDayResult
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get DayQuality value
     * @return string
     */
    public function getDayQuality()
    {
        return $this->DayQuality;
    }
    /**
     * Set DayQuality value
     * @uses \Ews\EnumType\EwsSuggestionQuality::valueIsValid()
     * @uses \Ews\EnumType\EwsSuggestionQuality::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayQuality
     * @return \Ews\StructType\EwsSuggestionDayResult
     */
    public function setDayQuality($dayQuality = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSuggestionQuality::valueIsValid($dayQuality)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSuggestionQuality', is_array($dayQuality) ? implode(', ', $dayQuality) : var_export($dayQuality, true), implode(', ', \Ews\EnumType\EwsSuggestionQuality::getValidValues())), __LINE__);
        }
        $this->DayQuality = $dayQuality;
        return $this;
    }
    /**
     * Get SuggestionArray value
     * @return \Ews\ArrayType\EwsArrayOfSuggestion|null
     */
    public function getSuggestionArray()
    {
        return $this->SuggestionArray;
    }
    /**
     * Set SuggestionArray value
     * @param \Ews\ArrayType\EwsArrayOfSuggestion $suggestionArray
     * @return \Ews\StructType\EwsSuggestionDayResult
     */
    public function setSuggestionArray(\Ews\ArrayType\EwsArrayOfSuggestion $suggestionArray = null)
    {
        $this->SuggestionArray = $suggestionArray;
        return $this;
    }
}
