<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsPathToExtendedFieldType|null
     */
    protected ?\StructType\EwsPathToExtendedFieldType $ExtendedFieldURI = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - choice: Value | Values
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * The Values
     * Meta information extracted from the WSDL
     * - choice: Value | Values
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \ArrayType\EwsNonEmptyArrayOfPropertyValuesType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $Values = null;
    /**
     * Constructor method for ExtendedPropertyType
     * @uses EwsExtendedPropertyType::setExtendedFieldURI()
     * @uses EwsExtendedPropertyType::setValue()
     * @uses EwsExtendedPropertyType::setValues()
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @param string $value
     * @param \ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values
     */
    public function __construct(?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null, ?string $value = null, ?\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values = null)
    {
        $this
            ->setExtendedFieldURI($extendedFieldURI)
            ->setValue($value)
            ->setValues($values);
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
     * @return \StructType\EwsExtendedPropertyType
     */
    public function setExtendedFieldURI(?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null): self
    {
        $this->ExtendedFieldURI = $extendedFieldURI;
        
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue(): ?string
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
    public function validateValueForChoiceConstraintsFromSetValue($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Value can\'t be set as the property %s is already set. Only one property must be set among these properties: Value, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Value value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param string $value
     * @return \StructType\EwsExtendedPropertyType
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        // validation for constraint: choice(Value, Values)
        if ('' !== ($valueChoiceErrorMessage = self::validateValueForChoiceConstraintsFromSetValue($value))) {
            throw new InvalidArgumentException($valueChoiceErrorMessage, __LINE__);
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
     * @return \ArrayType\EwsNonEmptyArrayOfPropertyValuesType|null
     */
    public function getValues(): ?\ArrayType\EwsNonEmptyArrayOfPropertyValuesType
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
    public function validateValuesForChoiceConstraintsFromSetValues($value): string
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
                    throw new InvalidArgumentException(sprintf('The property Values can\'t be set as the property %s is already set. Only one property must be set among these properties: Values, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Values value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values
     * @return \StructType\EwsExtendedPropertyType
     */
    public function setValues(?\ArrayType\EwsNonEmptyArrayOfPropertyValuesType $values = null): self
    {
        // validation for constraint: choice(Value, Values)
        if ('' !== ($valuesChoiceErrorMessage = self::validateValuesForChoiceConstraintsFromSetValues($values))) {
            throw new InvalidArgumentException($valuesChoiceErrorMessage, __LINE__);
        }
        if (is_null($values) || (is_array($values) && empty($values))) {
            unset($this->Values);
        } else {
            $this->Values = $values;
        }
        
        return $this;
    }
}
