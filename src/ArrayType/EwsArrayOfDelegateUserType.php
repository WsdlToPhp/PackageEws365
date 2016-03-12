<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDelegateUserType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfDelegateUserType extends AbstractStructArrayBase
{
    /**
     * The DelegateUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsDelegateUserType[]
     */
    public $DelegateUser;
    /**
     * Constructor method for ArrayOfDelegateUserType
     * @uses EwsArrayOfDelegateUserType::setDelegateUser()
     * @param \Ews\StructType\EwsDelegateUserType[] $delegateUser
     */
    public function __construct(array $delegateUser = array())
    {
        $this
            ->setDelegateUser($delegateUser);
    }
    /**
     * Get DelegateUser value
     * @return \Ews\StructType\EwsDelegateUserType[]
     */
    public function getDelegateUser()
    {
        return $this->DelegateUser;
    }
    /**
     * Set DelegateUser value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDelegateUserType[] $delegateUser
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserType
     */
    public function setDelegateUser(array $delegateUser = array())
    {
        foreach ($delegateUser as $arrayOfDelegateUserTypeDelegateUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfDelegateUserTypeDelegateUserItem instanceof \Ews\StructType\EwsDelegateUserType) {
                throw new \InvalidArgumentException(sprintf('The DelegateUser property can only contain items of \Ews\StructType\EwsDelegateUserType, "%s" given', is_object($arrayOfDelegateUserTypeDelegateUserItem) ? get_class($arrayOfDelegateUserTypeDelegateUserItem) : gettype($arrayOfDelegateUserTypeDelegateUserItem)), __LINE__);
            }
        }
        $this->DelegateUser = $delegateUser;
        return $this;
    }
    /**
     * Add item to DelegateUser value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDelegateUserType $item
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserType
     */
    public function addToDelegateUser(\Ews\StructType\EwsDelegateUserType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsDelegateUserType) {
            throw new \InvalidArgumentException(sprintf('The DelegateUser property can only contain items of \Ews\StructType\EwsDelegateUserType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DelegateUser[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsDelegateUserType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DelegateUser
     */
    public function getAttributeName()
    {
        return 'DelegateUser';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserType
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
