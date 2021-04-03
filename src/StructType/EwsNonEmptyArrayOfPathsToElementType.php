<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfPathsToElementType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfPathsToElementType extends AbstractStructBase
{
    /**
     * The FieldURI
     * Meta information extracted from the WSDL
     * - choice: FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPathToUnindexedFieldType|null
     */
    protected ?\StructType\EwsPathToUnindexedFieldType $FieldURI = null;
    /**
     * The IndexedFieldURI
     * Meta information extracted from the WSDL
     * - choice: FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPathToIndexedFieldType|null
     */
    protected ?\StructType\EwsPathToIndexedFieldType $IndexedFieldURI = null;
    /**
     * The ExtendedFieldURI
     * Meta information extracted from the WSDL
     * - choice: FieldURI | IndexedFieldURI | ExtendedFieldURI
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPathToExtendedFieldType|null
     */
    protected ?\StructType\EwsPathToExtendedFieldType $ExtendedFieldURI = null;
    /**
     * Constructor method for NonEmptyArrayOfPathsToElementType
     * @uses EwsNonEmptyArrayOfPathsToElementType::setFieldURI()
     * @uses EwsNonEmptyArrayOfPathsToElementType::setIndexedFieldURI()
     * @uses EwsNonEmptyArrayOfPathsToElementType::setExtendedFieldURI()
     * @param \StructType\EwsPathToUnindexedFieldType $fieldURI
     * @param \StructType\EwsPathToIndexedFieldType $indexedFieldURI
     * @param \StructType\EwsPathToExtendedFieldType $extendedFieldURI
     */
    public function __construct(?\StructType\EwsPathToUnindexedFieldType $fieldURI = null, ?\StructType\EwsPathToIndexedFieldType $indexedFieldURI = null, ?\StructType\EwsPathToExtendedFieldType $extendedFieldURI = null)
    {
        $this
            ->setFieldURI($fieldURI)
            ->setIndexedFieldURI($indexedFieldURI)
            ->setExtendedFieldURI($extendedFieldURI);
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
     * @return \StructType\EwsNonEmptyArrayOfPathsToElementType
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
     * @return \StructType\EwsNonEmptyArrayOfPathsToElementType
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
     * @return \StructType\EwsNonEmptyArrayOfPathsToElementType
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
