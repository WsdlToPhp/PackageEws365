<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldURIOrConstantType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFieldURIOrConstantType extends AbstractStructBase
{
    /**
     * The Constant
     * Meta information extracted from the WSDL
     * - choice: Constant | FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsConstantValueType
     */
    public $Constant;
    /**
     * The FieldURI
     * Meta information extracted from the WSDL
     * - choice: Constant | FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPathToUnindexedFieldType
     */
    public $FieldURI;
    /**
     * The IndexedFieldURI
     * Meta information extracted from the WSDL
     * - choice: Constant | FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPathToIndexedFieldType
     */
    public $IndexedFieldURI;
    /**
     * The ExtendedFieldURI
     * Meta information extracted from the WSDL
     * - choice: Constant | FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsPathToExtendedFieldType
     */
    public $ExtendedFieldURI;
    /**
     * Constructor method for FieldURIOrConstantType
     * @uses EwsFieldURIOrConstantType::setConstant()
     * @uses EwsFieldURIOrConstantType::setFieldURI()
     * @uses EwsFieldURIOrConstantType::setIndexedFieldURI()
     * @uses EwsFieldURIOrConstantType::setExtendedFieldURI()
     * @param \Ews\StructType\EwsConstantValueType $constant
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(\Ews\StructType\EwsConstantValueType $constant = null, \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null, \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setConstant($constant)
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI);
    }
    /**
     * Get Constant value
     * @return \Ews\StructType\EwsConstantValueType|null
     */
    public function getConstant()
    {
        return isset($this->Constant) ? $this->Constant : null;
    }
    /**
     * This method is responsible for validating the value passed to the setConstant method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConstant method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateConstantForChoiceConstraintsFromSetConstant($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FieldURI',
            'IndexedFieldURI',
            'ExtendedFieldURI',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Constant can\'t be set as the property %s is already set. Only one property must be set among these properties: Constant, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Constant value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConstantValueType $constant
     * @return \Ews\StructType\EwsFieldURIOrConstantType
     */
    public function setConstant(\Ews\StructType\EwsConstantValueType $constant = null)
    {
        // validation for constraint: choice(Constant, FieldURI, IndexedFieldURI, ExtendedFieldURI)
        if ('' !== ($constantChoiceErrorMessage = self::validateConstantForChoiceConstraintsFromSetConstant($constant))) {
            throw new \InvalidArgumentException($constantChoiceErrorMessage, __LINE__);
        }
        if (is_null($constant) || (is_array($constant) && empty($constant))) {
            unset($this->Constant);
        } else {
            $this->Constant = $constant;
        }
        return $this;
    }
    /**
     * Get FieldURI value
     * @return \Ews\StructType\EwsPathToUnindexedFieldType|null
     */
    public function getFieldURI()
    {
        return isset($this->FieldURI) ? $this->FieldURI : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFieldURI method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFieldURI method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFieldURIForChoiceConstraintsFromSetFieldURI($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Constant',
            'IndexedFieldURI',
            'ExtendedFieldURI',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property FieldURI can\'t be set as the property %s is already set. Only one property must be set among these properties: FieldURI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FieldURI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPathToUnindexedFieldType $fieldURI
     * @return \Ews\StructType\EwsFieldURIOrConstantType
     */
    public function setFieldURI(\Ews\StructType\EwsPathToUnindexedFieldType $fieldURI = null)
    {
        // validation for constraint: choice(Constant, FieldURI, IndexedFieldURI, ExtendedFieldURI)
        if ('' !== ($fieldURIChoiceErrorMessage = self::validateFieldURIForChoiceConstraintsFromSetFieldURI($fieldURI))) {
            throw new \InvalidArgumentException($fieldURIChoiceErrorMessage, __LINE__);
        }
        if (is_null($fieldURI) || (is_array($fieldURI) && empty($fieldURI))) {
            unset($this->FieldURI);
        } else {
            $this->FieldURI = $fieldURI;
        }
        return $this;
    }
    /**
     * Get IndexedFieldURI value
     * @return \Ews\StructType\EwsPathToIndexedFieldType|null
     */
    public function getIndexedFieldURI()
    {
        return isset($this->IndexedFieldURI) ? $this->IndexedFieldURI : null;
    }
    /**
     * This method is responsible for validating the value passed to the setIndexedFieldURI method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIndexedFieldURI method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateIndexedFieldURIForChoiceConstraintsFromSetIndexedFieldURI($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Constant',
            'FieldURI',
            'ExtendedFieldURI',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property IndexedFieldURI can\'t be set as the property %s is already set. Only one property must be set among these properties: IndexedFieldURI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set IndexedFieldURI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @return \Ews\StructType\EwsFieldURIOrConstantType
     */
    public function setIndexedFieldURI(\Ews\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null)
    {
        // validation for constraint: choice(Constant, FieldURI, IndexedFieldURI, ExtendedFieldURI)
        if ('' !== ($indexedFieldURIChoiceErrorMessage = self::validateIndexedFieldURIForChoiceConstraintsFromSetIndexedFieldURI($indexedFieldURI))) {
            throw new \InvalidArgumentException($indexedFieldURIChoiceErrorMessage, __LINE__);
        }
        if (is_null($indexedFieldURI) || (is_array($indexedFieldURI) && empty($indexedFieldURI))) {
            unset($this->IndexedFieldURI);
        } else {
            $this->IndexedFieldURI = $indexedFieldURI;
        }
        return $this;
    }
    /**
     * Get ExtendedFieldURI value
     * @return \Ews\StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedFieldURI()
    {
        return isset($this->ExtendedFieldURI) ? $this->ExtendedFieldURI : null;
    }
    /**
     * This method is responsible for validating the value passed to the setExtendedFieldURI method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedFieldURI method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExtendedFieldURIForChoiceConstraintsFromSetExtendedFieldURI($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Constant',
            'FieldURI',
            'IndexedFieldURI',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ExtendedFieldURI can\'t be set as the property %s is already set. Only one property must be set among these properties: ExtendedFieldURI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ExtendedFieldURI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @return \Ews\StructType\EwsFieldURIOrConstantType
     */
    public function setExtendedFieldURI(\Ews\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        // validation for constraint: choice(Constant, FieldURI, IndexedFieldURI, ExtendedFieldURI)
        if ('' !== ($extendedFieldURIChoiceErrorMessage = self::validateExtendedFieldURIForChoiceConstraintsFromSetExtendedFieldURI($extendedFieldURI))) {
            throw new \InvalidArgumentException($extendedFieldURIChoiceErrorMessage, __LINE__);
        }
        if (is_null($extendedFieldURI) || (is_array($extendedFieldURI) && empty($extendedFieldURI))) {
            unset($this->ExtendedFieldURI);
        } else {
            $this->ExtendedFieldURI = $extendedFieldURI;
        }
        return $this;
    }
}
