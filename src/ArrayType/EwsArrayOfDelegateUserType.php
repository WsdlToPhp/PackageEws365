<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDelegateUserType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfDelegateUserType extends AbstractStructArrayBase
{
    /**
     * The DelegateUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $DelegateUser;
    /**
     * Constructor method for ArrayOfDelegateUserType
     * @uses EwsArrayOfDelegateUserType::setDelegateUser()
     * @param array $delegateUser
     */
    public function __construct(array $delegateUser = array())
    {
        $this
            ->setDelegateUser($delegateUser);
    }
    /**
     * Get DelegateUser value
     * @return array
     */
    public function getDelegateUser()
    {
        return $this->DelegateUser;
    }
    /**
     * Set DelegateUser value
     * @param array $delegateUser
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserType
     */
    public function setDelegateUser(array $delegateUser = array())
    {
        $this->DelegateUser = $delegateUser;
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
