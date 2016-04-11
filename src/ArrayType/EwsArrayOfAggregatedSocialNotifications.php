<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAggregatedSocialNotifications ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAggregatedSocialNotifications extends AbstractStructArrayBase
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
     * Constructor method for ArrayOfAggregatedSocialNotifications
     * @uses EwsArrayOfAggregatedSocialNotifications::setAggregatedNotification()
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType[] $aggregatedNotification
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
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType[] $aggregatedNotification
     * @return \Ews\ArrayType\EwsArrayOfAggregatedSocialNotifications
     */
    public function setAggregatedNotification(array $aggregatedNotification = array())
    {
        foreach ($aggregatedNotification as $arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) {
            // validation for constraint: itemType
            if (!$arrayOfAggregatedSocialNotificationsAggregatedNotificationItem instanceof \Ews\StructType\EwsSocialActivityAggregatedNotificationType) {
                throw new \InvalidArgumentException(sprintf('The AggregatedNotification property can only contain items of \Ews\StructType\EwsSocialActivityAggregatedNotificationType, "%s" given', is_object($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) ? get_class($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) : gettype($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem)), __LINE__);
            }
        }
        $this->AggregatedNotification = $aggregatedNotification;
        return $this;
    }
    /**
     * Add item to AggregatedNotification value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType $item
     * @return \Ews\ArrayType\EwsArrayOfAggregatedSocialNotifications
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
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AggregatedNotification
     */
    public function getAttributeName()
    {
        return 'AggregatedNotification';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfAggregatedSocialNotifications
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
