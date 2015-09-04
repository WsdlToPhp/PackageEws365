<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemResponseShapeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var boolean
     */
    public $IncludeMimeContent;
    /**
     * The BodyType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BodyType;
    /**
     * The UniqueBodyType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $UniqueBodyType;
    /**
     * The NormalizedBodyType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NormalizedBodyType;
    /**
     * The FilterHtmlContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $FilterHtmlContent;
    /**
     * The ConvertHtmlCodePageToUTF8
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $ConvertHtmlCodePageToUTF8;
    /**
     * The InlineImageUrlTemplate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InlineImageUrlTemplate;
    /**
     * The BlockExternalImages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $BlockExternalImages;
    /**
     * The AddBlankTargetToLinks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $AddBlankTargetToLinks;
    /**
     * The MaximumBodySize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaximumBodySize;
    /**
     * The AdditionalProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: t:Path
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType
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
     * @param boolean $includeMimeContent
     * @param string $bodyType
     * @param string $uniqueBodyType
     * @param string $normalizedBodyType
     * @param boolean $filterHtmlContent
     * @param boolean $convertHtmlCodePageToUTF8
     * @param string $inlineImageUrlTemplate
     * @param boolean $blockExternalImages
     * @param boolean $addBlankTargetToLinks
     * @param int $maximumBodySize
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     */
    public function __construct($baseShape = null, $includeMimeContent = null, $bodyType = null, $uniqueBodyType = null, $normalizedBodyType = null, $filterHtmlContent = null, $convertHtmlCodePageToUTF8 = null, $inlineImageUrlTemplate = null, $blockExternalImages = null, $addBlankTargetToLinks = null, $maximumBodySize = null, \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
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
     * @param string $baseShape
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setBaseShape($baseShape = null)
    {
        if (!\Ews\EnumType\EwsDefaultShapeNamesType::valueIsValid($baseShape)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $baseShape, implode(', ', \Ews\EnumType\EwsDefaultShapeNamesType::getValidValues())), __LINE__);
        }
        $this->BaseShape = $baseShape;
        return $this;
    }
    /**
     * Get IncludeMimeContent value
     * @return boolean|null
     */
    public function getIncludeMimeContent()
    {
        return $this->IncludeMimeContent;
    }
    /**
     * Set IncludeMimeContent value
     * @param boolean $includeMimeContent
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setIncludeMimeContent($includeMimeContent = null)
    {
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
     * @param string $bodyType
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setBodyType($bodyType = null)
    {
        if (!\Ews\EnumType\EwsBodyTypeResponseType::valueIsValid($bodyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bodyType, implode(', ', \Ews\EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
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
     * @param string $uniqueBodyType
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setUniqueBodyType($uniqueBodyType = null)
    {
        if (!\Ews\EnumType\EwsBodyTypeResponseType::valueIsValid($uniqueBodyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $uniqueBodyType, implode(', ', \Ews\EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
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
     * @param string $normalizedBodyType
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setNormalizedBodyType($normalizedBodyType = null)
    {
        if (!\Ews\EnumType\EwsBodyTypeResponseType::valueIsValid($normalizedBodyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $normalizedBodyType, implode(', ', \Ews\EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
        }
        $this->NormalizedBodyType = $normalizedBodyType;
        return $this;
    }
    /**
     * Get FilterHtmlContent value
     * @return boolean|null
     */
    public function getFilterHtmlContent()
    {
        return $this->FilterHtmlContent;
    }
    /**
     * Set FilterHtmlContent value
     * @param boolean $filterHtmlContent
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setFilterHtmlContent($filterHtmlContent = null)
    {
        $this->FilterHtmlContent = $filterHtmlContent;
        return $this;
    }
    /**
     * Get ConvertHtmlCodePageToUTF8 value
     * @return boolean|null
     */
    public function getConvertHtmlCodePageToUTF8()
    {
        return $this->ConvertHtmlCodePageToUTF8;
    }
    /**
     * Set ConvertHtmlCodePageToUTF8 value
     * @param boolean $convertHtmlCodePageToUTF8
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setConvertHtmlCodePageToUTF8($convertHtmlCodePageToUTF8 = null)
    {
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
        $this->InlineImageUrlTemplate = $inlineImageUrlTemplate;
        return $this;
    }
    /**
     * Get BlockExternalImages value
     * @return boolean|null
     */
    public function getBlockExternalImages()
    {
        return $this->BlockExternalImages;
    }
    /**
     * Set BlockExternalImages value
     * @param boolean $blockExternalImages
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setBlockExternalImages($blockExternalImages = null)
    {
        $this->BlockExternalImages = $blockExternalImages;
        return $this;
    }
    /**
     * Get AddBlankTargetToLinks value
     * @return boolean|null
     */
    public function getAddBlankTargetToLinks()
    {
        return $this->AddBlankTargetToLinks;
    }
    /**
     * Set AddBlankTargetToLinks value
     * @param boolean $addBlankTargetToLinks
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setAddBlankTargetToLinks($addBlankTargetToLinks = null)
    {
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
        $this->MaximumBodySize = $maximumBodySize;
        return $this;
    }
    /**
     * Get AdditionalProperties value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType|null
     */
    public function getAdditionalProperties()
    {
        return $this->AdditionalProperties;
    }
    /**
     * Set AdditionalProperties value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     * @return \Ews\StructType\EwsItemResponseShapeType
     */
    public function setAdditionalProperties(\Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
    {
        $this->AdditionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsItemResponseShapeType
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
