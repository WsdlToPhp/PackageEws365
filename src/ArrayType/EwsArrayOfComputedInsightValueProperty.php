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
     * Meta informations extracted from the WSDL
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
     * Set Property value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsComputedInsightValueProperty[] $property
     * @return \Ews\ArrayType\EwsArrayOfComputedInsightValueProperty
     */
    public function setProperty(array $property = array())
    {
        foreach ($property as $arrayOfComputedInsightValuePropertyPropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfComputedInsightValuePropertyPropertyItem instanceof \Ews\StructType\EwsComputedInsightValueProperty) {
                throw new \InvalidArgumentException(sprintf('The Property property can only contain items of \Ews\StructType\EwsComputedInsightValueProperty, "%s" given', is_object($arrayOfComputedInsightValuePropertyPropertyItem) ? get_class($arrayOfComputedInsightValuePropertyPropertyItem) : gettype($arrayOfComputedInsightValuePropertyPropertyItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Property property can only contain items of \Ews\StructType\EwsComputedInsightValueProperty, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfComputedInsightValueProperty
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
