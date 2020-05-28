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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setAggregatedNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAggregatedNotification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAggregatedNotificationForArrayConstraintsFromSetAggregatedNotification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) {
            // validation for constraint: itemType
            if (!$arrayOfAggregatedSocialNotificationsAggregatedNotificationItem instanceof \Ews\StructType\EwsSocialActivityAggregatedNotificationType) {
                $invalidValues[] = is_object($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) ? get_class($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) : sprintf('%s(%s)', gettype($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem), var_export($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AggregatedNotification property can only contain items of type \Ews\StructType\EwsSocialActivityAggregatedNotificationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set AggregatedNotification value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSocialActivityAggregatedNotificationType[] $aggregatedNotification
     * @return \Ews\ArrayType\EwsArrayOfAggregatedSocialNotifications
     */
    public function setAggregatedNotification(array $aggregatedNotification = array())
    {
        // validation for constraint: array
        if ('' !== ($aggregatedNotificationArrayErrorMessage = self::validateAggregatedNotificationForArrayConstraintsFromSetAggregatedNotification($aggregatedNotification))) {
            throw new \InvalidArgumentException($aggregatedNotificationArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The AggregatedNotification property can only contain items of type \Ews\StructType\EwsSocialActivityAggregatedNotificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
