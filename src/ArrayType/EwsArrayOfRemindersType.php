<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsReminderType[]
     */
    protected array $Reminder = [];
    /**
     * Constructor method for ArrayOfRemindersType
     * @uses EwsArrayOfRemindersType::setReminder()
     * @param \StructType\EwsReminderType[] $reminder
     */
    public function __construct(array $reminder = [])
    {
        $this
            ->setReminder($reminder);
    }
    /**
     * Get Reminder value
     * @return \StructType\EwsReminderType[]
     */
    public function getReminder(): array
    {
        return $this->Reminder;
    }
    /**
     * This method is responsible for validating the values passed to the setReminder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReminder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReminderForArrayConstraintsFromSetReminder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRemindersTypeReminderItem) {
            // validation for constraint: itemType
            if (!$arrayOfRemindersTypeReminderItem instanceof \StructType\EwsReminderType) {
                $invalidValues[] = is_object($arrayOfRemindersTypeReminderItem) ? get_class($arrayOfRemindersTypeReminderItem) : sprintf('%s(%s)', gettype($arrayOfRemindersTypeReminderItem), var_export($arrayOfRemindersTypeReminderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Reminder property can only contain items of type \StructType\EwsReminderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Reminder value
     * @throws InvalidArgumentException
     * @param \StructType\EwsReminderType[] $reminder
     * @return \ArrayType\EwsArrayOfRemindersType
     */
    public function setReminder(array $reminder = []): self
    {
        // validation for constraint: array
        if ('' !== ($reminderArrayErrorMessage = self::validateReminderForArrayConstraintsFromSetReminder($reminder))) {
            throw new InvalidArgumentException($reminderArrayErrorMessage, __LINE__);
        }
        $this->Reminder = $reminder;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsReminderType|null
     */
    public function current(): ?\StructType\EwsReminderType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsReminderType|null
     */
    public function item($index): ?\StructType\EwsReminderType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsReminderType|null
     */
    public function first(): ?\StructType\EwsReminderType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsReminderType|null
     */
    public function last(): ?\StructType\EwsReminderType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsReminderType|null
     */
    public function offsetGet($offset): ?\StructType\EwsReminderType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsReminderType $item
     * @return \ArrayType\EwsArrayOfRemindersType
     */
    public function add(\StructType\EwsReminderType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Reminder
     */
    public function getAttributeName(): string
    {
        return 'Reminder';
    }
}
