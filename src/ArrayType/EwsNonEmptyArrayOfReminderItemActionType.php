<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfReminderItemActionType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfReminderItemActionType extends AbstractStructArrayBase
{
    /**
     * The ReminderItemAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var array
     */
    public $ReminderItemAction;
    /**
     * Constructor method for NonEmptyArrayOfReminderItemActionType
     * @uses EwsNonEmptyArrayOfReminderItemActionType::setReminderItemAction()
     * @param array $reminderItemAction
     */
    public function __construct(array $reminderItemAction = array())
    {
        $this
            ->setReminderItemAction($reminderItemAction);
    }
    /**
     * Get ReminderItemAction value
     * @return array
     */
    public function getReminderItemAction()
    {
        return $this->ReminderItemAction;
    }
    /**
     * Set ReminderItemAction value
     * @param array $reminderItemAction
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public function setReminderItemAction(array $reminderItemAction = array())
    {
        $this->ReminderItemAction = $reminderItemAction;
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
