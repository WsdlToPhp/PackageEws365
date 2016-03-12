<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartSearchSession StructType
 * Meta informations extracted from the WSDL
 * - type: m:StartSearchSession
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsStartSearchSession extends EwsBaseRequestType
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
     * The WarmupOptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $WarmupOptions;
    /**
     * The SuggestionTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SuggestionTypes;
    /**
     * The SearchScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsArrayOfSearchScopeType
     */
    public $SearchScope;
    /**
     * The IdFormat
     * Meta informations extracted from the WSDL
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
     * @param string $warmupOptions
     * @param string $suggestionTypes
     * @param \Ews\StructType\EwsArrayOfSearchScopeType $searchScope
     * @param string $idFormat
     */
    public function __construct($searchSessionId = null, $warmupOptions = null, $suggestionTypes = null, \Ews\StructType\EwsArrayOfSearchScopeType $searchScope = null, $idFormat = null)
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
        // validation for constraint: pattern
        if (!is_null($searchSessionId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($searchSessionId)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($searchSessionId) && !is_string($searchSessionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($searchSessionId)), __LINE__);
        }
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get WarmupOptions value
     * @return string
     */
    public function getWarmupOptions()
    {
        return $this->WarmupOptions;
    }
    /**
     * Set WarmupOptions value
     * @uses \Ews\EnumType\EwsWarmupOptionsType::valueIsValid()
     * @uses \Ews\EnumType\EwsWarmupOptionsType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $warmupOptions
     * @return \Ews\StructType\EwsStartSearchSession
     */
    public function setWarmupOptions($warmupOptions = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsWarmupOptionsType::valueIsValid($warmupOptions)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $warmupOptions, implode(', ', \Ews\EnumType\EwsWarmupOptionsType::getValidValues())), __LINE__);
        }
        $this->WarmupOptions = $warmupOptions;
        return $this;
    }
    /**
     * Get SuggestionTypes value
     * @return string
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
     * @return \Ews\StructType\EwsStartSearchSession
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $idFormat, implode(', ', \Ews\EnumType\EwsIdFormatType::getValidValues())), __LINE__);
        }
        $this->IdFormat = $idFormat;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsStartSearchSession
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
