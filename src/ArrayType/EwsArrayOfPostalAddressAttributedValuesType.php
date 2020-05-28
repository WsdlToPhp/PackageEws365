<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsPostalAddressAttributedValueType[]
     */
    public $PostalAddressAttributedValue;
    /**
     * Constructor method for ArrayOfPostalAddressAttributedValuesType
     * @uses EwsArrayOfPostalAddressAttributedValuesType::setPostalAddressAttributedValue()
     * @param \Ews\StructType\EwsPostalAddressAttributedValueType[] $postalAddressAttributedValue
     */
    public function __construct(array $postalAddressAttributedValue = array())
    {
        $this
            ->setPostalAddressAttributedValue($postalAddressAttributedValue);
    }
    /**
     * Get PostalAddressAttributedValue value
     * @return \Ews\StructType\EwsPostalAddressAttributedValueType[]|null
     */
    public function getPostalAddressAttributedValue()
    {
        return $this->PostalAddressAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setPostalAddressAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPostalAddressAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePostalAddressAttributedValueForArrayConstraintsFromSetPostalAddressAttributedValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem instanceof \Ews\StructType\EwsPostalAddressAttributedValueType) {
                $invalidValues[] = is_object($arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem) ? get_class($arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem), var_export($arrayOfPostalAddressAttributedValuesTypePostalAddressAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PostalAddressAttributedValue property can only contain items of type \Ews\StructType\EwsPostalAddressAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PostalAddressAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPostalAddressAttributedValueType[] $postalAddressAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     */
    public function setPostalAddressAttributedValue(array $postalAddressAttributedValue = array())
    {
        // validation for constraint: array
        if ('' !== ($postalAddressAttributedValueArrayErrorMessage = self::validatePostalAddressAttributedValueForArrayConstraintsFromSetPostalAddressAttributedValue($postalAddressAttributedValue))) {
            throw new \InvalidArgumentException($postalAddressAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->PostalAddressAttributedValue = $postalAddressAttributedValue;
        return $this;
    }
    /**
     * Add item to PostalAddressAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPostalAddressAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfPostalAddressAttributedValuesType
     */
    public function addToPostalAddressAttributedValue(\Ews\StructType\EwsPostalAddressAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPostalAddressAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The PostalAddressAttributedValue property can only contain items of type \Ews\StructType\EwsPostalAddressAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PostalAddressAttributedValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPostalAddressAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPostalAddressAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPostalAddressAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPostalAddressAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPostalAddressAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PostalAddressAttributedValue
     */
    public function getAttributeName()
    {
        return 'PostalAddressAttributedValue';
    }
}
