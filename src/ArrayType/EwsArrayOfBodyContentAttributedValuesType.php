<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBodyContentAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBodyContentAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The BodyContentAttributedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsBodyContentAttributedValueType[]
     */
    protected array $BodyContentAttributedValue = [];
    /**
     * Constructor method for ArrayOfBodyContentAttributedValuesType
     * @uses EwsArrayOfBodyContentAttributedValuesType::setBodyContentAttributedValue()
     * @param \StructType\EwsBodyContentAttributedValueType[] $bodyContentAttributedValue
     */
    public function __construct(array $bodyContentAttributedValue = [])
    {
        $this
            ->setBodyContentAttributedValue($bodyContentAttributedValue);
    }
    /**
     * Get BodyContentAttributedValue value
     * @return \StructType\EwsBodyContentAttributedValueType[]
     */
    public function getBodyContentAttributedValue(): array
    {
        return $this->BodyContentAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setBodyContentAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBodyContentAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBodyContentAttributedValueForArrayConstraintsFromSetBodyContentAttributedValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem instanceof \StructType\EwsBodyContentAttributedValueType) {
                $invalidValues[] = is_object($arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem) ? get_class($arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem), var_export($arrayOfBodyContentAttributedValuesTypeBodyContentAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BodyContentAttributedValue property can only contain items of type \StructType\EwsBodyContentAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BodyContentAttributedValue value
     * @throws InvalidArgumentException
     * @param \StructType\EwsBodyContentAttributedValueType[] $bodyContentAttributedValue
     * @return \ArrayType\EwsArrayOfBodyContentAttributedValuesType
     */
    public function setBodyContentAttributedValue(array $bodyContentAttributedValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($bodyContentAttributedValueArrayErrorMessage = self::validateBodyContentAttributedValueForArrayConstraintsFromSetBodyContentAttributedValue($bodyContentAttributedValue))) {
            throw new InvalidArgumentException($bodyContentAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->BodyContentAttributedValue = $bodyContentAttributedValue;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsBodyContentAttributedValueType|null
     */
    public function current(): ?\StructType\EwsBodyContentAttributedValueType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsBodyContentAttributedValueType|null
     */
    public function item($index): ?\StructType\EwsBodyContentAttributedValueType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsBodyContentAttributedValueType|null
     */
    public function first(): ?\StructType\EwsBodyContentAttributedValueType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsBodyContentAttributedValueType|null
     */
    public function last(): ?\StructType\EwsBodyContentAttributedValueType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsBodyContentAttributedValueType|null
     */
    public function offsetGet($offset): ?\StructType\EwsBodyContentAttributedValueType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsBodyContentAttributedValueType $item
     * @return \ArrayType\EwsArrayOfBodyContentAttributedValuesType
     */
    public function add(\StructType\EwsBodyContentAttributedValueType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BodyContentAttributedValue
     */
    public function getAttributeName(): string
    {
        return 'BodyContentAttributedValue';
    }
}
