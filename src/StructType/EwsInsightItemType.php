<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsightItemType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsightItemType extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ItemId;
    /**
     * The InsightId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    protected string $InsightId;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * The StartTimeUtc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTimeUtc = null;
    /**
     * The EndTimeUtc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $EndTimeUtc = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Version
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Version = null;
    /**
     * The Context
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfInsightContextItem|null
     */
    protected ?\ArrayType\EwsArrayOfInsightContextItem $Context = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Text = null;
    /**
     * The ApplicationsIds
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfStringsType|null
     */
    protected ?\ArrayType\EwsArrayOfStringsType $ApplicationsIds = null;
    /**
     * Constructor method for InsightItemType
     * @uses EwsInsightItemType::setItemId()
     * @uses EwsInsightItemType::setInsightId()
     * @uses EwsInsightItemType::setType()
     * @uses EwsInsightItemType::setStartTimeUtc()
     * @uses EwsInsightItemType::setEndTimeUtc()
     * @uses EwsInsightItemType::setStatus()
     * @uses EwsInsightItemType::setVersion()
     * @uses EwsInsightItemType::setContext()
     * @uses EwsInsightItemType::setText()
     * @uses EwsInsightItemType::setApplicationsIds()
     * @param \StructType\EwsItemIdType $itemId
     * @param string $insightId
     * @param string $type
     * @param string $startTimeUtc
     * @param string $endTimeUtc
     * @param string $status
     * @param string $version
     * @param \ArrayType\EwsArrayOfInsightContextItem $context
     * @param string $text
     * @param \ArrayType\EwsArrayOfStringsType $applicationsIds
     */
    public function __construct(\StructType\EwsItemIdType $itemId, string $insightId, ?string $type = null, ?string $startTimeUtc = null, ?string $endTimeUtc = null, ?string $status = null, ?string $version = null, ?\ArrayType\EwsArrayOfInsightContextItem $context = null, ?string $text = null, ?\ArrayType\EwsArrayOfStringsType $applicationsIds = null)
    {
        $this
            ->setItemId($itemId)
            ->setInsightId($insightId)
            ->setType($type)
            ->setStartTimeUtc($startTimeUtc)
            ->setEndTimeUtc($endTimeUtc)
            ->setStatus($status)
            ->setVersion($version)
            ->setContext($context)
            ->setText($text)
            ->setApplicationsIds($applicationsIds);
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType
     */
    public function getItemId(): \StructType\EwsItemIdType
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsInsightItemType
     */
    public function setItemId(\StructType\EwsItemIdType $itemId): self
    {
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get InsightId value
     * @return string
     */
    public function getInsightId(): string
    {
        return $this->InsightId;
    }
    /**
     * Set InsightId value
     * @param string $insightId
     * @return \StructType\EwsInsightItemType
     */
    public function setInsightId(string $insightId): self
    {
        // validation for constraint: string
        if (!is_null($insightId) && !is_string($insightId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insightId, true), gettype($insightId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($insightId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $insightId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($insightId, true)), __LINE__);
        }
        $this->InsightId = $insightId;
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \StructType\EwsInsightItemType
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get StartTimeUtc value
     * @return string|null
     */
    public function getStartTimeUtc(): ?string
    {
        return $this->StartTimeUtc;
    }
    /**
     * Set StartTimeUtc value
     * @param string $startTimeUtc
     * @return \StructType\EwsInsightItemType
     */
    public function setStartTimeUtc(?string $startTimeUtc = null): self
    {
        // validation for constraint: string
        if (!is_null($startTimeUtc) && !is_string($startTimeUtc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTimeUtc, true), gettype($startTimeUtc)), __LINE__);
        }
        $this->StartTimeUtc = $startTimeUtc;
        
        return $this;
    }
    /**
     * Get EndTimeUtc value
     * @return string|null
     */
    public function getEndTimeUtc(): ?string
    {
        return $this->EndTimeUtc;
    }
    /**
     * Set EndTimeUtc value
     * @param string $endTimeUtc
     * @return \StructType\EwsInsightItemType
     */
    public function setEndTimeUtc(?string $endTimeUtc = null): self
    {
        // validation for constraint: string
        if (!is_null($endTimeUtc) && !is_string($endTimeUtc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTimeUtc, true), gettype($endTimeUtc)), __LINE__);
        }
        $this->EndTimeUtc = $endTimeUtc;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\EwsInsightStatusType::valueIsValid()
     * @uses \EnumType\EwsInsightStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $status
     * @return \StructType\EwsInsightItemType
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsInsightStatusType::valueIsValid($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsInsightStatusType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\EwsInsightStatusType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        
        return $this;
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \StructType\EwsInsightItemType
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->Version = $version;
        
        return $this;
    }
    /**
     * Get Context value
     * @return \ArrayType\EwsArrayOfInsightContextItem|null
     */
    public function getContext(): ?\ArrayType\EwsArrayOfInsightContextItem
    {
        return $this->Context;
    }
    /**
     * Set Context value
     * @param \ArrayType\EwsArrayOfInsightContextItem $context
     * @return \StructType\EwsInsightItemType
     */
    public function setContext(?\ArrayType\EwsArrayOfInsightContextItem $context = null): self
    {
        $this->Context = $context;
        
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \StructType\EwsInsightItemType
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        
        return $this;
    }
    /**
     * Get ApplicationsIds value
     * @return \ArrayType\EwsArrayOfStringsType|null
     */
    public function getApplicationsIds(): ?\ArrayType\EwsArrayOfStringsType
    {
        return $this->ApplicationsIds;
    }
    /**
     * Set ApplicationsIds value
     * @param \ArrayType\EwsArrayOfStringsType $applicationsIds
     * @return \StructType\EwsInsightItemType
     */
    public function setApplicationsIds(?\ArrayType\EwsArrayOfStringsType $applicationsIds = null): self
    {
        $this->ApplicationsIds = $applicationsIds;
        
        return $this;
    }
}
