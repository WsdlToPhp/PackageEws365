<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSocialActivityNotificationsResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetSocialActivityNotificationsResponseType extends EwsResponseMessageType
{
    /**
     * The AggregatedNotification
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSocialActivityAggregatedNotificationType[]
     */
    public $AggregatedNotification;
    /**
     * Constructor method for GetSocialActivityNotificationsResponseType
     * @uses EwsGetSocialActivityNotificationsResponseType::setAggregatedNotification()
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType[]
     * $aggregatedNotification
     */
    public function __construct(array $aggregatedNotification = array())
    {
        $this
            ->setAggregatedNotification($aggregatedNotification);
    }
    /**
     * Get AggregatedNotification value
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType[]|null
     */
    public function getAggregatedNotification()
    {
        return $this->AggregatedNotification;
    }
    /**
     * Set AggregatedNotification value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType[]
     * $aggregatedNotification
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsResponseType
     */
    public function setAggregatedNotification(array $aggregatedNotification = array())
    {
        foreach ($aggregatedNotification as $getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) {
            // validation for constraint: itemType
            if (!$getSocialActivityNotificationsResponseTypeAggregatedNotificationItem instanceof \Ews\StructType\EwsSocialActivityAggregatedNotificationType) {
                throw new \InvalidArgumentException(sprintf('The AggregatedNotification property can only contain items of \Ews\StructType\EwsSocialActivityAggregatedNotificationType, "%s" given', is_object($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) ? get_class($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) : gettype($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem)), __LINE__);
            }
        }
        $this->AggregatedNotification = $aggregatedNotification;
        return $this;
    }
    /**
     * Add item to AggregatedNotification value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType $item
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsResponseType
     */
    public function addToAggregatedNotification(\Ews\StructType\EwsSocialActivityAggregatedNotificationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsSocialActivityAggregatedNotificationType) {
            throw new \InvalidArgumentException(sprintf('The AggregatedNotification property can only contain items of \Ews\StructType\EwsSocialActivityAggregatedNotificationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AggregatedNotification[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsResponseType
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
