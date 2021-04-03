<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContainsExpressionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsContainsExpressionType extends EwsSearchExpressionType
{
    /**
     * The Constant
     * @var \StructType\EwsConstantValueType|null
     */
    protected ?\StructType\EwsConstantValueType $Constant = null;
    /**
     * The FieldURI
     * @var \StructType\EwsPathToUnindexedFieldType|null
     */
    protected ?\StructType\EwsPathToUnindexedFieldType $FieldURI = null;
    /**
     * The IndexedFieldURI
     * @var \StructType\EwsPathToIndexedFieldType|null
     */
    protected ?\StructType\EwsPathToIndexedFieldType $IndexedFieldURI = null;
    /**
     * The ExtendedFieldURI
     * @var \StructType\EwsPathToExtendedFieldType|null
     */
    protected ?\StructType\EwsPathToExtendedFieldType $ExtendedFieldURI = null;
    /**
     * The ContainmentMode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ContainmentMode = null;
    /**
     * The ContainmentComparison
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ContainmentComparison = null;
    /**
     * Constructor method for ContainsExpressionType
     * @uses EwsContainsExpressionType::setConstant()
     * @uses EwsContainsExpressionType::setFieldURI()
     * @uses EwsContainsExpressionType::setIndexedFieldURI()
     * @uses EwsContainsExpressionType::setExtendedFieldURI()
     * @uses EwsContainsExpressionType::setContainmentMode()
     * @uses EwsContainsExpressionType::setContainmentComparison()
     * @param \StructType\EwsConstantValueType $constant
     * @param \StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @param string $containmentMode
     * @param string $containmentComparison
     */
    public function __construct(?\StructType\EwsConstantValueType $constant = null, ?\StructType\EwsPathToUnindexedFieldType $fieldURI = null, ?\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, ?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null, ?string $containmentMode = null, ?string $containmentComparison = null)
    {
        $this
            ->setConstant($constant)
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI)
            ->setContainmentMode($containmentMode)
            ->setContainmentComparison($containmentComparison);
    }
    /**
     * Get Constant value
     * @return \StructType\EwsConstantValueType|null
     */
    public function getConstant(): ?\StructType\EwsConstantValueType
    {
        return $this->Constant;
    }
    /**
     * Set Constant value
     * @param \StructType\EwsConstantValueType $constant
     * @return \StructType\EwsContainsExpressionType
     */
    public function setConstant(?\StructType\EwsConstantValueType $constant = null): self
    {
        $this->Constant = $constant;
        
        return $this;
    }
    /**
     * Get FieldURI value
     * @return \StructType\EwsPathToUnindexedFieldType|null
     */
    public function getFieldURI(): ?\StructType\EwsPathToUnindexedFieldType
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @param \StructType\EwsPathToUnindexedFieldType $fieldURI
     * @return \StructType\EwsContainsExpressionType
     */
    public function setFieldURI(?\StructType\EwsPathToUnindexedFieldType $fieldURI = null): self
    {
        $this->FieldURI = $fieldURI;
        
        return $this;
    }
    /**
     * Get IndexedFieldURI value
     * @return \StructType\EwsPathToIndexedFieldType|null
     */
    public function getIndexedFieldURI(): ?\StructType\EwsPathToIndexedFieldType
    {
        return $this->IndexedFieldURI;
    }
    /**
     * Set IndexedFieldURI value
     * @param \StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @return \StructType\EwsContainsExpressionType
     */
    public function setIndexedFieldURI(?\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null): self
    {
        $this->IndexedFieldURI = $indexedFieldURI;
        
        return $this;
    }
    /**
     * Get ExtendedFieldURI value
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedFieldURI(): ?\StructType\EwsPathToExtendedFieldType
    {
        return $this->ExtendedFieldURI;
    }
    /**
     * Set ExtendedFieldURI value
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @return \StructType\EwsContainsExpressionType
     */
    public function setExtendedFieldURI(?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null): self
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        
        return $this;
    }
    /**
     * Get ContainmentMode value
     * @return string|null
     */
    public function getContainmentMode(): ?string
    {
        return $this->ContainmentMode;
    }
    /**
     * Set ContainmentMode value
     * @uses \EnumType\EwsContainmentModeType::valueIsValid()
     * @uses \EnumType\EwsContainmentModeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $containmentMode
     * @return \StructType\EwsContainsExpressionType
     */
    public function setContainmentMode(?string $containmentMode = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsContainmentModeType::valueIsValid($containmentMode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsContainmentModeType', is_array($containmentMode) ? implode(', ', $containmentMode) : var_export($containmentMode, true), implode(', ', \EnumType\EwsContainmentModeType::getValidValues())), __LINE__);
        }
        $this->ContainmentMode = $containmentMode;
        
        return $this;
    }
    /**
     * Get ContainmentComparison value
     * @return string|null
     */
    public function getContainmentComparison(): ?string
    {
        return $this->ContainmentComparison;
    }
    /**
     * Set ContainmentComparison value
     * @uses \EnumType\EwsContainmentComparisonType::valueIsValid()
     * @uses \EnumType\EwsContainmentComparisonType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $containmentComparison
     * @return \StructType\EwsContainsExpressionType
     */
    public function setContainmentComparison(?string $containmentComparison = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsContainmentComparisonType::valueIsValid($containmentComparison)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsContainmentComparisonType', is_array($containmentComparison) ? implode(', ', $containmentComparison) : var_export($containmentComparison, true), implode(', ', \EnumType\EwsContainmentComparisonType::getValidValues())), __LINE__);
        }
        $this->ContainmentComparison = $containmentComparison;
        
        return $this;
    }
}
