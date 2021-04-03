<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStringArrayAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfStringArrayAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The StringArrayAttributedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsStringArrayAttributedValueType[]
     */
    protected array $StringArrayAttributedValue = [];
    /**
     * Constructor method for ArrayOfStringArrayAttributedValuesType
     * @uses EwsArrayOfStringArrayAttributedValuesType::setStringArrayAttributedValue()
     * @param \StructType\EwsStringArrayAttributedValueType[] $stringArrayAttributedValue
     */
    public function __construct(array $stringArrayAttributedValue = [])
    {
        $this
            ->setStringArrayAttributedValue($stringArrayAttributedValue);
    }
    /**
     * Get StringArrayAttributedValue value
     * @return \StructType\EwsStringArrayAttributedValueType[]
     */
    public function getStringArrayAttributedValue(): array
    {
        return $this->StringArrayAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setStringArrayAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStringArrayAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringArrayAttributedValueForArrayConstraintsFromSetStringArrayAttributedValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem instanceof \StructType\EwsStringArrayAttributedValueType) {
                $invalidValues[] = is_object($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) ? get_class($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem), var_export($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StringArrayAttributedValue property can only contain items of type \StructType\EwsStringArrayAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set StringArrayAttributedValue value
     * @throws InvalidArgumentException
     * @param \StructType\EwsStringArrayAttributedValueType[] $stringArrayAttributedValue
     * @return \ArrayType\EwsArrayOfStringArrayAttributedValuesType
     */
    public function setStringArrayAttributedValue(array $stringArrayAttributedValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($stringArrayAttributedValueArrayErrorMessage = self::validateStringArrayAttributedValueForArrayConstraintsFromSetStringArrayAttributedValue($stringArrayAttributedValue))) {
            throw new InvalidArgumentException($stringArrayAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->StringArrayAttributedValue = $stringArrayAttributedValue;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsStringArrayAttributedValueType|null
     */
    public function current(): ?\StructType\EwsStringArrayAttributedValueType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsStringArrayAttributedValueType|null
     */
    public function item($index): ?\StructType\EwsStringArrayAttributedValueType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsStringArrayAttributedValueType|null
     */
    public function first(): ?\StructType\EwsStringArrayAttributedValueType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsStringArrayAttributedValueType|null
     */
    public function last(): ?\StructType\EwsStringArrayAttributedValueType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsStringArrayAttributedValueType|null
     */
    public function offsetGet($offset): ?\StructType\EwsStringArrayAttributedValueType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsStringArrayAttributedValueType $item
     * @return \ArrayType\EwsArrayOfStringArrayAttributedValuesType
     */
    public function add(\StructType\EwsStringArrayAttributedValueType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StringArrayAttributedValue
     */
    public function getAttributeName(): string
    {
        return 'StringArrayAttributedValue';
    }
}
