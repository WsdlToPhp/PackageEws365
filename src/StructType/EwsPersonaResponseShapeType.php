<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaResponseShapeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPersonaResponseShapeType extends AbstractStructBase
{
    /**
     * The BaseShape
     * @var string|null
     */
    protected ?string $BaseShape = null;
    /**
     * The AdditionalProperties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsNonEmptyArrayOfPathsToElementType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfPathsToElementType $AdditionalProperties = null;
    /**
     * Constructor method for PersonaResponseShapeType
     * @uses EwsPersonaResponseShapeType::setBaseShape()
     * @uses EwsPersonaResponseShapeType::setAdditionalProperties()
     * @param string $baseShape
     * @param \StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties
     */
    public function __construct(?string $baseShape = null, ?\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null)
    {
        $this
            ->setBaseShape($baseShape)
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
     * @return \StructType\EwsPersonaResponseShapeType
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
     * @return \StructType\EwsPersonaResponseShapeType
     */
    public function setAdditionalProperties(?\StructType\EwsNonEmptyArrayOfPathsToElementType $additionalProperties = null): self
    {
        $this->AdditionalProperties = $additionalProperties;
        
        return $this;
    }
}
