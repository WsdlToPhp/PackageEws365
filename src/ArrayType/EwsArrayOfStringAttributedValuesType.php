<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStringAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfStringAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The StringAttributedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsStringAttributedValueType[]
     */
    protected array $StringAttributedValue = [];
    /**
     * Constructor method for ArrayOfStringAttributedValuesType
     * @uses EwsArrayOfStringAttributedValuesType::setStringAttributedValue()
     * @param \StructType\EwsStringAttributedValueType[] $stringAttributedValue
     */
    public function __construct(array $stringAttributedValue = [])
    {
        $this
            ->setStringAttributedValue($stringAttributedValue);
    }
    /**
     * Get StringAttributedValue value
     * @return \StructType\EwsStringAttributedValueType[]
     */
    public function getStringAttributedValue(): array
    {
        return $this->StringAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setStringAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStringAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringAttributedValueForArrayConstraintsFromSetStringAttributedValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStringAttributedValuesTypeStringAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfStringAttributedValuesTypeStringAttributedValueItem instanceof \StructType\EwsStringAttributedValueType) {
                $invalidValues[] = is_object($arrayOfStringAttributedValuesTypeStringAttributedValueItem) ? get_class($arrayOfStringAttributedValuesTypeStringAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfStringAttributedValuesTypeStringAttributedValueItem), var_export($arrayOfStringAttributedValuesTypeStringAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StringAttributedValue property can only contain items of type \StructType\EwsStringAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set StringAttributedValue value
     * @throws InvalidArgumentException
     * @param \StructType\EwsStringAttributedValueType[] $stringAttributedValue
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public function setStringAttributedValue(array $stringAttributedValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($stringAttributedValueArrayErrorMessage = self::validateStringAttributedValueForArrayConstraintsFromSetStringAttributedValue($stringAttributedValue))) {
            throw new InvalidArgumentException($stringAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->StringAttributedValue = $stringAttributedValue;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsStringAttributedValueType|null
     */
    public function current(): ?\StructType\EwsStringAttributedValueType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsStringAttributedValueType|null
     */
    public function item($index): ?\StructType\EwsStringAttributedValueType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsStringAttributedValueType|null
     */
    public function first(): ?\StructType\EwsStringAttributedValueType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsStringAttributedValueType|null
     */
    public function last(): ?\StructType\EwsStringAttributedValueType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsStringAttributedValueType|null
     */
    public function offsetGet($offset): ?\StructType\EwsStringAttributedValueType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsStringAttributedValueType $item
     * @return \ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public function add(\StructType\EwsStringAttributedValueType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StringAttributedValue
     */
    public function getAttributeName(): string
    {
        return 'StringAttributedValue';
    }
}
