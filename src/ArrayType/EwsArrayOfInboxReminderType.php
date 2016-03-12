<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInboxReminderType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfInboxReminderType extends AbstractStructArrayBase
{
    /**
     * The InboxReminder
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInboxReminderType[]
     */
    public $InboxReminder;
    /**
     * Constructor method for ArrayOfInboxReminderType
     * @uses EwsArrayOfInboxReminderType::setInboxReminder()
     * @param \Ews\StructType\EwsInboxReminderType[] $inboxReminder
     */
    public function __construct(array $inboxReminder = array())
    {
        $this
            ->setInboxReminder($inboxReminder);
    }
    /**
     * Get InboxReminder value
     * @return \Ews\StructType\EwsInboxReminderType[]|null
     */
    public function getInboxReminder()
    {
        return $this->InboxReminder;
    }
    /**
     * Set InboxReminder value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInboxReminderType[] $inboxReminder
     * @return \Ews\ArrayType\EwsArrayOfInboxReminderType
     */
    public function setInboxReminder(array $inboxReminder = array())
    {
        foreach ($inboxReminder as $arrayOfInboxReminderTypeInboxReminderItem) {
            // validation for constraint: itemType
            if (!$arrayOfInboxReminderTypeInboxReminderItem instanceof \Ews\StructType\EwsInboxReminderType) {
                throw new \InvalidArgumentException(sprintf('The InboxReminder property can only contain items of \Ews\StructType\EwsInboxReminderType, "%s" given', is_object($arrayOfInboxReminderTypeInboxReminderItem) ? get_class($arrayOfInboxReminderTypeInboxReminderItem) : gettype($arrayOfInboxReminderTypeInboxReminderItem)), __LINE__);
            }
        }
        $this->InboxReminder = $inboxReminder;
        return $this;
    }
    /**
     * Add item to InboxReminder value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInboxReminderType $item
     * @return \Ews\ArrayType\EwsArrayOfInboxReminderType
     */
    public function addToInboxReminder(\Ews\StructType\EwsInboxReminderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsInboxReminderType) {
            throw new \InvalidArgumentException(sprintf('The InboxReminder property can only contain items of \Ews\StructType\EwsInboxReminderType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InboxReminder[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsInboxReminderType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsInboxReminderType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsInboxReminderType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsInboxReminderType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsInboxReminderType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InboxReminder
     */
    public function getAttributeName()
    {
        return 'InboxReminder';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfInboxReminderType
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
