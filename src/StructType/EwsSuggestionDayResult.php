<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $Date;
    /**
     * The DayQuality
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DayQuality;
    /**
     * The SuggestionArray
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSuggestion|null
     */
    protected ?\ArrayType\EwsArrayOfSuggestion $SuggestionArray = null;
    /**
     * Constructor method for SuggestionDayResult
     * @uses EwsSuggestionDayResult::setDate()
     * @uses EwsSuggestionDayResult::setDayQuality()
     * @uses EwsSuggestionDayResult::setSuggestionArray()
     * @param string $date
     * @param string $dayQuality
     * @param \ArrayType\EwsArrayOfSuggestion $suggestionArray
     */
    public function __construct(string $date, string $dayQuality, ?\ArrayType\EwsArrayOfSuggestion $suggestionArray = null)
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
    public function getDate(): string
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \StructType\EwsSuggestionDayResult
     */
    public function setDate(string $date): self
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), gettype($date)), __LINE__);
        }
        $this->Date = $date;
        
        return $this;
    }
    /**
     * Get DayQuality value
     * @return string
     */
    public function getDayQuality(): string
    {
        return $this->DayQuality;
    }
    /**
     * Set DayQuality value
     * @uses \EnumType\EwsSuggestionQuality::valueIsValid()
     * @uses \EnumType\EwsSuggestionQuality::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dayQuality
     * @return \StructType\EwsSuggestionDayResult
     */
    public function setDayQuality(string $dayQuality): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSuggestionQuality::valueIsValid($dayQuality)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSuggestionQuality', is_array($dayQuality) ? implode(', ', $dayQuality) : var_export($dayQuality, true), implode(', ', \EnumType\EwsSuggestionQuality::getValidValues())), __LINE__);
        }
        $this->DayQuality = $dayQuality;
        
        return $this;
    }
    /**
     * Get SuggestionArray value
     * @return \ArrayType\EwsArrayOfSuggestion|null
     */
    public function getSuggestionArray(): ?\ArrayType\EwsArrayOfSuggestion
    {
        return $this->SuggestionArray;
    }
    /**
     * Set SuggestionArray value
     * @param \ArrayType\EwsArrayOfSuggestion $suggestionArray
     * @return \StructType\EwsSuggestionDayResult
     */
    public function setSuggestionArray(?\ArrayType\EwsArrayOfSuggestion $suggestionArray = null): self
    {
        $this->SuggestionArray = $suggestionArray;
        
        return $this;
    }
}
