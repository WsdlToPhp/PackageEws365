<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfChannelEventsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfChannelEventsType extends AbstractStructBase
{
    /**
     * The ChannelStatusEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsChannelStatusEventType|null
     */
    protected ?\StructType\EwsChannelStatusEventType $ChannelStatusEvent = null;
    /**
     * The ChannelEventDroppedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsChannelEventDroppedChannelEventType|null
     */
    protected ?\StructType\EwsChannelEventDroppedChannelEventType $ChannelEventDroppedEvent = null;
    /**
     * The SubscriptionEventDroppedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsSubscriptionEventDroppedChannelEventType|null
     */
    protected ?\StructType\EwsSubscriptionEventDroppedChannelEventType $SubscriptionEventDroppedEvent = null;
    /**
     * The SubscriptionRenewFailedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsSubscriptionRenewFailedChannelEventType|null
     */
    protected ?\StructType\EwsSubscriptionRenewFailedChannelEventType $SubscriptionRenewFailedEvent = null;
    /**
     * The UnifiedGroupUnseenChangedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsUnifiedGroupUnseenChangedChannelEventType|null
     */
    protected ?\StructType\EwsUnifiedGroupUnseenChangedChannelEventType $UnifiedGroupUnseenChangedEvent = null;
    /**
     * The UnifiedGroupContentChangedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsUnifiedGroupContentChangedChannelEventType|null
     */
    protected ?\StructType\EwsUnifiedGroupContentChangedChannelEventType $UnifiedGroupContentChangedEvent = null;
    /**
     * The UserMembershipChangedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsUserMembershipChangedChannelEventType|null
     */
    protected ?\StructType\EwsUserMembershipChangedChannelEventType $UserMembershipChangedEvent = null;
    /**
     * The NewSocialActivityAddedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsNewSocialActivityAddedEventType|null
     */
    protected ?\StructType\EwsNewSocialActivityAddedEventType $NewSocialActivityAddedEvent = null;
    /**
     * Constructor method for NonEmptyArrayOfChannelEventsType
     * @uses EwsNonEmptyArrayOfChannelEventsType::setChannelStatusEvent()
     * @uses EwsNonEmptyArrayOfChannelEventsType::setChannelEventDroppedEvent()
     * @uses EwsNonEmptyArrayOfChannelEventsType::setSubscriptionEventDroppedEvent()
     * @uses EwsNonEmptyArrayOfChannelEventsType::setSubscriptionRenewFailedEvent()
     * @uses EwsNonEmptyArrayOfChannelEventsType::setUnifiedGroupUnseenChangedEvent()
     * @uses EwsNonEmptyArrayOfChannelEventsType::setUnifiedGroupContentChangedEvent()
     * @uses EwsNonEmptyArrayOfChannelEventsType::setUserMembershipChangedEvent()
     * @uses EwsNonEmptyArrayOfChannelEventsType::setNewSocialActivityAddedEvent()
     * @param \StructType\EwsChannelStatusEventType $channelStatusEvent
     * @param \StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent
     * @param \StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent
     * @param \StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent
     * @param \StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent
     * @param \StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent
     * @param \StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent
     * @param \StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent
     */
    public function __construct(?\StructType\EwsChannelStatusEventType $channelStatusEvent = null, ?\StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent = null, ?\StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent = null, ?\StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent = null, ?\StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent = null, ?\StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent = null, ?\StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent = null, ?\StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent = null)
    {
        $this
            ->setChannelStatusEvent($channelStatusEvent)
            ->setChannelEventDroppedEvent($channelEventDroppedEvent)
            ->setSubscriptionEventDroppedEvent($subscriptionEventDroppedEvent)
            ->setSubscriptionRenewFailedEvent($subscriptionRenewFailedEvent)
            ->setUnifiedGroupUnseenChangedEvent($unifiedGroupUnseenChangedEvent)
            ->setUnifiedGroupContentChangedEvent($unifiedGroupContentChangedEvent)
            ->setUserMembershipChangedEvent($userMembershipChangedEvent)
            ->setNewSocialActivityAddedEvent($newSocialActivityAddedEvent);
    }
    /**
     * Get ChannelStatusEvent value
     * @return \StructType\EwsChannelStatusEventType|null
     */
    public function getChannelStatusEvent(): ?\StructType\EwsChannelStatusEventType
    {
        return isset($this->ChannelStatusEvent) ? $this->ChannelStatusEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setChannelStatusEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChannelStatusEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateChannelStatusEventForChoiceConstraintsFromSetChannelStatusEvent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ChannelEventDroppedEvent',
            'SubscriptionEventDroppedEvent',
            'SubscriptionRenewFailedEvent',
            'UnifiedGroupUnseenChangedEvent',
            'UnifiedGroupContentChangedEvent',
            'UserMembershipChangedEvent',
            'NewSocialActivityAddedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ChannelStatusEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: ChannelStatusEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ChannelStatusEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsChannelStatusEventType $channelStatusEvent
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setChannelStatusEvent(?\StructType\EwsChannelStatusEventType $channelStatusEvent = null): self
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($channelStatusEventChoiceErrorMessage = self::validateChannelStatusEventForChoiceConstraintsFromSetChannelStatusEvent($channelStatusEvent))) {
            throw new InvalidArgumentException($channelStatusEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($channelStatusEvent) || (is_array($channelStatusEvent) && empty($channelStatusEvent))) {
            unset($this->ChannelStatusEvent);
        } else {
            $this->ChannelStatusEvent = $channelStatusEvent;
        }
        
        return $this;
    }
    /**
     * Get ChannelEventDroppedEvent value
     * @return \StructType\EwsChannelEventDroppedChannelEventType|null
     */
    public function getChannelEventDroppedEvent(): ?\StructType\EwsChannelEventDroppedChannelEventType
    {
        return isset($this->ChannelEventDroppedEvent) ? $this->ChannelEventDroppedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setChannelEventDroppedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setChannelEventDroppedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateChannelEventDroppedEventForChoiceConstraintsFromSetChannelEventDroppedEvent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ChannelStatusEvent',
            'SubscriptionEventDroppedEvent',
            'SubscriptionRenewFailedEvent',
            'UnifiedGroupUnseenChangedEvent',
            'UnifiedGroupContentChangedEvent',
            'UserMembershipChangedEvent',
            'NewSocialActivityAddedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ChannelEventDroppedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: ChannelEventDroppedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ChannelEventDroppedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setChannelEventDroppedEvent(?\StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent = null): self
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($channelEventDroppedEventChoiceErrorMessage = self::validateChannelEventDroppedEventForChoiceConstraintsFromSetChannelEventDroppedEvent($channelEventDroppedEvent))) {
            throw new InvalidArgumentException($channelEventDroppedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($channelEventDroppedEvent) || (is_array($channelEventDroppedEvent) && empty($channelEventDroppedEvent))) {
            unset($this->ChannelEventDroppedEvent);
        } else {
            $this->ChannelEventDroppedEvent = $channelEventDroppedEvent;
        }
        
        return $this;
    }
    /**
     * Get SubscriptionEventDroppedEvent value
     * @return \StructType\EwsSubscriptionEventDroppedChannelEventType|null
     */
    public function getSubscriptionEventDroppedEvent(): ?\StructType\EwsSubscriptionEventDroppedChannelEventType
    {
        return isset($this->SubscriptionEventDroppedEvent) ? $this->SubscriptionEventDroppedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSubscriptionEventDroppedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubscriptionEventDroppedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSubscriptionEventDroppedEventForChoiceConstraintsFromSetSubscriptionEventDroppedEvent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ChannelStatusEvent',
            'ChannelEventDroppedEvent',
            'SubscriptionRenewFailedEvent',
            'UnifiedGroupUnseenChangedEvent',
            'UnifiedGroupContentChangedEvent',
            'UserMembershipChangedEvent',
            'NewSocialActivityAddedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SubscriptionEventDroppedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: SubscriptionEventDroppedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SubscriptionEventDroppedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setSubscriptionEventDroppedEvent(?\StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent = null): self
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($subscriptionEventDroppedEventChoiceErrorMessage = self::validateSubscriptionEventDroppedEventForChoiceConstraintsFromSetSubscriptionEventDroppedEvent($subscriptionEventDroppedEvent))) {
            throw new InvalidArgumentException($subscriptionEventDroppedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($subscriptionEventDroppedEvent) || (is_array($subscriptionEventDroppedEvent) && empty($subscriptionEventDroppedEvent))) {
            unset($this->SubscriptionEventDroppedEvent);
        } else {
            $this->SubscriptionEventDroppedEvent = $subscriptionEventDroppedEvent;
        }
        
        return $this;
    }
    /**
     * Get SubscriptionRenewFailedEvent value
     * @return \StructType\EwsSubscriptionRenewFailedChannelEventType|null
     */
    public function getSubscriptionRenewFailedEvent(): ?\StructType\EwsSubscriptionRenewFailedChannelEventType
    {
        return isset($this->SubscriptionRenewFailedEvent) ? $this->SubscriptionRenewFailedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSubscriptionRenewFailedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSubscriptionRenewFailedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSubscriptionRenewFailedEventForChoiceConstraintsFromSetSubscriptionRenewFailedEvent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ChannelStatusEvent',
            'ChannelEventDroppedEvent',
            'SubscriptionEventDroppedEvent',
            'UnifiedGroupUnseenChangedEvent',
            'UnifiedGroupContentChangedEvent',
            'UserMembershipChangedEvent',
            'NewSocialActivityAddedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property SubscriptionRenewFailedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: SubscriptionRenewFailedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SubscriptionRenewFailedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setSubscriptionRenewFailedEvent(?\StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent = null): self
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($subscriptionRenewFailedEventChoiceErrorMessage = self::validateSubscriptionRenewFailedEventForChoiceConstraintsFromSetSubscriptionRenewFailedEvent($subscriptionRenewFailedEvent))) {
            throw new InvalidArgumentException($subscriptionRenewFailedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($subscriptionRenewFailedEvent) || (is_array($subscriptionRenewFailedEvent) && empty($subscriptionRenewFailedEvent))) {
            unset($this->SubscriptionRenewFailedEvent);
        } else {
            $this->SubscriptionRenewFailedEvent = $subscriptionRenewFailedEvent;
        }
        
        return $this;
    }
    /**
     * Get UnifiedGroupUnseenChangedEvent value
     * @return \StructType\EwsUnifiedGroupUnseenChangedChannelEventType|null
     */
    public function getUnifiedGroupUnseenChangedEvent(): ?\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
    {
        return isset($this->UnifiedGroupUnseenChangedEvent) ? $this->UnifiedGroupUnseenChangedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnifiedGroupUnseenChangedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroupUnseenChangedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnifiedGroupUnseenChangedEventForChoiceConstraintsFromSetUnifiedGroupUnseenChangedEvent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ChannelStatusEvent',
            'ChannelEventDroppedEvent',
            'SubscriptionEventDroppedEvent',
            'SubscriptionRenewFailedEvent',
            'UnifiedGroupContentChangedEvent',
            'UserMembershipChangedEvent',
            'NewSocialActivityAddedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnifiedGroupUnseenChangedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: UnifiedGroupUnseenChangedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UnifiedGroupUnseenChangedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUnifiedGroupUnseenChangedEvent(?\StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent = null): self
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($unifiedGroupUnseenChangedEventChoiceErrorMessage = self::validateUnifiedGroupUnseenChangedEventForChoiceConstraintsFromSetUnifiedGroupUnseenChangedEvent($unifiedGroupUnseenChangedEvent))) {
            throw new InvalidArgumentException($unifiedGroupUnseenChangedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($unifiedGroupUnseenChangedEvent) || (is_array($unifiedGroupUnseenChangedEvent) && empty($unifiedGroupUnseenChangedEvent))) {
            unset($this->UnifiedGroupUnseenChangedEvent);
        } else {
            $this->UnifiedGroupUnseenChangedEvent = $unifiedGroupUnseenChangedEvent;
        }
        
        return $this;
    }
    /**
     * Get UnifiedGroupContentChangedEvent value
     * @return \StructType\EwsUnifiedGroupContentChangedChannelEventType|null
     */
    public function getUnifiedGroupContentChangedEvent(): ?\StructType\EwsUnifiedGroupContentChangedChannelEventType
    {
        return isset($this->UnifiedGroupContentChangedEvent) ? $this->UnifiedGroupContentChangedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUnifiedGroupContentChangedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnifiedGroupContentChangedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUnifiedGroupContentChangedEventForChoiceConstraintsFromSetUnifiedGroupContentChangedEvent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ChannelStatusEvent',
            'ChannelEventDroppedEvent',
            'SubscriptionEventDroppedEvent',
            'SubscriptionRenewFailedEvent',
            'UnifiedGroupUnseenChangedEvent',
            'UserMembershipChangedEvent',
            'NewSocialActivityAddedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UnifiedGroupContentChangedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: UnifiedGroupContentChangedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UnifiedGroupContentChangedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUnifiedGroupContentChangedEvent(?\StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent = null): self
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($unifiedGroupContentChangedEventChoiceErrorMessage = self::validateUnifiedGroupContentChangedEventForChoiceConstraintsFromSetUnifiedGroupContentChangedEvent($unifiedGroupContentChangedEvent))) {
            throw new InvalidArgumentException($unifiedGroupContentChangedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($unifiedGroupContentChangedEvent) || (is_array($unifiedGroupContentChangedEvent) && empty($unifiedGroupContentChangedEvent))) {
            unset($this->UnifiedGroupContentChangedEvent);
        } else {
            $this->UnifiedGroupContentChangedEvent = $unifiedGroupContentChangedEvent;
        }
        
        return $this;
    }
    /**
     * Get UserMembershipChangedEvent value
     * @return \StructType\EwsUserMembershipChangedChannelEventType|null
     */
    public function getUserMembershipChangedEvent(): ?\StructType\EwsUserMembershipChangedChannelEventType
    {
        return isset($this->UserMembershipChangedEvent) ? $this->UserMembershipChangedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUserMembershipChangedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUserMembershipChangedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUserMembershipChangedEventForChoiceConstraintsFromSetUserMembershipChangedEvent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ChannelStatusEvent',
            'ChannelEventDroppedEvent',
            'SubscriptionEventDroppedEvent',
            'SubscriptionRenewFailedEvent',
            'UnifiedGroupUnseenChangedEvent',
            'UnifiedGroupContentChangedEvent',
            'NewSocialActivityAddedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property UserMembershipChangedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: UserMembershipChangedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set UserMembershipChangedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUserMembershipChangedEvent(?\StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent = null): self
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($userMembershipChangedEventChoiceErrorMessage = self::validateUserMembershipChangedEventForChoiceConstraintsFromSetUserMembershipChangedEvent($userMembershipChangedEvent))) {
            throw new InvalidArgumentException($userMembershipChangedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($userMembershipChangedEvent) || (is_array($userMembershipChangedEvent) && empty($userMembershipChangedEvent))) {
            unset($this->UserMembershipChangedEvent);
        } else {
            $this->UserMembershipChangedEvent = $userMembershipChangedEvent;
        }
        
        return $this;
    }
    /**
     * Get NewSocialActivityAddedEvent value
     * @return \StructType\EwsNewSocialActivityAddedEventType|null
     */
    public function getNewSocialActivityAddedEvent(): ?\StructType\EwsNewSocialActivityAddedEventType
    {
        return isset($this->NewSocialActivityAddedEvent) ? $this->NewSocialActivityAddedEvent : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNewSocialActivityAddedEvent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNewSocialActivityAddedEvent method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNewSocialActivityAddedEventForChoiceConstraintsFromSetNewSocialActivityAddedEvent($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ChannelStatusEvent',
            'ChannelEventDroppedEvent',
            'SubscriptionEventDroppedEvent',
            'SubscriptionRenewFailedEvent',
            'UnifiedGroupUnseenChangedEvent',
            'UnifiedGroupContentChangedEvent',
            'UserMembershipChangedEvent',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property NewSocialActivityAddedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: NewSocialActivityAddedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set NewSocialActivityAddedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setNewSocialActivityAddedEvent(?\StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent = null): self
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($newSocialActivityAddedEventChoiceErrorMessage = self::validateNewSocialActivityAddedEventForChoiceConstraintsFromSetNewSocialActivityAddedEvent($newSocialActivityAddedEvent))) {
            throw new InvalidArgumentException($newSocialActivityAddedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($newSocialActivityAddedEvent) || (is_array($newSocialActivityAddedEvent) && empty($newSocialActivityAddedEvent))) {
            unset($this->NewSocialActivityAddedEvent);
        } else {
            $this->NewSocialActivityAddedEvent = $newSocialActivityAddedEvent;
        }
        
        return $this;
    }
}
