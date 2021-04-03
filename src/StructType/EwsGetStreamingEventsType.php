<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $SubscriptionIds = null;
    /**
     * The ConnectionTimeout
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 30
     * - minInclusive: 1
     * @var int|null
     */
    protected ?int $ConnectionTimeout = null;
    /**
     * Constructor method for GetStreamingEventsType
     * @uses EwsGetStreamingEventsType::setSubscriptionIds()
     * @uses EwsGetStreamingEventsType::setConnectionTimeout()
     * @param \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $subscriptionIds
     * @param int $connectionTimeout
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $subscriptionIds = null, ?int $connectionTimeout = null)
    {
        $this
            ->setSubscriptionIds($subscriptionIds)
            ->setConnectionTimeout($connectionTimeout);
    }
    /**
     * Get SubscriptionIds value
     * @return \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType|null
     */
    public function getSubscriptionIds(): ?\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
    {
        return $this->SubscriptionIds;
    }
    /**
     * Set SubscriptionIds value
     * @param \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $subscriptionIds
     * @return \StructType\EwsGetStreamingEventsType
     */
    public function setSubscriptionIds(?\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $subscriptionIds = null): self
    {
        $this->SubscriptionIds = $subscriptionIds;
        
        return $this;
    }
    /**
     * Get ConnectionTimeout value
     * @return int|null
     */
    public function getConnectionTimeout(): ?int
    {
        return $this->ConnectionTimeout;
    }
    /**
     * Set ConnectionTimeout value
     * @param int $connectionTimeout
     * @return \StructType\EwsGetStreamingEventsType
     */
    public function setConnectionTimeout(?int $connectionTimeout = null): self
    {
        // validation for constraint: int
        if (!is_null($connectionTimeout) && !(is_int($connectionTimeout) || ctype_digit($connectionTimeout))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectionTimeout, true), gettype($connectionTimeout)), __LINE__);
        }
        // validation for constraint: maxInclusive(30)
        if (!is_null($connectionTimeout) && $connectionTimeout > 30) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 30', var_export($connectionTimeout, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($connectionTimeout) && $connectionTimeout < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($connectionTimeout, true)), __LINE__);
        }
        $this->ConnectionTimeout = $connectionTimeout;
        
        return $this;
    }
}
