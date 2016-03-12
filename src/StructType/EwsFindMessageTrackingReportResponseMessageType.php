<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Diagnostics;
    /**
     * The MessageTrackingSearchResults
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
     */
    public $MessageTrackingSearchResults;
    /**
     * The ExecutedSearchScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExecutedSearchScope;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType
     */
    public $Errors;
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public $Properties;
    /**
     * Constructor method for FindMessageTrackingReportResponseMessageType
     * @uses EwsFindMessageTrackingReportResponseMessageType::setDiagnostics()
     * @uses
     * EwsFindMessageTrackingReportResponseMessageType::setMessageTrackingSearchResults
     * ()
     * @uses EwsFindMessageTrackingReportResponseMessageType::setExecutedSearchScope()
     * @uses EwsFindMessageTrackingReportResponseMessageType::setErrors()
     * @uses EwsFindMessageTrackingReportResponseMessageType::setProperties()
     * @param \Ews\ArrayType\EwsArrayOfStringsType $diagnostics
     * @param \Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
     * $messageTrackingSearchResults
     * @param string $executedSearchScope
     * @param \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStringsType $diagnostics = null, \Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType $messageTrackingSearchResults = null, $executedSearchScope = null, \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors = null, \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
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
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getDiagnostics()
    {
        return $this->Diagnostics;
    }
    /**
     * Set Diagnostics value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $diagnostics
     * @return \Ews\StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setDiagnostics(\Ews\ArrayType\EwsArrayOfStringsType $diagnostics = null)
    {
        $this->Diagnostics = $diagnostics;
        return $this;
    }
    /**
     * Get MessageTrackingSearchResults value
     * @return \Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType|null
     */
    public function getMessageTrackingSearchResults()
    {
        return $this->MessageTrackingSearchResults;
    }
    /**
     * Set MessageTrackingSearchResults value
     * @param \Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType
     * $messageTrackingSearchResults
     * @return \Ews\StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setMessageTrackingSearchResults(\Ews\ArrayType\EwsArrayOfFindMessageTrackingSearchResultType $messageTrackingSearchResults = null)
    {
        $this->MessageTrackingSearchResults = $messageTrackingSearchResults;
        return $this;
    }
    /**
     * Get ExecutedSearchScope value
     * @return string|null
     */
    public function getExecutedSearchScope()
    {
        return $this->ExecutedSearchScope;
    }
    /**
     * Set ExecutedSearchScope value
     * @param string $executedSearchScope
     * @return \Ews\StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setExecutedSearchScope($executedSearchScope = null)
    {
        // validation for constraint: string
        if (!is_null($executedSearchScope) && !is_string($executedSearchScope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($executedSearchScope)), __LINE__);
        }
        $this->ExecutedSearchScope = $executedSearchScope;
        return $this;
    }
    /**
     * Get Errors value
     * @return \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors
     * @return \Ews\StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setErrors(\Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Properties value
     * @return \Ews\ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    public function getProperties()
    {
        return $this->Properties;
    }
    /**
     * Set Properties value
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     * @return \Ews\StructType\EwsFindMessageTrackingReportResponseMessageType
     */
    public function setProperties(\Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMessageTrackingReportResponseMessageType
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
