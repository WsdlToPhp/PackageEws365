<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsCalendarEvent[]
     */
    public $CalendarEvent;
    /**
     * Constructor method for ArrayOfCalendarEvent
     * @uses EwsArrayOfCalendarEvent::setCalendarEvent()
     * @param \Ews\StructType\EwsCalendarEvent[] $calendarEvent
     */
    public function __construct(array $calendarEvent = array())
    {
        $this
            ->setCalendarEvent($calendarEvent);
    }
    /**
     * Get CalendarEvent value
     * @return \Ews\StructType\EwsCalendarEvent[]|null
     */
    public function getCalendarEvent()
    {
        return $this->CalendarEvent;
    }
    /**
     * This method is responsible for validating the values passed to the setCalendarEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalendarEvent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCalendarEventForArrayConstraintsFromSetCalendarEvent(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCalendarEventCalendarEventItem) {
            // validation for constraint: itemType
            if (!$arrayOfCalendarEventCalendarEventItem instanceof \Ews\StructType\EwsCalendarEvent) {
                $invalidValues[] = is_object($arrayOfCalendarEventCalendarEventItem) ? get_class($arrayOfCalendarEventCalendarEventItem) : sprintf('%s(%s)', gettype($arrayOfCalendarEventCalendarEventItem), var_export($arrayOfCalendarEventCalendarEventItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CalendarEvent property can only contain items of type \Ews\StructType\EwsCalendarEvent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CalendarEvent value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarEvent[] $calendarEvent
     * @return \Ews\ArrayType\EwsArrayOfCalendarEvent
     */
    public function setCalendarEvent(array $calendarEvent = array())
    {
        // validation for constraint: array
        if ('' !== ($calendarEventArrayErrorMessage = self::validateCalendarEventForArrayConstraintsFromSetCalendarEvent($calendarEvent))) {
            throw new \InvalidArgumentException($calendarEventArrayErrorMessage, __LINE__);
        }
        $this->CalendarEvent = $calendarEvent;
        return $this;
    }
    /**
     * Add item to CalendarEvent value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarEvent $item
     * @return \Ews\ArrayType\EwsArrayOfCalendarEvent
     */
    public function addToCalendarEvent(\Ews\StructType\EwsCalendarEvent $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsCalendarEvent) {
            throw new \InvalidArgumentException(sprintf('The CalendarEvent property can only contain items of type \Ews\StructType\EwsCalendarEvent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CalendarEvent[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCalendarEvent|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarEvent
     */
    public function getAttributeName()
    {
        return 'CalendarEvent';
    }
}
