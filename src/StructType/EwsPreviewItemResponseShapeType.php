<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviewItemResponseShapeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPreviewItemResponseShapeType extends AbstractStructBase
{
    /**
     * The BaseShape
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $BaseShape;
    /**
     * The AdditionalProperties
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType
     */
    public $AdditionalProperties;
    /**
     * Constructor method for PreviewItemResponseShapeType
     * @uses EwsPreviewItemResponseShapeType::setBaseShape()
     * @uses EwsPreviewItemResponseShapeType::setAdditionalProperties()
     * @param string $baseShape
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType
     * $additionalProperties
     */
    public function __construct($baseShape = null, \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType $additionalProperties = null)
    {
        $this
            ->setBaseShape($baseShape)
            ->setAdditionalProperties($additionalProperties);
    }
    /**
     * Get BaseShape value
     * @return string
     */
    public function getBaseShape()
    {
        return $this->BaseShape;
    }
    /**
     * Set BaseShape value
     * @uses \Ews\EnumType\EwsPreviewItemBaseShapeType::valueIsValid()
     * @uses \Ews\EnumType\EwsPreviewItemBaseShapeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $baseShape
     * @return \Ews\StructType\EwsPreviewItemResponseShapeType
     */
    public function setBaseShape($baseShape = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsPreviewItemBaseShapeType::valueIsValid($baseShape)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $baseShape, implode(', ', \Ews\EnumType\EwsPreviewItemBaseShapeType::getValidValues())), __LINE__);
        }
        $this->BaseShape = $baseShape;
        return $this;
    }
    /**
     * Get AdditionalProperties value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType|null
     */
    public function getAdditionalProperties()
    {
        return $this->AdditionalProperties;
    }
    /**
     * Set AdditionalProperties value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType
     * $additionalProperties
     * @return \Ews\StructType\EwsPreviewItemResponseShapeType
     */
    public function setAdditionalProperties(\Ews\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType $additionalProperties = null)
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
     * @return \Ews\StructType\EwsPreviewItemResponseShapeType
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
