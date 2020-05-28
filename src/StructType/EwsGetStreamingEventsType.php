<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStreamingEventsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetStreamingEventsType extends EwsBaseRequestType
{
    /**
     * The SubscriptionIds
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     */
    public $SubscriptionIds;
    /**
     * The ConnectionTimeout
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 30
     * - minInclusive: 1
     * @var int
     */
    public $ConnectionTimeout;
    /**
     * Constructor method for GetStreamingEventsType
     * @uses EwsGetStreamingEventsType::setSubscriptionIds()
     * @uses EwsGetStreamingEventsType::setConnectionTimeout()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $subscriptionIds
     * @param int $connectionTimeout
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $subscriptionIds = null, $connectionTimeout = null)
    {
        $this
            ->setSubscriptionIds($subscriptionIds)
            ->setConnectionTimeout($connectionTimeout);
    }
    /**
     * Get SubscriptionIds value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType|null
     */
    public function getSubscriptionIds()
    {
        return $this->SubscriptionIds;
    }
    /**
     * Set SubscriptionIds value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $subscriptionIds
     * @return \Ews\StructType\EwsGetStreamingEventsType
     */
    public function setSubscriptionIds(\Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $subscriptionIds = null)
    {
        $this->SubscriptionIds = $subscriptionIds;
        return $this;
    }
    /**
     * Get ConnectionTimeout value
     * @return int|null
     */
    public function getConnectionTimeout()
    {
        return $this->ConnectionTimeout;
    }
    /**
     * Set ConnectionTimeout value
     * @param int $connectionTimeout
     * @return \Ews\StructType\EwsGetStreamingEventsType
     */
    public function setConnectionTimeout($connectionTimeout = null)
    {
        // validation for constraint: int
        if (!is_null($connectionTimeout) && !(is_int($connectionTimeout) || ctype_digit($connectionTimeout))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectionTimeout, true), gettype($connectionTimeout)), __LINE__);
        }
        // validation for constraint: maxInclusive(30)
        if (!is_null($connectionTimeout) && $connectionTimeout > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 30', var_export($connectionTimeout, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($connectionTimeout) && $connectionTimeout < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($connectionTimeout, true)), __LINE__);
        }
        $this->ConnectionTimeout = $connectionTimeout;
        return $this;
    }
}
