<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsSocialActivityAggregatedNotificationType[]
     */
    protected array $AggregatedNotification = [];
    /**
     * Constructor method for ArrayOfAggregatedSocialNotifications
     * @uses EwsArrayOfAggregatedSocialNotifications::setAggregatedNotification()
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
        foreach ($values as $arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) {
            // validation for constraint: itemType
            if (!$arrayOfAggregatedSocialNotificationsAggregatedNotificationItem instanceof \StructType\EwsSocialActivityAggregatedNotificationType) {
                $invalidValues[] = is_object($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) ? get_class($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem) : sprintf('%s(%s)', gettype($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem), var_export($arrayOfAggregatedSocialNotificationsAggregatedNotificationItem, true));
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
     * @return \ArrayType\EwsArrayOfAggregatedSocialNotifications
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
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function current(): ?\StructType\EwsSocialActivityAggregatedNotificationType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function item($index): ?\StructType\EwsSocialActivityAggregatedNotificationType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function first(): ?\StructType\EwsSocialActivityAggregatedNotificationType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function last(): ?\StructType\EwsSocialActivityAggregatedNotificationType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsSocialActivityAggregatedNotificationType|null
     */
    public function offsetGet($offset): ?\StructType\EwsSocialActivityAggregatedNotificationType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsSocialActivityAggregatedNotificationType $item
     * @return \ArrayType\EwsArrayOfAggregatedSocialNotifications
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsSocialActivityAggregatedNotificationType) {
            throw new InvalidArgumentException(sprintf('The AggregatedNotification property can only contain items of type \StructType\EwsSocialActivityAggregatedNotificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AggregatedNotification
     */
    public function getAttributeName(): string
    {
        return 'AggregatedNotification';
    }
}
