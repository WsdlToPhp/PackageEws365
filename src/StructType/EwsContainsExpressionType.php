<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsConstantValueType
     */
    public $Constant;
    /**
     * The FieldURI
     * @var \Ews\StructType\EwsPathToUnindexedFieldType
     */
    public $FieldURI;
    /**
     * The IndexedFieldURI
     * @var \Ews\StructType\EwsPathToIndexedFieldType
     */
    public $IndexedFieldURI;
    /**
     * The ExtendedFieldURI
     * @var \Ews\StructType\EwsPathToExtendedFieldType
     */
    public $ExtendedFieldURI;
    /**
     * The ContainmentMode
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ContainmentMode;
    /**
     * The ContainmentComparison
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $ContainmentComparison;
    /**
     * Constructor method for ContainsExpressionType
     * @uses EwsContainsExpressionType::setConstant()
     * @uses EwsContainsExpressionType::setFieldURI()
     * @uses EwsContainsExpressionType::setIndexedFieldURI()
     * @uses EwsContainsExpressionType::setExtendedFieldURI()
     * @uses EwsContainsExpressionType::setContainmentMode()
     * @uses EwsContainsExpressionType::setContainmentComparison()
     * @param \Ews\StructType\EwsConstantValueType $constant
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @param string $containmentMode
     * @param string $containmentComparison
     */
    public function __construct(\Ews\StructType\EwsConstantValueType $constant = null, \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null, \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null, $containmentMode = null, $containmentComparison = null)
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
     * @return \Ews\StructType\EwsConstantValueType|null
     */
    public function getConstant()
    {
        return $this->Constant;
    }
    /**
     * Set Constant value
     * @param \Ews\StructType\EwsConstantValueType $constant
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setConstant(\Ews\StructType\EwsConstantValueType $constant = null)
    {
        $this->Constant = $constant;
        return $this;
    }
    /**
     * Get FieldURI value
     * @return \Ews\StructType\EwsPathToUnindexedFieldType|null
     */
    public function getFieldURI()
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setFieldURI(\Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null)
    {
        $this->FieldURI = $fieldURI;
        return $this;
    }
    /**
     * Get IndexedFieldURI value
     * @return \Ews\StructType\EwsPathToIndexedFieldType|null
     */
    public function getIndexedFieldURI()
    {
        return $this->IndexedFieldURI;
    }
    /**
     * Set IndexedFieldURI value
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setIndexedFieldURI(\Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null)
    {
        $this->IndexedFieldURI = $indexedFieldURI;
        return $this;
    }
    /**
     * Get ExtendedFieldURI value
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedFieldURI()
    {
        return $this->ExtendedFieldURI;
    }
    /**
     * Set ExtendedFieldURI value
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setExtendedFieldURI(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        return $this;
    }
    /**
     * Get ContainmentMode value
     * @return string|null
     */
    public function getContainmentMode()
    {
        return $this->ContainmentMode;
    }
    /**
     * Set ContainmentMode value
     * @uses \Ews\EnumType\EwsContainmentModeType::valueIsValid()
     * @uses \Ews\EnumType\EwsContainmentModeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $containmentMode
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setContainmentMode($containmentMode = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContainmentModeType::valueIsValid($containmentMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsContainmentModeType', is_array($containmentMode) ? implode(', ', $containmentMode) : var_export($containmentMode, true), implode(', ', \Ews\EnumType\EwsContainmentModeType::getValidValues())), __LINE__);
        }
        $this->ContainmentMode = $containmentMode;
        return $this;
    }
    /**
     * Get ContainmentComparison value
     * @return string|null
     */
    public function getContainmentComparison()
    {
        return $this->ContainmentComparison;
    }
    /**
     * Set ContainmentComparison value
     * @uses \Ews\EnumType\EwsContainmentComparisonType::valueIsValid()
     * @uses \Ews\EnumType\EwsContainmentComparisonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $containmentComparison
     * @return \Ews\StructType\EwsContainsExpressionType
     */
    public function setContainmentComparison($containmentComparison = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsContainmentComparisonType::valueIsValid($containmentComparison)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsContainmentComparisonType', is_array($containmentComparison) ? implode(', ', $containmentComparison) : var_export($containmentComparison, true), implode(', ', \Ews\EnumType\EwsContainmentComparisonType::getValidValues())), __LINE__);
        }
        $this->ContainmentComparison = $containmentComparison;
        return $this;
    }
}
