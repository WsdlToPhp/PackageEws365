<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFailedSearchMailboxesType ArrayType
 * Meta informations extracted from the WSDL
 * - documentation: Array of failed mailbox and error message.
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfFailedSearchMailboxesType extends AbstractStructArrayBase
{
    /**
     * The FailedMailbox
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - documentation: Mailbox failed on search and its error message.
     * @var array
     */
    public $FailedMailbox;
    /**
     * Constructor method for ArrayOfFailedSearchMailboxesType
     * @uses EwsArrayOfFailedSearchMailboxesType::setFailedMailbox()
     * @param array $failedMailbox
     */
    public function __construct(array $failedMailbox = array())
    {
        $this
            ->setFailedMailbox($failedMailbox);
    }
    /**
     * Get FailedMailbox value
     * @return array
     */
    public function getFailedMailbox()
    {
        return $this->FailedMailbox;
    }
    /**
     * Set FailedMailbox value
     * @param array $failedMailbox
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public function setFailedMailbox(array $failedMailbox = array())
    {
        $this->FailedMailbox = $failedMailbox;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsFailedSearchMailboxType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FailedMailbox
     */
    public function getAttributeName()
    {
        return 'FailedMailbox';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
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
