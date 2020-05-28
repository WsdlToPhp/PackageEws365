<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsExtendedPropertyAttributedValueType[]
     */
    public $ExtendedPropertyAttributedValue;
    /**
     * Constructor method for ArrayOfExtendedPropertyAttributedValueType
     * @uses EwsArrayOfExtendedPropertyAttributedValueType::setExtendedPropertyAttributedValue()
     * @param \Ews\StructType\EwsExtendedPropertyAttributedValueType[] $extendedPropertyAttributedValue
     */
    public function __construct(array $extendedPropertyAttributedValue = array())
    {
        $this
            ->setExtendedPropertyAttributedValue($extendedPropertyAttributedValue);
    }
    /**
     * Get ExtendedPropertyAttributedValue value
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType[]|null
     */
    public function getExtendedPropertyAttributedValue()
    {
        return $this->ExtendedPropertyAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setExtendedPropertyAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExtendedPropertyAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExtendedPropertyAttributedValueForArrayConstraintsFromSetExtendedPropertyAttributedValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem instanceof \Ews\StructType\EwsExtendedPropertyAttributedValueType) {
                $invalidValues[] = is_object($arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem) ? get_class($arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem), var_export($arrayOfExtendedPropertyAttributedValueTypeExtendedPropertyAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExtendedPropertyAttributedValue property can only contain items of type \Ews\StructType\EwsExtendedPropertyAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExtendedPropertyAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedPropertyAttributedValueType[] $extendedPropertyAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
     */
    public function setExtendedPropertyAttributedValue(array $extendedPropertyAttributedValue = array())
    {
        // validation for constraint: array
        if ('' !== ($extendedPropertyAttributedValueArrayErrorMessage = self::validateExtendedPropertyAttributedValueForArrayConstraintsFromSetExtendedPropertyAttributedValue($extendedPropertyAttributedValue))) {
            throw new \InvalidArgumentException($extendedPropertyAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->ExtendedPropertyAttributedValue = $extendedPropertyAttributedValue;
        return $this;
    }
    /**
     * Add item to ExtendedPropertyAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsExtendedPropertyAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfExtendedPropertyAttributedValueType
     */
    public function addToExtendedPropertyAttributedValue(\Ews\StructType\EwsExtendedPropertyAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsExtendedPropertyAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The ExtendedPropertyAttributedValue property can only contain items of type \Ews\StructType\EwsExtendedPropertyAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExtendedPropertyAttributedValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsExtendedPropertyAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ExtendedPropertyAttributedValue
     */
    public function getAttributeName()
    {
        return 'ExtendedPropertyAttributedValue';
    }
}
