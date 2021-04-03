<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsSocialActivityAggregatedNotificationType[]
     */
    protected array $AggregatedNotification = [];
    /**
     * Constructor method for GetSocialActivityNotificationsResponseType
     * @uses EwsGetSocialActivityNotificationsResponseType::setAggregatedNotification()
     * @param \StructType\EwsSocialActivityAggregatedNotificationType[] $aggregatedNotification
     */
    public function __construct(array $aggregatedNotification = [])
    {
        $this
            ->setAggregatedNotification($aggregatedNotification);
    }
    /**
     * Get AggregatedNotification value
     * @return \StructType\EwsSocialActivityAggregatedNotificationType[]
     */
    public function getAggregatedNotification(): array
    {
        return $this->AggregatedNotification;
    }
    /**
     * This method is responsible for validating the values passed to the setAggregatedNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAggregatedNotification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAggregatedNotificationForArrayConstraintsFromSetAggregatedNotification(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) {
            // validation for constraint: itemType
            if (!$getSocialActivityNotificationsResponseTypeAggregatedNotificationItem instanceof \StructType\EwsSocialActivityAggregatedNotificationType) {
                $invalidValues[] = is_object($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) ? get_class($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem) : sprintf('%s(%s)', gettype($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem), var_export($getSocialActivityNotificationsResponseTypeAggregatedNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AggregatedNotification property can only contain items of type \StructType\EwsSocialActivityAggregatedNotificationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AggregatedNotification value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSocialActivityAggregatedNotificationType[] $aggregatedNotification
     * @return \StructType\EwsGetSocialActivityNotificationsResponseType
     */
    public function setAggregatedNotification(array $aggregatedNotification = []): self
    {
        // validation for constraint: array
        if ('' !== ($aggregatedNotificationArrayErrorMessage = self::validateAggregatedNotificationForArrayConstraintsFromSetAggregatedNotification($aggregatedNotification))) {
            throw new InvalidArgumentException($aggregatedNotificationArrayErrorMessage, __LINE__);
        }
        $this->AggregatedNotification = $aggregatedNotification;
        
        return $this;
    }
    /**
     * Add item to AggregatedNotification value
     * @throws InvalidArgumentException
     * @param \StructType\EwsSocialActivityAggregatedNotificationType $item
     * @return \StructType\EwsGetSocialActivityNotificationsResponseType
     */
    public function addToAggregatedNotification(\StructType\EwsSocialActivityAggregatedNotificationType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSocialActivityAggregatedNotificationType) {
            throw new InvalidArgumentException(sprintf('The AggregatedNotification property can only contain items of type \StructType\EwsSocialActivityAggregatedNotificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AggregatedNotification[] = $item;
        
        return $this;
    }
}
