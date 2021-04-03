<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCalendarEvent ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfCalendarEvent extends AbstractStructArrayBase
{
    /**
     * The CalendarEvent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsCalendarEvent[]
     */
    protected array $CalendarEvent = [];
    /**
     * Constructor method for ArrayOfCalendarEvent
     * @uses EwsArrayOfCalendarEvent::setCalendarEvent()
     * @param \StructType\EwsCalendarEvent[] $calendarEvent
     */
    public function __construct(array $calendarEvent = [])
    {
        $this
            ->setCalendarEvent($calendarEvent);
    }
    /**
     * Get CalendarEvent value
     * @return \StructType\EwsCalendarEvent[]
     */
    public function getCalendarEvent(): array
    {
        return $this->CalendarEvent;
    }
    /**
     * This method is responsible for validating the values passed to the setCalendarEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalendarEvent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalendarEventForArrayConstraintsFromSetCalendarEvent(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCalendarEventCalendarEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfCalendarEventCalendarEventItem instanceof \StructType\EwsCalendarEvent) {
                $invalidValues[] = is_object($arrayOfCalendarEventCalendarEventItem) ? get_class($arrayOfCalendarEventCalendarEventItem) : sprintf('%s(%s)', gettype($arrayOfCalendarEventCalendarEventItem), var_export($arrayOfCalendarEventCalendarEventItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CalendarEvent property can only contain items of type \StructType\EwsCalendarEvent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CalendarEvent value
     * @throws InvalidArgumentException
     * @param \StructType\EwsCalendarEvent[] $calendarEvent
     * @return \ArrayType\EwsArrayOfCalendarEvent
     */
    public function setCalendarEvent(array $calendarEvent = []): self
    {
        // validation for constraint: array
        if ('' !== ($calendarEventArrayErrorMessage = self::validateCalendarEventForArrayConstraintsFromSetCalendarEvent($calendarEvent))) {
            throw new InvalidArgumentException($calendarEventArrayErrorMessage, __LINE__);
        }
        $this->CalendarEvent = $calendarEvent;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsCalendarEvent|null
     */
    public function current(): ?\StructType\EwsCalendarEvent
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsCalendarEvent|null
     */
    public function item($index): ?\StructType\EwsCalendarEvent
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsCalendarEvent|null
     */
    public function first(): ?\StructType\EwsCalendarEvent
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsCalendarEvent|null
     */
    public function last(): ?\StructType\EwsCalendarEvent
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsCalendarEvent|null
     */
    public function offsetGet($offset): ?\StructType\EwsCalendarEvent
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsCalendarEvent $item
     * @return \ArrayType\EwsArrayOfCalendarEvent
     */
    public function add(\StructType\EwsCalendarEvent $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarEvent
     */
    public function getAttributeName(): string
    {
        return 'CalendarEvent';
    }
}
