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
     * Meta informations extracted from the WSDL
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
        if (!is_null($connectionTimeout) && !is_int($connectionTimeout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($connectionTimeout)), __LINE__);
        }
        $this->ConnectionTimeout = $connectionTimeout;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetStreamingEventsType
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
