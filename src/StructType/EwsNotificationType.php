<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $SubscriptionId = null;
    /**
     * The PreviousWatermark
     * Meta information extracted from the WSDL
     * - base: t:NonEmptyStringType
     * - minLength: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PreviousWatermark = null;
    /**
     * The MoreEvents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $MoreEvents = null;
    /**
     * The CopiedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsMovedCopiedEventType|null
     */
    protected ?\StructType\EwsMovedCopiedEventType $CopiedEvent = null;
    /**
     * The CreatedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsBaseObjectChangedEventType|null
     */
    protected ?\StructType\EwsBaseObjectChangedEventType $CreatedEvent = null;
    /**
     * The DeletedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsBaseObjectChangedEventType|null
     */
    protected ?\StructType\EwsBaseObjectChangedEventType $DeletedEvent = null;
    /**
     * The ModifiedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsModifiedEventType|null
     */
    protected ?\StructType\EwsModifiedEventType $ModifiedEvent = null;
    /**
     * The MovedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsMovedCopiedEventType|null
     */
    protected ?\StructType\EwsMovedCopiedEventType $MovedEvent = null;
    /**
     * The NewMailEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsBaseObjectChangedEventType|null
     */
    protected ?\StructType\EwsBaseObjectChangedEventType $NewMailEvent = null;
    /**
     * The StatusEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsBaseNotificationEventType|null
     */
    protected ?\StructType\EwsBaseNotificationEventType $StatusEvent = null;
    /**
     * The FreeBusyChangedEvent
     * Meta information extracted from the WSDL
     * - choice: CopiedEvent | CreatedEvent | DeletedEvent | ModifiedEvent | MovedEvent | NewMailEvent | StatusEvent | FreeBusyChangedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsBaseObjectChangedEventType|null
     */
    protected ?\StructType\EwsBaseObjectChangedEventType $FreeBusyChangedEvent = null;
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
     * @param \StructType\EwsMovedCopiedEventType $copiedEvent
     * @param \StructType\EwsBaseObjectChangedEventType $createdEvent
     * @param \StructType\EwsBaseObjectChangedEventType $deletedEvent
     * @param \StructType\EwsModifiedEventType $modifiedEvent
     * @param \StructType\EwsMovedCopiedEventType $movedEvent
     * @param \StructType\EwsBaseObjectChangedEventType $newMailEvent
     * @param \StructType\EwsBaseNotificationEventType $statusEvent
     * @param \StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent
     */
    public function __construct(?string $subscriptionId = null, ?string $previousWatermark = null, ?bool $moreEvents = null, ?\StructType\EwsMovedCopiedEventType $copiedEvent = null, ?\StructType\EwsBaseObjectChangedEventType $createdEvent = null, ?\StructType\EwsBaseObjectChangedEventType $deletedEvent = null, ?\StructType\EwsModifiedEventType $modifiedEvent = null, ?\StructType\EwsMovedCopiedEventType $movedEvent = null, ?\StructType\EwsBaseObjectChangedEventType $newMailEvent = null, ?\StructType\EwsBaseNotificationEventType $statusEvent = null, ?\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent = null)
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
    public function getSubscriptionId(): ?string
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @param string $subscriptionId
     * @return \StructType\EwsNotificationType
     */
    public function setSubscriptionId(?string $subscriptionId = null): self
    {
        // validation for constraint: string
        if (!is_null($subscriptionId) && !is_string($subscriptionId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subscriptionId, true), gettype($subscriptionId)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($subscriptionId) && mb_strlen((string) $subscriptionId) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $subscriptionId)), __LINE__);
        }
        $this->SubscriptionId = $subscriptionId;
        
        return $this;
    }
    /**
     * Get PreviousWatermark value
     * @return string|null
     */
    public function getPreviousWatermark(): ?string
    {
        return $this->PreviousWatermark;
    }
    /**
     * Set PreviousWatermark value
     * @param string $previousWatermark
     * @return \StructType\EwsNotificationType
     */
    public function setPreviousWatermark(?string $previousWatermark = null): self
    {
        // validation for constraint: string
        if (!is_null($previousWatermark) && !is_string($previousWatermark)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($previousWatermark, true), gettype($previousWatermark)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($previousWatermark) && mb_strlen((string) $previousWatermark) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $previousWatermark)), __LINE__);
        }
        $this->PreviousWatermark = $previousWatermark;
        
        return $this;
    }
    /**
     * Get MoreEvents value
     * @return bool|null
     */
    public function getMoreEvents(): ?bool
    {
        return $this->MoreEvents;
    }
    /**
     * Set MoreEvents value
     * @param bool $moreEvents
     * @return \StructType\EwsNotificationType
     */
    public function setMoreEvents(?bool $moreEvents = null): self
    {
        // validation for constraint: boolean
        if (!is_null($moreEvents) && !is_bool($moreEvents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreEvents, true), gettype($moreEvents)), __LINE__);
        }
        $this->MoreEvents = $moreEvents;
        
        return $this;
    }
    /**
     * Get CopiedEvent value
     * @return \StructType\EwsMovedCopiedEventType|null
     */
    public function getCopiedEvent(): ?\StructType\EwsMovedCopiedEventType
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
    public function validateCopiedEventForChoiceConstraintsFromSetCopiedEvent($value): string
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
                    throw new InvalidArgumentException(sprintf('The property CopiedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: CopiedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CopiedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsMovedCopiedEventType $copiedEvent
     * @return \StructType\EwsNotificationType
     */
    public function setCopiedEvent(?\StructType\EwsMovedCopiedEventType $copiedEvent = null): self
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($copiedEventChoiceErrorMessage = self::validateCopiedEventForChoiceConstraintsFromSetCopiedEvent($copiedEvent))) {
            throw new InvalidArgumentException($copiedEventChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsBaseObjectChangedEventType|null
     */
    public function getCreatedEvent(): ?\StructType\EwsBaseObjectChangedEventType
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
    public function validateCreatedEventForChoiceConstraintsFromSetCreatedEvent($value): string
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
                    throw new InvalidArgumentException(sprintf('The property CreatedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: CreatedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set CreatedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsBaseObjectChangedEventType $createdEvent
     * @return \StructType\EwsNotificationType
     */
    public function setCreatedEvent(?\StructType\EwsBaseObjectChangedEventType $createdEvent = null): self
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($createdEventChoiceErrorMessage = self::validateCreatedEventForChoiceConstraintsFromSetCreatedEvent($createdEvent))) {
            throw new InvalidArgumentException($createdEventChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsBaseObjectChangedEventType|null
     */
    public function getDeletedEvent(): ?\StructType\EwsBaseObjectChangedEventType
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
    public function validateDeletedEventForChoiceConstraintsFromSetDeletedEvent($value): string
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
                    throw new InvalidArgumentException(sprintf('The property DeletedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: DeletedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DeletedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsBaseObjectChangedEventType $deletedEvent
     * @return \StructType\EwsNotificationType
     */
    public function setDeletedEvent(?\StructType\EwsBaseObjectChangedEventType $deletedEvent = null): self
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($deletedEventChoiceErrorMessage = self::validateDeletedEventForChoiceConstraintsFromSetDeletedEvent($deletedEvent))) {
            throw new InvalidArgumentException($deletedEventChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsModifiedEventType|null
     */
    public function getModifiedEvent(): ?\StructType\EwsModifiedEventType
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
    public function validateModifiedEventForChoiceConstraintsFromSetModifiedEvent($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ModifiedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: ModifiedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ModifiedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsModifiedEventType $modifiedEvent
     * @return \StructType\EwsNotificationType
     */
    public function setModifiedEvent(?\StructType\EwsModifiedEventType $modifiedEvent = null): self
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($modifiedEventChoiceErrorMessage = self::validateModifiedEventForChoiceConstraintsFromSetModifiedEvent($modifiedEvent))) {
            throw new InvalidArgumentException($modifiedEventChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsMovedCopiedEventType|null
     */
    public function getMovedEvent(): ?\StructType\EwsMovedCopiedEventType
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
    public function validateMovedEventForChoiceConstraintsFromSetMovedEvent($value): string
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
                    throw new InvalidArgumentException(sprintf('The property MovedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: MovedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MovedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsMovedCopiedEventType $movedEvent
     * @return \StructType\EwsNotificationType
     */
    public function setMovedEvent(?\StructType\EwsMovedCopiedEventType $movedEvent = null): self
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($movedEventChoiceErrorMessage = self::validateMovedEventForChoiceConstraintsFromSetMovedEvent($movedEvent))) {
            throw new InvalidArgumentException($movedEventChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsBaseObjectChangedEventType|null
     */
    public function getNewMailEvent(): ?\StructType\EwsBaseObjectChangedEventType
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
    public function validateNewMailEventForChoiceConstraintsFromSetNewMailEvent($value): string
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
                    throw new InvalidArgumentException(sprintf('The property NewMailEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: NewMailEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set NewMailEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsBaseObjectChangedEventType $newMailEvent
     * @return \StructType\EwsNotificationType
     */
    public function setNewMailEvent(?\StructType\EwsBaseObjectChangedEventType $newMailEvent = null): self
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($newMailEventChoiceErrorMessage = self::validateNewMailEventForChoiceConstraintsFromSetNewMailEvent($newMailEvent))) {
            throw new InvalidArgumentException($newMailEventChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsBaseNotificationEventType|null
     */
    public function getStatusEvent(): ?\StructType\EwsBaseNotificationEventType
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
    public function validateStatusEventForChoiceConstraintsFromSetStatusEvent($value): string
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
                    throw new InvalidArgumentException(sprintf('The property StatusEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: StatusEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set StatusEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsBaseNotificationEventType $statusEvent
     * @return \StructType\EwsNotificationType
     */
    public function setStatusEvent(?\StructType\EwsBaseNotificationEventType $statusEvent = null): self
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($statusEventChoiceErrorMessage = self::validateStatusEventForChoiceConstraintsFromSetStatusEvent($statusEvent))) {
            throw new InvalidArgumentException($statusEventChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsBaseObjectChangedEventType|null
     */
    public function getFreeBusyChangedEvent(): ?\StructType\EwsBaseObjectChangedEventType
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
    public function validateFreeBusyChangedEventForChoiceConstraintsFromSetFreeBusyChangedEvent($value): string
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
                    throw new InvalidArgumentException(sprintf('The property FreeBusyChangedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: FreeBusyChangedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FreeBusyChangedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent
     * @return \StructType\EwsNotificationType
     */
    public function setFreeBusyChangedEvent(?\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent = null): self
    {
        // validation for constraint: choice(CopiedEvent, CreatedEvent, DeletedEvent, ModifiedEvent, MovedEvent, NewMailEvent, StatusEvent, FreeBusyChangedEvent)
        if ('' !== ($freeBusyChangedEventChoiceErrorMessage = self::validateFreeBusyChangedEventForChoiceConstraintsFromSetFreeBusyChangedEvent($freeBusyChangedEvent))) {
            throw new InvalidArgumentException($freeBusyChangedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($freeBusyChangedEvent) || (is_array($freeBusyChangedEvent) && empty($freeBusyChangedEvent))) {
            unset($this->FreeBusyChangedEvent);
        } else {
            $this->FreeBusyChangedEvent = $freeBusyChangedEvent;
        }
        
        return $this;
    }
}
