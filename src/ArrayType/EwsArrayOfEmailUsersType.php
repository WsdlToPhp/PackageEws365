<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailUsersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfEmailUsersType extends AbstractStructArrayBase
{
    /**
     * The EmailUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsEmailUserType[]
     */
    public $EmailUser;
    /**
     * Constructor method for ArrayOfEmailUsersType
     * @uses EwsArrayOfEmailUsersType::setEmailUser()
     * @param \Ews\StructType\EwsEmailUserType[] $emailUser
     */
    public function __construct(array $emailUser = array())
    {
        $this
            ->setEmailUser($emailUser);
    }
    /**
     * Get EmailUser value
     * @return \Ews\StructType\EwsEmailUserType[]|null
     */
    public function getEmailUser()
    {
        return $this->EmailUser;
    }
    /**
     * Set EmailUser value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailUserType[] $emailUser
     * @return \Ews\ArrayType\EwsArrayOfEmailUsersType
     */
    public function setEmailUser(array $emailUser = array())
    {
        foreach ($emailUser as $arrayOfEmailUsersTypeEmailUserItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailUsersTypeEmailUserItem instanceof \Ews\StructType\EwsEmailUserType) {
                throw new \InvalidArgumentException(sprintf('The EmailUser property can only contain items of \Ews\StructType\EwsEmailUserType, "%s" given', is_object($arrayOfEmailUsersTypeEmailUserItem) ? get_class($arrayOfEmailUsersTypeEmailUserItem) : gettype($arrayOfEmailUsersTypeEmailUserItem)), __LINE__);
            }
        }
        $this->EmailUser = $emailUser;
        return $this;
    }
    /**
     * Add item to EmailUser value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsEmailUserType $item
     * @return \Ews\ArrayType\EwsArrayOfEmailUsersType
     */
    public function addToEmailUser(\Ews\StructType\EwsEmailUserType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsEmailUserType) {
            throw new \InvalidArgumentException(sprintf('The EmailUser property can only contain items of \Ews\StructType\EwsEmailUserType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmailUser[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsEmailUserType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailUser
     */
    public function getAttributeName()
    {
        return 'EmailUser';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfEmailUsersType
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
