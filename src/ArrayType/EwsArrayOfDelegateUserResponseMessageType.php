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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDelegateUserResponseMessageType[]
     */
    public $DelegateUserResponseMessageType;
    /**
     * Constructor method for ArrayOfDelegateUserResponseMessageType
     * @uses
     * EwsArrayOfDelegateUserResponseMessageType::setDelegateUserResponseMessageType()
     * @param \Ews\StructType\EwsDelegateUserResponseMessageType[]
     * $delegateUserResponseMessageType
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
     * Set DelegateUserResponseMessageType value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDelegateUserResponseMessageType[]
     * $delegateUserResponseMessageType
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public function setDelegateUserResponseMessageType(array $delegateUserResponseMessageType = array())
    {
        foreach ($delegateUserResponseMessageType as $arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem instanceof \Ews\StructType\EwsDelegateUserResponseMessageType) {
                throw new \InvalidArgumentException(sprintf('The DelegateUserResponseMessageType property can only contain items of \Ews\StructType\EwsDelegateUserResponseMessageType, "%s" given', is_object($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) ? get_class($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem) : gettype($arrayOfDelegateUserResponseMessageTypeDelegateUserResponseMessageTypeItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The DelegateUserResponseMessageType property can only contain items of \Ews\StructType\EwsDelegateUserResponseMessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
