<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsMessageTrackingReportType|null
     */
    protected ?\StructType\EwsMessageTrackingReportType $MessageTrackingReport = null;
    /**
     * The Diagnostics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $Diagnostics = null;
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
     * Constructor method for GetMessageTrackingReportResponseMessageType
     * @uses EwsGetMessageTrackingReportResponseMessageType::setMessageTrackingReport()
     * @uses EwsGetMessageTrackingReportResponseMessageType::setDiagnostics()
     * @uses EwsGetMessageTrackingReportResponseMessageType::setErrors()
     * @uses EwsGetMessageTrackingReportResponseMessageType::setProperties()
     * @param \StructType\EwsMessageTrackingReportType $messageTrackingReport
     * @param \ArrayType\EwsArrayOfStringsType $diagnostics
     * @param \ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(?\StructType\EwsMessageTrackingReportType $messageTrackingReport = null, ?\ArrayType\EwsArrayOfStringsType $diagnostics = null, ?\ArrayType\EwsArrayOfArraysOfTrackingPropertiesType $errors = null, ?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this
            ->setMessageTrackingReport($messageTrackingReport)
            ->setDiagnostics($diagnostics)
            ->setErrors($errors)
            ->setProperties($properties);
    }
    /**
     * Get MessageTrackingReport value
     * @return \StructType\EwsMessageTrackingReportType|null
     */
    public function getMessageTrackingReport(): ?\StructType\EwsMessageTrackingReportType
    {
        return $this->MessageTrackingReport;
    }
    /**
     * Set MessageTrackingReport value
     * @param \StructType\EwsMessageTrackingReportType $messageTrackingReport
     * @return \StructType\EwsGetMessageTrackingReportResponseMessageType
     */
    public function setMessageTrackingReport(?\StructType\EwsMessageTrackingReportType $messageTrackingReport = null): self
    {
        $this->MessageTrackingReport = $messageTrackingReport;
        
        return $this;
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
     * @return \StructType\EwsGetMessageTrackingReportResponseMessageType
     */
    public function setDiagnostics(?\ArrayType\EwsArrayOfStringsType $diagnostics = null): self
    {
        $this->Diagnostics = $diagnostics;
        
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
     * @return \StructType\EwsGetMessageTrackingReportResponseMessageType
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
     * @return \StructType\EwsGetMessageTrackingReportResponseMessageType
     */
    public function setProperties(?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null): self
    {
        $this->Properties = $properties;
        
        return $this;
    }
}
