<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsPhoneType[]
     */
    protected array $Phone = [];
    /**
     * Constructor method for ArrayOfPhonesType
     * @uses EwsArrayOfPhonesType::setPhone()
     * @param \StructType\EwsPhoneType[] $phone
     */
    public function __construct(array $phone = [])
    {
        $this
            ->setPhone($phone);
    }
    /**
     * Get Phone value
     * @return \StructType\EwsPhoneType[]
     */
    public function getPhone(): array
    {
        return $this->Phone;
    }
    /**
     * This method is responsible for validating the values passed to the setPhone method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhone method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneForArrayConstraintsFromSetPhone(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhonesTypePhoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhonesTypePhoneItem instanceof \StructType\EwsPhoneType) {
                $invalidValues[] = is_object($arrayOfPhonesTypePhoneItem) ? get_class($arrayOfPhonesTypePhoneItem) : sprintf('%s(%s)', gettype($arrayOfPhonesTypePhoneItem), var_export($arrayOfPhonesTypePhoneItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Phone property can only contain items of type \StructType\EwsPhoneType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Phone value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPhoneType[] $phone
     * @return \ArrayType\EwsArrayOfPhonesType
     */
    public function setPhone(array $phone = []): self
    {
        // validation for constraint: array
        if ('' !== ($phoneArrayErrorMessage = self::validatePhoneForArrayConstraintsFromSetPhone($phone))) {
            throw new InvalidArgumentException($phoneArrayErrorMessage, __LINE__);
        }
        $this->Phone = $phone;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPhoneType|null
     */
    public function current(): ?\StructType\EwsPhoneType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPhoneType|null
     */
    public function item($index): ?\StructType\EwsPhoneType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPhoneType|null
     */
    public function first(): ?\StructType\EwsPhoneType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPhoneType|null
     */
    public function last(): ?\StructType\EwsPhoneType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPhoneType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPhoneType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPhoneType $item
     * @return \ArrayType\EwsArrayOfPhonesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsPhoneType) {
            throw new InvalidArgumentException(sprintf('The Phone property can only contain items of type \StructType\EwsPhoneType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Phone
     */
    public function getAttributeName(): string
    {
        return 'Phone';
    }
}
