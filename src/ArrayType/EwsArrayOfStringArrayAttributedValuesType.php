<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStringArrayAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfStringArrayAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The StringArrayAttributedValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsStringArrayAttributedValueType[]
     */
    public $StringArrayAttributedValue;
    /**
     * Constructor method for ArrayOfStringArrayAttributedValuesType
     * @uses EwsArrayOfStringArrayAttributedValuesType::setStringArrayAttributedValue()
     * @param \Ews\StructType\EwsStringArrayAttributedValueType[]
     * $stringArrayAttributedValue
     */
    public function __construct(array $stringArrayAttributedValue = array())
    {
        $this
            ->setStringArrayAttributedValue($stringArrayAttributedValue);
    }
    /**
     * Get StringArrayAttributedValue value
     * @return \Ews\StructType\EwsStringArrayAttributedValueType[]|null
     */
    public function getStringArrayAttributedValue()
    {
        return $this->StringArrayAttributedValue;
    }
    /**
     * Set StringArrayAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStringArrayAttributedValueType[]
     * $stringArrayAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType
     */
    public function setStringArrayAttributedValue(array $stringArrayAttributedValue = array())
    {
        foreach ($stringArrayAttributedValue as $arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem instanceof \Ews\StructType\EwsStringArrayAttributedValueType) {
                throw new \InvalidArgumentException(sprintf('The StringArrayAttributedValue property can only contain items of \Ews\StructType\EwsStringArrayAttributedValueType, "%s" given', is_object($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) ? get_class($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) : gettype($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem)), __LINE__);
            }
        }
        $this->StringArrayAttributedValue = $stringArrayAttributedValue;
        return $this;
    }
    /**
     * Add item to StringArrayAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStringArrayAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType
     */
    public function addToStringArrayAttributedValue(\Ews\StructType\EwsStringArrayAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsStringArrayAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The StringArrayAttributedValue property can only contain items of \Ews\StructType\EwsStringArrayAttributedValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StringArrayAttributedValue[] = $item;
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
