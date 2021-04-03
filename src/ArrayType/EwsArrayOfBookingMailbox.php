<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBookingMailbox ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfBookingMailbox extends AbstractStructArrayBase
{
    /**
     * The Mailbox
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsBookingMailboxType[]
     */
    protected array $Mailbox = [];
    /**
     * Constructor method for ArrayOfBookingMailbox
     * @uses EwsArrayOfBookingMailbox::setMailbox()
     * @param \StructType\EwsBookingMailboxType[] $mailbox
     */
    public function __construct(array $mailbox = [])
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return \StructType\EwsBookingMailboxType[]
     */
    public function getMailbox(): array
    {
        return $this->Mailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxForArrayConstraintsFromSetMailbox(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBookingMailboxMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingMailboxMailboxItem instanceof \StructType\EwsBookingMailboxType) {
                $invalidValues[] = is_object($arrayOfBookingMailboxMailboxItem) ? get_class($arrayOfBookingMailboxMailboxItem) : sprintf('%s(%s)', gettype($arrayOfBookingMailboxMailboxItem), var_export($arrayOfBookingMailboxMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Mailbox property can only contain items of type \StructType\EwsBookingMailboxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Mailbox value
     * @throws InvalidArgumentException
     * @param \StructType\EwsBookingMailboxType[] $mailbox
     * @return \ArrayType\EwsArrayOfBookingMailbox
     */
    public function setMailbox(array $mailbox = []): self
    {
        // validation for constraint: array
        if ('' !== ($mailboxArrayErrorMessage = self::validateMailboxForArrayConstraintsFromSetMailbox($mailbox))) {
            throw new InvalidArgumentException($mailboxArrayErrorMessage, __LINE__);
        }
        $this->Mailbox = $mailbox;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsBookingMailboxType|null
     */
    public function current(): ?\StructType\EwsBookingMailboxType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsBookingMailboxType|null
     */
    public function item($index): ?\StructType\EwsBookingMailboxType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsBookingMailboxType|null
     */
    public function first(): ?\StructType\EwsBookingMailboxType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsBookingMailboxType|null
     */
    public function last(): ?\StructType\EwsBookingMailboxType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsBookingMailboxType|null
     */
    public function offsetGet($offset): ?\StructType\EwsBookingMailboxType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsBookingMailboxType $item
     * @return \ArrayType\EwsArrayOfBookingMailbox
     */
    public function add(\StructType\EwsBookingMailboxType $item): self
    {
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
