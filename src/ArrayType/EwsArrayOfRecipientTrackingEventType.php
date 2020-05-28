<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRecipientTrackingEventType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRecipientTrackingEventType extends AbstractStructArrayBase
{
    /**
     * The RecipientTrackingEvent
     * Meta information extracted from the WSDL
     * - choice: RecipientTrackingEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsRecipientTrackingEventType
     */
    public $RecipientTrackingEvent;
    /**
     * Constructor method for ArrayOfRecipientTrackingEventType
     * @uses EwsArrayOfRecipientTrackingEventType::setRecipientTrackingEvent()
     * @param \Ews\StructType\EwsRecipientTrackingEventType $recipientTrackingEvent
     */
    public function __construct(\Ews\StructType\EwsRecipientTrackingEventType $recipientTrackingEvent = null)
    {
        $this
            ->setRecipientTrackingEvent($recipientTrackingEvent);
    }
    /**
     * Get RecipientTrackingEvent value
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function getRecipientTrackingEvent()
    {
        return isset($this->RecipientTrackingEvent) ? $this->RecipientTrackingEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRecipientTrackingEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientTrackingEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRecipientTrackingEventForChoiceConstraintsFromSetRecipientTrackingEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property RecipientTrackingEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: RecipientTrackingEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set RecipientTrackingEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRecipientTrackingEventType $recipientTrackingEvent
     * @return \Ews\ArrayType\EwsArrayOfRecipientTrackingEventType
     */
    public function setRecipientTrackingEvent(\Ews\StructType\EwsRecipientTrackingEventType $recipientTrackingEvent = null)
    {
        // validation for constraint: choice(RecipientTrackingEvent)
        if ('' !== ($recipientTrackingEventChoiceErrorMessage = self::validateRecipientTrackingEventForChoiceConstraintsFromSetRecipientTrackingEvent($recipientTrackingEvent))) {
            throw new \InvalidArgumentException($recipientTrackingEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($recipientTrackingEvent) || (is_array($recipientTrackingEvent) && empty($recipientTrackingEvent))) {
            unset($this->RecipientTrackingEvent);
        } else {
            $this->RecipientTrackingEvent = $recipientTrackingEvent;
        }
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRecipientTrackingEventType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RecipientTrackingEvent
     */
    public function getAttributeName()
    {
        return 'RecipientTrackingEvent';
    }
}
