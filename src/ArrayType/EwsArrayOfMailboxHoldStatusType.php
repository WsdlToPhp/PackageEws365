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
 * @release 1.0.0
 */
class EwsArrayOfMailboxHoldStatusType extends AbstractStructArrayBase
{
    /**
     * The MailboxHoldStatus
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Mailbox hold status.
     * @var array
     */
    public $MailboxHoldStatus;
    /**
     * Constructor method for ArrayOfMailboxHoldStatusType
     * @uses EwsArrayOfMailboxHoldStatusType::setMailboxHoldStatus()
     * @param array $mailboxHoldStatus
     */
    public function __construct(array $mailboxHoldStatus = array())
    {
        $this
            ->setMailboxHoldStatus($mailboxHoldStatus);
    }
    /**
     * Get MailboxHoldStatus value
     * @return array
     */
    public function getMailboxHoldStatus()
    {
        return $this->MailboxHoldStatus;
    }
    /**
     * Set MailboxHoldStatus value
     * @param array $mailboxHoldStatus
     * @return \Ews\ArrayType\EwsArrayOfMailboxHoldStatusType
     */
    public function setMailboxHoldStatus(array $mailboxHoldStatus = array())
    {
        $this->MailboxHoldStatus = $mailboxHoldStatus;
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
