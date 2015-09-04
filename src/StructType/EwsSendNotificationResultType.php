<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendNotificationResultType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
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
     * @param string $subscriptionStatus
     * @return \Ews\StructType\EwsSendNotificationResultType
     */
    public function setSubscriptionStatus($subscriptionStatus = null)
    {
        if (!\Ews\EnumType\EwsSubscriptionStatusType::valueIsValid($subscriptionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $subscriptionStatus, implode(', ', \Ews\EnumType\EwsSubscriptionStatusType::getValidValues())), __LINE__);
        }
        $this->SubscriptionStatus = $subscriptionStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSendNotificationResultType
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
