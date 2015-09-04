<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStringArrayAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfStringArrayAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The StringArrayAttributedValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $StringArrayAttributedValue;
    /**
     * Constructor method for ArrayOfStringArrayAttributedValuesType
     * @uses EwsArrayOfStringArrayAttributedValuesType::setStringArrayAttributedValue()
     * @param array $stringArrayAttributedValue
     */
    public function __construct(array $stringArrayAttributedValue = array())
    {
        $this
            ->setStringArrayAttributedValue($stringArrayAttributedValue);
    }
    /**
     * Get StringArrayAttributedValue value
     * @return array
     */
    public function getStringArrayAttributedValue()
    {
        return $this->StringArrayAttributedValue;
    }
    /**
     * Set StringArrayAttributedValue value
     * @param array $stringArrayAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType
     */
    public function setStringArrayAttributedValue(array $stringArrayAttributedValue = array())
    {
        $this->StringArrayAttributedValue = $stringArrayAttributedValue;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StringArrayAttributedValue
     */
    public function getAttributeName()
    {
        return 'StringArrayAttributedValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType
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
