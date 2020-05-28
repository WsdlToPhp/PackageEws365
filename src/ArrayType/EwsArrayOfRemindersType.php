<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRemindersType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRemindersType extends AbstractStructArrayBase
{
    /**
     * The Reminder
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsReminderType[]
     */
    public $Reminder;
    /**
     * Constructor method for ArrayOfRemindersType
     * @uses EwsArrayOfRemindersType::setReminder()
     * @param \Ews\StructType\EwsReminderType[] $reminder
     */
    public function __construct(array $reminder = array())
    {
        $this
            ->setReminder($reminder);
    }
    /**
     * Get Reminder value
     * @return \Ews\StructType\EwsReminderType[]|null
     */
    public function getReminder()
    {
        return $this->Reminder;
    }
    /**
     * This method is responsible for validating the values passed to the setReminder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReminder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReminderForArrayConstraintsFromSetReminder(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRemindersTypeReminderItem) {
            // validation for constraint: itemType
            if (!$arrayOfRemindersTypeReminderItem instanceof \Ews\StructType\EwsReminderType) {
                $invalidValues[] = is_object($arrayOfRemindersTypeReminderItem) ? get_class($arrayOfRemindersTypeReminderItem) : sprintf('%s(%s)', gettype($arrayOfRemindersTypeReminderItem), var_export($arrayOfRemindersTypeReminderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Reminder property can only contain items of type \Ews\StructType\EwsReminderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Reminder value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsReminderType[] $reminder
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
     */
    public function setReminder(array $reminder = array())
    {
        // validation for constraint: array
        if ('' !== ($reminderArrayErrorMessage = self::validateReminderForArrayConstraintsFromSetReminder($reminder))) {
            throw new \InvalidArgumentException($reminderArrayErrorMessage, __LINE__);
        }
        $this->Reminder = $reminder;
        return $this;
    }
    /**
     * Add item to Reminder value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsReminderType $item
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
     */
    public function addToReminder(\Ews\StructType\EwsReminderType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsReminderType) {
            throw new \InvalidArgumentException(sprintf('The Reminder property can only contain items of type \Ews\StructType\EwsReminderType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Reminder[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsReminderType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsReminderType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsReminderType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsReminderType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsReminderType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Reminder
     */
    public function getAttributeName()
    {
        return 'Reminder';
    }
}
