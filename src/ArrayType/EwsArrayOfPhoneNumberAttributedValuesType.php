<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsPhoneNumberAttributedValueType[]
     */
    protected array $PhoneNumberAttributedValue = [];
    /**
     * Constructor method for ArrayOfPhoneNumberAttributedValuesType
     * @uses EwsArrayOfPhoneNumberAttributedValuesType::setPhoneNumberAttributedValue()
     * @param \StructType\EwsPhoneNumberAttributedValueType[] $phoneNumberAttributedValue
     */
    public function __construct(array $phoneNumberAttributedValue = [])
    {
        $this
            ->setPhoneNumberAttributedValue($phoneNumberAttributedValue);
    }
    /**
     * Get PhoneNumberAttributedValue value
     * @return \StructType\EwsPhoneNumberAttributedValueType[]
     */
    public function getPhoneNumberAttributedValue(): array
    {
        return $this->PhoneNumberAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setPhoneNumberAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumberAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberAttributedValueForArrayConstraintsFromSetPhoneNumberAttributedValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem instanceof \StructType\EwsPhoneNumberAttributedValueType) {
                $invalidValues[] = is_object($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) ? get_class($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem), var_export($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumberAttributedValue property can only contain items of type \StructType\EwsPhoneNumberAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneNumberAttributedValue value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPhoneNumberAttributedValueType[] $phoneNumberAttributedValue
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public function setPhoneNumberAttributedValue(array $phoneNumberAttributedValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberAttributedValueArrayErrorMessage = self::validatePhoneNumberAttributedValueForArrayConstraintsFromSetPhoneNumberAttributedValue($phoneNumberAttributedValue))) {
            throw new InvalidArgumentException($phoneNumberAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->PhoneNumberAttributedValue = $phoneNumberAttributedValue;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function current(): ?\StructType\EwsPhoneNumberAttributedValueType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function item($index): ?\StructType\EwsPhoneNumberAttributedValueType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function first(): ?\StructType\EwsPhoneNumberAttributedValueType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function last(): ?\StructType\EwsPhoneNumberAttributedValueType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPhoneNumberAttributedValueType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPhoneNumberAttributedValueType $item
     * @return \ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsPhoneNumberAttributedValueType) {
            throw new InvalidArgumentException(sprintf('The PhoneNumberAttributedValue property can only contain items of type \StructType\EwsPhoneNumberAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhoneNumberAttributedValue
     */
    public function getAttributeName(): string
    {
        return 'PhoneNumberAttributedValue';
    }
}
