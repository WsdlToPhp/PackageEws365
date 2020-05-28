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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForArrayConstraintsFromSetAddress(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailAddressesTypeAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressesTypeAddressItem instanceof \Ews\StructType\EwsEmailAddressType) {
                $invalidValues[] = is_object($arrayOfEmailAddressesTypeAddressItem) ? get_class($arrayOfEmailAddressesTypeAddressItem) : sprintf('%s(%s)', gettype($arrayOfEmailAddressesTypeAddressItem), var_export($arrayOfEmailAddressesTypeAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address property can only contain items of type \Ews\StructType\EwsEmailAddressType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Address value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressType[] $address
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressesType
     */
    public function setAddress(array $address = array())
    {
        // validation for constraint: array
        if ('' !== ($addressArrayErrorMessage = self::validateAddressForArrayConstraintsFromSetAddress($address))) {
            throw new \InvalidArgumentException($addressArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Address property can only contain items of type \Ews\StructType\EwsEmailAddressType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
