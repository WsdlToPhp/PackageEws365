<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfChannelSubscriptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfChannelSubscriptionsType extends AbstractStructBase
{
    /**
     * The UnifiedGroupUnseenChangedSubscription
     * @var \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType
     */
    public $UnifiedGroupUnseenChangedSubscription;
    /**
     * The UnifiedGroupContentChangedSubscription
     * @var \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType
     */
    public $UnifiedGroupContentChangedSubscription;
    /**
     * The UserMembershipChangedSubscription
     * @var \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType
     */
    public $UserMembershipChangedSubscription;
    /**
     * The NewSocialActivityAddedSubscription
     * @var \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType
     */
    public $NewSocialActivityAddedSubscription;
    /**
     * Constructor method for NonEmptyArrayOfChannelSubscriptionsType
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUnifiedGroupUnseenChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUnifiedGroupContentChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setUserMembershipChangedSubscription()
     * @uses EwsNonEmptyArrayOfChannelSubscriptionsType::setNewSocialActivityAddedSubscription()
     * @param \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription
     * @param \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription
     * @param \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription
     * @param \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription
     */
    public function __construct(\Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription = null, \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription = null, \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription = null, \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription = null)
    {
        $this
            ->setUnifiedGroupUnseenChangedSubscription($unifiedGroupUnseenChangedSubscription)
            ->setUnifiedGroupContentChangedSubscription($unifiedGroupContentChangedSubscription)
            ->setUserMembershipChangedSubscription($userMembershipChangedSubscription)
            ->setNewSocialActivityAddedSubscription($newSocialActivityAddedSubscription);
    }
    /**
     * Get UnifiedGroupUnseenChangedSubscription value
     * @return \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType|null
     */
    public function getUnifiedGroupUnseenChangedSubscription()
    {
        return $this->UnifiedGroupUnseenChangedSubscription;
    }
    /**
     * Set UnifiedGroupUnseenChangedSubscription value
     * @param \Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUnifiedGroupUnseenChangedSubscription(\Ews\StructType\EwsUnifiedGroupUnseenChangedChannelSubscriptionType $unifiedGroupUnseenChangedSubscription = null)
    {
        $this->UnifiedGroupUnseenChangedSubscription = $unifiedGroupUnseenChangedSubscription;
        return $this;
    }
    /**
     * Get UnifiedGroupContentChangedSubscription value
     * @return \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType|null
     */
    public function getUnifiedGroupContentChangedSubscription()
    {
        return $this->UnifiedGroupContentChangedSubscription;
    }
    /**
     * Set UnifiedGroupContentChangedSubscription value
     * @param \Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUnifiedGroupContentChangedSubscription(\Ews\StructType\EwsUnifiedGroupContentChangedChannelSubscriptionType $unifiedGroupContentChangedSubscription = null)
    {
        $this->UnifiedGroupContentChangedSubscription = $unifiedGroupContentChangedSubscription;
        return $this;
    }
    /**
     * Get UserMembershipChangedSubscription value
     * @return \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType|null
     */
    public function getUserMembershipChangedSubscription()
    {
        return $this->UserMembershipChangedSubscription;
    }
    /**
     * Set UserMembershipChangedSubscription value
     * @param \Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setUserMembershipChangedSubscription(\Ews\StructType\EwsUserMembershipChangedChannelSubscriptionType $userMembershipChangedSubscription = null)
    {
        $this->UserMembershipChangedSubscription = $userMembershipChangedSubscription;
        return $this;
    }
    /**
     * Get NewSocialActivityAddedSubscription value
     * @return \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType|null
     */
    public function getNewSocialActivityAddedSubscription()
    {
        return $this->NewSocialActivityAddedSubscription;
    }
    /**
     * Set NewSocialActivityAddedSubscription value
     * @param \Ews\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public function setNewSocialActivityAddedSubscription(\Ews\StructType\EwsNewSocialActivityAddedSubscriptionType $newSocialActivityAddedSubscription = null)
    {
        $this->NewSocialActivityAddedSubscription = $newSocialActivityAddedSubscription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
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
