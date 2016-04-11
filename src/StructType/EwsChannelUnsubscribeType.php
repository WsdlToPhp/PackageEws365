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
     * Meta informations extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
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
        // validation for constraint: pattern
        if (is_scalar($channelId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $channelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}", "%s" given', var_export($channelId, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($channelId) && !is_string($channelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($channelId)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsChannelUnsubscribeType
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
