<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfExtendedPropertyType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfExtendedPropertyType extends AbstractStructArrayBase
{
    /**
     * The ExtendedProperty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - documentation: Represents an extended property instance (both its path identifier along with its associated value).
     * @var array
     */
    public $ExtendedProperty;
    /**
     * Constructor method for NonEmptyArrayOfExtendedPropertyType
     * @uses EwsNonEmptyArrayOfExtendedPropertyType::setExtendedProperty()
     * @param array $extendedProperty
     */
    public function __construct(array $extendedProperty = array())
    {
        $this
            ->setExtendedProperty($extendedProperty);
    }
    /**
     * Get ExtendedProperty value
     * @return array
     */
    public function getExtendedProperty()
    {
        return $this->ExtendedProperty;
    }
    /**
     * Set ExtendedProperty value
     * @param array $extendedProperty
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfExtendedPropertyType
     */
    public function setExtendedProperty(array $extendedProperty = array())
    {
        $this->ExtendedProperty = $extendedProperty;
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
