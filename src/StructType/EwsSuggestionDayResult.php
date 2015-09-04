<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestionDayResult StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSuggestionDayResult extends AbstractStructBase
{
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var dateTime
     */
    public $Date;
    /**
     * The DayQuality
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DayQuality;
    /**
     * The SuggestionArray
     * Meta informations extracted from the WSDL
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
     * @param dateTime $date
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
     * @return dateTime
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param dateTime $date
     * @return \Ews\StructType\EwsSuggestionDayResult
     */
    public function setDate($date = null)
    {
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
     * @param string $dayQuality
     * @return \Ews\StructType\EwsSuggestionDayResult
     */
    public function setDayQuality($dayQuality = null)
    {
        if (!\Ews\EnumType\EwsSuggestionQuality::valueIsValid($dayQuality)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayQuality, implode(', ', \Ews\EnumType\EwsSuggestionQuality::getValidValues())), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSuggestionDayResult
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
