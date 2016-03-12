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
     * Meta informations extracted from the WSDL
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
     * Set Notification value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsNotificationType[] $notification
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType
     */
    public function setNotification(array $notification = array())
    {
        foreach ($notification as $nonEmptyArrayOfNotificationsTypeNotificationItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfNotificationsTypeNotificationItem instanceof \Ews\StructType\EwsNotificationType) {
                throw new \InvalidArgumentException(sprintf('The Notification property can only contain items of \Ews\StructType\EwsNotificationType, "%s" given', is_object($nonEmptyArrayOfNotificationsTypeNotificationItem) ? get_class($nonEmptyArrayOfNotificationsTypeNotificationItem) : gettype($nonEmptyArrayOfNotificationsTypeNotificationItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The Notification property can only contain items of \Ews\StructType\EwsNotificationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType
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
