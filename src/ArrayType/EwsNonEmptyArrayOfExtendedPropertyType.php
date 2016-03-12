<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsExtendedPropertyType[]
     */
    public $ExtendedProperty;
    /**
     * Constructor method for NonEmptyArrayOfExtendedPropertyType
     * @uses EwsNonEmptyArrayOfExtendedPropertyType::setExtendedProperty()
     * @param \Ews\StructType\EwsExtendedPropertyType[] $extendedProperty
     */
    public function __construct(array $extendedProperty = array())
    {
        $this
            ->setExtendedProperty($extendedProperty);
    }
    /**
     * Get ExtendedProperty value
     * @return \Ews\StructType\EwsExtendedPropertyType[]|null
     */
    public function getExtendedProperty()
    {
        return $this->ExtendedProperty;
    }
    /**
     * Set ExtendedProperty value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedPropertyType[] $extendedProperty
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
     */
    public function setExtendedProperty(array $extendedProperty = array())
    {
        foreach ($extendedProperty as $nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem instanceof \Ews\StructType\EwsExtendedPropertyType) {
                throw new \InvalidArgumentException(sprintf('The ExtendedProperty property can only contain items of \Ews\StructType\EwsExtendedPropertyType, "%s" given', is_object($nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem) ? get_class($nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem) : gettype($nonEmptyArrayOfExtendedPropertyTypeExtendedPropertyItem)), __LINE__);
            }
        }
        $this->ExtendedProperty = $extendedProperty;
        return $this;
    }
    /**
     * Add item to ExtendedProperty value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedPropertyType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
     */
    public function addToExtendedProperty(\Ews\StructType\EwsExtendedPropertyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsExtendedPropertyType) {
            throw new \InvalidArgumentException(sprintf('The ExtendedProperty property can only contain items of \Ews\StructType\EwsExtendedPropertyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ExtendedProperty[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsExtendedPropertyType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsExtendedPropertyType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsExtendedPropertyType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsExtendedPropertyType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsExtendedPropertyType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedProperty
     */
    public function getAttributeName()
    {
        return 'ExtendedProperty';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
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
