<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMailboxHoldStatusType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of mailbox hold status.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfMailboxHoldStatusType extends AbstractStructArrayBase
{
    /**
     * The MailboxHoldStatus
     * Meta informations extracted from the WSDL
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
     * Set MailboxHoldStatus value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMailboxHoldStatusType[] $mailboxHoldStatus
     * @return \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType
     */
    public function setMailboxHoldStatus(array $mailboxHoldStatus = array())
    {
        foreach ($mailboxHoldStatus as $arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem instanceof \Ews\StructType\EwsMailboxHoldStatusType) {
                throw new \InvalidArgumentException(sprintf('The MailboxHoldStatus property can only contain items of \Ews\StructType\EwsMailboxHoldStatusType, "%s" given', is_object($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) ? get_class($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem) : gettype($arrayOfMailboxHoldStatusTypeMailboxHoldStatusItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The MailboxHoldStatus property can only contain items of \Ews\StructType\EwsMailboxHoldStatusType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType
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
