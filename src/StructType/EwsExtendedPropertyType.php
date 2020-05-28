<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedPropertyType StructType
 * Meta information extracted from the WSDL
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
     * Meta information extracted from the WSDL
     * - choice: Value | Values
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string
     */
    public $Value;
    /**
     * The Values
     * Meta information extracted from the WSDL
     * - choice: Value | Values
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
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
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * This method is responsible for validating the value passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateValueForChoiceConstraintsFromSetValue($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Values',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Value can\'t be set as the property %s is already set. Only one property must be set among these properties: Value, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Value value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $value
     * @return \Ews\StructType\EwsExtendedPropertyType
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: choice(Value, Values)
        if ('' !== ($valueChoiceErrorMessage = self::validateValueForChoiceConstraintsFromSetValue($value))) {
            throw new \InvalidArgumentException($valueChoiceErrorMessage, __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        return $this;
    }
    /**
     * Get Values value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType|null
     */
    public function getValues()
    {
        return isset($this->Values) ? $this->Values : null;
    }
    /**
     * This method is responsible for validating the value passed to the setValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValues method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateValuesForChoiceConstraintsFromSetValues($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Value',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Values can\'t be set as the property %s is already set. Only one property must be set among these properties: Values, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Values value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values
     * @return \Ews\StructType\EwsExtendedPropertyType
     */
    public function setValues(\Ews\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values = null)
    {
        // validation for constraint: choice(Value, Values)
        if ('' !== ($valuesChoiceErrorMessage = self::validateValuesForChoiceConstraintsFromSetValues($values))) {
            throw new \InvalidArgumentException($valuesChoiceErrorMessage, __LINE__);
        }
        if (is_null($values) || (is_array($values) && empty($values))) {
            unset($this->Values);
        } else {
            $this->Values = $values;
        }
        return $this;
    }
}
