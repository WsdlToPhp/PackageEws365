<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBodyContentAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBodyContentAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The BodyContentAttributedValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $BodyContentAttributedValue;
    /**
     * Constructor method for ArrayOfBodyContentAttributedValuesType
     * @uses EwsArrayOfBodyContentAttributedValuesType::setBodyContentAttributedValue()
     * @param array $bodyContentAttributedValue
     */
    public function __construct(array $bodyContentAttributedValue = array())
    {
        $this
            ->setBodyContentAttributedValue($bodyContentAttributedValue);
    }
    /**
     * Get BodyContentAttributedValue value
     * @return array
     */
    public function getBodyContentAttributedValue()
    {
        return $this->BodyContentAttributedValue;
    }
    /**
     * Set BodyContentAttributedValue value
     * @param array $bodyContentAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType
     */
    public function setBodyContentAttributedValue(array $bodyContentAttributedValue = array())
    {
        $this->BodyContentAttributedValue = $bodyContentAttributedValue;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsBodyContentAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsBodyContentAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsBodyContentAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsBodyContentAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsBodyContentAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BodyContentAttributedValue
     */
    public function getAttributeName()
    {
        return 'BodyContentAttributedValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType
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
