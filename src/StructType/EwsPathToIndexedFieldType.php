<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $FieldURI;
    /**
     * The FieldIndex
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $FieldIndex;
    /**
     * Constructor method for PathToIndexedFieldType
     * @uses EwsPathToIndexedFieldType::setFieldURI()
     * @uses EwsPathToIndexedFieldType::setFieldIndex()
     * @param string $fieldURI
     * @param string $fieldIndex
     */
    public function __construct(string $fieldURI, string $fieldIndex)
    {
        $this
            ->setFieldURI($fieldURI)
            ->setFieldIndex($fieldIndex);
    }
    /**
     * Get FieldURI value
     * @return string
     */
    public function getFieldURI(): string
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @uses \EnumType\EwsDictionaryURIType::valueIsValid()
     * @uses \EnumType\EwsDictionaryURIType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fieldURI
     * @return \StructType\EwsPathToIndexedFieldType
     */
    public function setFieldURI(string $fieldURI): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDictionaryURIType::valueIsValid($fieldURI)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDictionaryURIType', is_array($fieldURI) ? implode(', ', $fieldURI) : var_export($fieldURI, true), implode(', ', \EnumType\EwsDictionaryURIType::getValidValues())), __LINE__);
        }
        $this->FieldURI = $fieldURI;
        
        return $this;
    }
    /**
     * Get FieldIndex value
     * @return string
     */
    public function getFieldIndex(): string
    {
        return $this->FieldIndex;
    }
    /**
     * Set FieldIndex value
     * @param string $fieldIndex
     * @return \StructType\EwsPathToIndexedFieldType
     */
    public function setFieldIndex(string $fieldIndex): self
    {
        // validation for constraint: string
        if (!is_null($fieldIndex) && !is_string($fieldIndex)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldIndex, true), gettype($fieldIndex)), __LINE__);
        }
        $this->FieldIndex = $fieldIndex;
        
        return $this;
    }
}
