<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDelegateUserResponseMessageType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfDelegateUserResponseMessageType extends AbstractStructArrayBase
{
    /**
     * The DelegateUserResponseMessageType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $DelegateUserResponseMessageType;
    /**
     * Constructor method for ArrayOfDelegateUserResponseMessageType
     * @uses
     * EwsArrayOfDelegateUserResponseMessageType::setDelegateUserResponseMessageType()
     * @param array $delegateUserResponseMessageType
     */
    public function __construct(array $delegateUserResponseMessageType = array())
    {
        $this
            ->setDelegateUserResponseMessageType($delegateUserResponseMessageType);
    }
    /**
     * Get DelegateUserResponseMessageType value
     * @return array
     */
    public function getDelegateUserResponseMessageType()
    {
        return $this->DelegateUserResponseMessageType;
    }
    /**
     * Set DelegateUserResponseMessageType value
     * @param array $delegateUserResponseMessageType
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public function setDelegateUserResponseMessageType(array $delegateUserResponseMessageType = array())
    {
        $this->DelegateUserResponseMessageType = $delegateUserResponseMessageType;
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
