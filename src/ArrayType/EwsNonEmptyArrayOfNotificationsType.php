<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsNotificationType[]
     */
    public $Notification;
    /**
     * Constructor method for NonEmptyArrayOfNotificationsType
     * @uses EwsNonEmptyArrayOfNotificationsType::setNotification()
     * @param \Ews\StructType\EwsNotificationType[] $notification
     */
    public function __construct(array $notification = array())
    {
        $this
            ->setNotification($notification);
    }
    /**
     * Get Notification value
     * @return \Ews\StructType\EwsNotificationType[]|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    /**
     * This method is responsible for validating the values passed to the setNotification method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNotification method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNotificationForArrayConstraintsFromSetNotification(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfNotificationsTypeNotificationItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfNotificationsTypeNotificationItem instanceof \Ews\StructType\EwsNotificationType) {
                $invalidValues[] = is_object($nonEmptyArrayOfNotificationsTypeNotificationItem) ? get_class($nonEmptyArrayOfNotificationsTypeNotificationItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfNotificationsTypeNotificationItem), var_export($nonEmptyArrayOfNotificationsTypeNotificationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Notification property can only contain items of type \Ews\StructType\EwsNotificationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Notification value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNotificationType[] $notification
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType
     */
    public function setNotification(array $notification = array())
    {
        // validation for constraint: array
        if ('' !== ($notificationArrayErrorMessage = self::validateNotificationForArrayConstraintsFromSetNotification($notification))) {
            throw new \InvalidArgumentException($notificationArrayErrorMessage, __LINE__);
        }
        $this->Notification = $notification;
        return $this;
    }
    /**
     * Add item to Notification value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNotificationType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType
     */
    public function addToNotification(\Ews\StructType\EwsNotificationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsNotificationType) {
            throw new \InvalidArgumentException(sprintf('The Notification property can only contain items of type \Ews\StructType\EwsNotificationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Notification[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsNotificationType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsNotificationType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsNotificationType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsNotificationType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsNotificationType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Notification
     */
    public function getAttributeName()
    {
        return 'Notification';
    }
}
