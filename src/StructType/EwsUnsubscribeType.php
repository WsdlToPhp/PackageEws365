<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnsubscribeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUnsubscribeType extends EwsBaseRequestType
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
     * Constructor method for UnsubscribeType
     * @uses EwsUnsubscribeType::setSubscriptionId()
     * @param string $subscriptionId
     */
    public function __construct($subscriptionId = null)
    {
        $this
            ->setSubscriptionId($subscriptionId);
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
     * @return \Ews\StructType\EwsUnsubscribeType
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
}
