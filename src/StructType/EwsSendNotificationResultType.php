<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $SubscriptionStatus = null;
    /**
     * Constructor method for SendNotificationResultType
     * @uses EwsSendNotificationResultType::setSubscriptionStatus()
     * @param string $subscriptionStatus
     */
    public function __construct(?string $subscriptionStatus = null)
    {
        $this
            ->setSubscriptionStatus($subscriptionStatus);
    }
    /**
     * Get SubscriptionStatus value
     * @return string|null
     */
    public function getSubscriptionStatus(): ?string
    {
        return $this->SubscriptionStatus;
    }
    /**
     * Set SubscriptionStatus value
     * @uses \EnumType\EwsSubscriptionStatusType::valueIsValid()
     * @uses \EnumType\EwsSubscriptionStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $subscriptionStatus
     * @return \StructType\EwsSendNotificationResultType
     */
    public function setSubscriptionStatus(?string $subscriptionStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsSubscriptionStatusType::valueIsValid($subscriptionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsSubscriptionStatusType', is_array($subscriptionStatus) ? implode(', ', $subscriptionStatus) : var_export($subscriptionStatus, true), implode(', ', \EnumType\EwsSubscriptionStatusType::getValidValues())), __LINE__);
        }
        $this->SubscriptionStatus = $subscriptionStatus;
        
        return $this;
    }
}
