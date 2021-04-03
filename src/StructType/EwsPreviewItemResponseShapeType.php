<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $BaseShape;
    /**
     * The AdditionalProperties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType $AdditionalProperties = null;
    /**
     * Constructor method for PreviewItemResponseShapeType
     * @uses EwsPreviewItemResponseShapeType::setBaseShape()
     * @uses EwsPreviewItemResponseShapeType::setAdditionalProperties()
     * @param string $baseShape
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType $additionalProperties
     */
    public function __construct(string $baseShape, ?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType $additionalProperties = null)
    {
        $this
            ->setBaseShape($baseShape)
            ->setAdditionalProperties($additionalProperties);
    }
    /**
     * Get BaseShape value
     * @return string
     */
    public function getBaseShape(): string
    {
        return $this->BaseShape;
    }
    /**
     * Set BaseShape value
     * @uses \EnumType\EwsPreviewItemBaseShapeType::valueIsValid()
     * @uses \EnumType\EwsPreviewItemBaseShapeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $baseShape
     * @return \StructType\EwsPreviewItemResponseShapeType
     */
    public function setBaseShape(string $baseShape): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsPreviewItemBaseShapeType::valueIsValid($baseShape)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsPreviewItemBaseShapeType', is_array($baseShape) ? implode(', ', $baseShape) : var_export($baseShape, true), implode(', ', \EnumType\EwsPreviewItemBaseShapeType::getValidValues())), __LINE__);
        }
        $this->BaseShape = $baseShape;
        
        return $this;
    }
    /**
     * Get AdditionalProperties value
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType|null
     */
    public function getAdditionalProperties(): ?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType
    {
        return $this->AdditionalProperties;
    }
    /**
     * Set AdditionalProperties value
     * @param \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType $additionalProperties
     * @return \StructType\EwsPreviewItemResponseShapeType
     */
    public function setAdditionalProperties(?\ArrayType\EwsNonEmptyArrayOfExtendedFieldURIsType $additionalProperties = null): self
    {
        $this->AdditionalProperties = $additionalProperties;
        
        return $this;
    }
}
