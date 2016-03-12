<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUserMailboxesType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of user mailbox.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfUserMailboxesType extends AbstractStructArrayBase
{
    /**
     * The UserMailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsUserMailboxType[]
     */
    public $UserMailbox;
    /**
     * Constructor method for ArrayOfUserMailboxesType
     * @uses EwsArrayOfUserMailboxesType::setUserMailbox()
     * @param \Ews\StructType\EwsUserMailboxType[] $userMailbox
     */
    public function __construct(array $userMailbox = array())
    {
        $this
            ->setUserMailbox($userMailbox);
    }
    /**
     * Get UserMailbox value
     * @return \Ews\StructType\EwsUserMailboxType[]
     */
    public function getUserMailbox()
    {
        return $this->UserMailbox;
    }
    /**
     * Set UserMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserMailboxType[] $userMailbox
     * @return \Ews\ArrayType\EwsArrayOfUserMailboxesType
     */
    public function setUserMailbox(array $userMailbox = array())
    {
        foreach ($userMailbox as $arrayOfUserMailboxesTypeUserMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfUserMailboxesTypeUserMailboxItem instanceof \Ews\StructType\EwsUserMailboxType) {
                throw new \InvalidArgumentException(sprintf('The UserMailbox property can only contain items of \Ews\StructType\EwsUserMailboxType, "%s" given', is_object($arrayOfUserMailboxesTypeUserMailboxItem) ? get_class($arrayOfUserMailboxesTypeUserMailboxItem) : gettype($arrayOfUserMailboxesTypeUserMailboxItem)), __LINE__);
            }
        }
        $this->UserMailbox = $userMailbox;
        return $this;
    }
    /**
     * Add item to UserMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserMailboxType $item
     * @return \Ews\ArrayType\EwsArrayOfUserMailboxesType
     */
    public function addToUserMailbox(\Ews\StructType\EwsUserMailboxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsUserMailboxType) {
            throw new \InvalidArgumentException(sprintf('The UserMailbox property can only contain items of \Ews\StructType\EwsUserMailboxType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UserMailbox[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsUserMailboxType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UserMailbox
     */
    public function getAttributeName()
    {
        return 'UserMailbox';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfUserMailboxesType
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
