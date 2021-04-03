<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPostalAddressAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPostalAddressAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The PostalAddressAttributedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsPostalAddressAttributedValueType[]
     */
    protected array $PostalAddressAttributedValue = [];
    /**
     * Constructor method for ArrayOfPostalAddressAttributedValuesType
     * @uses EwsArrayOfPostalAddressAttributedValuesType::setPostalAddressAttributedValue()
     * @param \StructType\EwsPostalAddressAttributedValueType[] $postalAddressAttributedValue
     */
    public function __construct(array $postalAddressAttributedValue = [])
    {
        $this
            ->setPostalAddressAttributedValue($postalAddressAttributedValue);
    }
    /**
     * Get PostalAddressAttributedValue value
     * @return \StructType\EwsPostalAddressAttributedValueType[]
     */
    public function getPostalAddressAttributedValue(): array
    {
        return $this->PostalAddressAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setPostalAddressAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostalAddressAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostalAddressAttributedValueForArrayConstraintsFromSetPostalAddressAttributedValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem instanceof \StructType\EwsPostalAddressAttributedValueType) {
                $invalidValues[] = is_object($arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem) ? get_class($arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem), var_export($arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PostalAddressAttributedValue property can only contain items of type \StructType\EwsPostalAddressAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PostalAddressAttributedValue value
     * @throws InvalidArgumentException
     * @param \StructType\EwsPostalAddressAttributedValueType[] $postalAddressAttributedValue
     * @return \ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     */
    public function setPostalAddressAttributedValue(array $postalAddressAttributedValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($postalAddressAttributedValueArrayErrorMessage = self::validatePostalAddressAttributedValueForArrayConstraintsFromSetPostalAddressAttributedValue($postalAddressAttributedValue))) {
            throw new InvalidArgumentException($postalAddressAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->PostalAddressAttributedValue = $postalAddressAttributedValue;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsPostalAddressAttributedValueType|null
     */
    public function current(): ?\StructType\EwsPostalAddressAttributedValueType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsPostalAddressAttributedValueType|null
     */
    public function item($index): ?\StructType\EwsPostalAddressAttributedValueType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsPostalAddressAttributedValueType|null
     */
    public function first(): ?\StructType\EwsPostalAddressAttributedValueType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsPostalAddressAttributedValueType|null
     */
    public function last(): ?\StructType\EwsPostalAddressAttributedValueType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsPostalAddressAttributedValueType|null
     */
    public function offsetGet($offset): ?\StructType\EwsPostalAddressAttributedValueType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsPostalAddressAttributedValueType $item
     * @return \ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     */
    public function add(\StructType\EwsPostalAddressAttributedValueType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PostalAddressAttributedValue
     */
    public function getAttributeName(): string
    {
        return 'PostalAddressAttributedValue';
    }
}
