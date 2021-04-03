<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsReminderItemActionType[]
     */
    protected array $ReminderItemAction = [];
    /**
     * Constructor method for NonEmptyArrayOfReminderItemActionType
     * @uses EwsNonEmptyArrayOfReminderItemActionType::setReminderItemAction()
     * @param \StructType\EwsReminderItemActionType[] $reminderItemAction
     */
    public function __construct(array $reminderItemAction)
    {
        $this
            ->setReminderItemAction($reminderItemAction);
    }
    /**
     * Get ReminderItemAction value
     * @return \StructType\EwsReminderItemActionType[]
     */
    public function getReminderItemAction(): array
    {
        return $this->ReminderItemAction;
    }
    /**
     * This method is responsible for validating the values passed to the setReminderItemAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReminderItemAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReminderItemActionForArrayConstraintsFromSetReminderItemAction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem instanceof \StructType\EwsReminderItemActionType) {
                $invalidValues[] = is_object($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) ? get_class($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem), var_export($nonEmptyArrayOfReminderItemActionTypeReminderItemActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ReminderItemAction property can only contain items of type \StructType\EwsReminderItemActionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ReminderItemAction value
     * @throws InvalidArgumentException
     * @param \StructType\EwsReminderItemActionType[] $reminderItemAction
     * @return \ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public function setReminderItemAction(array $reminderItemAction): self
    {
        // validation for constraint: array
        if ('' !== ($reminderItemActionArrayErrorMessage = self::validateReminderItemActionForArrayConstraintsFromSetReminderItemAction($reminderItemAction))) {
            throw new InvalidArgumentException($reminderItemActionArrayErrorMessage, __LINE__);
        }
        $this->ReminderItemAction = $reminderItemAction;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsReminderItemActionType|null
     */
    public function current(): ?\StructType\EwsReminderItemActionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsReminderItemActionType|null
     */
    public function item($index): ?\StructType\EwsReminderItemActionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsReminderItemActionType|null
     */
    public function first(): ?\StructType\EwsReminderItemActionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsReminderItemActionType|null
     */
    public function last(): ?\StructType\EwsReminderItemActionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsReminderItemActionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsReminderItemActionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsReminderItemActionType $item
     * @return \ArrayType\EwsNonEmptyArrayOfReminderItemActionType
     */
    public function add(\StructType\EwsReminderItemActionType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ReminderItemAction
     */
    public function getAttributeName(): string
    {
        return 'ReminderItemAction';
    }
}
