<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsContactType[]
     */
    protected array $Contact = [];
    /**
     * Constructor method for ArrayOfContactsType
     * @uses EwsArrayOfContactsType::setContact()
     * @param \StructType\EwsContactType[] $contact
     */
    public function __construct(array $contact = [])
    {
        $this
            ->setContact($contact);
    }
    /**
     * Get Contact value
     * @return \StructType\EwsContactType[]
     */
    public function getContact(): array
    {
        return $this->Contact;
    }
    /**
     * This method is responsible for validating the values passed to the setContact method
     * This method is willingly generated in order to preserve the one-line inline validation within the setContact method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateContactForArrayConstraintsFromSetContact(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfContactsTypeContactItem) {
            // validation for constraint: itemType
            if (!$arrayOfContactsTypeContactItem instanceof \StructType\EwsContactType) {
                $invalidValues[] = is_object($arrayOfContactsTypeContactItem) ? get_class($arrayOfContactsTypeContactItem) : sprintf('%s(%s)', gettype($arrayOfContactsTypeContactItem), var_export($arrayOfContactsTypeContactItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Contact property can only contain items of type \StructType\EwsContactType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Contact value
     * @throws InvalidArgumentException
     * @param \StructType\EwsContactType[] $contact
     * @return \ArrayType\EwsArrayOfContactsType
     */
    public function setContact(array $contact = []): self
    {
        // validation for constraint: array
        if ('' !== ($contactArrayErrorMessage = self::validateContactForArrayConstraintsFromSetContact($contact))) {
            throw new InvalidArgumentException($contactArrayErrorMessage, __LINE__);
        }
        $this->Contact = $contact;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsContactType|null
     */
    public function current(): ?\StructType\EwsContactType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsContactType|null
     */
    public function item($index): ?\StructType\EwsContactType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsContactType|null
     */
    public function first(): ?\StructType\EwsContactType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsContactType|null
     */
    public function last(): ?\StructType\EwsContactType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsContactType|null
     */
    public function offsetGet($offset): ?\StructType\EwsContactType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsContactType $item
     * @return \ArrayType\EwsArrayOfContactsType
     */
    public function add(\StructType\EwsContactType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Contact
     */
    public function getAttributeName(): string
    {
        return 'Contact';
    }
}
