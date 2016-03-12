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
     * @var \Ews\StructType\EwsFailedSearchMailboxType[]
     */
    public $FailedMailbox;
    /**
     * Constructor method for ArrayOfFailedSearchMailboxesType
     * @uses EwsArrayOfFailedSearchMailboxesType::setFailedMailbox()
     * @param \Ews\StructType\EwsFailedSearchMailboxType[] $failedMailbox
     */
    public function __construct(array $failedMailbox = array())
    {
        $this
            ->setFailedMailbox($failedMailbox);
    }
    /**
     * Get FailedMailbox value
     * @return \Ews\StructType\EwsFailedSearchMailboxType[]|null
     */
    public function getFailedMailbox()
    {
        return $this->FailedMailbox;
    }
    /**
     * Set FailedMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFailedSearchMailboxType[] $failedMailbox
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public function setFailedMailbox(array $failedMailbox = array())
    {
        foreach ($failedMailbox as $arrayOfFailedSearchMailboxesTypeFailedMailboxItem) {
            // validation for constraint: itemType
            if (!$arrayOfFailedSearchMailboxesTypeFailedMailboxItem instanceof \Ews\StructType\EwsFailedSearchMailboxType) {
                throw new \InvalidArgumentException(sprintf('The FailedMailbox property can only contain items of \Ews\StructType\EwsFailedSearchMailboxType, "%s" given', is_object($arrayOfFailedSearchMailboxesTypeFailedMailboxItem) ? get_class($arrayOfFailedSearchMailboxesTypeFailedMailboxItem) : gettype($arrayOfFailedSearchMailboxesTypeFailedMailboxItem)), __LINE__);
            }
        }
        $this->FailedMailbox = $failedMailbox;
        return $this;
    }
    /**
     * Add item to FailedMailbox value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFailedSearchMailboxType $item
     * @return \Ews\ArrayType\EwsArrayOfFailedSearchMailboxesType
     */
    public function addToFailedMailbox(\Ews\StructType\EwsFailedSearchMailboxType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsFailedSearchMailboxType) {
            throw new \InvalidArgumentException(sprintf('The FailedMailbox property can only contain items of \Ews\StructType\EwsFailedSearchMailboxType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->FailedMailbox[] = $item;
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
