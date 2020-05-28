<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChannelUnsubscribeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsChannelUnsubscribeType extends EwsBaseRequestType
{
    /**
     * The ChannelId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ChannelId;
    /**
     * The Subscriptions
     * @var \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
     */
    public $Subscriptions;
    /**
     * Constructor method for ChannelUnsubscribeType
     * @uses EwsChannelUnsubscribeType::setChannelId()
     * @uses EwsChannelUnsubscribeType::setSubscriptions()
     * @param string $channelId
     * @param \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $subscriptions
     */
    public function __construct($channelId = null, \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $subscriptions = null)
    {
        $this
            ->setChannelId($channelId)
            ->setSubscriptions($subscriptions);
    }
    /**
     * Get ChannelId value
     * @return string|null
     */
    public function getChannelId()
    {
        return $this->ChannelId;
    }
    /**
     * Set ChannelId value
     * @param string $channelId
     * @return \Ews\StructType\EwsChannelUnsubscribeType
     */
    public function setChannelId($channelId = null)
    {
        // validation for constraint: string
        if (!is_null($channelId) && !is_string($channelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelId, true), gettype($channelId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($channelId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $channelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($channelId, true)), __LINE__);
        }
        $this->ChannelId = $channelId;
        return $this;
    }
    /**
     * Get Subscriptions value
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType|null
     */
    public function getSubscriptions()
    {
        return $this->Subscriptions;
    }
    /**
     * Set Subscriptions value
     * @param \Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $subscriptions
     * @return \Ews\StructType\EwsChannelUnsubscribeType
     */
    public function setSubscriptions(\Ews\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $subscriptions = null)
    {
        $this->Subscriptions = $subscriptions;
        return $this;
    }
}
