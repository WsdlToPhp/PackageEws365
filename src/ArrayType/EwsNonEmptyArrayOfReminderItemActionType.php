<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfReminderItemActionType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfReminderItemActionType extends AbstractStructArrayBase
{
    /**
     * The ReminderItemAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsReminderItemActionType[]
     */
    public $ReminderItemAction;
    /**
     * Constructor method for NonEmptyArrayOfReminderItemActionType
     * @uses EwsNonEmptyArrayOfReminderItemActionType::setReminderItemAction()
     * @param \Ews\StructType\EwsReminderItemActionType[] $reminderItemAction
     */
    public function __construct(array $reminderItemAction = array())
    {
        $this
            ->setReminderItemAction($reminderItemAction);
    }
    /**
     * Get ReminderItemAction value
     * @return \Ews\StructType\EwsReminderItemActionType[]
     */
    public function getReminderItemAction()
    {
        return $this->ReminderItemAction;
    }
    /**
     * Set ReminderItemAction value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsReminderItemActionType[] $reminderItemAction
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public function setReminderItemAction(array $reminderItemAction = array())
    {
        foreach ($reminderItemAction as $nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem instanceof \Ews\StructType\EwsReminderItemActionType) {
                throw new \InvalidArgumentException(sprintf('The ReminderItemAction property can only contain items of \Ews\StructType\EwsReminderItemActionType, "%s" given', is_object($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) ? get_class($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) : gettype($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem)), __LINE__);
            }
        }
        $this->ReminderItemAction = $reminderItemAction;
        return $this;
    }
    /**
     * Add item to ReminderItemAction value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsReminderItemActionType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public function addToReminderItemAction(\Ews\StructType\EwsReminderItemActionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsReminderItemActionType) {
            throw new \InvalidArgumentException(sprintf('The ReminderItemAction property can only contain items of \Ews\StructType\EwsReminderItemActionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ReminderItemAction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsReminderItemActionType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsReminderItemActionType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsReminderItemActionType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsReminderItemActionType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsReminderItemActionType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReminderItemAction
     */
    public function getAttributeName()
    {
        return 'ReminderItemAction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
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
