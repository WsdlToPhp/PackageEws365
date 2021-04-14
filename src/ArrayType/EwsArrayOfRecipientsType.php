<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRecipientsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRecipientsType extends AbstractStructArrayBase
{
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - choice: Mailbox
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsEmailAddressType|null
     */
    protected ?\StructType\EwsEmailAddressType $Mailbox = null;
    /**
     * Constructor method for ArrayOfRecipientsType
     * @uses EwsArrayOfRecipientsType::setMailbox()
     * @param \StructType\EwsEmailAddressType $mailbox
     */
    public function __construct(?\StructType\EwsEmailAddressType $mailbox = null)
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsEmailAddressType|null
     */
    public function getMailbox(): ?\StructType\EwsEmailAddressType
    {
        return isset($this->Mailbox) ? $this->Mailbox : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailbox method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMailboxForChoiceConstraintsFromSetMailbox($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Mailbox can\'t be set as the property %s is already set. Only one property must be set among these properties: Mailbox, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Mailbox value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressType $mailbox
     * @return \ArrayType\EwsArrayOfRecipientsType
     */
    public function setMailbox(?\StructType\EwsEmailAddressType $mailbox = null): self
    {
        // validation for constraint: choice(Mailbox)
        if ('' !== ($mailboxChoiceErrorMessage = self::validateMailboxForChoiceConstraintsFromSetMailbox($mailbox))) {
            throw new InvalidArgumentException($mailboxChoiceErrorMessage, __LINE__);
        }
        if (is_null($mailbox) || (is_array($mailbox) && empty($mailbox))) {
            unset($this->Mailbox);
        } else {
            $this->Mailbox = $mailbox;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsEmailAddressType|null
     */
    public function current(): ?\StructType\EwsEmailAddressType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsEmailAddressType|null
     */
    public function item($index): ?\StructType\EwsEmailAddressType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsEmailAddressType|null
     */
    public function first(): ?\StructType\EwsEmailAddressType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsEmailAddressType|null
     */
    public function last(): ?\StructType\EwsEmailAddressType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsEmailAddressType|null
     */
    public function offsetGet($offset): ?\StructType\EwsEmailAddressType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsEmailAddressType $item
     * @return \ArrayType\EwsArrayOfRecipientsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsEmailAddressType) {
            throw new InvalidArgumentException(sprintf('The Mailbox property can only contain items of type \StructType\EwsEmailAddressType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Mailbox
     */
    public function getAttributeName(): string
    {
        return 'Mailbox';
    }
}
