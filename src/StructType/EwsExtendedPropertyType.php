<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedPropertyType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents an extended property instance (both its path identifier along with its associated value).
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsExtendedPropertyType extends AbstractStructBase
{
    /**
     * The ExtendedFieldURI
     * @var \Ews\StructType\EwsPathToExtendedFieldType
     */
    public $ExtendedFieldURI;
    /**
     * The Value
     * @var string
     */
    public $Value;
    /**
     * The Values
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType
     */
    public $Values;
    /**
     * Constructor method for ExtendedPropertyType
     * @uses EwsExtendedPropertyType::setExtendedFieldURI()
     * @uses EwsExtendedPropertyType::setValue()
     * @uses EwsExtendedPropertyType::setValues()
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @param string $value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values
     */
    public function __construct(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null, $value = null, \Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values = null)
    {
        $this
            ->setExtendedFieldURI($extendedFieldURI)
            ->setValue($value)
            ->setValues($values);
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
     * @return \Ews\StructType\EwsExtendedPropertyType
     */
    public function setExtendedFieldURI(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Ews\StructType\EwsExtendedPropertyType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get Values value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values
     * @return \Ews\StructType\EwsExtendedPropertyType
     */
    public function setValues(\Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsExtendedPropertyType
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
