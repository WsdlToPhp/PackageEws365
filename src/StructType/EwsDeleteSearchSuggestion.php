<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSearchSuggestion StructType
 * Meta informations extracted from the WSDL
 * - type: m:DeleteSearchSuggestion
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteSearchSuggestion extends EwsBaseRequestType
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
     * - minOccurs: 1
     * @var string
     */
    public $Query;
    /**
     * The SuggestionTypes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string[]
     */
    public $SuggestionTypes;
    /**
     * Constructor method for DeleteSearchSuggestion
     * @uses EwsDeleteSearchSuggestion::setSearchSessionId()
     * @uses EwsDeleteSearchSuggestion::setQuery()
     * @uses EwsDeleteSearchSuggestion::setSuggestionTypes()
     * @param string $searchSessionId
     * @param string $query
     * @param string[] $suggestionTypes
     */
    public function __construct($searchSessionId = null, $query = null, $suggestionTypes = null)
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
    public function getSearchSessionId()
    {
        return $this->SearchSessionId;
    }
    /**
     * Set SearchSessionId value
     * @param string $searchSessionId
     * @return \Ews\StructType\EwsDeleteSearchSuggestion
     */
    public function setSearchSessionId($searchSessionId = null)
    {
        $this->SearchSessionId = $searchSessionId;
        return $this;
    }
    /**
     * Get Query value
     * @return string
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \Ews\StructType\EwsDeleteSearchSuggestion
     */
    public function setQuery($query = null)
    {
        $this->Query = $query;
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
     * Set SuggestionTypes value
     * @uses \Ews\EnumType\EwsSuggestionKindType::valueIsValid()
     * @uses \Ews\EnumType\EwsSuggestionKindType::getValidValues()
     * @param string[] $suggestionTypes
     * @return \Ews\StructType\EwsDeleteSearchSuggestion
     */
    public function setSuggestionTypes($suggestionTypes = null)
    {
        if (!\Ews\EnumType\EwsSuggestionKindType::valueIsValid($suggestionTypes)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $suggestionTypes, implode(', ', \Ews\EnumType\EwsSuggestionKindType::getValidValues())), __LINE__);
        }
        $this->SuggestionTypes = $suggestionTypes;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteSearchSuggestion
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
