<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsBookingMailboxType[]
     */
    public $Mailbox;
    /**
     * Constructor method for ArrayOfBookingMailbox
     * @uses EwsArrayOfBookingMailbox::setMailbox()
     * @param \Ews\StructType\EwsBookingMailboxType[] $mailbox
     */
    public function __construct(array $mailbox = array())
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return \Ews\StructType\EwsBookingMailboxType[]|null
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * This method is responsible for validating the values passed to the setMailbox method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailbox method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxForArrayConstraintsFromSetMailbox(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBookingMailboxMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfBookingMailboxMailboxItem instanceof \Ews\StructType\EwsBookingMailboxType) {
                $invalidValues[] = is_object($arrayOfBookingMailboxMailboxItem) ? get_class($arrayOfBookingMailboxMailboxItem) : sprintf('%s(%s)', gettype($arrayOfBookingMailboxMailboxItem), var_export($arrayOfBookingMailboxMailboxItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Mailbox property can only contain items of type \Ews\StructType\EwsBookingMailboxType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Mailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBookingMailboxType[] $mailbox
     * @return \Ews\ArrayType\EwsArrayOfBookingMailbox
     */
    public function setMailbox(array $mailbox = array())
    {
        // validation for constraint: array
        if ('' !== ($mailboxArrayErrorMessage = self::validateMailboxForArrayConstraintsFromSetMailbox($mailbox))) {
            throw new \InvalidArgumentException($mailboxArrayErrorMessage, __LINE__);
        }
        $this->Mailbox = $mailbox;
        return $this;
    }
    /**
     * Add item to Mailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBookingMailboxType $item
     * @return \Ews\ArrayType\EwsArrayOfBookingMailbox
     */
    public function addToMailbox(\Ews\StructType\EwsBookingMailboxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsBookingMailboxType) {
            throw new \InvalidArgumentException(sprintf('The Mailbox property can only contain items of type \Ews\StructType\EwsBookingMailboxType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Mailbox[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsBookingMailboxType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsBookingMailboxType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsBookingMailboxType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsBookingMailboxType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsBookingMailboxType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Mailbox
     */
    public function getAttributeName()
    {
        return 'Mailbox';
    }
}
