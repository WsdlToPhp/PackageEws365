<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsCalendarItemType|null
     */
    protected ?\StructType\EwsCalendarItemType $CalendarItem = null;
    /**
     * Constructor method for ArrayOfCalendarItemsType
     * @uses EwsArrayOfCalendarItemsType::setCalendarItem()
     * @param \StructType\EwsCalendarItemType $calendarItem
     */
    public function __construct(?\StructType\EwsCalendarItemType $calendarItem = null)
    {
        $this
            ->setCalendarItem($calendarItem);
    }
    /**
     * Get CalendarItem value
     * @return \StructType\EwsCalendarItemType|null
     */
    public function getCalendarItem(): ?\StructType\EwsCalendarItemType
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
    public function validateCalendarItemForChoiceConstraintsFromSetCalendarItem($value): string
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
                    throw new InvalidArgumentException(sprintf('The property CalendarItem can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarItem, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CalendarItem value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsCalendarItemType $calendarItem
     * @return \ArrayType\EwsArrayOfCalendarItemsType
     */
    public function setCalendarItem(?\StructType\EwsCalendarItemType $calendarItem = null): self
    {
        // validation for constraint: choice(CalendarItem)
        if ('' !== ($calendarItemChoiceErrorMessage = self::validateCalendarItemForChoiceConstraintsFromSetCalendarItem($calendarItem))) {
            throw new InvalidArgumentException($calendarItemChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsCalendarItemType|null
     */
    public function current(): ?\StructType\EwsCalendarItemType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsCalendarItemType|null
     */
    public function item($index): ?\StructType\EwsCalendarItemType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsCalendarItemType|null
     */
    public function first(): ?\StructType\EwsCalendarItemType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsCalendarItemType|null
     */
    public function last(): ?\StructType\EwsCalendarItemType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsCalendarItemType|null
     */
    public function offsetGet($offset): ?\StructType\EwsCalendarItemType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsCalendarItemType $item
     * @return \ArrayType\EwsArrayOfCalendarItemsType
     */
    public function add(\StructType\EwsCalendarItemType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarItem
     */
    public function getAttributeName(): string
    {
        return 'CalendarItem';
    }
}
