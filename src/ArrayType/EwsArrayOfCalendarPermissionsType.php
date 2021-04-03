<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsCalendarPermissionType|null
     */
    protected ?\StructType\EwsCalendarPermissionType $CalendarPermission = null;
    /**
     * Constructor method for ArrayOfCalendarPermissionsType
     * @uses EwsArrayOfCalendarPermissionsType::setCalendarPermission()
     * @param \StructType\EwsCalendarPermissionType $calendarPermission
     */
    public function __construct(?\StructType\EwsCalendarPermissionType $calendarPermission = null)
    {
        $this
            ->setCalendarPermission($calendarPermission);
    }
    /**
     * Get CalendarPermission value
     * @return \StructType\EwsCalendarPermissionType|null
     */
    public function getCalendarPermission(): ?\StructType\EwsCalendarPermissionType
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
    public function validateCalendarPermissionForChoiceConstraintsFromSetCalendarPermission($value): string
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
                    throw new InvalidArgumentException(sprintf('The property CalendarPermission can\'t be set as the property %s is already set. Only one property must be set among these properties: CalendarPermission, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CalendarPermission value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsCalendarPermissionType $calendarPermission
     * @return \ArrayType\EwsArrayOfCalendarPermissionsType
     */
    public function setCalendarPermission(?\StructType\EwsCalendarPermissionType $calendarPermission = null): self
    {
        // validation for constraint: choice(CalendarPermission)
        if ('' !== ($calendarPermissionChoiceErrorMessage = self::validateCalendarPermissionForChoiceConstraintsFromSetCalendarPermission($calendarPermission))) {
            throw new InvalidArgumentException($calendarPermissionChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsCalendarPermissionType|null
     */
    public function current(): ?\StructType\EwsCalendarPermissionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsCalendarPermissionType|null
     */
    public function item($index): ?\StructType\EwsCalendarPermissionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsCalendarPermissionType|null
     */
    public function first(): ?\StructType\EwsCalendarPermissionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsCalendarPermissionType|null
     */
    public function last(): ?\StructType\EwsCalendarPermissionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsCalendarPermissionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsCalendarPermissionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsCalendarPermissionType $item
     * @return \ArrayType\EwsArrayOfCalendarPermissionsType
     */
    public function add(\StructType\EwsCalendarPermissionType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CalendarPermission
     */
    public function getAttributeName(): string
    {
        return 'CalendarPermission';
    }
}
