<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsChannelStatusEventType
     */
    public $ChannelStatusEvent;
    /**
     * The ChannelEventDroppedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsChannelEventDroppedChannelEventType
     */
    public $ChannelEventDroppedEvent;
    /**
     * The SubscriptionEventDroppedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType
     */
    public $SubscriptionEventDroppedEvent;
    /**
     * The SubscriptionRenewFailedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType
     */
    public $SubscriptionRenewFailedEvent;
    /**
     * The UnifiedGroupUnseenChangedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     */
    public $UnifiedGroupUnseenChangedEvent;
    /**
     * The UnifiedGroupContentChangedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType
     */
    public $UnifiedGroupContentChangedEvent;
    /**
     * The UserMembershipChangedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public $UserMembershipChangedEvent;
    /**
     * The NewSocialActivityAddedEvent
     * Meta information extracted from the WSDL
     * - choice: ChannelStatusEvent | ChannelEventDroppedEvent | SubscriptionEventDroppedEvent | SubscriptionRenewFailedEvent | UnifiedGroupUnseenChangedEvent | UnifiedGroupContentChangedEvent | UserMembershipChangedEvent | NewSocialActivityAddedEvent
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsNewSocialActivityAddedEventType
     */
    public $NewSocialActivityAddedEvent;
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
     * @param \Ews\StructType\EwsChannelStatusEventType $channelStatusEvent
     * @param \Ews\StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent
     * @param \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent
     * @param \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent
     * @param \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent
     * @param \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent
     * @param \Ews\StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent
     * @param \Ews\StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent
     */
    public function __construct(\Ews\StructType\EwsChannelStatusEventType $channelStatusEvent = null, \Ews\StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent = null, \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent = null, \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent = null, \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent = null, \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent = null, \Ews\StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent = null, \Ews\StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent = null)
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
     * @return \Ews\StructType\EwsChannelStatusEventType|null
     */
    public function getChannelStatusEvent()
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
    public function validateChannelStatusEventForChoiceConstraintsFromSetChannelStatusEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property ChannelStatusEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: ChannelStatusEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ChannelStatusEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsChannelStatusEventType $channelStatusEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setChannelStatusEvent(\Ews\StructType\EwsChannelStatusEventType $channelStatusEvent = null)
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($channelStatusEventChoiceErrorMessage = self::validateChannelStatusEventForChoiceConstraintsFromSetChannelStatusEvent($channelStatusEvent))) {
            throw new \InvalidArgumentException($channelStatusEventChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsChannelEventDroppedChannelEventType|null
     */
    public function getChannelEventDroppedEvent()
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
    public function validateChannelEventDroppedEventForChoiceConstraintsFromSetChannelEventDroppedEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property ChannelEventDroppedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: ChannelEventDroppedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ChannelEventDroppedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setChannelEventDroppedEvent(\Ews\StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent = null)
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($channelEventDroppedEventChoiceErrorMessage = self::validateChannelEventDroppedEventForChoiceConstraintsFromSetChannelEventDroppedEvent($channelEventDroppedEvent))) {
            throw new \InvalidArgumentException($channelEventDroppedEventChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType|null
     */
    public function getSubscriptionEventDroppedEvent()
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
    public function validateSubscriptionEventDroppedEventForChoiceConstraintsFromSetSubscriptionEventDroppedEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property SubscriptionEventDroppedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: SubscriptionEventDroppedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SubscriptionEventDroppedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setSubscriptionEventDroppedEvent(\Ews\StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent = null)
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($subscriptionEventDroppedEventChoiceErrorMessage = self::validateSubscriptionEventDroppedEventForChoiceConstraintsFromSetSubscriptionEventDroppedEvent($subscriptionEventDroppedEvent))) {
            throw new \InvalidArgumentException($subscriptionEventDroppedEventChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType|null
     */
    public function getSubscriptionRenewFailedEvent()
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
    public function validateSubscriptionRenewFailedEventForChoiceConstraintsFromSetSubscriptionRenewFailedEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property SubscriptionRenewFailedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: SubscriptionRenewFailedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SubscriptionRenewFailedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setSubscriptionRenewFailedEvent(\Ews\StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent = null)
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($subscriptionRenewFailedEventChoiceErrorMessage = self::validateSubscriptionRenewFailedEventForChoiceConstraintsFromSetSubscriptionRenewFailedEvent($subscriptionRenewFailedEvent))) {
            throw new \InvalidArgumentException($subscriptionRenewFailedEventChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType|null
     */
    public function getUnifiedGroupUnseenChangedEvent()
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
    public function validateUnifiedGroupUnseenChangedEventForChoiceConstraintsFromSetUnifiedGroupUnseenChangedEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property UnifiedGroupUnseenChangedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: UnifiedGroupUnseenChangedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UnifiedGroupUnseenChangedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUnifiedGroupUnseenChangedEvent(\Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent = null)
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($unifiedGroupUnseenChangedEventChoiceErrorMessage = self::validateUnifiedGroupUnseenChangedEventForChoiceConstraintsFromSetUnifiedGroupUnseenChangedEvent($unifiedGroupUnseenChangedEvent))) {
            throw new \InvalidArgumentException($unifiedGroupUnseenChangedEventChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType|null
     */
    public function getUnifiedGroupContentChangedEvent()
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
    public function validateUnifiedGroupContentChangedEventForChoiceConstraintsFromSetUnifiedGroupContentChangedEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property UnifiedGroupContentChangedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: UnifiedGroupContentChangedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UnifiedGroupContentChangedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUnifiedGroupContentChangedEvent(\Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent = null)
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($unifiedGroupContentChangedEventChoiceErrorMessage = self::validateUnifiedGroupContentChangedEventForChoiceConstraintsFromSetUnifiedGroupContentChangedEvent($unifiedGroupContentChangedEvent))) {
            throw new \InvalidArgumentException($unifiedGroupContentChangedEventChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType|null
     */
    public function getUserMembershipChangedEvent()
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
    public function validateUserMembershipChangedEventForChoiceConstraintsFromSetUserMembershipChangedEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property UserMembershipChangedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: UserMembershipChangedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set UserMembershipChangedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUserMembershipChangedEvent(\Ews\StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent = null)
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($userMembershipChangedEventChoiceErrorMessage = self::validateUserMembershipChangedEventForChoiceConstraintsFromSetUserMembershipChangedEvent($userMembershipChangedEvent))) {
            throw new \InvalidArgumentException($userMembershipChangedEventChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType|null
     */
    public function getNewSocialActivityAddedEvent()
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
    public function validateNewSocialActivityAddedEventForChoiceConstraintsFromSetNewSocialActivityAddedEvent($value)
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
                    throw new \InvalidArgumentException(sprintf('The property NewSocialActivityAddedEvent can\'t be set as the property %s is already set. Only one property must be set among these properties: NewSocialActivityAddedEvent, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set NewSocialActivityAddedEvent value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setNewSocialActivityAddedEvent(\Ews\StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent = null)
    {
        // validation for constraint: choice(ChannelStatusEvent, ChannelEventDroppedEvent, SubscriptionEventDroppedEvent, SubscriptionRenewFailedEvent, UnifiedGroupUnseenChangedEvent, UnifiedGroupContentChangedEvent, UserMembershipChangedEvent, NewSocialActivityAddedEvent)
        if ('' !== ($newSocialActivityAddedEventChoiceErrorMessage = self::validateNewSocialActivityAddedEventForChoiceConstraintsFromSetNewSocialActivityAddedEvent($newSocialActivityAddedEvent))) {
            throw new \InvalidArgumentException($newSocialActivityAddedEventChoiceErrorMessage, __LINE__);
        }
        if (is_null($newSocialActivityAddedEvent) || (is_array($newSocialActivityAddedEvent) && empty($newSocialActivityAddedEvent))) {
            unset($this->NewSocialActivityAddedEvent);
        } else {
            $this->NewSocialActivityAddedEvent = $newSocialActivityAddedEvent;
        }
        return $this;
    }
}
