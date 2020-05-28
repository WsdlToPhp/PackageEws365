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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setReminderItemAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReminderItemAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReminderItemActionForArrayConstraintsFromSetReminderItemAction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem instanceof \Ews\StructType\EwsReminderItemActionType) {
                $invalidValues[] = is_object($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) ? get_class($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem), var_export($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReminderItemAction property can only contain items of type \Ews\StructType\EwsReminderItemActionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ReminderItemAction value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsReminderItemActionType[] $reminderItemAction
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public function setReminderItemAction(array $reminderItemAction = array())
    {
        // validation for constraint: array
        if ('' !== ($reminderItemActionArrayErrorMessage = self::validateReminderItemActionForArrayConstraintsFromSetReminderItemAction($reminderItemAction))) {
            throw new \InvalidArgumentException($reminderItemActionArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ReminderItemAction property can only contain items of type \Ews\StructType\EwsReminderItemActionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
