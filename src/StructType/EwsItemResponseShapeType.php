<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemResponseShapeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsItemResponseShapeType extends AbstractStructBase
{
    /**
     * The BaseShape
     * @var string|null
     */
    protected ?string $BaseShape = null;
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
     * The UniqueBodyType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UniqueBodyType = null;
    /**
     * The NormalizedBodyType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $NormalizedBodyType = null;
    /**
     * The FilterHtmlContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $FilterHtmlContent = null;
    /**
     * The ConvertHtmlCodePageToUTF8
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ConvertHtmlCodePageToUTF8 = null;
    /**
     * The InlineImageUrlTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InlineImageUrlTemplate = null;
    /**
     * The BlockExternalImages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $BlockExternalImages = null;
    /**
     * The AddBlankTargetToLinks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $AddBlankTargetToLinks = null;
    /**
     * The MaximumBodySize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $MaximumBodySize = null;
    /**
     * The AdditionalProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfPathsToElementType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfPathsToElementType $AdditionalProperties = null;
    /**
     * Constructor method for ItemResponseShapeType
     * @uses EwsItemResponseShapeType::setBaseShape()
     * @uses EwsItemResponseShapeType::setIncludeMimeContent()
     * @uses EwsItemResponseShapeType::setBodyType()
     * @uses EwsItemResponseShapeType::setUniqueBodyType()
     * @uses EwsItemResponseShapeType::setNormalizedBodyType()
     * @uses EwsItemResponseShapeType::setFilterHtmlContent()
     * @uses EwsItemResponseShapeType::setConvertHtmlCodePageToUTF8()
     * @uses EwsItemResponseShapeType::setInlineImageUrlTemplate()
     * @uses EwsItemResponseShapeType::setBlockExternalImages()
     * @uses EwsItemResponseShapeType::setAddBlankTargetToLinks()
     * @uses EwsItemResponseShapeType::setMaximumBodySize()
     * @uses EwsItemResponseShapeType::setAdditionalProperties()
     * @param string $baseShape
     * @param bool $includeMimeContent
     * @param string $bodyType
     * @param string $uniqueBodyType
     * @param string $normalizedBodyType
     * @param bool $filterHtmlContent
     * @param bool $convertHtmlCodePageToUTF8
     * @param string $inlineImageUrlTemplate
     * @param bool $blockExternalImages
     * @param bool $addBlankTargetToLinks
     * @param int $maximumBodySize
     * @param \StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     */
    public function __construct(?string $baseShape = null, ?bool $includeMimeContent = null, ?string $bodyType = null, ?string $uniqueBodyType = null, ?string $normalizedBodyType = null, ?bool $filterHtmlContent = null, ?bool $convertHtmlCodePageToUTF8 = null, ?string $inlineImageUrlTemplate = null, ?bool $blockExternalImages = null, ?bool $addBlankTargetToLinks = null, ?int $maximumBodySize = null, ?\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
    {
        $this
            ->setBaseShape($baseShape)
            ->setIncludeMimeContent($includeMimeContent)
            ->setBodyType($bodyType)
            ->setUniqueBodyType($uniqueBodyType)
            ->setNormalizedBodyType($normalizedBodyType)
            ->setFilterHtmlContent($filterHtmlContent)
            ->setConvertHtmlCodePageToUTF8($convertHtmlCodePageToUTF8)
            ->setInlineImageUrlTemplate($inlineImageUrlTemplate)
            ->setBlockExternalImages($blockExternalImages)
            ->setAddBlankTargetToLinks($addBlankTargetToLinks)
            ->setMaximumBodySize($maximumBodySize)
            ->setAdditionalProperties($additionalProperties);
    }
    /**
     * Get BaseShape value
     * @return string|null
     */
    public function getBaseShape(): ?string
    {
        return $this->BaseShape;
    }
    /**
     * Set BaseShape value
     * @uses \EnumType\EwsDefaultShapeNamesType::valueIsValid()
     * @uses \EnumType\EwsDefaultShapeNamesType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $baseShape
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setBaseShape(?string $baseShape = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDefaultShapeNamesType::valueIsValid($baseShape)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDefaultShapeNamesType', is_array($baseShape) ? implode(', ', $baseShape) : var_export($baseShape, true), implode(', ', \EnumType\EwsDefaultShapeNamesType::getValidValues())), __LINE__);
        }
        $this->BaseShape = $baseShape;
        
        return $this;
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
     * @return \StructType\EwsItemResponseShapeType
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
     * @return \StructType\EwsItemResponseShapeType
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
     * Get UniqueBodyType value
     * @return string|null
     */
    public function getUniqueBodyType(): ?string
    {
        return $this->UniqueBodyType;
    }
    /**
     * Set UniqueBodyType value
     * @uses \EnumType\EwsBodyTypeResponseType::valueIsValid()
     * @uses \EnumType\EwsBodyTypeResponseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $uniqueBodyType
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setUniqueBodyType(?string $uniqueBodyType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsBodyTypeResponseType::valueIsValid($uniqueBodyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsBodyTypeResponseType', is_array($uniqueBodyType) ? implode(', ', $uniqueBodyType) : var_export($uniqueBodyType, true), implode(', ', \EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
        }
        $this->UniqueBodyType = $uniqueBodyType;
        
        return $this;
    }
    /**
     * Get NormalizedBodyType value
     * @return string|null
     */
    public function getNormalizedBodyType(): ?string
    {
        return $this->NormalizedBodyType;
    }
    /**
     * Set NormalizedBodyType value
     * @uses \EnumType\EwsBodyTypeResponseType::valueIsValid()
     * @uses \EnumType\EwsBodyTypeResponseType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $normalizedBodyType
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setNormalizedBodyType(?string $normalizedBodyType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsBodyTypeResponseType::valueIsValid($normalizedBodyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsBodyTypeResponseType', is_array($normalizedBodyType) ? implode(', ', $normalizedBodyType) : var_export($normalizedBodyType, true), implode(', ', \EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
        }
        $this->NormalizedBodyType = $normalizedBodyType;
        
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
     * @return \StructType\EwsItemResponseShapeType
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
     * Get ConvertHtmlCodePageToUTF8 value
     * @return bool|null
     */
    public function getConvertHtmlCodePageToUTF8(): ?bool
    {
        return $this->ConvertHtmlCodePageToUTF8;
    }
    /**
     * Set ConvertHtmlCodePageToUTF8 value
     * @param bool $convertHtmlCodePageToUTF8
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setConvertHtmlCodePageToUTF8(?bool $convertHtmlCodePageToUTF8 = null): self
    {
        // validation for constraint: boolean
        if (!is_null($convertHtmlCodePageToUTF8) && !is_bool($convertHtmlCodePageToUTF8)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($convertHtmlCodePageToUTF8, true), gettype($convertHtmlCodePageToUTF8)), __LINE__);
        }
        $this->ConvertHtmlCodePageToUTF8 = $convertHtmlCodePageToUTF8;
        
        return $this;
    }
    /**
     * Get InlineImageUrlTemplate value
     * @return string|null
     */
    public function getInlineImageUrlTemplate(): ?string
    {
        return $this->InlineImageUrlTemplate;
    }
    /**
     * Set InlineImageUrlTemplate value
     * @param string $inlineImageUrlTemplate
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setInlineImageUrlTemplate(?string $inlineImageUrlTemplate = null): self
    {
        // validation for constraint: string
        if (!is_null($inlineImageUrlTemplate) && !is_string($inlineImageUrlTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inlineImageUrlTemplate, true), gettype($inlineImageUrlTemplate)), __LINE__);
        }
        $this->InlineImageUrlTemplate = $inlineImageUrlTemplate;
        
        return $this;
    }
    /**
     * Get BlockExternalImages value
     * @return bool|null
     */
    public function getBlockExternalImages(): ?bool
    {
        return $this->BlockExternalImages;
    }
    /**
     * Set BlockExternalImages value
     * @param bool $blockExternalImages
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setBlockExternalImages(?bool $blockExternalImages = null): self
    {
        // validation for constraint: boolean
        if (!is_null($blockExternalImages) && !is_bool($blockExternalImages)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($blockExternalImages, true), gettype($blockExternalImages)), __LINE__);
        }
        $this->BlockExternalImages = $blockExternalImages;
        
        return $this;
    }
    /**
     * Get AddBlankTargetToLinks value
     * @return bool|null
     */
    public function getAddBlankTargetToLinks(): ?bool
    {
        return $this->AddBlankTargetToLinks;
    }
    /**
     * Set AddBlankTargetToLinks value
     * @param bool $addBlankTargetToLinks
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setAddBlankTargetToLinks(?bool $addBlankTargetToLinks = null): self
    {
        // validation for constraint: boolean
        if (!is_null($addBlankTargetToLinks) && !is_bool($addBlankTargetToLinks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addBlankTargetToLinks, true), gettype($addBlankTargetToLinks)), __LINE__);
        }
        $this->AddBlankTargetToLinks = $addBlankTargetToLinks;
        
        return $this;
    }
    /**
     * Get MaximumBodySize value
     * @return int|null
     */
    public function getMaximumBodySize(): ?int
    {
        return $this->MaximumBodySize;
    }
    /**
     * Set MaximumBodySize value
     * @param int $maximumBodySize
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setMaximumBodySize(?int $maximumBodySize = null): self
    {
        // validation for constraint: int
        if (!is_null($maximumBodySize) && !(is_int($maximumBodySize) || ctype_digit($maximumBodySize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumBodySize, true), gettype($maximumBodySize)), __LINE__);
        }
        $this->MaximumBodySize = $maximumBodySize;
        
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
     * @return \StructType\EwsItemResponseShapeType
     */
    public function setAdditionalProperties(?\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null): self
    {
        $this->AdditionalProperties = $additionalProperties;
        
        return $this;
    }
}
