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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setContact method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactForArrayConstraintsFromSetContact(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfContactsTypeContactItem) {
            // validation for constraint: itemType
            if (!$arrayOfContactsTypeContactItem instanceof \Ews\StructType\EwsContactType) {
                $invalidValues[] = is_object($arrayOfContactsTypeContactItem) ? get_class($arrayOfContactsTypeContactItem) : sprintf('%s(%s)', gettype($arrayOfContactsTypeContactItem), var_export($arrayOfContactsTypeContactItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact property can only contain items of type \Ews\StructType\EwsContactType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Contact value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsContactType[] $contact
     * @return \Ews\ArrayType\EwsArrayOfContactsType
     */
    public function setContact(array $contact = array())
    {
        // validation for constraint: array
        if ('' !== ($contactArrayErrorMessage = self::validateContactForArrayConstraintsFromSetContact($contact))) {
            throw new \InvalidArgumentException($contactArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Contact property can only contain items of type \Ews\StructType\EwsContactType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
