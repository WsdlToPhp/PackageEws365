<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttachmentResponseShapeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsAttachmentResponseShapeType extends AbstractStructBase
{
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
     * The FilterHtmlContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $FilterHtmlContent;
    /**
     * The AdditionalProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: t:Path
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
    /**
     * Constructor method for AttachmentResponseShapeType
     * @uses EwsAttachmentResponseShapeType::setIncludeMimeContent()
     * @uses EwsAttachmentResponseShapeType::setBodyType()
     * @uses EwsAttachmentResponseShapeType::setFilterHtmlContent()
     * @uses EwsAttachmentResponseShapeType::setAdditionalProperties()
     * @param boolean $includeMimeContent
     * @param string $bodyType
     * @param boolean $filterHtmlContent
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     */
    public function __construct($includeMimeContent = null, $bodyType = null, $filterHtmlContent = null, \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
    {
        $this
            ->setIncludeMimeContent($includeMimeContent)
            ->setBodyType($bodyType)
            ->setFilterHtmlContent($filterHtmlContent)
            ->setAdditionalProperties($additionalProperties);
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
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
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
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
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
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
     */
    public function setFilterHtmlContent($filterHtmlContent = null)
    {
        $this->FilterHtmlContent = $filterHtmlContent;
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
     * @return \Ews\StructType\EwsAttachmentResponseShapeType
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
