<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessageTrackingReportResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMessageTrackingReportResponseMessageType extends EwsResponseMessageType
{
    /**
     * The MessageTrackingReport
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMessageTrackingReportType
     */
    public $MessageTrackingReport;
    /**
     * The Diagnostics
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Diagnostics;
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
     * Constructor method for GetMessageTrackingReportResponseMessageType
     * @uses EwsGetMessageTrackingReportResponseMessageType::setMessageTrackingReport()
     * @uses EwsGetMessageTrackingReportResponseMessageType::setDiagnostics()
     * @uses EwsGetMessageTrackingReportResponseMessageType::setErrors()
     * @uses EwsGetMessageTrackingReportResponseMessageType::setProperties()
     * @param \Ews\StructType\EwsMessageTrackingReportType $messageTrackingReport
     * @param \Ews\ArrayType\EwsArrayOfStringsType $diagnostics
     * @param \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(\Ews\StructType\EwsMessageTrackingReportType $messageTrackingReport = null, \Ews\ArrayType\EwsArrayOfStringsType $diagnostics = null, \Ews\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors = null, \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this
            ->setMessageTrackingReport($messageTrackingReport)
            ->setDiagnostics($diagnostics)
            ->setErrors($errors)
            ->setProperties($properties);
    }
    /**
     * Get MessageTrackingReport value
     * @return \Ews\StructType\EwsMessageTrackingReportType|null
     */
    public function getMessageTrackingReport()
    {
        return $this->MessageTrackingReport;
    }
    /**
     * Set MessageTrackingReport value
     * @param \Ews\StructType\EwsMessageTrackingReportType $messageTrackingReport
     * @return \Ews\StructType\EwsGetMessageTrackingReportResponseMessageType
     */
    public function setMessageTrackingReport(\Ews\StructType\EwsMessageTrackingReportType $messageTrackingReport = null)
    {
        $this->MessageTrackingReport = $messageTrackingReport;
        return $this;
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
     * @return \Ews\StructType\EwsGetMessageTrackingReportResponseMessageType
     */
    public function setDiagnostics(\Ews\ArrayType\EwsArrayOfStringsType $diagnostics = null)
    {
        $this->Diagnostics = $diagnostics;
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
     * @return \Ews\StructType\EwsGetMessageTrackingReportResponseMessageType
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
     * @return \Ews\StructType\EwsGetMessageTrackingReportResponseMessageType
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
     * @return \Ews\StructType\EwsGetMessageTrackingReportResponseMessageType
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
