<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendNotificationResultType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSendNotificationResultType extends AbstractStructBase
{
    /**
     * The SubscriptionStatus
     * @var string
     */
    public $SubscriptionStatus;
    /**
     * Constructor method for SendNotificationResultType
     * @uses EwsSendNotificationResultType::setSubscriptionStatus()
     * @param string $subscriptionStatus
     */
    public function __construct($subscriptionStatus = null)
    {
        $this
            ->setSubscriptionStatus($subscriptionStatus);
    }
    /**
     * Get SubscriptionStatus value
     * @return string|null
     */
    public function getSubscriptionStatus()
    {
        return $this->SubscriptionStatus;
    }
    /**
     * Set SubscriptionStatus value
     * @uses \Ews\EnumType\EwsSubscriptionStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsSubscriptionStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscriptionStatus
     * @return \Ews\StructType\EwsSendNotificationResultType
     */
    public function setSubscriptionStatus($subscriptionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsSubscriptionStatusType::valueIsValid($subscriptionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsSubscriptionStatusType', is_array($subscriptionStatus) ? implode(', ', $subscriptionStatus) : var_export($subscriptionStatus, true), implode(', ', \Ews\EnumType\EwsSubscriptionStatusType::getValidValues())), __LINE__);
        }
        $this->SubscriptionStatus = $subscriptionStatus;
        return $this;
    }
}
