<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PathToIndexedFieldType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPathToIndexedFieldType extends EwsBasePathToElementType
{
    /**
     * The FieldURI
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FieldURI;
    /**
     * The FieldIndex
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FieldIndex;
    /**
     * Constructor method for PathToIndexedFieldType
     * @uses EwsPathToIndexedFieldType::setFieldURI()
     * @uses EwsPathToIndexedFieldType::setFieldIndex()
     * @param string $fieldURI
     * @param string $fieldIndex
     */
    public function __construct($fieldURI = null, $fieldIndex = null)
    {
        $this
            ->setFieldURI($fieldURI)
            ->setFieldIndex($fieldIndex);
    }
    /**
     * Get FieldURI value
     * @return string
     */
    public function getFieldURI()
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @uses \Ews\EnumType\EwsDictionaryURIType::valueIsValid()
     * @uses \Ews\EnumType\EwsDictionaryURIType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fieldURI
     * @return \Ews\StructType\EwsPathToIndexedFieldType
     */
    public function setFieldURI($fieldURI = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDictionaryURIType::valueIsValid($fieldURI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDictionaryURIType', is_array($fieldURI) ? implode(', ', $fieldURI) : var_export($fieldURI, true), implode(', ', \Ews\EnumType\EwsDictionaryURIType::getValidValues())), __LINE__);
        }
        $this->FieldURI = $fieldURI;
        return $this;
    }
    /**
     * Get FieldIndex value
     * @return string
     */
    public function getFieldIndex()
    {
        return $this->FieldIndex;
    }
    /**
     * Set FieldIndex value
     * @param string $fieldIndex
     * @return \Ews\StructType\EwsPathToIndexedFieldType
     */
    public function setFieldIndex($fieldIndex = null)
    {
        // validation for constraint: string
        if (!is_null($fieldIndex) && !is_string($fieldIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldIndex, true), gettype($fieldIndex)), __LINE__);
        }
        $this->FieldIndex = $fieldIndex;
        return $this;
    }
}
