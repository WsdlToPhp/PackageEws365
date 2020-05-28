<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCalendarItemsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfCalendarItemsType extends AbstractStructArrayBase
{
    /**
     * The CalendarItem
     * Meta information extracted from the WSDL
     * - choice: CalendarItem
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsCalendarItemType
     */
    public $CalendarItem;
    /**
     * Constructor method for ArrayOfCalendarItemsType
     * @uses EwsArrayOfCalendarItemsType::setCalendarItem()
     * @param \Ews\StructType\EwsCalendarItemType $calendarItem
     */
    public function __construct(\Ews\StructType\EwsCalendarItemType $calendarItem = null)
    {
        $this
            ->setCalendarItem($calendarItem);
    }
    /**
     * Get CalendarItem value
     * @return \Ews\StructType\EwsCalendarItemType|null
     */
    public function getCalendarItem()
    {
        return isset($this->CalendarItem) ? $this->CalendarItem : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCalendarItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalendarItem method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCalendarItemForChoiceConstraintsFromSetCalendarItem($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CalendarItem can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CalendarItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarItemType $calendarItem
     * @return \Ews\ArrayType\EwsArrayOfCalendarItemsType
     */
    public function setCalendarItem(\Ews\StructType\EwsCalendarItemType $calendarItem = null)
    {
        // validation for constraint: choice(CalendarItem)
        if ('' !== ($calendarItemChoiceErrorMessage = self::validateCalendarItemForChoiceConstraintsFromSetCalendarItem($calendarItem))) {
            throw new \InvalidArgumentException($calendarItemChoiceErrorMessage, __LINE__);
        }
        if (is_null($calendarItem) || (is_array($calendarItem) && empty($calendarItem))) {
            unset($this->CalendarItem);
        } else {
            $this->CalendarItem = $calendarItem;
        }
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsCalendarItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCalendarItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCalendarItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCalendarItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCalendarItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarItem
     */
    public function getAttributeName()
    {
        return 'CalendarItem';
    }
}
