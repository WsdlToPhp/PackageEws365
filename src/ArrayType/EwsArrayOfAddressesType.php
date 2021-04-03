<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddressesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAddressesType extends AbstractStructArrayBase
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $Address = [];
    /**
     * Constructor method for ArrayOfAddressesType
     * @uses EwsArrayOfAddressesType::setAddress()
     * @param string[] $address
     */
    public function __construct(array $address = [])
    {
        $this
            ->setAddress($address);
    }
    /**
     * Get Address value
     * @return string[]
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
        foreach ($values as $arrayOfAddressesTypeAddressItem) {
            // validation for constraint: itemType
            if (!is_string($arrayOfAddressesTypeAddressItem)) {
                $invalidValues[] = is_object($arrayOfAddressesTypeAddressItem) ? get_class($arrayOfAddressesTypeAddressItem) : sprintf('%s(%s)', gettype($arrayOfAddressesTypeAddressItem), var_export($arrayOfAddressesTypeAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Address property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Address value
     * @throws InvalidArgumentException
     * @param string[] $address
     * @return \ArrayType\EwsArrayOfAddressesType
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
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
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
