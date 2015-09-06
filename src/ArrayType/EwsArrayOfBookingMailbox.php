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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var array
     */
    public $Mailbox;
    /**
     * Constructor method for ArrayOfBookingMailbox
     * @uses EwsArrayOfBookingMailbox::setMailbox()
     * @param array $mailbox
     */
    public function __construct(array $mailbox = array())
    {
        $this
            ->setMailbox($mailbox);
    }
    /**
     * Get Mailbox value
     * @return array
     */
    public function getMailbox()
    {
        return $this->Mailbox;
    }
    /**
     * Set Mailbox value
     * @param array $mailbox
     * @return \Ews\ArrayType\EwsArrayOfBookingMailbox
     */
    public function setMailbox(array $mailbox = array())
    {
        $this->Mailbox = $mailbox;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfBookingMailbox
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
