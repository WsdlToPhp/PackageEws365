<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailAddressAttributedValuesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEmailAddressAttributedValuesType extends AbstractStructArrayBase
{
    /**
     * The EmailAddressAttributedValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailAddressAttributedValueType[]
     */
    public $EmailAddressAttributedValue;
    /**
     * Constructor method for ArrayOfEmailAddressAttributedValuesType
     * @uses EwsArrayOfEmailAddressAttributedValuesType::setEmailAddressAttributedValue()
     * @param \Ews\StructType\EwsEmailAddressAttributedValueType[] $emailAddressAttributedValue
     */
    public function __construct(array $emailAddressAttributedValue = array())
    {
        $this
            ->setEmailAddressAttributedValue($emailAddressAttributedValue);
    }
    /**
     * Get EmailAddressAttributedValue value
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType[]|null
     */
    public function getEmailAddressAttributedValue()
    {
        return $this->EmailAddressAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailAddressAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailAddressAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailAddressAttributedValueForArrayConstraintsFromSetEmailAddressAttributedValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem instanceof \Ews\StructType\EwsEmailAddressAttributedValueType) {
                $invalidValues[] = is_object($arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem) ? get_class($arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem), var_export($arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailAddressAttributedValue property can only contain items of type \Ews\StructType\EwsEmailAddressAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set EmailAddressAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressAttributedValueType[] $emailAddressAttributedValue
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
     */
    public function setEmailAddressAttributedValue(array $emailAddressAttributedValue = array())
    {
        // validation for constraint: array
        if ('' !== ($emailAddressAttributedValueArrayErrorMessage = self::validateEmailAddressAttributedValueForArrayConstraintsFromSetEmailAddressAttributedValue($emailAddressAttributedValue))) {
            throw new \InvalidArgumentException($emailAddressAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->EmailAddressAttributedValue = $emailAddressAttributedValue;
        return $this;
    }
    /**
     * Add item to EmailAddressAttributedValue value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailAddressAttributedValueType $item
     * @return \Ews\ArrayType\EwsArrayOfEmailAddressAttributedValuesType
     */
    public function addToEmailAddressAttributedValue(\Ews\StructType\EwsEmailAddressAttributedValueType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsEmailAddressAttributedValueType) {
            throw new \InvalidArgumentException(sprintf('The EmailAddressAttributedValue property can only contain items of type \Ews\StructType\EwsEmailAddressAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->EmailAddressAttributedValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEmailAddressAttributedValueType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailAddressAttributedValue
     */
    public function getAttributeName()
    {
        return 'EmailAddressAttributedValue';
    }
}
