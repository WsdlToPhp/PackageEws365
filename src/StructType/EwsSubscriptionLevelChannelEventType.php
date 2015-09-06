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
     * @var NonEmptyStringType
     */
    public $SubscriptionId;
    /**
     * The SequenceNumber
     * @var long
     */
    public $SequenceNumber;
    /**
     * The ActionDelay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var duration
     */
    public $ActionDelay;
    /**
     * Constructor method for SubscriptionLevelChannelEventType
     * @uses EwsSubscriptionLevelChannelEventType::setSubscriptionId()
     * @uses EwsSubscriptionLevelChannelEventType::setSequenceNumber()
     * @uses EwsSubscriptionLevelChannelEventType::setActionDelay()
     * @param NonEmptyStringType $subscriptionId
     * @param long $sequenceNumber
     * @param duration $actionDelay
     */
    public function __construct(NonEmptyStringType $subscriptionId = null, $sequenceNumber = null, $actionDelay = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setSequenceNumber($sequenceNumber)
            ->setActionDelay($actionDelay);
    }
    /**
     * Get SubscriptionId value
     * @return NonEmptyStringType|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @param NonEmptyStringType $subscriptionId
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
     */
    public function setSubscriptionId(NonEmptyStringType $subscriptionId = null)
    {
        $this->SubscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * Get SequenceNumber value
     * @return long|null
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    /**
     * Set SequenceNumber value
     * @param long $sequenceNumber
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
     */
    public function setSequenceNumber($sequenceNumber = null)
    {
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    /**
     * Get ActionDelay value
     * @return duration|null
     */
    public function getActionDelay()
    {
        return $this->ActionDelay;
    }
    /**
     * Set ActionDelay value
     * @param duration $actionDelay
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
     */
    public function setActionDelay($actionDelay = null)
    {
        $this->ActionDelay = $actionDelay;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSubscriptionLevelChannelEventType
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
