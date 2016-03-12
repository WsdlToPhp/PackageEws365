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
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Reminder;
    /**
     * Constructor method for ArrayOfRemindersType
     * @uses EwsArrayOfRemindersType::setReminder()
     * @param string[] $reminder
     */
    public function __construct(array $reminder = array())
    {
        $this
            ->setReminder($reminder);
    }
    /**
     * Get Reminder value
     * @return string[]|null
     */
    public function getReminder()
    {
        return $this->Reminder;
    }
    /**
     * Set Reminder value
     * @throws \InvalidArgumentException
     * @param string[] $reminder
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
     */
    public function setReminder(array $reminder = array())
    {
        $invalidValues = array();
        foreach ($reminder as $arrayOfRemindersTypeReminderItem) {
            if (!\Ews\EnumType\EwsReminderType::valueIsValid($arrayOfRemindersTypeReminderItem)) {
                $invalidValues[] = var_export($arrayOfRemindersTypeReminderItem);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Ews\EnumType\EwsReminderType::getValidValues())), __LINE__);
        }
        $this->Reminder = $reminder;
        return $this;
    }
    /**
     * Add item to Reminder value
     * @uses \Ews\EnumType\EwsReminderType::valueIsValid()
     * @uses \Ews\EnumType\EwsReminderType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
     */
    public function addToReminder($item)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsReminderType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Ews\EnumType\EwsReminderType::getValidValues())), __LINE__);
        }
        $this->Reminder[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Ews\EnumType\EwsReminderType::valueIsValid()
     * @param string $item
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
     */
    public function add($item)
    {
        if (!\Ews\EnumType\EwsReminderType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Ews\EnumType\EwsReminderType::getValidValues())), __LINE__);
        }
        return parent::add($item);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfRemindersType
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
