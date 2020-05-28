<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContactPropertySuggestionResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContactPropertySuggestionResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Suggestions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Suggestions;
    /**
     * Constructor method for ContactPropertySuggestionResponseMessageType
     * @uses EwsContactPropertySuggestionResponseMessageType::setSuggestions()
     * @param \Ews\ArrayType\EwsArrayOfStringsType $suggestions
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $suggestions = null)
    {
        $this
            ->setSuggestions($suggestions);
    }
    /**
     * Get Suggestions value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getSuggestions()
    {
        return $this->Suggestions;
    }
    /**
     * Set Suggestions value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $suggestions
     * @return \Ews\StructType\EwsContactPropertySuggestionResponseMessageType
     */
    public function setSuggestions(\Ews\ArrayType\EwsArrayOfStringsType $suggestions = null)
    {
        $this->Suggestions = $suggestions;
        return $this;
    }
}
