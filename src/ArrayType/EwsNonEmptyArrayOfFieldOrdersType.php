<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfFieldOrdersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfFieldOrdersType extends AbstractStructArrayBase
{
    /**
     * The FieldOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \StructType\EwsFieldOrderType[]
     */
    protected array $FieldOrder = [];
    /**
     * Constructor method for NonEmptyArrayOfFieldOrdersType
     * @uses EwsNonEmptyArrayOfFieldOrdersType::setFieldOrder()
     * @param \StructType\EwsFieldOrderType[] $fieldOrder
     */
    public function __construct(array $fieldOrder = [])
    {
        $this
            ->setFieldOrder($fieldOrder);
    }
    /**
     * Get FieldOrder value
     * @return \StructType\EwsFieldOrderType[]
     */
    public function getFieldOrder(): array
    {
        return $this->FieldOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setFieldOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFieldOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldOrderForArrayConstraintsFromSetFieldOrder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfFieldOrdersTypeFieldOrderItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfFieldOrdersTypeFieldOrderItem instanceof \StructType\EwsFieldOrderType) {
                $invalidValues[] = is_object($nonEmptyArrayOfFieldOrdersTypeFieldOrderItem) ? get_class($nonEmptyArrayOfFieldOrdersTypeFieldOrderItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfFieldOrdersTypeFieldOrderItem), var_export($nonEmptyArrayOfFieldOrdersTypeFieldOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FieldOrder property can only contain items of type \StructType\EwsFieldOrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FieldOrder value
     * @throws InvalidArgumentException
     * @param \StructType\EwsFieldOrderType[] $fieldOrder
     * @return \ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public function setFieldOrder(array $fieldOrder = []): self
    {
        // validation for constraint: array
        if ('' !== ($fieldOrderArrayErrorMessage = self::validateFieldOrderForArrayConstraintsFromSetFieldOrder($fieldOrder))) {
            throw new InvalidArgumentException($fieldOrderArrayErrorMessage, __LINE__);
        }
        $this->FieldOrder = $fieldOrder;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsFieldOrderType|null
     */
    public function current(): ?\StructType\EwsFieldOrderType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsFieldOrderType|null
     */
    public function item($index): ?\StructType\EwsFieldOrderType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsFieldOrderType|null
     */
    public function first(): ?\StructType\EwsFieldOrderType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsFieldOrderType|null
     */
    public function last(): ?\StructType\EwsFieldOrderType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsFieldOrderType|null
     */
    public function offsetGet($offset): ?\StructType\EwsFieldOrderType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsFieldOrderType $item
     * @return \ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsFieldOrderType) {
            throw new InvalidArgumentException(sprintf('The FieldOrder property can only contain items of type \StructType\EwsFieldOrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FieldOrder
     */
    public function getAttributeName(): string
    {
        return 'FieldOrder';
    }
}
