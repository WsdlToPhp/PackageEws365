<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsFieldOrderType[]
     */
    public $FieldOrder;
    /**
     * Constructor method for NonEmptyArrayOfFieldOrdersType
     * @uses EwsNonEmptyArrayOfFieldOrdersType::setFieldOrder()
     * @param \Ews\StructType\EwsFieldOrderType[] $fieldOrder
     */
    public function __construct(array $fieldOrder = array())
    {
        $this
            ->setFieldOrder($fieldOrder);
    }
    /**
     * Get FieldOrder value
     * @return \Ews\StructType\EwsFieldOrderType[]|null
     */
    public function getFieldOrder()
    {
        return $this->FieldOrder;
    }
    /**
     * This method is responsible for validating the values passed to the setFieldOrder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFieldOrder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldOrderForArrayConstraintsFromSetFieldOrder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfFieldOrdersTypeFieldOrderItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfFieldOrdersTypeFieldOrderItem instanceof \Ews\StructType\EwsFieldOrderType) {
                $invalidValues[] = is_object($nonEmptyArrayOfFieldOrdersTypeFieldOrderItem) ? get_class($nonEmptyArrayOfFieldOrdersTypeFieldOrderItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfFieldOrdersTypeFieldOrderItem), var_export($nonEmptyArrayOfFieldOrdersTypeFieldOrderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FieldOrder property can only contain items of type \Ews\StructType\EwsFieldOrderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FieldOrder value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFieldOrderType[] $fieldOrder
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public function setFieldOrder(array $fieldOrder = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldOrderArrayErrorMessage = self::validateFieldOrderForArrayConstraintsFromSetFieldOrder($fieldOrder))) {
            throw new \InvalidArgumentException($fieldOrderArrayErrorMessage, __LINE__);
        }
        $this->FieldOrder = $fieldOrder;
        return $this;
    }
    /**
     * Add item to FieldOrder value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFieldOrderType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfFieldOrdersType
     */
    public function addToFieldOrder(\Ews\StructType\EwsFieldOrderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsFieldOrderType) {
            throw new \InvalidArgumentException(sprintf('The FieldOrder property can only contain items of type \Ews\StructType\EwsFieldOrderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FieldOrder[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFieldOrderType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FieldOrder
     */
    public function getAttributeName()
    {
        return 'FieldOrder';
    }
}
