<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExtendedPropertyAttributedValueType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfExtendedPropertyAttributedValueType extends AbstractStructArrayBase
{
    /**
     * The ExtendedPropertyAttributedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsExtendedPropertyAttributedValueType[]
     */
    protected array $ExtendedPropertyAttributedValue = [];
    /**
     * Constructor method for ArrayOfExtendedPropertyAttributedValueType
     * @uses EwsArrayOfExtendedPropertyAttributedValueType::setExtendedPropertyAttributedValue()
     * @param \StructType\EwsExtendedPropertyAttributedValueType[] $extendedPropertyAttributedValue
     */
    public function __construct(array $extendedPropertyAttributedValue = [])
    {
        $this
            ->setExtendedPropertyAttributedValue($extendedPropertyAttributedValue);
    }
    /**
     * Get ExtendedPropertyAttributedValue value
     * @return \StructType\EwsExtendedPropertyAttributedValueType[]
     */
    public function getExtendedPropertyAttributedValue(): array
    {
        return $this->ExtendedPropertyAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedPropertyAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedPropertyAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedPropertyAttributedValueForArrayConstraintsFromSetExtendedPropertyAttributedValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem instanceof \StructType\EwsExtendedPropertyAttributedValueType) {
                $invalidValues[] = is_object($arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem) ? get_class($arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem), var_export($arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtendedPropertyAttributedValue property can only contain items of type \StructType\EwsExtendedPropertyAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExtendedPropertyAttributedValue value
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedPropertyAttributedValueType[] $extendedPropertyAttributedValue
     * @return \ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
     */
    public function setExtendedPropertyAttributedValue(array $extendedPropertyAttributedValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($extendedPropertyAttributedValueArrayErrorMessage = self::validateExtendedPropertyAttributedValueForArrayConstraintsFromSetExtendedPropertyAttributedValue($extendedPropertyAttributedValue))) {
            throw new InvalidArgumentException($extendedPropertyAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->ExtendedPropertyAttributedValue = $extendedPropertyAttributedValue;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function current(): ?\StructType\EwsExtendedPropertyAttributedValueType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function item($index): ?\StructType\EwsExtendedPropertyAttributedValueType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function first(): ?\StructType\EwsExtendedPropertyAttributedValueType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function last(): ?\StructType\EwsExtendedPropertyAttributedValueType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function offsetGet($offset): ?\StructType\EwsExtendedPropertyAttributedValueType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsExtendedPropertyAttributedValueType $item
     * @return \ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsExtendedPropertyAttributedValueType) {
            throw new InvalidArgumentException(sprintf('The ExtendedPropertyAttributedValue property can only contain items of type \StructType\EwsExtendedPropertyAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedPropertyAttributedValue
     */
    public function getAttributeName(): string
    {
        return 'ExtendedPropertyAttributedValue';
    }
}
