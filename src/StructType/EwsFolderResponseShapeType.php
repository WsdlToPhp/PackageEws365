<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FolderResponseShapeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFolderResponseShapeType extends AbstractStructBase
{
    /**
     * The BaseShape
     * @var string
     */
    public $BaseShape;
    /**
     * The AdditionalProperties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: t:Path
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
    /**
     * Constructor method for FolderResponseShapeType
     * @uses EwsFolderResponseShapeType::setBaseShape()
     * @uses EwsFolderResponseShapeType::setAdditionalProperties()
     * @param string $baseShape
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     */
    public function __construct($baseShape = null, \Ews\ArrayType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
    {
        $this
            ->setBaseShape($baseShape)
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
     * @return \Ews\StructType\EwsFolderResponseShapeType
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
     * @return \Ews\StructType\EwsFolderResponseShapeType
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
     * @return \Ews\StructType\EwsFolderResponseShapeType
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
