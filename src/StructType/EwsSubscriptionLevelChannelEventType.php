<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SubscriptionLevelChannelEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsSubscriptionLevelChannelEventType extends EwsChannelEventType
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
     * The SequenceNumber
     * @var int
     */
    public $SequenceNumber;
    /**
     * The ActionDelay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionDelay;
    /**
     * Constructor method for SubscriptionLevelChannelEventType
     * @uses EwsSubscriptionLevelChannelEventType::setSubscriptionId()
     * @uses EwsSubscriptionLevelChannelEventType::setSequenceNumber()
     * @uses EwsSubscriptionLevelChannelEventType::setActionDelay()
     * @param string $subscriptionId
     * @param int $sequenceNumber
     * @param string $actionDelay
     */
    public function __construct($subscriptionId = null, $sequenceNumber = null, $actionDelay = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setSequenceNumber($sequenceNumber)
            ->setActionDelay($actionDelay);
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
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
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
    /**
     * Get SequenceNumber value
     * @return int|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param int $sequenceNumber
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        // validation for constraint: int
        if (!is_null($sequenceNumber) && !(is_int($sequenceNumber) || ctype_digit($sequenceNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sequenceNumber, true), gettype($sequenceNumber)), __LINE__);
        }
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get ActionDelay value
     * @return string|null
     */
    public function getActionDelay()
    {
        return $this->ActionDelay;
    }
    /**
     * Set ActionDelay value
     * @param string $actionDelay
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
     */
    public function setActionDelay($actionDelay = null)
    {
        // validation for constraint: string
        if (!is_null($actionDelay) && !is_string($actionDelay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actionDelay, true), gettype($actionDelay)), __LINE__);
        }
        $this->ActionDelay = $actionDelay;
        return $this;
    }
}
