<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
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
     * The FilterHtmlContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $FilterHtmlContent;
    /**
     * The AdditionalProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
    /**
     * Constructor method for AttachmentResponseShapeType
     * @uses EwsAttachmentResponseShapeType::setIncludeMimeContent()
     * @uses EwsAttachmentResponseShapeType::setBodyType()
     * @uses EwsAttachmentResponseShapeType::setFilterHtmlContent()
     * @uses EwsAttachmentResponseShapeType::setAdditionalProperties()
     * @param bool $includeMimeContent
     * @param string $bodyType
     * @param bool $filterHtmlContent
     * @param \Ews\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     */
    public function __construct($includeMimeContent = null, $bodyType = null, $filterHtmlContent = null, \Ews\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
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
    public function getIncludeMimeContent()
    {
        return $this->IncludeMimeContent;
    }
    /**
     * Set IncludeMimeContent value
     * @param bool $includeMimeContent
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
     */
    public function setIncludeMimeContent($includeMimeContent = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeMimeContent) && !is_bool($includeMimeContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($includeMimeContent)), __LINE__);
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
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
     */
    public function setBodyType($bodyType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsBodyTypeResponseType::valueIsValid($bodyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $bodyType, implode(', ', \Ews\EnumType\EwsBodyTypeResponseType::getValidValues())), __LINE__);
        }
        $this->BodyType = $bodyType;
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
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
     */
    public function setFilterHtmlContent($filterHtmlContent = null)
    {
        // validation for constraint: boolean
        if (!is_null($filterHtmlContent) && !is_bool($filterHtmlContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($filterHtmlContent)), __LINE__);
        }
        $this->FilterHtmlContent = $filterHtmlContent;
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
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
     */
    public function setAdditionalProperties(\Ews\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
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
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
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
