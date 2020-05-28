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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setInboxReminder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInboxReminder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInboxReminderForArrayConstraintsFromSetInboxReminder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInboxReminderTypeInboxReminderItem) {
            // validation for constraint: itemType
            if (!$arrayOfInboxReminderTypeInboxReminderItem instanceof \Ews\StructType\EwsInboxReminderType) {
                $invalidValues[] = is_object($arrayOfInboxReminderTypeInboxReminderItem) ? get_class($arrayOfInboxReminderTypeInboxReminderItem) : sprintf('%s(%s)', gettype($arrayOfInboxReminderTypeInboxReminderItem), var_export($arrayOfInboxReminderTypeInboxReminderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InboxReminder property can only contain items of type \Ews\StructType\EwsInboxReminderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set InboxReminder value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsInboxReminderType[] $inboxReminder
     * @return \Ews\ArrayType\EwsArrayOfInboxReminderType
     */
    public function setInboxReminder(array $inboxReminder = array())
    {
        // validation for constraint: array
        if ('' !== ($inboxReminderArrayErrorMessage = self::validateInboxReminderForArrayConstraintsFromSetInboxReminder($inboxReminder))) {
            throw new \InvalidArgumentException($inboxReminderArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The InboxReminder property can only contain items of type \Ews\StructType\EwsInboxReminderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
