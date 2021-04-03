<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfExtendedPropertyType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfExtendedPropertyType extends AbstractStructArrayBase
{
    /**
     * The ExtendedProperty
     * Meta information extracted from the WSDL
     * - choice: ExtendedProperty
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: unbounded
     * @var \StructType\EwsExtendedPropertyType[]
     */
    protected array $ExtendedProperty = [];
    /**
     * Constructor method for NonEmptyArrayOfExtendedPropertyType
     * @uses EwsNonEmptyArrayOfExtendedPropertyType::setExtendedProperty()
     * @param \StructType\EwsExtendedPropertyType[] $extendedProperty
     */
    public function __construct(array $extendedProperty = [])
    {
        $this
            ->setExtendedProperty($extendedProperty);
    }
    /**
     * Get ExtendedProperty value
     * @return \StructType\EwsExtendedPropertyType[]
     */
    public function getExtendedProperty(): array
    {
        return isset($this->ExtendedProperty) ? $this->ExtendedProperty : null;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem instanceof \StructType\EwsExtendedPropertyType) {
                $invalidValues[] = is_object($nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem) ? get_class($nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem), var_export($nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtendedProperty property can only contain items of type \StructType\EwsExtendedPropertyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
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
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedPropertyType[] $extendedProperty
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
     */
    public function setExtendedProperty(array $extendedProperty = []): self
    {
        // validation for constraint: array
        if ('' !== ($extendedPropertyArrayErrorMessage = self::validateExtendedPropertyForArrayConstraintsFromSetExtendedProperty($extendedProperty))) {
            throw new InvalidArgumentException($extendedPropertyArrayErrorMessage, __LINE__);
        }
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
     * @return \StructType\EwsExtendedPropertyType|null
     */
    public function current(): ?\StructType\EwsExtendedPropertyType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsExtendedPropertyType|null
     */
    public function item($index): ?\StructType\EwsExtendedPropertyType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsExtendedPropertyType|null
     */
    public function first(): ?\StructType\EwsExtendedPropertyType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsExtendedPropertyType|null
     */
    public function last(): ?\StructType\EwsExtendedPropertyType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsExtendedPropertyType|null
     */
    public function offsetGet($offset): ?\StructType\EwsExtendedPropertyType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedPropertyType $item
     * @return \ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
     */
    public function add(\StructType\EwsExtendedPropertyType $item): self
    {
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
