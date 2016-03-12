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
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $FieldURI;
    /**
     * The FieldIndex
     * Meta informations extracted from the WSDL
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fieldURI, implode(', ', \Ews\EnumType\EwsDictionaryURIType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldIndex)), __LINE__);
        }
        $this->FieldIndex = $fieldIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPathToIndexedFieldType
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
