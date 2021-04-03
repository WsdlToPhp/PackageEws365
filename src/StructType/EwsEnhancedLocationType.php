<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $DisplayName = null;
    /**
     * The Annotation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Annotation = null;
    /**
     * The PostalAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsPersonaPostalAddressType|null
     */
    protected ?\StructType\EwsPersonaPostalAddressType $PostalAddress = null;
    /**
     * Constructor method for EnhancedLocationType
     * @uses EwsEnhancedLocationType::setDisplayName()
     * @uses EwsEnhancedLocationType::setAnnotation()
     * @uses EwsEnhancedLocationType::setPostalAddress()
     * @param string $displayName
     * @param string $annotation
     * @param \StructType\EwsPersonaPostalAddressType $postalAddress
     */
    public function __construct(?string $displayName = null, ?string $annotation = null, ?\StructType\EwsPersonaPostalAddressType $postalAddress = null)
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
    public function getDisplayName(): ?string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsEnhancedLocationType
     */
    public function setDisplayName(?string $displayName = null): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
        return $this;
    }
    /**
     * Get Annotation value
     * @return string|null
     */
    public function getAnnotation(): ?string
    {
        return $this->Annotation;
    }
    /**
     * Set Annotation value
     * @param string $annotation
     * @return \StructType\EwsEnhancedLocationType
     */
    public function setAnnotation(?string $annotation = null): self
    {
        // validation for constraint: string
        if (!is_null($annotation) && !is_string($annotation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($annotation, true), gettype($annotation)), __LINE__);
        }
        $this->Annotation = $annotation;
        
        return $this;
    }
    /**
     * Get PostalAddress value
     * @return \StructType\EwsPersonaPostalAddressType|null
     */
    public function getPostalAddress(): ?\StructType\EwsPersonaPostalAddressType
    {
        return $this->PostalAddress;
    }
    /**
     * Set PostalAddress value
     * @param \StructType\EwsPersonaPostalAddressType $postalAddress
     * @return \StructType\EwsEnhancedLocationType
     */
    public function setPostalAddress(?\StructType\EwsPersonaPostalAddressType $postalAddress = null): self
    {
        $this->PostalAddress = $postalAddress;
        
        return $this;
    }
}
