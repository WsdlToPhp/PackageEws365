<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuggestionsResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSuggestionsResponseType extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsResponseMessageType|null
     */
    protected ?\StructType\EwsResponseMessageType $ResponseMessage = null;
    /**
     * The SuggestionDayResultArray
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfSuggestionDayResult|null
     */
    protected ?\ArrayType\EwsArrayOfSuggestionDayResult $SuggestionDayResultArray = null;
    /**
     * Constructor method for SuggestionsResponseType
     * @uses EwsSuggestionsResponseType::setResponseMessage()
     * @uses EwsSuggestionsResponseType::setSuggestionDayResultArray()
     * @param \StructType\EwsResponseMessageType $responseMessage
     * @param \ArrayType\EwsArrayOfSuggestionDayResult $suggestionDayResultArray
     */
    public function __construct(?\StructType\EwsResponseMessageType $responseMessage = null, ?\ArrayType\EwsArrayOfSuggestionDayResult $suggestionDayResultArray = null)
    {
        $this
            ->setResponseMessage($responseMessage)
            ->setSuggestionDayResultArray($suggestionDayResultArray);
    }
    /**
     * Get ResponseMessage value
     * @return \StructType\EwsResponseMessageType|null
     */
    public function getResponseMessage(): ?\StructType\EwsResponseMessageType
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \StructType\EwsResponseMessageType $responseMessage
     * @return \StructType\EwsSuggestionsResponseType
     */
    public function setResponseMessage(?\StructType\EwsResponseMessageType $responseMessage = null): self
    {
        $this->ResponseMessage = $responseMessage;
        
        return $this;
    }
    /**
     * Get SuggestionDayResultArray value
     * @return \ArrayType\EwsArrayOfSuggestionDayResult|null
     */
    public function getSuggestionDayResultArray(): ?\ArrayType\EwsArrayOfSuggestionDayResult
    {
        return $this->SuggestionDayResultArray;
    }
    /**
     * Set SuggestionDayResultArray value
     * @param \ArrayType\EwsArrayOfSuggestionDayResult $suggestionDayResultArray
     * @return \StructType\EwsSuggestionsResponseType
     */
    public function setSuggestionDayResultArray(?\ArrayType\EwsArrayOfSuggestionDayResult $suggestionDayResultArray = null): self
    {
        $this->SuggestionDayResultArray = $suggestionDayResultArray;
        
        return $this;
    }
}
