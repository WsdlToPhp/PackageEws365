<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsComputedInsightValueProperty[]
     */
    public $Property;
    /**
     * Constructor method for ArrayOfComputedInsightValueProperty
     * @uses EwsArrayOfComputedInsightValueProperty::setProperty()
     * @param \Ews\StructType\EwsComputedInsightValueProperty[] $property
     */
    public function __construct(array $property = array())
    {
        $this
            ->setProperty($property);
    }
    /**
     * Get Property value
     * @return \Ews\StructType\EwsComputedInsightValueProperty[]|null
     */
    public function getProperty()
    {
        return $this->Property;
    }
    /**
     * This method is responsible for validating the values passed to the setProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertyForArrayConstraintsFromSetProperty(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfComputedInsightValuePropertyPropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfComputedInsightValuePropertyPropertyItem instanceof \Ews\StructType\EwsComputedInsightValueProperty) {
                $invalidValues[] = is_object($arrayOfComputedInsightValuePropertyPropertyItem) ? get_class($arrayOfComputedInsightValuePropertyPropertyItem) : sprintf('%s(%s)', gettype($arrayOfComputedInsightValuePropertyPropertyItem), var_export($arrayOfComputedInsightValuePropertyPropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Property property can only contain items of type \Ews\StructType\EwsComputedInsightValueProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Property value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsComputedInsightValueProperty[] $property
     * @return \Ews\ArrayType\EwsArrayOfComputedInsightValueProperty
     */
    public function setProperty(array $property = array())
    {
        // validation for constraint: array
        if ('' !== ($propertyArrayErrorMessage = self::validatePropertyForArrayConstraintsFromSetProperty($property))) {
            throw new \InvalidArgumentException($propertyArrayErrorMessage, __LINE__);
        }
        $this->Property = $property;
        return $this;
    }
    /**
     * Add item to Property value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsComputedInsightValueProperty $item
     * @return \Ews\ArrayType\EwsArrayOfComputedInsightValueProperty
     */
    public function addToProperty(\Ews\StructType\EwsComputedInsightValueProperty $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsComputedInsightValueProperty) {
            throw new \InvalidArgumentException(sprintf('The Property property can only contain items of type \Ews\StructType\EwsComputedInsightValueProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Property[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsComputedInsightValueProperty|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsComputedInsightValueProperty|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsComputedInsightValueProperty|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsComputedInsightValueProperty|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsComputedInsightValueProperty|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Property
     */
    public function getAttributeName()
    {
        return 'Property';
    }
}
