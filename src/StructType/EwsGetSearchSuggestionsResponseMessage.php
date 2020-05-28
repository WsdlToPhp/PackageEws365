<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsSearchSuggestionsType
     */
    public $SearchSuggestions;
    /**
     * Constructor method for GetSearchSuggestionsResponseMessage
     * @uses EwsGetSearchSuggestionsResponseMessage::setSearchSuggestions()
     * @param \Ews\StructType\EwsSearchSuggestionsType $searchSuggestions
     */
    public function __construct(\Ews\StructType\EwsSearchSuggestionsType $searchSuggestions = null)
    {
        $this
            ->setSearchSuggestions($searchSuggestions);
    }
    /**
     * Get SearchSuggestions value
     * @return \Ews\StructType\EwsSearchSuggestionsType|null
     */
    public function getSearchSuggestions()
    {
        return $this->SearchSuggestions;
    }
    /**
     * Set SearchSuggestions value
     * @param \Ews\StructType\EwsSearchSuggestionsType $searchSuggestions
     * @return \Ews\StructType\EwsGetSearchSuggestionsResponseMessage
     */
    public function setSearchSuggestions(\Ews\StructType\EwsSearchSuggestionsType $searchSuggestions = null)
    {
        $this->SearchSuggestions = $searchSuggestions;
        return $this;
    }
}
