<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneNumberAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPhoneNumberAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The PhoneNumberAttributedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhoneNumberAttributedValueType[]
     */
    public $PhoneNumberAttributedValue;
    /**
     * Constructor method for ArrayOfPhoneNumberAttributedValuesType
     * @uses EwsArrayOfPhoneNumberAttributedValuesType::setPhoneNumberAttributedValue()
     * @param \Ews\StructType\EwsPhoneNumberAttributedValueType[] $phoneNumberAttributedValue
     */
    public function __construct(array $phoneNumberAttributedValue = array())
    {
        $this
            ->setPhoneNumberAttributedValue($phoneNumberAttributedValue);
    }
    /**
     * Get PhoneNumberAttributedValue value
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType[]|null
     */
    public function getPhoneNumberAttributedValue()
    {
        return $this->PhoneNumberAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setPhoneNumberAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumberAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberAttributedValueForArrayConstraintsFromSetPhoneNumberAttributedValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem instanceof \Ews\StructType\EwsPhoneNumberAttributedValueType) {
                $invalidValues[] = is_object($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) ? get_class($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem), var_export($arrayOfPhoneNumberAttributedValuesTypePhoneNumberAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumberAttributedValue property can only contain items of type \Ews\StructType\EwsPhoneNumberAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PhoneNumberAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneNumberAttributedValueType[] $phoneNumberAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public function setPhoneNumberAttributedValue(array $phoneNumberAttributedValue = array())
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberAttributedValueArrayErrorMessage = self::validatePhoneNumberAttributedValueForArrayConstraintsFromSetPhoneNumberAttributedValue($phoneNumberAttributedValue))) {
            throw new \InvalidArgumentException($phoneNumberAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->PhoneNumberAttributedValue = $phoneNumberAttributedValue;
        return $this;
    }
    /**
     * Add item to PhoneNumberAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneNumberAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfPhoneNumberAttributedValuesType
     */
    public function addToPhoneNumberAttributedValue(\Ews\StructType\EwsPhoneNumberAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPhoneNumberAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The PhoneNumberAttributedValue property can only contain items of type \Ews\StructType\EwsPhoneNumberAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->PhoneNumberAttributedValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPhoneNumberAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhoneNumberAttributedValue
     */
    public function getAttributeName()
    {
        return 'PhoneNumberAttributedValue';
    }
}
