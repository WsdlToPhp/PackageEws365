<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartSearchSession StructType
 * Meta information extracted from the WSDL
 * - type: m:StartSearchSession
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStartSearchSession extends EwsBaseRequestType
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
    public $SearchSessionId;
    /**
     * The WarmupOptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $WarmupOptions;
    /**
     * The SuggestionTypes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $SuggestionTypes;
    /**
     * The SearchScope
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public $SearchScope;
    /**
     * The IdFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $IdFormat;
    /**
     * Constructor method for StartSearchSession
     * @uses EwsStartSearchSession::setSearchSessionId()
     * @uses EwsStartSearchSession::setWarmupOptions()
     * @uses EwsStartSearchSession::setSuggestionTypes()
     * @uses EwsStartSearchSession::setSearchScope()
     * @uses EwsStartSearchSession::setIdFormat()
     * @param string $searchSessionId
     * @param string[] $warmupOptions
     * @param string[] $suggestionTypes
     * @param \Ews\StructType\EwsArrayOfSearchScopeType $searchScope
     * @param string $idFormat
     */
    public function __construct($searchSessionId = null, array $warmupOptions = array(), array $suggestionTypes = array(), \Ews\StructType\EwsArrayOfSearchScopeType $searchScope = null, $idFormat = null)
    {
        $this
            ->setSearchSessionId($searchSessionId)
            ->setWarmupOptions($warmupOptions)
            ->setSuggestionTypes($suggestionTypes)
            ->setSearchScope($searchScope)
            ->setIdFormat($idFormat);
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
     * @return \Ews\StructType\EwsStartSearchSession
     */
    public function setSearchSessionId($searchSessionId = null)
    {
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchSessionId, true), gettype($searchSessionId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($searchSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($searchSessionId, true)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get WarmupOptions value
     * @return string[]
     */
    public function getWarmupOptions()
    {
        return $this->WarmupOptions;
    }
    /**
     * This method is responsible for validating the values passed to the setWarmupOptions method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWarmupOptions method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWarmupOptionsForArrayConstraintsFromSetWarmupOptions(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $startSearchSessionWarmupOptionsItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsWarmupOptionsType::valueIsValid($startSearchSessionWarmupOptionsItem)) {
                $invalidValues[] = is_object($startSearchSessionWarmupOptionsItem) ? get_class($startSearchSessionWarmupOptionsItem) : sprintf('%s(%s)', gettype($startSearchSessionWarmupOptionsItem), var_export($startSearchSessionWarmupOptionsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsWarmupOptionsType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsWarmupOptionsType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WarmupOptions value
     * @uses \Ews\EnumType\EwsWarmupOptionsType::valueIsValid()
     * @uses \Ews\EnumType\EwsWarmupOptionsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $warmupOptions
     * @return \Ews\StructType\EwsStartSearchSession
     */
    public function setWarmupOptions(array $warmupOptions = array())
    {
        // validation for constraint: list
        if ('' !== ($warmupOptionsArrayErrorMessage = self::validateWarmupOptionsForArrayConstraintsFromSetWarmupOptions($warmupOptions))) {
            throw new \InvalidArgumentException($warmupOptionsArrayErrorMessage, __LINE__);
        }
        $this->WarmupOptions = is_array($warmupOptions) ? implode(' ', $warmupOptions) : null;
        return $this;
    }
    /**
     * Get SuggestionTypes value
     * @return string[]
     */
    public function getSuggestionTypes()
    {
        return $this->SuggestionTypes;
    }
    /**
     * This method is responsible for validating the values passed to the setSuggestionTypes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSuggestionTypes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSuggestionTypesForArrayConstraintsFromSetSuggestionTypes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $startSearchSessionSuggestionTypesItem) {
            // validation for constraint: enumeration
            if (!\Ews\EnumType\EwsSuggestionKindType::valueIsValid($startSearchSessionSuggestionTypesItem)) {
                $invalidValues[] = is_object($startSearchSessionSuggestionTypesItem) ? get_class($startSearchSessionSuggestionTypesItem) : sprintf('%s(%s)', gettype($startSearchSessionSuggestionTypesItem), var_export($startSearchSessionSuggestionTypesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSuggestionKindType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Ews\EnumType\EwsSuggestionKindType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SuggestionTypes value
     * @uses \Ews\EnumType\EwsSuggestionKindType::valueIsValid()
     * @uses \Ews\EnumType\EwsSuggestionKindType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $suggestionTypes
     * @return \Ews\StructType\EwsStartSearchSession
     */
    public function setSuggestionTypes(array $suggestionTypes = array())
    {
        // validation for constraint: list
        if ('' !== ($suggestionTypesArrayErrorMessage = self::validateSuggestionTypesForArrayConstraintsFromSetSuggestionTypes($suggestionTypes))) {
            throw new \InvalidArgumentException($suggestionTypesArrayErrorMessage, __LINE__);
        }
        $this->SuggestionTypes = is_array($suggestionTypes) ? implode(' ', $suggestionTypes) : null;
        return $this;
    }
    /**
     * Get SearchScope value
     * @return \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public function getSearchScope()
    {
        return $this->SearchScope;
    }
    /**
     * Set SearchScope value
     * @param \Ews\StructType\EwsArrayOfSearchScopeType $searchScope
     * @return \Ews\StructType\EwsStartSearchSession
     */
    public function setSearchScope(\Ews\StructType\EwsArrayOfSearchScopeType $searchScope = null)
    {
        $this->SearchScope = $searchScope;
        return $this;
    }
    /**
     * Get IdFormat value
     * @return string|null
     */
    public function getIdFormat()
    {
        return $this->IdFormat;
    }
    /**
     * Set IdFormat value
     * @uses \Ews\EnumType\EwsIdFormatType::valueIsValid()
     * @uses \Ews\EnumType\EwsIdFormatType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $idFormat
     * @return \Ews\StructType\EwsStartSearchSession
     */
    public function setIdFormat($idFormat = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsIdFormatType::valueIsValid($idFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsIdFormatType', is_array($idFormat) ? implode(', ', $idFormat) : var_export($idFormat, true), implode(', ', \Ews\EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->IdFormat = $idFormat;
        return $this;
    }
}
