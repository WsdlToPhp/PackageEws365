<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfContactsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfContactsType extends AbstractStructArrayBase
{
    /**
     * The Contact
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsContactType[]
     */
    public $Contact;
    /**
     * Constructor method for ArrayOfContactsType
     * @uses EwsArrayOfContactsType::setContact()
     * @param \Ews\StructType\EwsContactType[] $contact
     */
    public function __construct(array $contact = array())
    {
        $this
            ->setContact($contact);
    }
    /**
     * Get Contact value
     * @return \Ews\StructType\EwsContactType[]|null
     */
    public function getContact()
    {
        return $this->Contact;
    }
    /**
     * Set Contact value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactType[] $contact
     * @return \Ews\ArrayType\EwsArrayOfContactsType
     */
    public function setContact(array $contact = array())
    {
        foreach ($contact as $arrayOfContactsTypeContactItem) {
            // validation for constraint: itemType
            if (!$arrayOfContactsTypeContactItem instanceof \Ews\StructType\EwsContactType) {
                throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of \Ews\StructType\EwsContactType, "%s" given', is_object($arrayOfContactsTypeContactItem) ? get_class($arrayOfContactsTypeContactItem) : gettype($arrayOfContactsTypeContactItem)), __LINE__);
            }
        }
        $this->Contact = $contact;
        return $this;
    }
    /**
     * Add item to Contact value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactType $item
     * @return \Ews\ArrayType\EwsArrayOfContactsType
     */
    public function addToContact(\Ews\StructType\EwsContactType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsContactType) {
            throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of \Ews\StructType\EwsContactType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Contact[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsContactType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsContactType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsContactType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsContactType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsContactType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Contact
     */
    public function getAttributeName()
    {
        return 'Contact';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfContactsType
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
