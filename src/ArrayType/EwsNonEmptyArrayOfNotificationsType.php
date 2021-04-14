<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfNotificationsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfNotificationsType extends AbstractStructArrayBase
{
    /**
     * The Notification
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\EwsNotificationType[]
     */
    protected array $Notification = [];
    /**
     * Constructor method for NonEmptyArrayOfNotificationsType
     * @uses EwsNonEmptyArrayOfNotificationsType::setNotification()
     * @param \StructType\EwsNotificationType[] $notification
     */
    public function __construct(array $notification = [])
    {
        $this
            ->setNotification($notification);
    }
    /**
     * Get Notification value
     * @return \StructType\EwsNotificationType[]
     */
    public function getNotification(): array
    {
        return $this->Notification;
    }
    /**
     * This method is responsible for validating the values passed to the setNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationForArrayConstraintsFromSetNotification(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfNotificationsTypeNotificationItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfNotificationsTypeNotificationItem instanceof \StructType\EwsNotificationType) {
                $invalidValues[] = is_object($nonEmptyArrayOfNotificationsTypeNotificationItem) ? get_class($nonEmptyArrayOfNotificationsTypeNotificationItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfNotificationsTypeNotificationItem), var_export($nonEmptyArrayOfNotificationsTypeNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notification property can only contain items of type \StructType\EwsNotificationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Notification value
     * @throws InvalidArgumentException
     * @param \StructType\EwsNotificationType[] $notification
     * @return \ArrayType\EwsNonEmptyArrayOfNotificationsType
     */
    public function setNotification(array $notification = []): self
    {
        // validation for constraint: array
        if ('' !== ($notificationArrayErrorMessage = self::validateNotificationForArrayConstraintsFromSetNotification($notification))) {
            throw new InvalidArgumentException($notificationArrayErrorMessage, __LINE__);
        }
        $this->Notification = $notification;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsNotificationType|null
     */
    public function current(): ?\StructType\EwsNotificationType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsNotificationType|null
     */
    public function item($index): ?\StructType\EwsNotificationType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsNotificationType|null
     */
    public function first(): ?\StructType\EwsNotificationType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsNotificationType|null
     */
    public function last(): ?\StructType\EwsNotificationType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsNotificationType|null
     */
    public function offsetGet($offset): ?\StructType\EwsNotificationType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsNotificationType $item
     * @return \ArrayType\EwsNonEmptyArrayOfNotificationsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsNotificationType) {
            throw new InvalidArgumentException(sprintf('The Notification property can only contain items of type \StructType\EwsNotificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Notification
     */
    public function getAttributeName(): string
    {
        return 'Notification';
    }
}
