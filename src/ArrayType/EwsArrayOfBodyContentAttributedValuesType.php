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
     * @var \Ews\StructType\EwsBodyContentAttributedValueType[]
     */
    public $BodyContentAttributedValue;
    /**
     * Constructor method for ArrayOfBodyContentAttributedValuesType
     * @uses EwsArrayOfBodyContentAttributedValuesType::setBodyContentAttributedValue()
     * @param \Ews\StructType\EwsBodyContentAttributedValueType[] $bodyContentAttributedValue
     */
    public function __construct(array $bodyContentAttributedValue = array())
    {
        $this
            ->setBodyContentAttributedValue($bodyContentAttributedValue);
    }
    /**
     * Get BodyContentAttributedValue value
     * @return \Ews\StructType\EwsBodyContentAttributedValueType[]|null
     */
    public function getBodyContentAttributedValue()
    {
        return $this->BodyContentAttributedValue;
    }
    /**
     * Set BodyContentAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBodyContentAttributedValueType[] $bodyContentAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType
     */
    public function setBodyContentAttributedValue(array $bodyContentAttributedValue = array())
    {
        foreach ($bodyContentAttributedValue as $arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem instanceof \Ews\StructType\EwsBodyContentAttributedValueType) {
                throw new \InvalidArgumentException(sprintf('The BodyContentAttributedValue property can only contain items of \Ews\StructType\EwsBodyContentAttributedValueType, "%s" given', is_object($arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem) ? get_class($arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem) : gettype($arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem)), __LINE__);
            }
        }
        $this->BodyContentAttributedValue = $bodyContentAttributedValue;
        return $this;
    }
    /**
     * Add item to BodyContentAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBodyContentAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfBodyContentAttributedValuesType
     */
    public function addToBodyContentAttributedValue(\Ews\StructType\EwsBodyContentAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsBodyContentAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The BodyContentAttributedValue property can only contain items of \Ews\StructType\EwsBodyContentAttributedValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BodyContentAttributedValue[] = $item;
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
