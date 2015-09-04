<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfChannelEventsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsNonEmptyArrayOfChannelEventsType extends AbstractStructBase
{
    /**
     * The ChannelStatusEvent
     * @var \Ews\StructType\EwsChannelStatusEventType
     */
    public $ChannelStatusEvent;
    /**
     * The ChannelEventDroppedEvent
     * @var \Ews\StructType\EwsChannelEventDroppedChannelEventType
     */
    public $ChannelEventDroppedEvent;
    /**
     * The SubscriptionEventDroppedEvent
     * @var \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType
     */
    public $SubscriptionEventDroppedEvent;
    /**
     * The SubscriptionRenewFailedEvent
     * @var \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType
     */
    public $SubscriptionRenewFailedEvent;
    /**
     * The UnifiedGroupUnseenChangedEvent
     * @var \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     */
    public $UnifiedGroupUnseenChangedEvent;
    /**
     * The UnifiedGroupContentChangedEvent
     * @var \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType
     */
    public $UnifiedGroupContentChangedEvent;
    /**
     * The UserMembershipChangedEvent
     * @var \Ews\StructType\EwsUserMembershipChangedChannelEventType
     */
    public $UserMembershipChangedEvent;
    /**
     * The NewSocialActivityAddedEvent
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
     * @param \Ews\StructType\EwsChannelEventDroppedChannelEventType
     * $channelEventDroppedEvent
     * @param \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType
     * $subscriptionEventDroppedEvent
     * @param \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType
     * $subscriptionRenewFailedEvent
     * @param \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     * $unifiedGroupUnseenChangedEvent
     * @param \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType
     * $unifiedGroupContentChangedEvent
     * @param \Ews\StructType\EwsUserMembershipChangedChannelEventType
     * $userMembershipChangedEvent
     * @param \Ews\StructType\EwsNewSocialActivityAddedEventType
     * $newSocialActivityAddedEvent
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
        return $this->ChannelStatusEvent;
    }
    /**
     * Set ChannelStatusEvent value
     * @param \Ews\StructType\EwsChannelStatusEventType $channelStatusEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setChannelStatusEvent(\Ews\StructType\EwsChannelStatusEventType $channelStatusEvent = null)
    {
        $this->ChannelStatusEvent = $channelStatusEvent;
        return $this;
    }
    /**
     * Get ChannelEventDroppedEvent value
     * @return \Ews\StructType\EwsChannelEventDroppedChannelEventType|null
     */
    public function getChannelEventDroppedEvent()
    {
        return $this->ChannelEventDroppedEvent;
    }
    /**
     * Set ChannelEventDroppedEvent value
     * @param \Ews\StructType\EwsChannelEventDroppedChannelEventType
     * $channelEventDroppedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setChannelEventDroppedEvent(\Ews\StructType\EwsChannelEventDroppedChannelEventType $channelEventDroppedEvent = null)
    {
        $this->ChannelEventDroppedEvent = $channelEventDroppedEvent;
        return $this;
    }
    /**
     * Get SubscriptionEventDroppedEvent value
     * @return \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType|null
     */
    public function getSubscriptionEventDroppedEvent()
    {
        return $this->SubscriptionEventDroppedEvent;
    }
    /**
     * Set SubscriptionEventDroppedEvent value
     * @param \Ews\StructType\EwsSubscriptionEventDroppedChannelEventType
     * $subscriptionEventDroppedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setSubscriptionEventDroppedEvent(\Ews\StructType\EwsSubscriptionEventDroppedChannelEventType $subscriptionEventDroppedEvent = null)
    {
        $this->SubscriptionEventDroppedEvent = $subscriptionEventDroppedEvent;
        return $this;
    }
    /**
     * Get SubscriptionRenewFailedEvent value
     * @return \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType|null
     */
    public function getSubscriptionRenewFailedEvent()
    {
        return $this->SubscriptionRenewFailedEvent;
    }
    /**
     * Set SubscriptionRenewFailedEvent value
     * @param \Ews\StructType\EwsSubscriptionRenewFailedChannelEventType
     * $subscriptionRenewFailedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setSubscriptionRenewFailedEvent(\Ews\StructType\EwsSubscriptionRenewFailedChannelEventType $subscriptionRenewFailedEvent = null)
    {
        $this->SubscriptionRenewFailedEvent = $subscriptionRenewFailedEvent;
        return $this;
    }
    /**
     * Get UnifiedGroupUnseenChangedEvent value
     * @return \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType|null
     */
    public function getUnifiedGroupUnseenChangedEvent()
    {
        return $this->UnifiedGroupUnseenChangedEvent;
    }
    /**
     * Set UnifiedGroupUnseenChangedEvent value
     * @param \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType
     * $unifiedGroupUnseenChangedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUnifiedGroupUnseenChangedEvent(\Ews\StructType\EwsUnifiedGroupUnseenChangedChannelEventType $unifiedGroupUnseenChangedEvent = null)
    {
        $this->UnifiedGroupUnseenChangedEvent = $unifiedGroupUnseenChangedEvent;
        return $this;
    }
    /**
     * Get UnifiedGroupContentChangedEvent value
     * @return \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType|null
     */
    public function getUnifiedGroupContentChangedEvent()
    {
        return $this->UnifiedGroupContentChangedEvent;
    }
    /**
     * Set UnifiedGroupContentChangedEvent value
     * @param \Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType
     * $unifiedGroupContentChangedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUnifiedGroupContentChangedEvent(\Ews\StructType\EwsUnifiedGroupContentChangedChannelEventType $unifiedGroupContentChangedEvent = null)
    {
        $this->UnifiedGroupContentChangedEvent = $unifiedGroupContentChangedEvent;
        return $this;
    }
    /**
     * Get UserMembershipChangedEvent value
     * @return \Ews\StructType\EwsUserMembershipChangedChannelEventType|null
     */
    public function getUserMembershipChangedEvent()
    {
        return $this->UserMembershipChangedEvent;
    }
    /**
     * Set UserMembershipChangedEvent value
     * @param \Ews\StructType\EwsUserMembershipChangedChannelEventType
     * $userMembershipChangedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setUserMembershipChangedEvent(\Ews\StructType\EwsUserMembershipChangedChannelEventType $userMembershipChangedEvent = null)
    {
        $this->UserMembershipChangedEvent = $userMembershipChangedEvent;
        return $this;
    }
    /**
     * Get NewSocialActivityAddedEvent value
     * @return \Ews\StructType\EwsNewSocialActivityAddedEventType|null
     */
    public function getNewSocialActivityAddedEvent()
    {
        return $this->NewSocialActivityAddedEvent;
    }
    /**
     * Set NewSocialActivityAddedEvent value
     * @param \Ews\StructType\EwsNewSocialActivityAddedEventType
     * $newSocialActivityAddedEvent
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public function setNewSocialActivityAddedEvent(\Ews\StructType\EwsNewSocialActivityAddedEventType $newSocialActivityAddedEvent = null)
    {
        $this->NewSocialActivityAddedEvent = $newSocialActivityAddedEvent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
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
