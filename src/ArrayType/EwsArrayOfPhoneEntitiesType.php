<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneEntitiesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfPhoneEntitiesType extends AbstractStructArrayBase
{
    /**
     * The Phone
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsPhoneEntityType[]
     */
    public $Phone;
    /**
     * Constructor method for ArrayOfPhoneEntitiesType
     * @uses EwsArrayOfPhoneEntitiesType::setPhone()
     * @param \Ews\StructType\EwsPhoneEntityType[] $phone
     */
    public function __construct(array $phone = array())
    {
        $this
            ->setPhone($phone);
    }
    /**
     * Get Phone value
     * @return \Ews\StructType\EwsPhoneEntityType[]|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * This method is responsible for validating the values passed to the setPhone method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhone method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneForArrayConstraintsFromSetPhone(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhoneEntitiesTypePhoneItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneEntitiesTypePhoneItem instanceof \Ews\StructType\EwsPhoneEntityType) {
                $invalidValues[] = is_object($arrayOfPhoneEntitiesTypePhoneItem) ? get_class($arrayOfPhoneEntitiesTypePhoneItem) : sprintf('%s(%s)', gettype($arrayOfPhoneEntitiesTypePhoneItem), var_export($arrayOfPhoneEntitiesTypePhoneItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Phone property can only contain items of type \Ews\StructType\EwsPhoneEntityType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Phone value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneEntityType[] $phone
     * @return \Ews\ArrayType\EwsArrayOfPhoneEntitiesType
     */
    public function setPhone(array $phone = array())
    {
        // validation for constraint: array
        if ('' !== ($phoneArrayErrorMessage = self::validatePhoneForArrayConstraintsFromSetPhone($phone))) {
            throw new \InvalidArgumentException($phoneArrayErrorMessage, __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Add item to Phone value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsPhoneEntityType $item
     * @return \Ews\ArrayType\EwsArrayOfPhoneEntitiesType
     */
    public function addToPhone(\Ews\StructType\EwsPhoneEntityType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsPhoneEntityType) {
            throw new \InvalidArgumentException(sprintf('The Phone property can only contain items of type \Ews\StructType\EwsPhoneEntityType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Phone[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsPhoneEntityType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsPhoneEntityType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsPhoneEntityType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsPhoneEntityType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsPhoneEntityType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Phone
     */
    public function getAttributeName()
    {
        return 'Phone';
    }
}
