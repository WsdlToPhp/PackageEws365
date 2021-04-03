<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSearchSuggestionsResponseMessage StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSearchSuggestionsResponseMessage extends EwsResponseMessageType
{
    /**
     * The SearchSuggestions
     * @var \StructType\EwsSearchSuggestionsType|null
     */
    protected ?\StructType\EwsSearchSuggestionsType $SearchSuggestions = null;
    /**
     * Constructor method for GetSearchSuggestionsResponseMessage
     * @uses EwsGetSearchSuggestionsResponseMessage::setSearchSuggestions()
     * @param \StructType\EwsSearchSuggestionsType $searchSuggestions
     */
    public function __construct(?\StructType\EwsSearchSuggestionsType $searchSuggestions = null)
    {
        $this
            ->setSearchSuggestions($searchSuggestions);
    }
    /**
     * Get SearchSuggestions value
     * @return \StructType\EwsSearchSuggestionsType|null
     */
    public function getSearchSuggestions(): ?\StructType\EwsSearchSuggestionsType
    {
        return $this->SearchSuggestions;
    }
    /**
     * Set SearchSuggestions value
     * @param \StructType\EwsSearchSuggestionsType $searchSuggestions
     * @return \StructType\EwsGetSearchSuggestionsResponseMessage
     */
    public function setSearchSuggestions(?\StructType\EwsSearchSuggestionsType $searchSuggestions = null): self
    {
        $this->SearchSuggestions = $searchSuggestions;
        
        return $this;
    }
}
