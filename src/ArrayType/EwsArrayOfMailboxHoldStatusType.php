<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailboxHoldStatusType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Array of mailbox hold status.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMailboxHoldStatusType extends AbstractStructArrayBase
{
    /**
     * The MailboxHoldStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsMailboxHoldStatusType[]
     */
    public $MailboxHoldStatus;
    /**
     * Constructor method for ArrayOfMailboxHoldStatusType
     * @uses EwsArrayOfMailboxHoldStatusType::setMailboxHoldStatus()
     * @param \Ews\StructType\EwsMailboxHoldStatusType[] $mailboxHoldStatus
     */
    public function __construct(array $mailboxHoldStatus = array())
    {
        $this
            ->setMailboxHoldStatus($mailboxHoldStatus);
    }
    /**
     * Get MailboxHoldStatus value
     * @return \Ews\StructType\EwsMailboxHoldStatusType[]|null
     */
    public function getMailboxHoldStatus()
    {
        return $this->MailboxHoldStatus;
    }
    /**
     * This method is responsible for validating the values passed to the setMailboxHoldStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMailboxHoldStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMailboxHoldStatusForArrayConstraintsFromSetMailboxHoldStatus(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem instanceof \Ews\StructType\EwsMailboxHoldStatusType) {
                $invalidValues[] = is_object($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) ? get_class($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) : sprintf('%s(%s)', gettype($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem), var_export($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MailboxHoldStatus property can only contain items of type \Ews\StructType\EwsMailboxHoldStatusType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set MailboxHoldStatus value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxHoldStatusType[] $mailboxHoldStatus
     * @return \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType
     */
    public function setMailboxHoldStatus(array $mailboxHoldStatus = array())
    {
        // validation for constraint: array
        if ('' !== ($mailboxHoldStatusArrayErrorMessage = self::validateMailboxHoldStatusForArrayConstraintsFromSetMailboxHoldStatus($mailboxHoldStatus))) {
            throw new \InvalidArgumentException($mailboxHoldStatusArrayErrorMessage, __LINE__);
        }
        $this->MailboxHoldStatus = $mailboxHoldStatus;
        return $this;
    }
    /**
     * Add item to MailboxHoldStatus value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxHoldStatusType $item
     * @return \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType
     */
    public function addToMailboxHoldStatus(\Ews\StructType\EwsMailboxHoldStatusType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsMailboxHoldStatusType) {
            throw new \InvalidArgumentException(sprintf('The MailboxHoldStatus property can only contain items of type \Ews\StructType\EwsMailboxHoldStatusType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MailboxHoldStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsMailboxHoldStatusType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsMailboxHoldStatusType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsMailboxHoldStatusType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsMailboxHoldStatusType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsMailboxHoldStatusType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MailboxHoldStatus
     */
    public function getAttributeName()
    {
        return 'MailboxHoldStatus';
    }
}
