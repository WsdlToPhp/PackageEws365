<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchSuggestionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchSuggestionsType extends AbstractStructBase
{
    /**
     * The TDSuggestionsBatchId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $TDSuggestionsBatchId;
    /**
     * The TDSuggestionsInstanceId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $TDSuggestionsInstanceId;
    /**
     * The Suggestions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSuggestions
     */
    public $Suggestions;
    /**
     * The DiagnosticsData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSearchDiagnosticsType
     */
    public $DiagnosticsData;
    /**
     * Constructor method for SearchSuggestionsType
     * @uses EwsSearchSuggestionsType::setTDSuggestionsBatchId()
     * @uses EwsSearchSuggestionsType::setTDSuggestionsInstanceId()
     * @uses EwsSearchSuggestionsType::setSuggestions()
     * @uses EwsSearchSuggestionsType::setDiagnosticsData()
     * @param int $tDSuggestionsBatchId
     * @param string $tDSuggestionsInstanceId
     * @param \Ews\StructType\EwsSuggestions $suggestions
     * @param \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData
     */
    public function __construct($tDSuggestionsBatchId = null, $tDSuggestionsInstanceId = null, \Ews\StructType\EwsSuggestions $suggestions = null, \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData = null)
    {
        $this
            ->setTDSuggestionsBatchId($tDSuggestionsBatchId)
            ->setTDSuggestionsInstanceId($tDSuggestionsInstanceId)
            ->setSuggestions($suggestions)
            ->setDiagnosticsData($diagnosticsData);
    }
    /**
     * Get TDSuggestionsBatchId value
     * @return int
     */
    public function getTDSuggestionsBatchId()
    {
        return $this->TDSuggestionsBatchId;
    }
    /**
     * Set TDSuggestionsBatchId value
     * @param int $tDSuggestionsBatchId
     * @return \Ews\StructType\EwsSearchSuggestionsType
     */
    public function setTDSuggestionsBatchId($tDSuggestionsBatchId = null)
    {
        // validation for constraint: int
        if (!is_null($tDSuggestionsBatchId) && !is_int($tDSuggestionsBatchId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($tDSuggestionsBatchId)), __LINE__);
        }
        $this->TDSuggestionsBatchId = $tDSuggestionsBatchId;
        return $this;
    }
    /**
     * Get TDSuggestionsInstanceId value
     * @return string
     */
    public function getTDSuggestionsInstanceId()
    {
        return $this->TDSuggestionsInstanceId;
    }
    /**
     * Set TDSuggestionsInstanceId value
     * @param string $tDSuggestionsInstanceId
     * @return \Ews\StructType\EwsSearchSuggestionsType
     */
    public function setTDSuggestionsInstanceId($tDSuggestionsInstanceId = null)
    {
        // validation for constraint: pattern
        if (is_scalar($tDSuggestionsInstanceId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $tDSuggestionsInstanceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($tDSuggestionsInstanceId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($tDSuggestionsInstanceId) && !is_string($tDSuggestionsInstanceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($tDSuggestionsInstanceId)), __LINE__);
        }
        $this->TDSuggestionsInstanceId = $tDSuggestionsInstanceId;
        return $this;
    }
    /**
     * Get Suggestions value
     * @return \Ews\StructType\EwsSuggestions|null
     */
    public function getSuggestions()
    {
        return $this->Suggestions;
    }
    /**
     * Set Suggestions value
     * @param \Ews\StructType\EwsSuggestions $suggestions
     * @return \Ews\StructType\EwsSearchSuggestionsType
     */
    public function setSuggestions(\Ews\StructType\EwsSuggestions $suggestions = null)
    {
        $this->Suggestions = $suggestions;
        return $this;
    }
    /**
     * Get DiagnosticsData value
     * @return \Ews\StructType\EwsSearchDiagnosticsType|null
     */
    public function getDiagnosticsData()
    {
        return $this->DiagnosticsData;
    }
    /**
     * Set DiagnosticsData value
     * @param \Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData
     * @return \Ews\StructType\EwsSearchSuggestionsType
     */
    public function setDiagnosticsData(\Ews\StructType\EwsSearchDiagnosticsType $diagnosticsData = null)
    {
        $this->DiagnosticsData = $diagnosticsData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchSuggestionsType
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
