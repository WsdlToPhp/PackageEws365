<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMessageTrackingReportRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMessageTrackingReportRequestType extends EwsBaseRequestType
{
    /**
     * The Scope
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string
     */
    public $Scope;
    /**
     * The ReportTemplate
     * @var string
     */
    public $ReportTemplate;
    /**
     * The RecipientFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType
     */
    public $RecipientFilter;
    /**
     * The MessageTrackingReportId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string
     */
    public $MessageTrackingReportId;
    /**
     * The ReturnQueueEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnQueueEvents;
    /**
     * The DiagnosticsLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DiagnosticsLevel;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfTrackingPropertiesType
     */
    public $Properties;
    /**
     * Constructor method for GetMessageTrackingReportRequestType
     * @uses EwsGetMessageTrackingReportRequestType::setScope()
     * @uses EwsGetMessageTrackingReportRequestType::setReportTemplate()
     * @uses EwsGetMessageTrackingReportRequestType::setRecipientFilter()
     * @uses EwsGetMessageTrackingReportRequestType::setMessageTrackingReportId()
     * @uses EwsGetMessageTrackingReportRequestType::setReturnQueueEvents()
     * @uses EwsGetMessageTrackingReportRequestType::setDiagnosticsLevel()
     * @uses EwsGetMessageTrackingReportRequestType::setProperties()
     * @param string $scope
     * @param string $reportTemplate
     * @param \Ews\StructType\EwsEmailAddressType $recipientFilter
     * @param string $messageTrackingReportId
     * @param bool $returnQueueEvents
     * @param string $diagnosticsLevel
     * @param \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct($scope = null, $reportTemplate = null, \Ews\StructType\EwsEmailAddressType $recipientFilter = null, $messageTrackingReportId = null, $returnQueueEvents = null, $diagnosticsLevel = null, \Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this
            ->setScope($scope)
            ->setReportTemplate($reportTemplate)
            ->setRecipientFilter($recipientFilter)
            ->setMessageTrackingReportId($messageTrackingReportId)
            ->setReturnQueueEvents($returnQueueEvents)
            ->setDiagnosticsLevel($diagnosticsLevel)
            ->setProperties($properties);
    }
    /**
     * Get Scope value
     * @return string|null
     */
    public function getScope()
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param string $scope
     * @return \Ews\StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setScope($scope = null)
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($scope) && mb_strlen($scope) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($scope)), __LINE__);
        }
        $this->Scope = $scope;
        return $this;
    }
    /**
     * Get ReportTemplate value
     * @return string|null
     */
    public function getReportTemplate()
    {
        return $this->ReportTemplate;
    }
    /**
     * Set ReportTemplate value
     * @uses \Ews\EnumType\EwsMessageTrackingReportTemplateType::valueIsValid()
     * @uses \Ews\EnumType\EwsMessageTrackingReportTemplateType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $reportTemplate
     * @return \Ews\StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setReportTemplate($reportTemplate = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsMessageTrackingReportTemplateType::valueIsValid($reportTemplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsMessageTrackingReportTemplateType', is_array($reportTemplate) ? implode(', ', $reportTemplate) : var_export($reportTemplate, true), implode(', ', \Ews\EnumType\EwsMessageTrackingReportTemplateType::getValidValues())), __LINE__);
        }
        $this->ReportTemplate = $reportTemplate;
        return $this;
    }
    /**
     * Get RecipientFilter value
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function getRecipientFilter()
    {
        return $this->RecipientFilter;
    }
    /**
     * Set RecipientFilter value
     * @param \Ews\StructType\EwsEmailAddressType $recipientFilter
     * @return \Ews\StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setRecipientFilter(\Ews\StructType\EwsEmailAddressType $recipientFilter = null)
    {
        $this->RecipientFilter = $recipientFilter;
        return $this;
    }
    /**
     * Get MessageTrackingReportId value
     * @return string|null
     */
    public function getMessageTrackingReportId()
    {
        return $this->MessageTrackingReportId;
    }
    /**
     * Set MessageTrackingReportId value
     * @param string $messageTrackingReportId
     * @return \Ews\StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setMessageTrackingReportId($messageTrackingReportId = null)
    {
        // validation for constraint: string
        if (!is_null($messageTrackingReportId) && !is_string($messageTrackingReportId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageTrackingReportId, true), gettype($messageTrackingReportId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($messageTrackingReportId) && mb_strlen($messageTrackingReportId) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($messageTrackingReportId)), __LINE__);
        }
        $this->MessageTrackingReportId = $messageTrackingReportId;
        return $this;
    }
    /**
     * Get ReturnQueueEvents value
     * @return bool|null
     */
    public function getReturnQueueEvents()
    {
        return $this->ReturnQueueEvents;
    }
    /**
     * Set ReturnQueueEvents value
     * @param bool $returnQueueEvents
     * @return \Ews\StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setReturnQueueEvents($returnQueueEvents = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnQueueEvents) && !is_bool($returnQueueEvents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnQueueEvents, true), gettype($returnQueueEvents)), __LINE__);
        }
        $this->ReturnQueueEvents = $returnQueueEvents;
        return $this;
    }
    /**
     * Get DiagnosticsLevel value
     * @return string|null
     */
    public function getDiagnosticsLevel()
    {
        return $this->DiagnosticsLevel;
    }
    /**
     * Set DiagnosticsLevel value
     * @param string $diagnosticsLevel
     * @return \Ews\StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setDiagnosticsLevel($diagnosticsLevel = null)
    {
        // validation for constraint: string
        if (!is_null($diagnosticsLevel) && !is_string($diagnosticsLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diagnosticsLevel, true), gettype($diagnosticsLevel)), __LINE__);
        }
        $this->DiagnosticsLevel = $diagnosticsLevel;
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
     * @return \Ews\StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setProperties(\Ews\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
    {
        $this->Properties = $properties;
        return $this;
    }
}
