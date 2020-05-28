<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDelegateUserResponseMessageType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDelegateUserResponseMessageType extends AbstractStructArrayBase
{
    /**
     * The DelegateUserResponseMessageType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDelegateUserResponseMessageType[]
     */
    public $DelegateUserResponseMessageType;
    /**
     * Constructor method for ArrayOfDelegateUserResponseMessageType
     * @uses EwsArrayOfDelegateUserResponseMessageType::setDelegateUserResponseMessageType()
     * @param \Ews\StructType\EwsDelegateUserResponseMessageType[] $delegateUserResponseMessageType
     */
    public function __construct(array $delegateUserResponseMessageType = array())
    {
        $this
            ->setDelegateUserResponseMessageType($delegateUserResponseMessageType);
    }
    /**
     * Get DelegateUserResponseMessageType value
     * @return \Ews\StructType\EwsDelegateUserResponseMessageType[]
     */
    public function getDelegateUserResponseMessageType()
    {
        return $this->DelegateUserResponseMessageType;
    }
    /**
     * This method is responsible for validating the values passed to the setDelegateUserResponseMessageType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDelegateUserResponseMessageType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDelegateUserResponseMessageTypeForArrayConstraintsFromSetDelegateUserResponseMessageType(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem instanceof \Ews\StructType\EwsDelegateUserResponseMessageType) {
                $invalidValues[] = is_object($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) ? get_class($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) : sprintf('%s(%s)', gettype($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem), var_export($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DelegateUserResponseMessageType property can only contain items of type \Ews\StructType\EwsDelegateUserResponseMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DelegateUserResponseMessageType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDelegateUserResponseMessageType[] $delegateUserResponseMessageType
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public function setDelegateUserResponseMessageType(array $delegateUserResponseMessageType = array())
    {
        // validation for constraint: array
        if ('' !== ($delegateUserResponseMessageTypeArrayErrorMessage = self::validateDelegateUserResponseMessageTypeForArrayConstraintsFromSetDelegateUserResponseMessageType($delegateUserResponseMessageType))) {
            throw new \InvalidArgumentException($delegateUserResponseMessageTypeArrayErrorMessage, __LINE__);
        }
        $this->DelegateUserResponseMessageType = $delegateUserResponseMessageType;
        return $this;
    }
    /**
     * Add item to DelegateUserResponseMessageType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDelegateUserResponseMessageType $item
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public function addToDelegateUserResponseMessageType(\Ews\StructType\EwsDelegateUserResponseMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsDelegateUserResponseMessageType) {
            throw new \InvalidArgumentException(sprintf('The DelegateUserResponseMessageType property can only contain items of type \Ews\StructType\EwsDelegateUserResponseMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DelegateUserResponseMessageType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsDelegateUserResponseMessageType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsDelegateUserResponseMessageType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsDelegateUserResponseMessageType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsDelegateUserResponseMessageType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsDelegateUserResponseMessageType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DelegateUserResponseMessageType
     */
    public function getAttributeName()
    {
        return 'DelegateUserResponseMessageType';
    }
}
