<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TwoOperandExpressionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsTwoOperandExpressionType extends EwsSearchExpressionType
{
    /**
     * The FieldURIOrConstant
     * @var \Ews\StructType\EwsFieldURIOrConstantType
     */
    public $FieldURIOrConstant;
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
     * Constructor method for TwoOperandExpressionType
     * @uses EwsTwoOperandExpressionType::setFieldURIOrConstant()
     * @uses EwsTwoOperandExpressionType::setFieldURI()
     * @uses EwsTwoOperandExpressionType::setIndexedFieldURI()
     * @uses EwsTwoOperandExpressionType::setExtendedFieldURI()
     * @param \Ews\StructType\EwsFieldURIOrConstantType $fieldURIOrConstant
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(\Ews\StructType\EwsFieldURIOrConstantType $fieldURIOrConstant = null, \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null, \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setFieldURIOrConstant($fieldURIOrConstant)
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI);
    }
    /**
     * Get FieldURIOrConstant value
     * @return \Ews\StructType\EwsFieldURIOrConstantType|null
     */
    public function getFieldURIOrConstant()
    {
        return $this->FieldURIOrConstant;
    }
    /**
     * Set FieldURIOrConstant value
     * @param \Ews\StructType\EwsFieldURIOrConstantType $fieldURIOrConstant
     * @return \Ews\StructType\EwsTwoOperandExpressionType
     */
    public function setFieldURIOrConstant(\Ews\StructType\EwsFieldURIOrConstantType $fieldURIOrConstant = null)
    {
        $this->FieldURIOrConstant = $fieldURIOrConstant;
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
     * @return \Ews\StructType\EwsTwoOperandExpressionType
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
     * @return \Ews\StructType\EwsTwoOperandExpressionType
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
     * @return \Ews\StructType\EwsTwoOperandExpressionType
     */
    public function setExtendedFieldURI(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        return $this;
    }
}
