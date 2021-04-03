<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSearchSuggestions StructType
 * Meta information extracted from the WSDL
 * - type: m:GetSearchSuggestions
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSearchSuggestions extends EwsBaseRequestType
{
    /**
     * The SearchSessionId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $SearchSessionId;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Query = null;
    /**
     * The SuggestionTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    protected ?string $SuggestionTypes = null;
    /**
     * The SuggestionsPrimer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $SuggestionsPrimer = null;
    /**
     * The MaxSuggestionsCountPerSuggestionType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaxSuggestionsCountPerSuggestionType = null;
    /**
     * Constructor method for GetSearchSuggestions
     * @uses EwsGetSearchSuggestions::setSearchSessionId()
     * @uses EwsGetSearchSuggestions::setQuery()
     * @uses EwsGetSearchSuggestions::setSuggestionTypes()
     * @uses EwsGetSearchSuggestions::setSuggestionsPrimer()
     * @uses EwsGetSearchSuggestions::setMaxSuggestionsCountPerSuggestionType()
     * @param string $searchSessionId
     * @param string $query
     * @param array|string $suggestionTypes
     * @param bool $suggestionsPrimer
     * @param int $maxSuggestionsCountPerSuggestionType
     */
    public function __construct(string $searchSessionId, ?string $query = null, $suggestionTypes = [], ?bool $suggestionsPrimer = null, ?int $maxSuggestionsCountPerSuggestionType = null)
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
    public function getSearchSessionId(): string
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \StructType\EwsGetSearchSuggestions
     */
    public function setSearchSessionId(string $searchSessionId): self
    {
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchSessionId, true), gettype($searchSessionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($searchSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $searchSessionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($searchSessionId, true)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery(): ?string
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \StructType\EwsGetSearchSuggestions
     */
    public function setQuery(?string $query = null): self
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
        
        return $this;
    }
    /**
     * Get SuggestionTypes value
     * @return string
     */
    public function getSuggestionTypes(): ?string
    {
        return $this->SuggestionTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestionTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestionTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestionTypesForArrayConstraintsFromSetSuggestionTypes(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSearchSuggestionsSuggestionTypesItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsSuggestionKindType::valueIsValid($getSearchSuggestionsSuggestionTypesItem)) {
                $invalidValues[] = is_object($getSearchSuggestionsSuggestionTypesItem) ? get_class($getSearchSuggestionsSuggestionTypesItem) : sprintf('%s(%s)', gettype($getSearchSuggestionsSuggestionTypesItem), var_export($getSearchSuggestionsSuggestionTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSuggestionKindType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\EwsSuggestionKindType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SuggestionTypes value
     * @uses \EnumType\EwsSuggestionKindType::valueIsValid()
     * @uses \EnumType\EwsSuggestionKindType::getValidValues()
     * @throws InvalidArgumentException
     * @param array|string $suggestionTypes
     * @return \StructType\EwsGetSearchSuggestions
     */
    public function setSuggestionTypes($suggestionTypes = []): self
    {
        // validation for constraint: list
        if ('' !== ($suggestionTypesArrayErrorMessage = self::validateSuggestionTypesForArrayConstraintsFromSetSuggestionTypes(is_string($suggestionTypes) ? explode(' ', $suggestionTypes) : $suggestionTypes))) {
            throw new InvalidArgumentException($suggestionTypesArrayErrorMessage, __LINE__);
        }
        $this->SuggestionTypes = is_array($suggestionTypes) ? implode(' ', $suggestionTypes) : $suggestionTypes;
        
        return $this;
    }
    /**
     * Get SuggestionsPrimer value
     * @return bool|null
     */
    public function getSuggestionsPrimer(): ?bool
    {
        return $this->SuggestionsPrimer;
    }
    /**
     * Set SuggestionsPrimer value
     * @param bool $suggestionsPrimer
     * @return \StructType\EwsGetSearchSuggestions
     */
    public function setSuggestionsPrimer(?bool $suggestionsPrimer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($suggestionsPrimer) && !is_bool($suggestionsPrimer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suggestionsPrimer, true), gettype($suggestionsPrimer)), __LINE__);
        }
        $this->SuggestionsPrimer = $suggestionsPrimer;
        
        return $this;
    }
    /**
     * Get MaxSuggestionsCountPerSuggestionType value
     * @return int|null
     */
    public function getMaxSuggestionsCountPerSuggestionType(): ?int
    {
        return $this->MaxSuggestionsCountPerSuggestionType;
    }
    /**
     * Set MaxSuggestionsCountPerSuggestionType value
     * @param int $maxSuggestionsCountPerSuggestionType
     * @return \StructType\EwsGetSearchSuggestions
     */
    public function setMaxSuggestionsCountPerSuggestionType(?int $maxSuggestionsCountPerSuggestionType = null): self
    {
        // validation for constraint: int
        if (!is_null($maxSuggestionsCountPerSuggestionType) && !(is_int($maxSuggestionsCountPerSuggestionType) || ctype_digit($maxSuggestionsCountPerSuggestionType))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxSuggestionsCountPerSuggestionType, true), gettype($maxSuggestionsCountPerSuggestionType)), __LINE__);
        }
        $this->MaxSuggestionsCountPerSuggestionType = $maxSuggestionsCountPerSuggestionType;
        
        return $this;
    }
}
