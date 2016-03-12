<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneNumberAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPhoneNumberAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The PhoneNumberAttributedValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhoneNumberAttributedValueType[]
     */
    public $PhoneNumberAttributedValue;
    /**
     * Constructor method for ArrayOfPhoneNumberAttributedValuesType
     * @uses EwsArrayOfPhoneNumberAttributedValuesType::setPhoneNumberAttributedValue()
     * @param \Ews\StructType\EwsPhoneNumberAttributedValueType[]
     * $phoneNumberAttributedValue
     */
    public function __construct(array $phoneNumberAttributedValue = array())
    {
        $this
            ->setPhoneNumberAttributedValue($phoneNumberAttributedValue);
    }
    /**
     * Get PhoneNumberAttributedValue value
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType[]|null
     */
    public function getPhoneNumberAttributedValue()
    {
        return $this->PhoneNumberAttributedValue;
    }
    /**
     * Set PhoneNumberAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneNumberAttributedValueType[]
     * $phoneNumberAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public function setPhoneNumberAttributedValue(array $phoneNumberAttributedValue = array())
    {
        foreach ($phoneNumberAttributedValue as $arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem instanceof \Ews\StructType\EwsPhoneNumberAttributedValueType) {
                throw new \InvalidArgumentException(sprintf('The PhoneNumberAttributedValue property can only contain items of \Ews\StructType\EwsPhoneNumberAttributedValueType, "%s" given', is_object($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) ? get_class($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) : gettype($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem)), __LINE__);
            }
        }
        $this->PhoneNumberAttributedValue = $phoneNumberAttributedValue;
        return $this;
    }
    /**
     * Add item to PhoneNumberAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneNumberAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public function addToPhoneNumberAttributedValue(\Ews\StructType\EwsPhoneNumberAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPhoneNumberAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The PhoneNumberAttributedValue property can only contain items of \Ews\StructType\EwsPhoneNumberAttributedValueType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PhoneNumberAttributedValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhoneNumberAttributedValue
     */
    public function getAttributeName()
    {
        return 'PhoneNumberAttributedValue';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
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
