<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string
     */
    public $BaseShape;
    /**
     * The IncludeMimeContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeMimeContent;
    /**
     * The BodyType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BodyType;
    /**
     * The UniqueBodyType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UniqueBodyType;
    /**
     * The NormalizedBodyType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NormalizedBodyType;
    /**
     * The FilterHtmlContent
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $FilterHtmlContent;
    /**
     * The ConvertHtmlCodePageToUTF8
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ConvertHtmlCodePageToUTF8;
    /**
     * The InlineImageUrlTemplate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InlineImageUrlTemplate;
    /**
     * The BlockExternalImages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $BlockExternalImages;
    /**
     * The AddBlankTargetToLinks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AddBlankTargetToLinks;
    /**
     * The MaximumBodySize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaximumBodySize;
    /**
     * The AdditionalProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
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
     * @param \Ews\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     */
    public function __construct($baseShape = null, $includeMimeContent = null, $bodyType = null, $uniqueBodyType = null, $normalizedBodyType = null, $filterHtmlContent = null, $convertHtmlCodePageToUTF8 = null, $inlineImageUrlTemplate = null, $blockExternalImages = null, $addBlankTargetToLinks = null, $maximumBodySize = null, \Ews\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
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
    public function getBaseShape()
    {
        return $this->BaseShape;
    }
    /**
     * Set BaseShape value
     * @uses \Ews\EnumType\EwsDefaultShapeNamesType::valueIsValid()
     * @uses \Ews\EnumType\EwsDefaultShapeNamesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $baseShape
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setBaseShape($baseShape = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDefaultShapeNamesType::valueIsValid($baseShape)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDefaultShapeNamesType', is_array($baseShape) ? implode(', ', $baseShape) : var_export($baseShape, true), implode(', ', \Ews\EnumType\EwsDefaultShapeNamesType::getValidValues())), __LINE__);
        }
        $this->BaseShape = $baseShape;
        return $this;
    }
    /**
     * Get IncludeMimeContent value
     * @return bool|null
     */
    public function getIncludeMimeContent()
    {
        return $this->IncludeMimeContent;
    }
    /**
     * Set IncludeMimeContent value
     * @param bool $includeMimeContent
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setIncludeMimeContent($includeMimeContent = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeMimeContent) && !is_bool($includeMimeContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeMimeContent, true), gettype($includeMimeContent)), __LINE__);
        }
        $this->IncludeMimeContent = $includeMimeContent;
        return $this;
    }
    /**
     * Get BodyType value
     * @return string|null
     */
    public function getBodyType()
    {
        return $this->BodyType;
    }
    /**
     * Set BodyType value
     * @uses \Ews\EnumType\EwsBodyTypeResponseType::valueIsValid()
     * @uses \Ews\EnumType\EwsBodyTypeResponseType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bodyType
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setBodyType($bodyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsBodyTypeResponseType::valueIsValid($bodyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsBodyTypeResponseType', is_array($bodyType) ? implode(', ', $bodyType) : var_export($bodyType, true), implode(', ', \Ews\EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
        }
        $this->BodyType = $bodyType;
        return $this;
    }
    /**
     * Get UniqueBodyType value
     * @return string|null
     */
    public function getUniqueBodyType()
    {
        return $this->UniqueBodyType;
    }
    /**
     * Set UniqueBodyType value
     * @uses \Ews\EnumType\EwsBodyTypeResponseType::valueIsValid()
     * @uses \Ews\EnumType\EwsBodyTypeResponseType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uniqueBodyType
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setUniqueBodyType($uniqueBodyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsBodyTypeResponseType::valueIsValid($uniqueBodyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsBodyTypeResponseType', is_array($uniqueBodyType) ? implode(', ', $uniqueBodyType) : var_export($uniqueBodyType, true), implode(', ', \Ews\EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
        }
        $this->UniqueBodyType = $uniqueBodyType;
        return $this;
    }
    /**
     * Get NormalizedBodyType value
     * @return string|null
     */
    public function getNormalizedBodyType()
    {
        return $this->NormalizedBodyType;
    }
    /**
     * Set NormalizedBodyType value
     * @uses \Ews\EnumType\EwsBodyTypeResponseType::valueIsValid()
     * @uses \Ews\EnumType\EwsBodyTypeResponseType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $normalizedBodyType
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setNormalizedBodyType($normalizedBodyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsBodyTypeResponseType::valueIsValid($normalizedBodyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsBodyTypeResponseType', is_array($normalizedBodyType) ? implode(', ', $normalizedBodyType) : var_export($normalizedBodyType, true), implode(', ', \Ews\EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
        }
        $this->NormalizedBodyType = $normalizedBodyType;
        return $this;
    }
    /**
     * Get FilterHtmlContent value
     * @return bool|null
     */
    public function getFilterHtmlContent()
    {
        return $this->FilterHtmlContent;
    }
    /**
     * Set FilterHtmlContent value
     * @param bool $filterHtmlContent
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setFilterHtmlContent($filterHtmlContent = null)
    {
        // validation for constraint: boolean
        if (!is_null($filterHtmlContent) && !is_bool($filterHtmlContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($filterHtmlContent, true), gettype($filterHtmlContent)), __LINE__);
        }
        $this->FilterHtmlContent = $filterHtmlContent;
        return $this;
    }
    /**
     * Get ConvertHtmlCodePageToUTF8 value
     * @return bool|null
     */
    public function getConvertHtmlCodePageToUTF8()
    {
        return $this->ConvertHtmlCodePageToUTF8;
    }
    /**
     * Set ConvertHtmlCodePageToUTF8 value
     * @param bool $convertHtmlCodePageToUTF8
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setConvertHtmlCodePageToUTF8($convertHtmlCodePageToUTF8 = null)
    {
        // validation for constraint: boolean
        if (!is_null($convertHtmlCodePageToUTF8) && !is_bool($convertHtmlCodePageToUTF8)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($convertHtmlCodePageToUTF8, true), gettype($convertHtmlCodePageToUTF8)), __LINE__);
        }
        $this->ConvertHtmlCodePageToUTF8 = $convertHtmlCodePageToUTF8;
        return $this;
    }
    /**
     * Get InlineImageUrlTemplate value
     * @return string|null
     */
    public function getInlineImageUrlTemplate()
    {
        return $this->InlineImageUrlTemplate;
    }
    /**
     * Set InlineImageUrlTemplate value
     * @param string $inlineImageUrlTemplate
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setInlineImageUrlTemplate($inlineImageUrlTemplate = null)
    {
        // validation for constraint: string
        if (!is_null($inlineImageUrlTemplate) && !is_string($inlineImageUrlTemplate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inlineImageUrlTemplate, true), gettype($inlineImageUrlTemplate)), __LINE__);
        }
        $this->InlineImageUrlTemplate = $inlineImageUrlTemplate;
        return $this;
    }
    /**
     * Get BlockExternalImages value
     * @return bool|null
     */
    public function getBlockExternalImages()
    {
        return $this->BlockExternalImages;
    }
    /**
     * Set BlockExternalImages value
     * @param bool $blockExternalImages
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setBlockExternalImages($blockExternalImages = null)
    {
        // validation for constraint: boolean
        if (!is_null($blockExternalImages) && !is_bool($blockExternalImages)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($blockExternalImages, true), gettype($blockExternalImages)), __LINE__);
        }
        $this->BlockExternalImages = $blockExternalImages;
        return $this;
    }
    /**
     * Get AddBlankTargetToLinks value
     * @return bool|null
     */
    public function getAddBlankTargetToLinks()
    {
        return $this->AddBlankTargetToLinks;
    }
    /**
     * Set AddBlankTargetToLinks value
     * @param bool $addBlankTargetToLinks
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setAddBlankTargetToLinks($addBlankTargetToLinks = null)
    {
        // validation for constraint: boolean
        if (!is_null($addBlankTargetToLinks) && !is_bool($addBlankTargetToLinks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($addBlankTargetToLinks, true), gettype($addBlankTargetToLinks)), __LINE__);
        }
        $this->AddBlankTargetToLinks = $addBlankTargetToLinks;
        return $this;
    }
    /**
     * Get MaximumBodySize value
     * @return int|null
     */
    public function getMaximumBodySize()
    {
        return $this->MaximumBodySize;
    }
    /**
     * Set MaximumBodySize value
     * @param int $maximumBodySize
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setMaximumBodySize($maximumBodySize = null)
    {
        // validation for constraint: int
        if (!is_null($maximumBodySize) && !(is_int($maximumBodySize) || ctype_digit($maximumBodySize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumBodySize, true), gettype($maximumBodySize)), __LINE__);
        }
        $this->MaximumBodySize = $maximumBodySize;
        return $this;
    }
    /**
     * Get AdditionalProperties value
     * @return \Ews\StructType\EwsNonEmptyArrayOfPathsToElementType|null
     */
    public function getAdditionalProperties()
    {
        return $this->AdditionalProperties;
    }
    /**
     * Set AdditionalProperties value
     * @param \Ews\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setAdditionalProperties(\Ews\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
    {
        $this->AdditionalProperties = $additionalProperties;
        return $this;
    }
}
