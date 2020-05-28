<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNotificationType extends AbstractStructBase
{
    /**
     * The SubscriptionId
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - minLength: 1
     * @var string
     */
    public $SubscriptionId;
    /**
     * The PreviousWatermark
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $PreviousWatermark;
    /**
     * The MoreEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MoreEvents;
    /**
     * The CopiedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMovedCopiedEventType
     */
    public $CopiedEvent;
    /**
     * The CreatedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public $CreatedEvent;
    /**
     * The DeletedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public $DeletedEvent;
    /**
     * The ModifiedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsModifiedEventType
     */
    public $ModifiedEvent;
    /**
     * The MovedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsMovedCopiedEventType
     */
    public $MovedEvent;
    /**
     * The NewMailEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public $NewMailEvent;
    /**
     * The StatusEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsBaseNotificationEventType
     */
    public $StatusEvent;
    /**
     * The FreeBusyChangedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public $FreeBusyChangedEvent;
    /**
     * Constructor method for NotificationType
     * @uses EwsNotificationType::setSubscriptionId()
     * @uses EwsNotificationType::setPreviousWatermark()
     * @uses EwsNotificationType::setMoreEvents()
     * @uses EwsNotificationType::setCopiedEvent()
     * @uses EwsNotificationType::setCreatedEvent()
     * @uses EwsNotificationType::setDeletedEvent()
     * @uses EwsNotificationType::setModifiedEvent()
     * @uses EwsNotificationType::setMovedEvent()
     * @uses EwsNotificationType::setNewMailEvent()
     * @uses EwsNotificationType::setStatusEvent()
     * @uses EwsNotificationType::setFreeBusyChangedEvent()
     * @param string $subscriptionId
     * @param string $previousWatermark
     * @param bool $moreEvents
     * @param \Ews\StructType\EwsMovedCopiedEventType $copiedEvent
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $createdEvent
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $deletedEvent
     * @param \Ews\StructType\EwsModifiedEventType $modifiedEvent
     * @param \Ews\StructType\EwsMovedCopiedEventType $movedEvent
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $newMailEvent
     * @param \Ews\StructType\EwsBaseNotificationEventType $statusEvent
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent
     */
    public function __construct($subscriptionId = null, $previousWatermark = null, $moreEvents = null, \Ews\StructType\EwsMovedCopiedEventType $copiedEvent = null, \Ews\StructType\EwsBaseObjectChangedEventType $createdEvent = null, \Ews\StructType\EwsBaseObjectChangedEventType $deletedEvent = null, \Ews\StructType\EwsModifiedEventType $modifiedEvent = null, \Ews\StructType\EwsMovedCopiedEventType $movedEvent = null, \Ews\StructType\EwsBaseObjectChangedEventType $newMailEvent = null, \Ews\StructType\EwsBaseNotificationEventType $statusEvent = null, \Ews\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setPreviousWatermark($previousWatermark)
            ->setMoreEvents($moreEvents)
            ->setCopiedEvent($copiedEvent)
            ->setCreatedEvent($createdEvent)
            ->setDeletedEvent($deletedEvent)
            ->setModifiedEvent($modifiedEvent)
            ->setMovedEvent($movedEvent)
            ->setNewMailEvent($newMailEvent)
            ->setStatusEvent($statusEvent)
            ->setFreeBusyChangedEvent($freeBusyChangedEvent);
    }
    /**
     * Get SubscriptionId value
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @param string $subscriptionId
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setSubscriptionId($subscriptionId = null)
    {
        // validation for constraint: string
        if (!is_null($subscriptionId) && !is_string($subscriptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subscriptionId, true), gettype($subscriptionId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($subscriptionId) && mb_strlen($subscriptionId) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($subscriptionId)), __LINE__);
        }
        $this->SubscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * Get PreviousWatermark value
     * @return string|null
     */
    public function getPreviousWatermark()
    {
        return $this->PreviousWatermark;
    }
    /**
     * Set PreviousWatermark value
     * @param string $previousWatermark
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setPreviousWatermark($previousWatermark = null)
    {
        // validation for constraint: string
        if (!is_null($previousWatermark) && !is_string($previousWatermark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($previousWatermark, true), gettype($previousWatermark)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($previousWatermark) && mb_strlen($previousWatermark) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($previousWatermark)), __LINE__);
        }
        $this->PreviousWatermark = $previousWatermark;
        return $this;
    }
    /**
     * Get MoreEvents value
     * @return bool|null
     */
    public function getMoreEvents()
    {
        return $this->MoreEvents;
    }
    /**
     * Set MoreEvents value
     * @param bool $moreEvents
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setMoreEvents($moreEvents = null)
    {
        // validation for constraint: boolean
        if (!is_null($moreEvents) && !is_bool($moreEvents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreEvents, true), gettype($moreEvents)), __LINE__);
        }
        $this->MoreEvents = $moreEvents;
        return $this;
    }
    /**
     * Get CopiedEvent value
     * @return \Ews\StructType\EwsMovedCopiedEventType|null
     */
    public function getCopiedEvent()
    {
        return isset($this->CopiedEvent) ? $this->CopiedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCopiedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCopiedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCopiedEventForChoiceConstraintsFromSetCopiedEvent($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreatedEvent',
            'DeletedEvent',
            'ModifiedEvent',
            'MovedEvent',
            'NewMailEvent',
            'StatusEvent',
            'FreeBusyChangedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CopiedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: CopiedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CopiedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMovedCopiedEventType $copiedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setCopiedEvent(\Ews\StructType\EwsMovedCopiedEventType $copiedEvent = null)
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($copiedEventChoiceErrorMessage = self::validateCopiedEventForChoiceConstraintsFromSetCopiedEvent($copiedEvent))) {
            throw new \InvalidArgumentException($copiedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($copiedEvent) || (is_array($copiedEvent) && empty($copiedEvent))) {
            unset($this->CopiedEvent);
        } else {
            $this->CopiedEvent = $copiedEvent;
        }
        return $this;
    }
    /**
     * Get CreatedEvent value
     * @return \Ews\StructType\EwsBaseObjectChangedEventType|null
     */
    public function getCreatedEvent()
    {
        return isset($this->CreatedEvent) ? $this->CreatedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreatedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreatedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreatedEventForChoiceConstraintsFromSetCreatedEvent($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CopiedEvent',
            'DeletedEvent',
            'ModifiedEvent',
            'MovedEvent',
            'NewMailEvent',
            'StatusEvent',
            'FreeBusyChangedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreatedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: CreatedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreatedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $createdEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setCreatedEvent(\Ews\StructType\EwsBaseObjectChangedEventType $createdEvent = null)
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($createdEventChoiceErrorMessage = self::validateCreatedEventForChoiceConstraintsFromSetCreatedEvent($createdEvent))) {
            throw new \InvalidArgumentException($createdEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($createdEvent) || (is_array($createdEvent) && empty($createdEvent))) {
            unset($this->CreatedEvent);
        } else {
            $this->CreatedEvent = $createdEvent;
        }
        return $this;
    }
    /**
     * Get DeletedEvent value
     * @return \Ews\StructType\EwsBaseObjectChangedEventType|null
     */
    public function getDeletedEvent()
    {
        return isset($this->DeletedEvent) ? $this->DeletedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeletedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeletedEventForChoiceConstraintsFromSetDeletedEvent($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CopiedEvent',
            'CreatedEvent',
            'ModifiedEvent',
            'MovedEvent',
            'NewMailEvent',
            'StatusEvent',
            'FreeBusyChangedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeletedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: DeletedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeletedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $deletedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setDeletedEvent(\Ews\StructType\EwsBaseObjectChangedEventType $deletedEvent = null)
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($deletedEventChoiceErrorMessage = self::validateDeletedEventForChoiceConstraintsFromSetDeletedEvent($deletedEvent))) {
            throw new \InvalidArgumentException($deletedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($deletedEvent) || (is_array($deletedEvent) && empty($deletedEvent))) {
            unset($this->DeletedEvent);
        } else {
            $this->DeletedEvent = $deletedEvent;
        }
        return $this;
    }
    /**
     * Get ModifiedEvent value
     * @return \Ews\StructType\EwsModifiedEventType|null
     */
    public function getModifiedEvent()
    {
        return isset($this->ModifiedEvent) ? $this->ModifiedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setModifiedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setModifiedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateModifiedEventForChoiceConstraintsFromSetModifiedEvent($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CopiedEvent',
            'CreatedEvent',
            'DeletedEvent',
            'MovedEvent',
            'NewMailEvent',
            'StatusEvent',
            'FreeBusyChangedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ModifiedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: ModifiedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ModifiedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsModifiedEventType $modifiedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setModifiedEvent(\Ews\StructType\EwsModifiedEventType $modifiedEvent = null)
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($modifiedEventChoiceErrorMessage = self::validateModifiedEventForChoiceConstraintsFromSetModifiedEvent($modifiedEvent))) {
            throw new \InvalidArgumentException($modifiedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($modifiedEvent) || (is_array($modifiedEvent) && empty($modifiedEvent))) {
            unset($this->ModifiedEvent);
        } else {
            $this->ModifiedEvent = $modifiedEvent;
        }
        return $this;
    }
    /**
     * Get MovedEvent value
     * @return \Ews\StructType\EwsMovedCopiedEventType|null
     */
    public function getMovedEvent()
    {
        return isset($this->MovedEvent) ? $this->MovedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMovedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMovedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMovedEventForChoiceConstraintsFromSetMovedEvent($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CopiedEvent',
            'CreatedEvent',
            'DeletedEvent',
            'ModifiedEvent',
            'NewMailEvent',
            'StatusEvent',
            'FreeBusyChangedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property MovedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: MovedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set MovedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsMovedCopiedEventType $movedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setMovedEvent(\Ews\StructType\EwsMovedCopiedEventType $movedEvent = null)
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($movedEventChoiceErrorMessage = self::validateMovedEventForChoiceConstraintsFromSetMovedEvent($movedEvent))) {
            throw new \InvalidArgumentException($movedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($movedEvent) || (is_array($movedEvent) && empty($movedEvent))) {
            unset($this->MovedEvent);
        } else {
            $this->MovedEvent = $movedEvent;
        }
        return $this;
    }
    /**
     * Get NewMailEvent value
     * @return \Ews\StructType\EwsBaseObjectChangedEventType|null
     */
    public function getNewMailEvent()
    {
        return isset($this->NewMailEvent) ? $this->NewMailEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNewMailEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNewMailEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNewMailEventForChoiceConstraintsFromSetNewMailEvent($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CopiedEvent',
            'CreatedEvent',
            'DeletedEvent',
            'ModifiedEvent',
            'MovedEvent',
            'StatusEvent',
            'FreeBusyChangedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property NewMailEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: NewMailEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set NewMailEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $newMailEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setNewMailEvent(\Ews\StructType\EwsBaseObjectChangedEventType $newMailEvent = null)
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($newMailEventChoiceErrorMessage = self::validateNewMailEventForChoiceConstraintsFromSetNewMailEvent($newMailEvent))) {
            throw new \InvalidArgumentException($newMailEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($newMailEvent) || (is_array($newMailEvent) && empty($newMailEvent))) {
            unset($this->NewMailEvent);
        } else {
            $this->NewMailEvent = $newMailEvent;
        }
        return $this;
    }
    /**
     * Get StatusEvent value
     * @return \Ews\StructType\EwsBaseNotificationEventType|null
     */
    public function getStatusEvent()
    {
        return isset($this->StatusEvent) ? $this->StatusEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setStatusEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatusEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateStatusEventForChoiceConstraintsFromSetStatusEvent($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CopiedEvent',
            'CreatedEvent',
            'DeletedEvent',
            'ModifiedEvent',
            'MovedEvent',
            'NewMailEvent',
            'FreeBusyChangedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property StatusEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: StatusEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set StatusEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBaseNotificationEventType $statusEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setStatusEvent(\Ews\StructType\EwsBaseNotificationEventType $statusEvent = null)
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($statusEventChoiceErrorMessage = self::validateStatusEventForChoiceConstraintsFromSetStatusEvent($statusEvent))) {
            throw new \InvalidArgumentException($statusEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($statusEvent) || (is_array($statusEvent) && empty($statusEvent))) {
            unset($this->StatusEvent);
        } else {
            $this->StatusEvent = $statusEvent;
        }
        return $this;
    }
    /**
     * Get FreeBusyChangedEvent value
     * @return \Ews\StructType\EwsBaseObjectChangedEventType|null
     */
    public function getFreeBusyChangedEvent()
    {
        return isset($this->FreeBusyChangedEvent) ? $this->FreeBusyChangedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFreeBusyChangedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFreeBusyChangedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFreeBusyChangedEventForChoiceConstraintsFromSetFreeBusyChangedEvent($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CopiedEvent',
            'CreatedEvent',
            'DeletedEvent',
            'ModifiedEvent',
            'MovedEvent',
            'NewMailEvent',
            'StatusEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property FreeBusyChangedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: FreeBusyChangedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FreeBusyChangedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setFreeBusyChangedEvent(\Ews\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent = null)
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($freeBusyChangedEventChoiceErrorMessage = self::validateFreeBusyChangedEventForChoiceConstraintsFromSetFreeBusyChangedEvent($freeBusyChangedEvent))) {
            throw new \InvalidArgumentException($freeBusyChangedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($freeBusyChangedEvent) || (is_array($freeBusyChangedEvent) && empty($freeBusyChangedEvent))) {
            unset($this->FreeBusyChangedEvent);
        } else {
            $this->FreeBusyChangedEvent = $freeBusyChangedEvent;
        }
        return $this;
    }
}
