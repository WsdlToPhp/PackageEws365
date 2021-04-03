<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentResponseShapeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAttachmentResponseShapeType extends AbstractStructBase
{
    /**
     * The IncludeMimeContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IncludeMimeContent = null;
    /**
     * The BodyType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BodyType = null;
    /**
     * The FilterHtmlContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FilterHtmlContent = null;
    /**
     * The AdditionalProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfPathsToElementType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfPathsToElementType $AdditionalProperties = null;
    /**
     * Constructor method for AttachmentResponseShapeType
     * @uses EwsAttachmentResponseShapeType::setIncludeMimeContent()
     * @uses EwsAttachmentResponseShapeType::setBodyType()
     * @uses EwsAttachmentResponseShapeType::setFilterHtmlContent()
     * @uses EwsAttachmentResponseShapeType::setAdditionalProperties()
     * @param bool $includeMimeContent
     * @param string $bodyType
     * @param bool $filterHtmlContent
     * @param \StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     */
    public function __construct(?bool $includeMimeContent = null, ?string $bodyType = null, ?bool $filterHtmlContent = null, ?\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
    {
        $this
            ->setIncludeMimeContent($includeMimeContent)
            ->setBodyType($bodyType)
            ->setFilterHtmlContent($filterHtmlContent)
            ->setAdditionalProperties($additionalProperties);
    }
    /**
     * Get IncludeMimeContent value
     * @return bool|null
     */
    public function getIncludeMimeContent(): ?bool
    {
        return $this->IncludeMimeContent;
    }
    /**
     * Set IncludeMimeContent value
     * @param bool $includeMimeContent
     * @return \StructType\EwsAttachmentResponseShapeType
     */
    public function setIncludeMimeContent(?bool $includeMimeContent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeMimeContent) && !is_bool($includeMimeContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeMimeContent, true), gettype($includeMimeContent)), __LINE__);
        }
        $this->IncludeMimeContent = $includeMimeContent;
        
        return $this;
    }
    /**
     * Get BodyType value
     * @return string|null
     */
    public function getBodyType(): ?string
    {
        return $this->BodyType;
    }
    /**
     * Set BodyType value
     * @uses \EnumType\EwsBodyTypeResponseType::valueIsValid()
     * @uses \EnumType\EwsBodyTypeResponseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $bodyType
     * @return \StructType\EwsAttachmentResponseShapeType
     */
    public function setBodyType(?string $bodyType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsBodyTypeResponseType::valueIsValid($bodyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsBodyTypeResponseType', is_array($bodyType) ? implode(', ', $bodyType) : var_export($bodyType, true), implode(', ', \EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
        }
        $this->BodyType = $bodyType;
        
        return $this;
    }
    /**
     * Get FilterHtmlContent value
     * @return bool|null
     */
    public function getFilterHtmlContent(): ?bool
    {
        return $this->FilterHtmlContent;
    }
    /**
     * Set FilterHtmlContent value
     * @param bool $filterHtmlContent
     * @return \StructType\EwsAttachmentResponseShapeType
     */
    public function setFilterHtmlContent(?bool $filterHtmlContent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($filterHtmlContent) && !is_bool($filterHtmlContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($filterHtmlContent, true), gettype($filterHtmlContent)), __LINE__);
        }
        $this->FilterHtmlContent = $filterHtmlContent;
        
        return $this;
    }
    /**
     * Get AdditionalProperties value
     * @return \StructType\EwsNonEmptyArrayOfPathsToElementType|null
     */
    public function getAdditionalProperties(): ?\StructType\EwsNonEmptyArrayOfPathsToElementType
    {
        return $this->AdditionalProperties;
    }
    /**
     * Set AdditionalProperties value
     * @param \StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     * @return \StructType\EwsAttachmentResponseShapeType
     */
    public function setAdditionalProperties(?\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null): self
    {
        $this->AdditionalProperties = $additionalProperties;
        
        return $this;
    }
}
