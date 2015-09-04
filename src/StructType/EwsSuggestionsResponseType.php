<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestionsResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsSuggestionsResponseType extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ResponseMessage;
    /**
     * The SuggestionDayResultArray
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfSuggestionDayResult
     */
    public $SuggestionDayResultArray;
    /**
     * Constructor method for SuggestionsResponseType
     * @uses EwsSuggestionsResponseType::setResponseMessage()
     * @uses EwsSuggestionsResponseType::setSuggestionDayResultArray()
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     * @param \Ews\ArrayType\EwsArrayOfSuggestionDayResult $suggestionDayResultArray
     */
    public function __construct(\Ews\StructType\EwsResponseMessageType $responseMessage = null, \Ews\ArrayType\EwsArrayOfSuggestionDayResult $suggestionDayResultArray = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setSuggestionDayResultArray($suggestionDayResultArray);
    }
    /**
     * Get ResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     * @return \Ews\StructType\EwsSuggestionsResponseType
     */
    public function setResponseMessage(\Ews\StructType\EwsResponseMessageType $responseMessage = null)
    {
        $this->ResponseMessage = $responseMessage;
        return $this;
    }
    /**
     * Get SuggestionDayResultArray value
     * @return \Ews\ArrayType\EwsArrayOfSuggestionDayResult|null
     */
    public function getSuggestionDayResultArray()
    {
        return $this->SuggestionDayResultArray;
    }
    /**
     * Set SuggestionDayResultArray value
     * @param \Ews\ArrayType\EwsArrayOfSuggestionDayResult $suggestionDayResultArray
     * @return \Ews\StructType\EwsSuggestionsResponseType
     */
    public function setSuggestionDayResultArray(\Ews\ArrayType\EwsArrayOfSuggestionDayResult $suggestionDayResultArray = null)
    {
        $this->SuggestionDayResultArray = $suggestionDayResultArray;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSuggestionsResponseType
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
