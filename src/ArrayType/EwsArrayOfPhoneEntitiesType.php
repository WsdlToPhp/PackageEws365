<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneEntitiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPhoneEntitiesType extends AbstractStructArrayBase
{
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsPhoneEntityType[]
     */
    protected array $Phone = [];
    /**
     * Constructor method for ArrayOfPhoneEntitiesType
     * @uses EwsArrayOfPhoneEntitiesType::setPhone()
     * @param \StructType\EwsPhoneEntityType[] $phone
     */
    public function __construct(array $phone = [])
    {
        $this
            ->setPhone($phone);
    }
    /**
     * Get Phone value
     * @return \StructType\EwsPhoneEntityType[]
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
        foreach ($values as $arrayOfPhoneEntitiesTypePhoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneEntitiesTypePhoneItem instanceof \StructType\EwsPhoneEntityType) {
                $invalidValues[] = is_object($arrayOfPhoneEntitiesTypePhoneItem) ? get_class($arrayOfPhoneEntitiesTypePhoneItem) : sprintf('%s(%s)', gettype($arrayOfPhoneEntitiesTypePhoneItem), var_export($arrayOfPhoneEntitiesTypePhoneItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Phone property can only contain items of type \StructType\EwsPhoneEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Phone value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPhoneEntityType[] $phone
     * @return \ArrayType\EwsArrayOfPhoneEntitiesType
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
     * @return \StructType\EwsPhoneEntityType|null
     */
    public function current(): ?\StructType\EwsPhoneEntityType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPhoneEntityType|null
     */
    public function item($index): ?\StructType\EwsPhoneEntityType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPhoneEntityType|null
     */
    public function first(): ?\StructType\EwsPhoneEntityType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPhoneEntityType|null
     */
    public function last(): ?\StructType\EwsPhoneEntityType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPhoneEntityType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPhoneEntityType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPhoneEntityType $item
     * @return \ArrayType\EwsArrayOfPhoneEntitiesType
     */
    public function add(\StructType\EwsPhoneEntityType $item): self
    {
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
