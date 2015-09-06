<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCalendarPermissionsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfCalendarPermissionsType extends AbstractStructArrayBase
{
    /**
     * The CalendarPermission
     * @var array
     */
    public $CalendarPermission;
    /**
     * Constructor method for ArrayOfCalendarPermissionsType
     * @uses EwsArrayOfCalendarPermissionsType::setCalendarPermission()
     * @param array $calendarPermission
     */
    public function __construct(array $calendarPermission = array())
    {
        $this
            ->setCalendarPermission($calendarPermission);
    }
    /**
     * Get CalendarPermission value
     * @return array
     */
    public function getCalendarPermission()
    {
        return $this->CalendarPermission;
    }
    /**
     * Set CalendarPermission value
     * @param array $calendarPermission
     * @return \Ews\ArrayType\EwsArrayOfCalendarPermissionsType
     */
    public function setCalendarPermission(array $calendarPermission = array())
    {
        $this->CalendarPermission = $calendarPermission;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsCalendarPermissionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsCalendarPermissionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsCalendarPermissionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsCalendarPermissionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsCalendarPermissionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarPermission
     */
    public function getAttributeName()
    {
        return 'CalendarPermission';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfCalendarPermissionsType
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
