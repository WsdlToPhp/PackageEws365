<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsEmailAddressAttributedValueType[]
     */
    protected array $EmailAddressAttributedValue = [];
    /**
     * Constructor method for ArrayOfEmailAddressAttributedValuesType
     * @uses EwsArrayOfEmailAddressAttributedValuesType::setEmailAddressAttributedValue()
     * @param \StructType\EwsEmailAddressAttributedValueType[] $emailAddressAttributedValue
     */
    public function __construct(array $emailAddressAttributedValue = [])
    {
        $this
            ->setEmailAddressAttributedValue($emailAddressAttributedValue);
    }
    /**
     * Get EmailAddressAttributedValue value
     * @return \StructType\EwsEmailAddressAttributedValueType[]
     */
    public function getEmailAddressAttributedValue(): array
    {
        return $this->EmailAddressAttributedValue;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailAddressAttributedValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailAddressAttributedValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailAddressAttributedValueForArrayConstraintsFromSetEmailAddressAttributedValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem instanceof \StructType\EwsEmailAddressAttributedValueType) {
                $invalidValues[] = is_object($arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem) ? get_class($arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem) : sprintf('%s(%s)', gettype($arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem), var_export($arrayOfEmailAddressAttributedValuesTypeEmailAddressAttributedValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailAddressAttributedValue property can only contain items of type \StructType\EwsEmailAddressAttributedValueType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmailAddressAttributedValue value
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressAttributedValueType[] $emailAddressAttributedValue
     * @return \ArrayType\EwsArrayOfEmailAddressAttributedValuesType
     */
    public function setEmailAddressAttributedValue(array $emailAddressAttributedValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($emailAddressAttributedValueArrayErrorMessage = self::validateEmailAddressAttributedValueForArrayConstraintsFromSetEmailAddressAttributedValue($emailAddressAttributedValue))) {
            throw new InvalidArgumentException($emailAddressAttributedValueArrayErrorMessage, __LINE__);
        }
        $this->EmailAddressAttributedValue = $emailAddressAttributedValue;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsEmailAddressAttributedValueType|null
     */
    public function current(): ?\StructType\EwsEmailAddressAttributedValueType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsEmailAddressAttributedValueType|null
     */
    public function item($index): ?\StructType\EwsEmailAddressAttributedValueType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsEmailAddressAttributedValueType|null
     */
    public function first(): ?\StructType\EwsEmailAddressAttributedValueType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsEmailAddressAttributedValueType|null
     */
    public function last(): ?\StructType\EwsEmailAddressAttributedValueType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsEmailAddressAttributedValueType|null
     */
    public function offsetGet($offset): ?\StructType\EwsEmailAddressAttributedValueType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressAttributedValueType $item
     * @return \ArrayType\EwsArrayOfEmailAddressAttributedValuesType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsEmailAddressAttributedValueType) {
            throw new InvalidArgumentException(sprintf('The EmailAddressAttributedValue property can only contain items of type \StructType\EwsEmailAddressAttributedValueType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailAddressAttributedValue
     */
    public function getAttributeName(): string
    {
        return 'EmailAddressAttributedValue';
    }
}
