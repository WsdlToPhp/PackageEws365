<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnhancedLocationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsEnhancedLocationType extends AbstractStructBase
{
    /**
     * The DisplayName
     * @var string
     */
    public $DisplayName;
    /**
     * The Annotation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Annotation;
    /**
     * The PostalAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPersonaPostalAddressType
     */
    public $PostalAddress;
    /**
     * Constructor method for EnhancedLocationType
     * @uses EwsEnhancedLocationType::setDisplayName()
     * @uses EwsEnhancedLocationType::setAnnotation()
     * @uses EwsEnhancedLocationType::setPostalAddress()
     * @param string $displayName
     * @param string $annotation
     * @param \Ews\StructType\EwsPersonaPostalAddressType $postalAddress
     */
    public function __construct($displayName = null, $annotation = null, \Ews\StructType\EwsPersonaPostalAddressType $postalAddress = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setAnnotation($annotation)
            ->setPostalAddress($postalAddress);
    }
    /**
     * Get DisplayName value
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsEnhancedLocationType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get Annotation value
     * @return string|null
     */
    public function getAnnotation()
    {
        return $this->Annotation;
    }
    /**
     * Set Annotation value
     * @param string $annotation
     * @return \Ews\StructType\EwsEnhancedLocationType
     */
    public function setAnnotation($annotation = null)
    {
        // validation for constraint: string
        if (!is_null($annotation) && !is_string($annotation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($annotation, true), gettype($annotation)), __LINE__);
        }
        $this->Annotation = $annotation;
        return $this;
    }
    /**
     * Get PostalAddress value
     * @return \Ews\StructType\EwsPersonaPostalAddressType|null
     */
    public function getPostalAddress()
    {
        return $this->PostalAddress;
    }
    /**
     * Set PostalAddress value
     * @param \Ews\StructType\EwsPersonaPostalAddressType $postalAddress
     * @return \Ews\StructType\EwsEnhancedLocationType
     */
    public function setPostalAddress(\Ews\StructType\EwsPersonaPostalAddressType $postalAddress = null)
    {
        $this->PostalAddress = $postalAddress;
        return $this;
    }
}
