<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStringAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfStringAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The StringAttributedValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $StringAttributedValue;
    /**
     * Constructor method for ArrayOfStringAttributedValuesType
     * @uses EwsArrayOfStringAttributedValuesType::setStringAttributedValue()
     * @param array $stringAttributedValue
     */
    public function __construct(array $stringAttributedValue = array())
    {
        $this
            ->setStringAttributedValue($stringAttributedValue);
    }
    /**
     * Get StringAttributedValue value
     * @return array
     */
    public function getStringAttributedValue()
    {
        return $this->StringAttributedValue;
    }
    /**
     * Set StringAttributedValue value
     * @param array $stringAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public function setStringAttributedValue(array $stringAttributedValue = array())
    {
        $this->StringAttributedValue = $stringAttributedValue;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StringAttributedValue
     */
    public function getAttributeName()
    {
        return 'StringAttributedValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
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
