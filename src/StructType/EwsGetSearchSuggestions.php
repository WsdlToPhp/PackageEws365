<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSearchSuggestions StructType
 * Meta informations extracted from the WSDL
 * - type: m:GetSearchSuggestions
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSearchSuggestions extends EwsBaseRequestType
{
    /**
     * The SearchSessionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $SearchSessionId;
    /**
     * The Query
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Query;
    /**
     * The SuggestionTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SuggestionTypes;
    /**
     * The SuggestionsPrimer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $SuggestionsPrimer;
    /**
     * The MaxSuggestionsCountPerSuggestionType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaxSuggestionsCountPerSuggestionType;
    /**
     * Constructor method for GetSearchSuggestions
     * @uses EwsGetSearchSuggestions::setSearchSessionId()
     * @uses EwsGetSearchSuggestions::setQuery()
     * @uses EwsGetSearchSuggestions::setSuggestionTypes()
     * @uses EwsGetSearchSuggestions::setSuggestionsPrimer()
     * @uses EwsGetSearchSuggestions::setMaxSuggestionsCountPerSuggestionType()
     * @param string $searchSessionId
     * @param string $query
     * @param string $suggestionTypes
     * @param bool $suggestionsPrimer
     * @param int $maxSuggestionsCountPerSuggestionType
     */
    public function __construct($searchSessionId = null, $query = null, $suggestionTypes = null, $suggestionsPrimer = null, $maxSuggestionsCountPerSuggestionType = null)
    {
        $this
            ->setSearchSessionId($searchSessionId)
            ->setQuery($query)
            ->setSuggestionTypes($suggestionTypes)
            ->setSuggestionsPrimer($suggestionsPrimer)
            ->setMaxSuggestionsCountPerSuggestionType($maxSuggestionsCountPerSuggestionType);
    }
    /**
     * Get SearchSessionId value
     * @return string
     */
    public function getSearchSessionId()
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \Ews\StructType\EwsGetSearchSuggestions
     */
    public function setSearchSessionId($searchSessionId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($searchSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($searchSessionId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \Ews\StructType\EwsGetSearchSuggestions
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($query)), __LINE__);
        }
        $this->Query = $query;
        return $this;
    }
    /**
     * Get SuggestionTypes value
     * @return string|null
     */
    public function getSuggestionTypes()
    {
        return $this->SuggestionTypes;
    }
    /**
     * Set SuggestionTypes value
     * @uses \Ews\EnumType\EwsSuggestionKindType::valueIsValid()
     * @uses \Ews\EnumType\EwsSuggestionKindType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $suggestionTypes
     * @return \Ews\StructType\EwsGetSearchSuggestions
     */
    public function setSuggestionTypes($suggestionTypes = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSuggestionKindType::valueIsValid($suggestionTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $suggestionTypes, implode(', ', \Ews\EnumType\EwsSuggestionKindType::getValidValues())), __LINE__);
        }
        $this->SuggestionTypes = $suggestionTypes;
        return $this;
    }
    /**
     * Get SuggestionsPrimer value
     * @return bool|null
     */
    public function getSuggestionsPrimer()
    {
        return $this->SuggestionsPrimer;
    }
    /**
     * Set SuggestionsPrimer value
     * @param bool $suggestionsPrimer
     * @return \Ews\StructType\EwsGetSearchSuggestions
     */
    public function setSuggestionsPrimer($suggestionsPrimer = null)
    {
        // validation for constraint: boolean
        if (!is_null($suggestionsPrimer) && !is_bool($suggestionsPrimer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($suggestionsPrimer)), __LINE__);
        }
        $this->SuggestionsPrimer = $suggestionsPrimer;
        return $this;
    }
    /**
     * Get MaxSuggestionsCountPerSuggestionType value
     * @return int|null
     */
    public function getMaxSuggestionsCountPerSuggestionType()
    {
        return $this->MaxSuggestionsCountPerSuggestionType;
    }
    /**
     * Set MaxSuggestionsCountPerSuggestionType value
     * @param int $maxSuggestionsCountPerSuggestionType
     * @return \Ews\StructType\EwsGetSearchSuggestions
     */
    public function setMaxSuggestionsCountPerSuggestionType($maxSuggestionsCountPerSuggestionType = null)
    {
        // validation for constraint: int
        if (!is_null($maxSuggestionsCountPerSuggestionType) && !is_numeric($maxSuggestionsCountPerSuggestionType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxSuggestionsCountPerSuggestionType)), __LINE__);
        }
        $this->MaxSuggestionsCountPerSuggestionType = $maxSuggestionsCountPerSuggestionType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSearchSuggestions
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
