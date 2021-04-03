<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AggregateOnType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents the field of each item to aggregate on and the qualifier to apply to that field in determining which item will represent the group.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAggregateOnType extends AbstractStructBase
{
    /**
     * The Aggregate
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $Aggregate;
    /**
     * The FieldURI
     * Meta information extracted from the WSDL
     * - choice: FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPathToUnindexedFieldType|null
     */
    protected ?\StructType\EwsPathToUnindexedFieldType $FieldURI = null;
    /**
     * The IndexedFieldURI
     * Meta information extracted from the WSDL
     * - choice: FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPathToIndexedFieldType|null
     */
    protected ?\StructType\EwsPathToIndexedFieldType $IndexedFieldURI = null;
    /**
     * The ExtendedFieldURI
     * Meta information extracted from the WSDL
     * - choice: FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPathToExtendedFieldType|null
     */
    protected ?\StructType\EwsPathToExtendedFieldType $ExtendedFieldURI = null;
    /**
     * Constructor method for AggregateOnType
     * @uses EwsAggregateOnType::setAggregate()
     * @uses EwsAggregateOnType::setFieldURI()
     * @uses EwsAggregateOnType::setIndexedFieldURI()
     * @uses EwsAggregateOnType::setExtendedFieldURI()
     * @param string $aggregate
     * @param \StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(string $aggregate, ?\StructType\EwsPathToUnindexedFieldType $fieldURI = null, ?\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, ?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setAggregate($aggregate)
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI);
    }
    /**
     * Get Aggregate value
     * @return string
     */
    public function getAggregate(): string
    {
        return $this->Aggregate;
    }
    /**
     * Set Aggregate value
     * @uses \EnumType\EwsAggregateType::valueIsValid()
     * @uses \EnumType\EwsAggregateType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $aggregate
     * @return \StructType\EwsAggregateOnType
     */
    public function setAggregate(string $aggregate): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsAggregateType::valueIsValid($aggregate)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsAggregateType', is_array($aggregate) ? implode(', ', $aggregate) : var_export($aggregate, true), implode(', ', \EnumType\EwsAggregateType::getValidValues())), __LINE__);
        }
        $this->Aggregate = $aggregate;
        
        return $this;
    }
    /**
     * Get FieldURI value
     * @return \StructType\EwsPathToUnindexedFieldType|null
     */
    public function getFieldURI(): ?\StructType\EwsPathToUnindexedFieldType
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
    public function validateFieldURIForChoiceConstraintsFromSetFieldURI($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IndexedFieldURI',
            'ExtendedFieldURI',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FieldURI can\'t be set as the property %s is already set. Only one property must be set among these properties: FieldURI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FieldURI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPathToUnindexedFieldType $fieldURI
     * @return \StructType\EwsAggregateOnType
     */
    public function setFieldURI(?\StructType\EwsPathToUnindexedFieldType $fieldURI = null): self
    {
        // validation for constraint: choice(FieldURI, IndexedFieldURI, ExtendedFieldURI)
        if ('' !== ($fieldURIChoiceErrorMessage = self::validateFieldURIForChoiceConstraintsFromSetFieldURI($fieldURI))) {
            throw new InvalidArgumentException($fieldURIChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsPathToIndexedFieldType|null
     */
    public function getIndexedFieldURI(): ?\StructType\EwsPathToIndexedFieldType
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
    public function validateIndexedFieldURIForChoiceConstraintsFromSetIndexedFieldURI($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FieldURI',
            'ExtendedFieldURI',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property IndexedFieldURI can\'t be set as the property %s is already set. Only one property must be set among these properties: IndexedFieldURI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set IndexedFieldURI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @return \StructType\EwsAggregateOnType
     */
    public function setIndexedFieldURI(?\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null): self
    {
        // validation for constraint: choice(FieldURI, IndexedFieldURI, ExtendedFieldURI)
        if ('' !== ($indexedFieldURIChoiceErrorMessage = self::validateIndexedFieldURIForChoiceConstraintsFromSetIndexedFieldURI($indexedFieldURI))) {
            throw new InvalidArgumentException($indexedFieldURIChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedFieldURI(): ?\StructType\EwsPathToExtendedFieldType
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
    public function validateExtendedFieldURIForChoiceConstraintsFromSetExtendedFieldURI($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FieldURI',
            'IndexedFieldURI',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ExtendedFieldURI can\'t be set as the property %s is already set. Only one property must be set among these properties: ExtendedFieldURI, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ExtendedFieldURI value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     * @return \StructType\EwsAggregateOnType
     */
    public function setExtendedFieldURI(?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null): self
    {
        // validation for constraint: choice(FieldURI, IndexedFieldURI, ExtendedFieldURI)
        if ('' !== ($extendedFieldURIChoiceErrorMessage = self::validateExtendedFieldURIForChoiceConstraintsFromSetExtendedFieldURI($extendedFieldURI))) {
            throw new InvalidArgumentException($extendedFieldURIChoiceErrorMessage, __LINE__);
        }
        if (is_null($extendedFieldURI) || (is_array($extendedFieldURI) && empty($extendedFieldURI))) {
            unset($this->ExtendedFieldURI);
        } else {
            $this->ExtendedFieldURI = $extendedFieldURI;
        }
        
        return $this;
    }
}
