<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhonesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPhonesType extends AbstractStructArrayBase
{
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhoneType[]
     */
    public $Phone;
    /**
     * Constructor method for ArrayOfPhonesType
     * @uses EwsArrayOfPhonesType::setPhone()
     * @param \Ews\StructType\EwsPhoneType[] $phone
     */
    public function __construct(array $phone = array())
    {
        $this
            ->setPhone($phone);
    }
    /**
     * Get Phone value
     * @return \Ews\StructType\EwsPhoneType[]|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneType[] $phone
     * @return \Ews\ArrayType\EwsArrayOfPhonesType
     */
    public function setPhone(array $phone = array())
    {
        foreach ($phone as $arrayOfPhonesTypePhoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhonesTypePhoneItem instanceof \Ews\StructType\EwsPhoneType) {
                throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \Ews\StructType\EwsPhoneType, "%s" given', is_object($arrayOfPhonesTypePhoneItem) ? get_class($arrayOfPhonesTypePhoneItem) : gettype($arrayOfPhonesTypePhoneItem)), __LINE__);
            }
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Add item to Phone value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneType $item
     * @return \Ews\ArrayType\EwsArrayOfPhonesType
     */
    public function addToPhone(\Ews\StructType\EwsPhoneType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPhoneType) {
            throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of \Ews\StructType\EwsPhoneType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Phone[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPhoneType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPhoneType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPhoneType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPhoneType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPhoneType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Phone
     */
    public function getAttributeName()
    {
        return 'Phone';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfPhonesType
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
