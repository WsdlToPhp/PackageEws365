<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfExtendedFieldURIs ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfExtendedFieldURIs extends AbstractStructArrayBase
{
    /**
     * The ExtendedProperty
     * Meta information extracted from the WSDL
     * - choice: ExtendedProperty
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsPathToExtendedFieldType|null
     */
    protected ?\StructType\EwsPathToExtendedFieldType $ExtendedProperty = null;
    /**
     * Constructor method for NonEmptyArrayOfExtendedFieldURIs
     * @uses EwsNonEmptyArrayOfExtendedFieldURIs::setExtendedProperty()
     * @param \StructType\EwsPathToExtendedFieldType $extendedProperty
     */
    public function __construct(?\StructType\EwsPathToExtendedFieldType $extendedProperty = null)
    {
        $this
            ->setExtendedProperty($extendedProperty);
    }
    /**
     * Get ExtendedProperty value
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function getExtendedProperty(): ?\StructType\EwsPathToExtendedFieldType
    {
        return isset($this->ExtendedProperty) ? $this->ExtendedProperty : null;
    }
    /**
     * This method is responsible for validating the value passed to the setExtendedProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedProperty method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateExtendedPropertyForChoiceConstraintsFromSetExtendedProperty($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ExtendedProperty can\'t be set as the property %s is already set. Only one property must be set among these properties: ExtendedProperty, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ExtendedProperty value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsPathToExtendedFieldType $extendedProperty
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
     */
    public function setExtendedProperty(?\StructType\EwsPathToExtendedFieldType $extendedProperty = null): self
    {
        // validation for constraint: choice(ExtendedProperty)
        if ('' !== ($extendedPropertyChoiceErrorMessage = self::validateExtendedPropertyForChoiceConstraintsFromSetExtendedProperty($extendedProperty))) {
            throw new InvalidArgumentException($extendedPropertyChoiceErrorMessage, __LINE__);
        }
        if (is_null($extendedProperty) || (is_array($extendedProperty) && empty($extendedProperty))) {
            unset($this->ExtendedProperty);
        } else {
            $this->ExtendedProperty = $extendedProperty;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function current(): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function item($index): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function first(): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function last(): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPathToExtendedFieldType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPathToExtendedFieldType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPathToExtendedFieldType $item
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedFieldURIs
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsPathToExtendedFieldType) {
            throw new InvalidArgumentException(sprintf('The ExtendedProperty property can only contain items of type \StructType\EwsPathToExtendedFieldType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedProperty
     */
    public function getAttributeName(): string
    {
        return 'ExtendedProperty';
    }
}
