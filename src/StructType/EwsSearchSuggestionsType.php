<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $TDSuggestionsBatchId;
    /**
     * The TDSuggestionsInstanceId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $TDSuggestionsInstanceId;
    /**
     * The Suggestions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSuggestions|null
     */
    protected ?\StructType\EwsSuggestions $Suggestions = null;
    /**
     * The DiagnosticsData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsSearchDiagnosticsType|null
     */
    protected ?\StructType\EwsSearchDiagnosticsType $DiagnosticsData = null;
    /**
     * Constructor method for SearchSuggestionsType
     * @uses EwsSearchSuggestionsType::setTDSuggestionsBatchId()
     * @uses EwsSearchSuggestionsType::setTDSuggestionsInstanceId()
     * @uses EwsSearchSuggestionsType::setSuggestions()
     * @uses EwsSearchSuggestionsType::setDiagnosticsData()
     * @param int $tDSuggestionsBatchId
     * @param string $tDSuggestionsInstanceId
     * @param \StructType\EwsSuggestions $suggestions
     * @param \StructType\EwsSearchDiagnosticsType $diagnosticsData
     */
    public function __construct(int $tDSuggestionsBatchId, string $tDSuggestionsInstanceId, ?\StructType\EwsSuggestions $suggestions = null, ?\StructType\EwsSearchDiagnosticsType $diagnosticsData = null)
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
    public function getTDSuggestionsBatchId(): int
    {
        return $this->TDSuggestionsBatchId;
    }
    /**
     * Set TDSuggestionsBatchId value
     * @param int $tDSuggestionsBatchId
     * @return \StructType\EwsSearchSuggestionsType
     */
    public function setTDSuggestionsBatchId(int $tDSuggestionsBatchId): self
    {
        // validation for constraint: int
        if (!is_null($tDSuggestionsBatchId) && !(is_int($tDSuggestionsBatchId) || ctype_digit($tDSuggestionsBatchId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tDSuggestionsBatchId, true), gettype($tDSuggestionsBatchId)), __LINE__);
        }
        $this->TDSuggestionsBatchId = $tDSuggestionsBatchId;
        
        return $this;
    }
    /**
     * Get TDSuggestionsInstanceId value
     * @return string
     */
    public function getTDSuggestionsInstanceId(): string
    {
        return $this->TDSuggestionsInstanceId;
    }
    /**
     * Set TDSuggestionsInstanceId value
     * @param string $tDSuggestionsInstanceId
     * @return \StructType\EwsSearchSuggestionsType
     */
    public function setTDSuggestionsInstanceId(string $tDSuggestionsInstanceId): self
    {
        // validation for constraint: string
        if (!is_null($tDSuggestionsInstanceId) && !is_string($tDSuggestionsInstanceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tDSuggestionsInstanceId, true), gettype($tDSuggestionsInstanceId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($tDSuggestionsInstanceId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $tDSuggestionsInstanceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($tDSuggestionsInstanceId, true)), __LINE__);
        }
        $this->TDSuggestionsInstanceId = $tDSuggestionsInstanceId;
        
        return $this;
    }
    /**
     * Get Suggestions value
     * @return \StructType\EwsSuggestions|null
     */
    public function getSuggestions(): ?\StructType\EwsSuggestions
    {
        return $this->Suggestions;
    }
    /**
     * Set Suggestions value
     * @param \StructType\EwsSuggestions $suggestions
     * @return \StructType\EwsSearchSuggestionsType
     */
    public function setSuggestions(?\StructType\EwsSuggestions $suggestions = null): self
    {
        $this->Suggestions = $suggestions;
        
        return $this;
    }
    /**
     * Get DiagnosticsData value
     * @return \StructType\EwsSearchDiagnosticsType|null
     */
    public function getDiagnosticsData(): ?\StructType\EwsSearchDiagnosticsType
    {
        return $this->DiagnosticsData;
    }
    /**
     * Set DiagnosticsData value
     * @param \StructType\EwsSearchDiagnosticsType $diagnosticsData
     * @return \StructType\EwsSearchSuggestionsType
     */
    public function setDiagnosticsData(?\StructType\EwsSearchDiagnosticsType $diagnosticsData = null): self
    {
        $this->DiagnosticsData = $diagnosticsData;
        
        return $this;
    }
}
