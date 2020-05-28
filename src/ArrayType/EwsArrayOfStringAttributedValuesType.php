<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsStringAttributedValueType[]
     */
    public $StringAttributedValue;
    /**
     * Constructor method for ArrayOfStringAttributedValuesType
     * @uses EwsArrayOfStringAttributedValuesType::setStringAttributedValue()
     * @param \Ews\StructType\EwsStringAttributedValueType[] $stringAttributedValue
     */
    public function __construct(array $stringAttributedValue = array())
    {
        $this
            ->setStringAttributedValue($stringAttributedValue);
    }
    /**
     * Get StringAttributedValue value
     * @return \Ews\StructType\EwsStringAttributedValueType[]|null
     */
    public function getStringAttributedValue()
    {
        return $this->StringAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setStringAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStringAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringAttributedValueForArrayConstraintsFromSetStringAttributedValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStringAttributedValuesTypeStringAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfStringAttributedValuesTypeStringAttributedValueItem instanceof \Ews\StructType\EwsStringAttributedValueType) {
                $invalidValues[] = is_object($arrayOfStringAttributedValuesTypeStringAttributedValueItem) ? get_class($arrayOfStringAttributedValuesTypeStringAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfStringAttributedValuesTypeStringAttributedValueItem), var_export($arrayOfStringAttributedValuesTypeStringAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StringAttributedValue property can only contain items of type \Ews\StructType\EwsStringAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set StringAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStringAttributedValueType[] $stringAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public function setStringAttributedValue(array $stringAttributedValue = array())
    {
        // validation for constraint: array
        if ('' !== ($stringAttributedValueArrayErrorMessage = self::validateStringAttributedValueForArrayConstraintsFromSetStringAttributedValue($stringAttributedValue))) {
            throw new \InvalidArgumentException($stringAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->StringAttributedValue = $stringAttributedValue;
        return $this;
    }
    /**
     * Add item to StringAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStringAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfStringAttributedValuesType
     */
    public function addToStringAttributedValue(\Ews\StructType\EwsStringAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsStringAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The StringAttributedValue property can only contain items of type \Ews\StructType\EwsStringAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->StringAttributedValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsStringAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StringAttributedValue
     */
    public function getAttributeName()
    {
        return 'StringAttributedValue';
    }
}
