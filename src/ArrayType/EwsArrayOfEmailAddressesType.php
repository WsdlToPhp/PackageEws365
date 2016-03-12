<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailAddressesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEmailAddressesType extends AbstractStructArrayBase
{
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressType[]
     */
    public $Address;
    /**
     * Constructor method for ArrayOfEmailAddressesType
     * @uses EwsArrayOfEmailAddressesType::setAddress()
     * @param \Ews\StructType\EwsEmailAddressType[] $address
     */
    public function __construct(array $address = array())
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return \Ews\StructType\EwsEmailAddressType[]|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressType[] $address
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public function setAddress(array $address = array())
    {
        foreach ($address as $arrayOfEmailAddressesTypeAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressesTypeAddressItem instanceof \Ews\StructType\EwsEmailAddressType) {
                throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Ews\StructType\EwsEmailAddressType, "%s" given', is_object($arrayOfEmailAddressesTypeAddressItem) ? get_class($arrayOfEmailAddressesTypeAddressItem) : gettype($arrayOfEmailAddressesTypeAddressItem)), __LINE__);
            }
        }
        $this->Address = $address;
        return $this;
    }
    /**
     * Add item to Address value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressType $item
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public function addToAddress(\Ews\StructType\EwsEmailAddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsEmailAddressType) {
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of \Ews\StructType\EwsEmailAddressType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Address[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEmailAddressType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Address
     */
    public function getAttributeName()
    {
        return 'Address';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType
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
