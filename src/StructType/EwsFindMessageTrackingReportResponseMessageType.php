<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMessageTrackingReportResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMessageTrackingReportResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Diagnostics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Diagnostics = null;
    /**
     * The MessageTrackingSearchResults
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfFindMessageTrackingSearchResultType|null
     */
    protected ?\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType $MessageTrackingSearchResults = null;
    /**
     * The ExecutedSearchScope
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ExecutedSearchScope = null;
    /**
     * The Errors
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfArraysOfTrackingPropertiesType|null
     */
    protected ?\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $Errors = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    protected ?\ArrayType\EwsArrayOfTrackingPropertiesType $Properties = null;
    /**
     * Constructor method for FindMessageTrackingReportResponseMessageType
     * @uses EwsFindMessageTrackingReportResponseMessageType::setDiagnostics()
     * @uses EwsFindMessageTrackingReportResponseMessageType::setMessageTrackingSearchResults()
     * @uses EwsFindMessageTrackingReportResponseMessageType::setExecutedSearchScope()
     * @uses EwsFindMessageTrackingReportResponseMessageType::setErrors()
     * @uses EwsFindMessageTrackingReportResponseMessageType::setProperties()
     * @param \ArrayType\EwsArrayOfStringsType $diagnostics
     * @param \ArrayType\EwsArrayOfFindMessageTrackingSearchResultType $messageTrackingSearchResults
     * @param string $executedSearchScope
     * @param \ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(?\ArrayType\EwsArrayOfStringsType $diagnostics = null, ?\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType $messageTrackingSearchResults = null, ?string $executedSearchScope = null, ?\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors = null, ?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this
            ->setDiagnostics($diagnostics)
            ->setMessageTrackingSearchResults($messageTrackingSearchResults)
            ->setExecutedSearchScope($executedSearchScope)
            ->setErrors($errors)
            ->setProperties($properties);
    }
    /**
     * Get Diagnostics value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getDiagnostics(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->Diagnostics;
    }
    /**
     * Set Diagnostics value
     * @param \ArrayType\EwsArrayOfStringsType $diagnostics
     * @return \StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setDiagnostics(?\ArrayType\EwsArrayOfStringsType $diagnostics = null): self
    {
        $this->Diagnostics = $diagnostics;
        
        return $this;
    }
    /**
     * Get MessageTrackingSearchResults value
     * @return \ArrayType\EwsArrayOfFindMessageTrackingSearchResultType|null
     */
    public function getMessageTrackingSearchResults(): ?\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
    {
        return $this->MessageTrackingSearchResults;
    }
    /**
     * Set MessageTrackingSearchResults value
     * @param \ArrayType\EwsArrayOfFindMessageTrackingSearchResultType $messageTrackingSearchResults
     * @return \StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setMessageTrackingSearchResults(?\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType $messageTrackingSearchResults = null): self
    {
        $this->MessageTrackingSearchResults = $messageTrackingSearchResults;
        
        return $this;
    }
    /**
     * Get ExecutedSearchScope value
     * @return string|null
     */
    public function getExecutedSearchScope(): ?string
    {
        return $this->ExecutedSearchScope;
    }
    /**
     * Set ExecutedSearchScope value
     * @param string $executedSearchScope
     * @return \StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setExecutedSearchScope(?string $executedSearchScope = null): self
    {
        // validation for constraint: string
        if (!is_null($executedSearchScope) && !is_string($executedSearchScope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($executedSearchScope, true), gettype($executedSearchScope)), __LINE__);
        }
        $this->ExecutedSearchScope = $executedSearchScope;
        
        return $this;
    }
    /**
     * Get Errors value
     * @return \ArrayType\EwsArrayOfArraysOfTrackingPropertiesType|null
     */
    public function getErrors(): ?\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors
     * @return \StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setErrors(?\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors = null): self
    {
        $this->Errors = $errors;
        
        return $this;
    }
    /**
     * Get Properties value
     * @return \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function getProperties(): ?\ArrayType\EwsArrayOfTrackingPropertiesType
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     * @return \StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setProperties(?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null): self
    {
        $this->Properties = $properties;
        
        return $this;
    }
}
