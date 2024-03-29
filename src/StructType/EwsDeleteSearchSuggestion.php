<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSearchSuggestion StructType
 * Meta information extracted from the WSDL
 * - type: m:DeleteSearchSuggestion
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteSearchSuggestion extends EwsBaseRequestType
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
     * - minOccurs: 1
     * @var string
     */
    protected string $Query;
    /**
     * The SuggestionTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $SuggestionTypes;
    /**
     * Constructor method for DeleteSearchSuggestion
     * @uses EwsDeleteSearchSuggestion::setSearchSessionId()
     * @uses EwsDeleteSearchSuggestion::setQuery()
     * @uses EwsDeleteSearchSuggestion::setSuggestionTypes()
     * @param string $searchSessionId
     * @param string $query
     * @param array|string $suggestionTypes
     */
    public function __construct(string $searchSessionId, string $query, $suggestionTypes)
    {
        $this
            ->setSearchSessionId($searchSessionId)
            ->setQuery($query)
            ->setSuggestionTypes($suggestionTypes);
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
     * @return \StructType\EwsDeleteSearchSuggestion
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
     * @return string
     */
    public function getQuery(): string
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \StructType\EwsDeleteSearchSuggestion
     */
    public function setQuery(string $query): self
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
    public function getSuggestionTypes(): string
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
        foreach ($values as $deleteSearchSuggestionSuggestionTypesItem) {
            // validation for constraint: enumeration
            if (!\EnumType\EwsSuggestionKindType::valueIsValid($deleteSearchSuggestionSuggestionTypesItem)) {
                $invalidValues[] = is_object($deleteSearchSuggestionSuggestionTypesItem) ? get_class($deleteSearchSuggestionSuggestionTypesItem) : sprintf('%s(%s)', gettype($deleteSearchSuggestionSuggestionTypesItem), var_export($deleteSearchSuggestionSuggestionTypesItem, true));
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
     * @return \StructType\EwsDeleteSearchSuggestion
     */
    public function setSuggestionTypes($suggestionTypes): self
    {
        // validation for constraint: list
        if ('' !== ($suggestionTypesArrayErrorMessage = self::validateSuggestionTypesForArrayConstraintsFromSetSuggestionTypes(is_string($suggestionTypes) ? explode(' ', $suggestionTypes) : $suggestionTypes))) {
            throw new InvalidArgumentException($suggestionTypesArrayErrorMessage, __LINE__);
        }
        $this->SuggestionTypes = is_array($suggestionTypes) ? implode(' ', $suggestionTypes) : $suggestionTypes;
        
        return $this;
    }
}
