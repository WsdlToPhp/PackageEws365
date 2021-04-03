<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Suggestions = null;
    /**
     * Constructor method for ContactPropertySuggestionResponseMessageType
     * @uses EwsContactPropertySuggestionResponseMessageType::setSuggestions()
     * @param \ArrayType\EwsArrayOfStringsType $suggestions
     */
    public function __construct(?\ArrayType\EwsArrayOfStringsType $suggestions = null)
    {
        $this
            ->setSuggestions($suggestions);
    }
    /**
     * Get Suggestions value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getSuggestions(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Suggestions;
    }
    /**
     * Set Suggestions value
     * @param \ArrayType\EwsArrayOfStringsType $suggestions
     * @return \StructType\EwsContactPropertySuggestionResponseMessageType
     */
    public function setSuggestions(?\ArrayType\EwsArrayOfStringsType $suggestions = null): self
    {
        $this->Suggestions = $suggestions;
        
        return $this;
    }
}
