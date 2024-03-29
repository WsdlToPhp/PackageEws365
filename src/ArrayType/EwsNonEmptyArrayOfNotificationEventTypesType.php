<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfNotificationEventTypesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfNotificationEventTypesType extends AbstractStructArrayBase
{
    /**
     * The EventType
     * Meta information extracted from the WSDL
     * - choice: EventType
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var string|null
     */
    protected ?string $EventType = null;
    /**
     * Constructor method for NonEmptyArrayOfNotificationEventTypesType
     * @uses EwsNonEmptyArrayOfNotificationEventTypesType::setEventType()
     * @param string $eventType
     */
    public function __construct(?string $eventType = null)
    {
        $this
            ->setEventType($eventType);
    }
    /**
     * Get EventType value
     * @return string|null
     */
    public function getEventType(): ?string
    {
        return isset($this->EventType) ? $this->EventType : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEventType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEventType method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEventTypeForChoiceConstraintsFromSetEventType($value): string
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
                    throw new InvalidArgumentException(sprintf('The property EventType can\'t be set as the property %s is already set. Only one property must be set among these properties: EventType, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set EventType value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @uses \EnumType\EwsNotificationEventTypeType::valueIsValid()
     * @uses \EnumType\EwsNotificationEventTypeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $eventType
     * @return \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType
     */
    public function setEventType(?string $eventType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsNotificationEventTypeType::valueIsValid($eventType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsNotificationEventTypeType', is_array($eventType) ? implode(', ', $eventType) : var_export($eventType, true), implode(', ', \EnumType\EwsNotificationEventTypeType::getValidValues())), __LINE__);
        }
        // validation for constraint: choice(EventType)
        if ('' !== ($eventTypeChoiceErrorMessage = self::validateEventTypeForChoiceConstraintsFromSetEventType($eventType))) {
            throw new InvalidArgumentException($eventTypeChoiceErrorMessage, __LINE__);
        }
        if (is_null($eventType) || (is_array($eventType) && empty($eventType))) {
            unset($this->EventType);
        } else {
            $this->EventType = $eventType;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current(): ?string
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index): ?string
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first(): ?string
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last(): ?string
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \ArrayType\EwsNonEmptyArrayOfNotificationEventTypesType
     */
    public function add($item): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsNotificationEventTypeType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsNotificationEventTypeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\EwsNotificationEventTypeType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EventType
     */
    public function getAttributeName(): string
    {
        return 'EventType';
    }
}
