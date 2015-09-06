<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtendedPropertyAttributedValueType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfExtendedPropertyAttributedValueType extends AbstractStructArrayBase
{
    /**
     * The ExtendedPropertyAttributedValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $ExtendedPropertyAttributedValue;
    /**
     * Constructor method for ArrayOfExtendedPropertyAttributedValueType
     * @uses
     * EwsArrayOfExtendedPropertyAttributedValueType::setExtendedPropertyAttributedValu
     * e()
     * @param array $extendedPropertyAttributedValue
     */
    public function __construct(array $extendedPropertyAttributedValue = array())
    {
        $this
            ->setExtendedPropertyAttributedValue($extendedPropertyAttributedValue);
    }
    /**
     * Get ExtendedPropertyAttributedValue value
     * @return array
     */
    public function getExtendedPropertyAttributedValue()
    {
        return $this->ExtendedPropertyAttributedValue;
    }
    /**
     * Set ExtendedPropertyAttributedValue value
     * @param array $extendedPropertyAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
     */
    public function setExtendedPropertyAttributedValue(array $extendedPropertyAttributedValue = array())
    {
        $this->ExtendedPropertyAttributedValue = $extendedPropertyAttributedValue;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedPropertyAttributedValue
     */
    public function getAttributeName()
    {
        return 'ExtendedPropertyAttributedValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
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
