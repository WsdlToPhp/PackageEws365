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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSearchSuggestionsResponseMessage
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
