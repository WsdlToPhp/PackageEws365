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
     * Meta information extracted from the WSDL
     * - choice: CalendarPermission
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsCalendarPermissionType
     */
    public $CalendarPermission;
    /**
     * Constructor method for ArrayOfCalendarPermissionsType
     * @uses EwsArrayOfCalendarPermissionsType::setCalendarPermission()
     * @param \Ews\StructType\EwsCalendarPermissionType $calendarPermission
     */
    public function __construct(\Ews\StructType\EwsCalendarPermissionType $calendarPermission = null)
    {
        $this
            ->setCalendarPermission($calendarPermission);
    }
    /**
     * Get CalendarPermission value
     * @return \Ews\StructType\EwsCalendarPermissionType|null
     */
    public function getCalendarPermission()
    {
        return isset($this->CalendarPermission) ? $this->CalendarPermission : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCalendarPermission method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCalendarPermission method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCalendarPermissionForChoiceConstraintsFromSetCalendarPermission($value)
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
                    throw new \InvalidArgumentException(sprintf('The property CalendarPermission can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarPermission, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CalendarPermission value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCalendarPermissionType $calendarPermission
     * @return \Ews\ArrayType\EwsArrayOfCalendarPermissionsType
     */
    public function setCalendarPermission(\Ews\StructType\EwsCalendarPermissionType $calendarPermission = null)
    {
        // validation for constraint: choice(CalendarPermission)
        if ('' !== ($calendarPermissionChoiceErrorMessage = self::validateCalendarPermissionForChoiceConstraintsFromSetCalendarPermission($calendarPermission))) {
            throw new \InvalidArgumentException($calendarPermissionChoiceErrorMessage, __LINE__);
        }
        if (is_null($calendarPermission) || (is_array($calendarPermission) && empty($calendarPermission))) {
            unset($this->CalendarPermission);
        } else {
            $this->CalendarPermission = $calendarPermission;
        }
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
}
