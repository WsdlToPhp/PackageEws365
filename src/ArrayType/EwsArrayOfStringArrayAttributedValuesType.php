<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsStringArrayAttributedValueType[]
     */
    public $StringArrayAttributedValue;
    /**
     * Constructor method for ArrayOfStringArrayAttributedValuesType
     * @uses EwsArrayOfStringArrayAttributedValuesType::setStringArrayAttributedValue()
     * @param \Ews\StructType\EwsStringArrayAttributedValueType[] $stringArrayAttributedValue
     */
    public function __construct(array $stringArrayAttributedValue = array())
    {
        $this
            ->setStringArrayAttributedValue($stringArrayAttributedValue);
    }
    /**
     * Get StringArrayAttributedValue value
     * @return \Ews\StructType\EwsStringArrayAttributedValueType[]|null
     */
    public function getStringArrayAttributedValue()
    {
        return $this->StringArrayAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setStringArrayAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStringArrayAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStringArrayAttributedValueForArrayConstraintsFromSetStringArrayAttributedValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem instanceof \Ews\StructType\EwsStringArrayAttributedValueType) {
                $invalidValues[] = is_object($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) ? get_class($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem), var_export($arrayOfStringArrayAttributedValuesTypeStringArrayAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The StringArrayAttributedValue property can only contain items of type \Ews\StructType\EwsStringArrayAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set StringArrayAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStringArrayAttributedValueType[] $stringArrayAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType
     */
    public function setStringArrayAttributedValue(array $stringArrayAttributedValue = array())
    {
        // validation for constraint: array
        if ('' !== ($stringArrayAttributedValueArrayErrorMessage = self::validateStringArrayAttributedValueForArrayConstraintsFromSetStringArrayAttributedValue($stringArrayAttributedValue))) {
            throw new \InvalidArgumentException($stringArrayAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->StringArrayAttributedValue = $stringArrayAttributedValue;
        return $this;
    }
    /**
     * Add item to StringArrayAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsStringArrayAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfStringArrayAttributedValuesType
     */
    public function addToStringArrayAttributedValue(\Ews\StructType\EwsStringArrayAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsStringArrayAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The StringArrayAttributedValue property can only contain items of type \Ews\StructType\EwsStringArrayAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->StringArrayAttributedValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsStringArrayAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string StringArrayAttributedValue
     */
    public function getAttributeName()
    {
        return 'StringArrayAttributedValue';
    }
}
