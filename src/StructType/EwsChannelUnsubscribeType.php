<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $ChannelId = null;
    /**
     * The Subscriptions
     * @var \StructType\EwsNonEmptyArrayOfChannelSubscriptionsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $Subscriptions = null;
    /**
     * Constructor method for ChannelUnsubscribeType
     * @uses EwsChannelUnsubscribeType::setChannelId()
     * @uses EwsChannelUnsubscribeType::setSubscriptions()
     * @param string $channelId
     * @param \StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $subscriptions
     */
    public function __construct(?string $channelId = null, ?\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $subscriptions = null)
    {
        $this
            ->setChannelId($channelId)
            ->setSubscriptions($subscriptions);
    }
    /**
     * Get ChannelId value
     * @return string|null
     */
    public function getChannelId(): ?string
    {
        return $this->ChannelId;
    }
    /**
     * Set ChannelId value
     * @param string $channelId
     * @return \StructType\EwsChannelUnsubscribeType
     */
    public function setChannelId(?string $channelId = null): self
    {
        // validation for constraint: string
        if (!is_null($channelId) && !is_string($channelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelId, true), gettype($channelId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($channelId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $channelId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($channelId, true)), __LINE__);
        }
        $this->ChannelId = $channelId;
        
        return $this;
    }
    /**
     * Get Subscriptions value
     * @return \StructType\EwsNonEmptyArrayOfChannelSubscriptionsType|null
     */
    public function getSubscriptions(): ?\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType
    {
        return $this->Subscriptions;
    }
    /**
     * Set Subscriptions value
     * @param \StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $subscriptions
     * @return \StructType\EwsChannelUnsubscribeType
     */
    public function setSubscriptions(?\StructType\EwsNonEmptyArrayOfChannelSubscriptionsType $subscriptions = null): self
    {
        $this->Subscriptions = $subscriptions;
        
        return $this;
    }
}
