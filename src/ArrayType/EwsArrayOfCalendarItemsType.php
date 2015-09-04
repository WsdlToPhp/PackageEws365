<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCalendarItemsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfCalendarItemsType extends AbstractStructArrayBase
{
    /**
     * The CalendarItem
     * @var array
     */
    public $CalendarItem;
    /**
     * Constructor method for ArrayOfCalendarItemsType
     * @uses EwsArrayOfCalendarItemsType::setCalendarItem()
     * @param array $calendarItem
     */
    public function __construct(array $calendarItem = array())
    {
        $this
            ->setCalendarItem($calendarItem);
    }
    /**
     * Get CalendarItem value
     * @return array
     */
    public function getCalendarItem()
    {
        return $this->CalendarItem;
    }
    /**
     * Set CalendarItem value
     * @param array $calendarItem
     * @return \Ews\ArrayType\EwsArrayOfCalendarItemsType
     */
    public function setCalendarItem(array $calendarItem = array())
    {
        $this->CalendarItem = $calendarItem;
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfCalendarItemsType
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
