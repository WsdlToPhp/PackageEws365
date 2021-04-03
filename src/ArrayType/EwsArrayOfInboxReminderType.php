<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsInboxReminderType[]
     */
    protected array $InboxReminder = [];
    /**
     * Constructor method for ArrayOfInboxReminderType
     * @uses EwsArrayOfInboxReminderType::setInboxReminder()
     * @param \StructType\EwsInboxReminderType[] $inboxReminder
     */
    public function __construct(array $inboxReminder = [])
    {
        $this
            ->setInboxReminder($inboxReminder);
    }
    /**
     * Get InboxReminder value
     * @return \StructType\EwsInboxReminderType[]
     */
    public function getInboxReminder(): array
    {
        return $this->InboxReminder;
    }
    /**
     * This method is responsible for validating the values passed to the setInboxReminder method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInboxReminder method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateInboxReminderForArrayConstraintsFromSetInboxReminder(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfInboxReminderTypeInboxReminderItem) {
            // validation for constraint: itemType
            if (!$arrayOfInboxReminderTypeInboxReminderItem instanceof \StructType\EwsInboxReminderType) {
                $invalidValues[] = is_object($arrayOfInboxReminderTypeInboxReminderItem) ? get_class($arrayOfInboxReminderTypeInboxReminderItem) : sprintf('%s(%s)', gettype($arrayOfInboxReminderTypeInboxReminderItem), var_export($arrayOfInboxReminderTypeInboxReminderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The InboxReminder property can only contain items of type \StructType\EwsInboxReminderType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set InboxReminder value
     * @throws InvalidArgumentException
     * @param \StructType\EwsInboxReminderType[] $inboxReminder
     * @return \ArrayType\EwsArrayOfInboxReminderType
     */
    public function setInboxReminder(array $inboxReminder = []): self
    {
        // validation for constraint: array
        if ('' !== ($inboxReminderArrayErrorMessage = self::validateInboxReminderForArrayConstraintsFromSetInboxReminder($inboxReminder))) {
            throw new InvalidArgumentException($inboxReminderArrayErrorMessage, __LINE__);
        }
        $this->InboxReminder = $inboxReminder;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsInboxReminderType|null
     */
    public function current(): ?\StructType\EwsInboxReminderType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsInboxReminderType|null
     */
    public function item($index): ?\StructType\EwsInboxReminderType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsInboxReminderType|null
     */
    public function first(): ?\StructType\EwsInboxReminderType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsInboxReminderType|null
     */
    public function last(): ?\StructType\EwsInboxReminderType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsInboxReminderType|null
     */
    public function offsetGet($offset): ?\StructType\EwsInboxReminderType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsInboxReminderType $item
     * @return \ArrayType\EwsArrayOfInboxReminderType
     */
    public function add(\StructType\EwsInboxReminderType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InboxReminder
     */
    public function getAttributeName(): string
    {
        return 'InboxReminder';
    }
}
