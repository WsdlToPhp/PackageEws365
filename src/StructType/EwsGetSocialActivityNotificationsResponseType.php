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
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsSocialActivityAggregatedNotificationType[]
     */
    public $AggregatedNotification;
    /**
     * Constructor method for GetSocialActivityNotificationsResponseType
     * @uses EwsGetSocialActivityNotificationsResponseType::setAggregatedNotification()
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
        foreach ($values as $getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) {
            // validation for constraint: itemType
            if (!$getSocialActivityNotificationsResponseTypeAggregatedNotificationItem instanceof \Ews\StructType\EwsSocialActivityAggregatedNotificationType) {
                $invalidValues[] = is_object($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) ? get_class($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) : sprintf('%s(%s)', gettype($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem), var_export($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem, true));
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
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsResponseType
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
     * @return \Ews\StructType\EwsGetSocialActivityNotificationsResponseType
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
}
