<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfComputedInsightValueProperty ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfComputedInsightValueProperty extends AbstractStructArrayBase
{
    /**
     * The Property
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsComputedInsightValueProperty[]
     */
    protected array $Property = [];
    /**
     * Constructor method for ArrayOfComputedInsightValueProperty
     * @uses EwsArrayOfComputedInsightValueProperty::setProperty()
     * @param \StructType\EwsComputedInsightValueProperty[] $property
     */
    public function __construct(array $property = [])
    {
        $this
            ->setProperty($property);
    }
    /**
     * Get Property value
     * @return \StructType\EwsComputedInsightValueProperty[]
     */
    public function getProperty(): array
    {
        return $this->Property;
    }
    /**
     * This method is responsible for validating the values passed to the setProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertyForArrayConstraintsFromSetProperty(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfComputedInsightValuePropertyPropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfComputedInsightValuePropertyPropertyItem instanceof \StructType\EwsComputedInsightValueProperty) {
                $invalidValues[] = is_object($arrayOfComputedInsightValuePropertyPropertyItem) ? get_class($arrayOfComputedInsightValuePropertyPropertyItem) : sprintf('%s(%s)', gettype($arrayOfComputedInsightValuePropertyPropertyItem), var_export($arrayOfComputedInsightValuePropertyPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Property property can only contain items of type \StructType\EwsComputedInsightValueProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Property value
     * @throws InvalidArgumentException
     * @param \StructType\EwsComputedInsightValueProperty[] $property
     * @return \ArrayType\EwsArrayOfComputedInsightValueProperty
     */
    public function setProperty(array $property = []): self
    {
        // validation for constraint: array
        if ('' !== ($propertyArrayErrorMessage = self::validatePropertyForArrayConstraintsFromSetProperty($property))) {
            throw new InvalidArgumentException($propertyArrayErrorMessage, __LINE__);
        }
        $this->Property = $property;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsComputedInsightValueProperty|null
     */
    public function current(): ?\StructType\EwsComputedInsightValueProperty
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsComputedInsightValueProperty|null
     */
    public function item($index): ?\StructType\EwsComputedInsightValueProperty
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsComputedInsightValueProperty|null
     */
    public function first(): ?\StructType\EwsComputedInsightValueProperty
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsComputedInsightValueProperty|null
     */
    public function last(): ?\StructType\EwsComputedInsightValueProperty
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsComputedInsightValueProperty|null
     */
    public function offsetGet($offset): ?\StructType\EwsComputedInsightValueProperty
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsComputedInsightValueProperty $item
     * @return \ArrayType\EwsArrayOfComputedInsightValueProperty
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsComputedInsightValueProperty) {
            throw new InvalidArgumentException(sprintf('The Property property can only contain items of type \StructType\EwsComputedInsightValueProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Property
     */
    public function getAttributeName(): string
    {
        return 'Property';
    }
}
