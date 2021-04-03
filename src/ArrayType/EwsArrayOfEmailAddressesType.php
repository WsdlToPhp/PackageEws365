<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsEmailAddressType[]
     */
    protected array $Address = [];
    /**
     * Constructor method for ArrayOfEmailAddressesType
     * @uses EwsArrayOfEmailAddressesType::setAddress()
     * @param \StructType\EwsEmailAddressType[] $address
     */
    public function __construct(array $address = [])
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return \StructType\EwsEmailAddressType[]
     */
    public function getAddress(): array
    {
        return $this->Address;
    }
    /**
     * This method is responsible for validating the values passed to the setAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddressForArrayConstraintsFromSetAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailAddressesTypeAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressesTypeAddressItem instanceof \StructType\EwsEmailAddressType) {
                $invalidValues[] = is_object($arrayOfEmailAddressesTypeAddressItem) ? get_class($arrayOfEmailAddressesTypeAddressItem) : sprintf('%s(%s)', gettype($arrayOfEmailAddressesTypeAddressItem), var_export($arrayOfEmailAddressesTypeAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address property can only contain items of type \StructType\EwsEmailAddressType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Address value
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressType[] $address
     * @return \ArrayType\EwsArrayOfEmailAddressesType
     */
    public function setAddress(array $address = []): self
    {
        // validation for constraint: array
        if ('' !== ($addressArrayErrorMessage = self::validateAddressForArrayConstraintsFromSetAddress($address))) {
            throw new InvalidArgumentException($addressArrayErrorMessage, __LINE__);
        }
        $this->Address = $address;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsEmailAddressType|null
     */
    public function current(): ?\StructType\EwsEmailAddressType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsEmailAddressType|null
     */
    public function item($index): ?\StructType\EwsEmailAddressType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsEmailAddressType|null
     */
    public function first(): ?\StructType\EwsEmailAddressType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsEmailAddressType|null
     */
    public function last(): ?\StructType\EwsEmailAddressType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsEmailAddressType|null
     */
    public function offsetGet($offset): ?\StructType\EwsEmailAddressType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressType $item
     * @return \ArrayType\EwsArrayOfEmailAddressesType
     */
    public function add(\StructType\EwsEmailAddressType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Address
     */
    public function getAttributeName(): string
    {
        return 'Address';
    }
}
