<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $Scope = null;
    /**
     * The ReportTemplate
     * @var string|null
     */
    protected ?string $ReportTemplate = null;
    /**
     * The RecipientFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $RecipientFilter = null;
    /**
     * The MessageTrackingReportId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * @var string|null
     */
    protected ?string $MessageTrackingReportId = null;
    /**
     * The ReturnQueueEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ReturnQueueEvents = null;
    /**
     * The DiagnosticsLevel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $DiagnosticsLevel = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfTrackingPropertiesType|null
     */
    protected ?\ArrayType\EwsArrayOfTrackingPropertiesType $Properties = null;
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
     * @param \StructType\EwsEmailAddressType $recipientFilter
     * @param string $messageTrackingReportId
     * @param bool $returnQueueEvents
     * @param string $diagnosticsLevel
     * @param \ArrayType\EwsArrayOfTrackingPropertiesType $properties
     */
    public function __construct(?string $scope = null, ?string $reportTemplate = null, ?\StructType\EwsEmailAddressType $recipientFilter = null, ?string $messageTrackingReportId = null, ?bool $returnQueueEvents = null, ?string $diagnosticsLevel = null, ?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null)
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
    public function getScope(): ?string
    {
        return $this->Scope;
    }
    /**
     * Set Scope value
     * @param string $scope
     * @return \StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setScope(?string $scope = null): self
    {
        // validation for constraint: string
        if (!is_null($scope) && !is_string($scope)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($scope, true), gettype($scope)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($scope) && mb_strlen((string) $scope) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $scope)), __LINE__);
        }
        $this->Scope = $scope;
        
        return $this;
    }
    /**
     * Get ReportTemplate value
     * @return string|null
     */
    public function getReportTemplate(): ?string
    {
        return $this->ReportTemplate;
    }
    /**
     * Set ReportTemplate value
     * @uses \EnumType\EwsMessageTrackingReportTemplateType::valueIsValid()
     * @uses \EnumType\EwsMessageTrackingReportTemplateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $reportTemplate
     * @return \StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setReportTemplate(?string $reportTemplate = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsMessageTrackingReportTemplateType::valueIsValid($reportTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsMessageTrackingReportTemplateType', is_array($reportTemplate) ? implode(', ', $reportTemplate) : var_export($reportTemplate, true), implode(', ', \EnumType\EwsMessageTrackingReportTemplateType::getValidValues())), __LINE__);
        }
        $this->ReportTemplate = $reportTemplate;
        
        return $this;
    }
    /**
     * Get RecipientFilter value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getRecipientFilter(): ?\StructType\EwsEmailAddressType
    {
        return $this->RecipientFilter;
    }
    /**
     * Set RecipientFilter value
     * @param \StructType\EwsEmailAddressType $recipientFilter
     * @return \StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setRecipientFilter(?\StructType\EwsEmailAddressType $recipientFilter = null): self
    {
        $this->RecipientFilter = $recipientFilter;
        
        return $this;
    }
    /**
     * Get MessageTrackingReportId value
     * @return string|null
     */
    public function getMessageTrackingReportId(): ?string
    {
        return $this->MessageTrackingReportId;
    }
    /**
     * Set MessageTrackingReportId value
     * @param string $messageTrackingReportId
     * @return \StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setMessageTrackingReportId(?string $messageTrackingReportId = null): self
    {
        // validation for constraint: string
        if (!is_null($messageTrackingReportId) && !is_string($messageTrackingReportId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageTrackingReportId, true), gettype($messageTrackingReportId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($messageTrackingReportId) && mb_strlen((string) $messageTrackingReportId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $messageTrackingReportId)), __LINE__);
        }
        $this->MessageTrackingReportId = $messageTrackingReportId;
        
        return $this;
    }
    /**
     * Get ReturnQueueEvents value
     * @return bool|null
     */
    public function getReturnQueueEvents(): ?bool
    {
        return $this->ReturnQueueEvents;
    }
    /**
     * Set ReturnQueueEvents value
     * @param bool $returnQueueEvents
     * @return \StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setReturnQueueEvents(?bool $returnQueueEvents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnQueueEvents) && !is_bool($returnQueueEvents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnQueueEvents, true), gettype($returnQueueEvents)), __LINE__);
        }
        $this->ReturnQueueEvents = $returnQueueEvents;
        
        return $this;
    }
    /**
     * Get DiagnosticsLevel value
     * @return string|null
     */
    public function getDiagnosticsLevel(): ?string
    {
        return $this->DiagnosticsLevel;
    }
    /**
     * Set DiagnosticsLevel value
     * @param string $diagnosticsLevel
     * @return \StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setDiagnosticsLevel(?string $diagnosticsLevel = null): self
    {
        // validation for constraint: string
        if (!is_null($diagnosticsLevel) && !is_string($diagnosticsLevel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($diagnosticsLevel, true), gettype($diagnosticsLevel)), __LINE__);
        }
        $this->DiagnosticsLevel = $diagnosticsLevel;
        
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
     * @return \StructType\EwsGetMessageTrackingReportRequestType
     */
    public function setProperties(?\ArrayType\EwsArrayOfTrackingPropertiesType $properties = null): self
    {
        $this->Properties = $properties;
        
        return $this;
    }
}
