<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NotificationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNotificationType extends AbstractStructBase
{
    /**
     * The SubscriptionId
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $SubscriptionId;
    /**
     * The PreviousWatermark
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $PreviousWatermark;
    /**
     * The MoreEvents
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MoreEvents;
    /**
     * The CopiedEvent
     * @var \Ews\StructType\EwsMovedCopiedEventType
     */
    public $CopiedEvent;
    /**
     * The CreatedEvent
     * @var \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public $CreatedEvent;
    /**
     * The DeletedEvent
     * @var \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public $DeletedEvent;
    /**
     * The ModifiedEvent
     * @var \Ews\StructType\EwsModifiedEventType
     */
    public $ModifiedEvent;
    /**
     * The MovedEvent
     * @var \Ews\StructType\EwsMovedCopiedEventType
     */
    public $MovedEvent;
    /**
     * The NewMailEvent
     * @var \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public $NewMailEvent;
    /**
     * The StatusEvent
     * @var \Ews\StructType\EwsBaseNotificationEventType
     */
    public $StatusEvent;
    /**
     * The FreeBusyChangedEvent
     * @var \Ews\StructType\EwsBaseObjectChangedEventType
     */
    public $FreeBusyChangedEvent;
    /**
     * Constructor method for NotificationType
     * @uses EwsNotificationType::setSubscriptionId()
     * @uses EwsNotificationType::setPreviousWatermark()
     * @uses EwsNotificationType::setMoreEvents()
     * @uses EwsNotificationType::setCopiedEvent()
     * @uses EwsNotificationType::setCreatedEvent()
     * @uses EwsNotificationType::setDeletedEvent()
     * @uses EwsNotificationType::setModifiedEvent()
     * @uses EwsNotificationType::setMovedEvent()
     * @uses EwsNotificationType::setNewMailEvent()
     * @uses EwsNotificationType::setStatusEvent()
     * @uses EwsNotificationType::setFreeBusyChangedEvent()
     * @param string $subscriptionId
     * @param string $previousWatermark
     * @param bool $moreEvents
     * @param \Ews\StructType\EwsMovedCopiedEventType $copiedEvent
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $createdEvent
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $deletedEvent
     * @param \Ews\StructType\EwsModifiedEventType $modifiedEvent
     * @param \Ews\StructType\EwsMovedCopiedEventType $movedEvent
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $newMailEvent
     * @param \Ews\StructType\EwsBaseNotificationEventType $statusEvent
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent
     */
    public function __construct($subscriptionId = null, $previousWatermark = null, $moreEvents = null, \Ews\StructType\EwsMovedCopiedEventType $copiedEvent = null, \Ews\StructType\EwsBaseObjectChangedEventType $createdEvent = null, \Ews\StructType\EwsBaseObjectChangedEventType $deletedEvent = null, \Ews\StructType\EwsModifiedEventType $modifiedEvent = null, \Ews\StructType\EwsMovedCopiedEventType $movedEvent = null, \Ews\StructType\EwsBaseObjectChangedEventType $newMailEvent = null, \Ews\StructType\EwsBaseNotificationEventType $statusEvent = null, \Ews\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent = null)
    {
        $this
            ->setSubscriptionId($subscriptionId)
            ->setPreviousWatermark($previousWatermark)
            ->setMoreEvents($moreEvents)
            ->setCopiedEvent($copiedEvent)
            ->setCreatedEvent($createdEvent)
            ->setDeletedEvent($deletedEvent)
            ->setModifiedEvent($modifiedEvent)
            ->setMovedEvent($movedEvent)
            ->setNewMailEvent($newMailEvent)
            ->setStatusEvent($statusEvent)
            ->setFreeBusyChangedEvent($freeBusyChangedEvent);
    }
    /**
     * Get SubscriptionId value
     * @return string|null
     */
    public function getSubscriptionId()
    {
        return $this->SubscriptionId;
    }
    /**
     * Set SubscriptionId value
     * @param string $subscriptionId
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setSubscriptionId($subscriptionId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($subscriptionId) && strlen($subscriptionId) < 1) || (is_array($subscriptionId) && count($subscriptionId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($subscriptionId) && !is_string($subscriptionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($subscriptionId)), __LINE__);
        }
        $this->SubscriptionId = $subscriptionId;
        return $this;
    }
    /**
     * Get PreviousWatermark value
     * @return string|null
     */
    public function getPreviousWatermark()
    {
        return $this->PreviousWatermark;
    }
    /**
     * Set PreviousWatermark value
     * @param string $previousWatermark
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setPreviousWatermark($previousWatermark = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($previousWatermark) && strlen($previousWatermark) < 1) || (is_array($previousWatermark) && count($previousWatermark) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($previousWatermark) && !is_string($previousWatermark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($previousWatermark)), __LINE__);
        }
        $this->PreviousWatermark = $previousWatermark;
        return $this;
    }
    /**
     * Get MoreEvents value
     * @return bool|null
     */
    public function getMoreEvents()
    {
        return $this->MoreEvents;
    }
    /**
     * Set MoreEvents value
     * @param bool $moreEvents
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setMoreEvents($moreEvents = null)
    {
        $this->MoreEvents = $moreEvents;
        return $this;
    }
    /**
     * Get CopiedEvent value
     * @return \Ews\StructType\EwsMovedCopiedEventType|null
     */
    public function getCopiedEvent()
    {
        return $this->CopiedEvent;
    }
    /**
     * Set CopiedEvent value
     * @param \Ews\StructType\EwsMovedCopiedEventType $copiedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setCopiedEvent(\Ews\StructType\EwsMovedCopiedEventType $copiedEvent = null)
    {
        $this->CopiedEvent = $copiedEvent;
        return $this;
    }
    /**
     * Get CreatedEvent value
     * @return \Ews\StructType\EwsBaseObjectChangedEventType|null
     */
    public function getCreatedEvent()
    {
        return $this->CreatedEvent;
    }
    /**
     * Set CreatedEvent value
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $createdEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setCreatedEvent(\Ews\StructType\EwsBaseObjectChangedEventType $createdEvent = null)
    {
        $this->CreatedEvent = $createdEvent;
        return $this;
    }
    /**
     * Get DeletedEvent value
     * @return \Ews\StructType\EwsBaseObjectChangedEventType|null
     */
    public function getDeletedEvent()
    {
        return $this->DeletedEvent;
    }
    /**
     * Set DeletedEvent value
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $deletedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setDeletedEvent(\Ews\StructType\EwsBaseObjectChangedEventType $deletedEvent = null)
    {
        $this->DeletedEvent = $deletedEvent;
        return $this;
    }
    /**
     * Get ModifiedEvent value
     * @return \Ews\StructType\EwsModifiedEventType|null
     */
    public function getModifiedEvent()
    {
        return $this->ModifiedEvent;
    }
    /**
     * Set ModifiedEvent value
     * @param \Ews\StructType\EwsModifiedEventType $modifiedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setModifiedEvent(\Ews\StructType\EwsModifiedEventType $modifiedEvent = null)
    {
        $this->ModifiedEvent = $modifiedEvent;
        return $this;
    }
    /**
     * Get MovedEvent value
     * @return \Ews\StructType\EwsMovedCopiedEventType|null
     */
    public function getMovedEvent()
    {
        return $this->MovedEvent;
    }
    /**
     * Set MovedEvent value
     * @param \Ews\StructType\EwsMovedCopiedEventType $movedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setMovedEvent(\Ews\StructType\EwsMovedCopiedEventType $movedEvent = null)
    {
        $this->MovedEvent = $movedEvent;
        return $this;
    }
    /**
     * Get NewMailEvent value
     * @return \Ews\StructType\EwsBaseObjectChangedEventType|null
     */
    public function getNewMailEvent()
    {
        return $this->NewMailEvent;
    }
    /**
     * Set NewMailEvent value
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $newMailEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setNewMailEvent(\Ews\StructType\EwsBaseObjectChangedEventType $newMailEvent = null)
    {
        $this->NewMailEvent = $newMailEvent;
        return $this;
    }
    /**
     * Get StatusEvent value
     * @return \Ews\StructType\EwsBaseNotificationEventType|null
     */
    public function getStatusEvent()
    {
        return $this->StatusEvent;
    }
    /**
     * Set StatusEvent value
     * @param \Ews\StructType\EwsBaseNotificationEventType $statusEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setStatusEvent(\Ews\StructType\EwsBaseNotificationEventType $statusEvent = null)
    {
        $this->StatusEvent = $statusEvent;
        return $this;
    }
    /**
     * Get FreeBusyChangedEvent value
     * @return \Ews\StructType\EwsBaseObjectChangedEventType|null
     */
    public function getFreeBusyChangedEvent()
    {
        return $this->FreeBusyChangedEvent;
    }
    /**
     * Set FreeBusyChangedEvent value
     * @param \Ews\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent
     * @return \Ews\StructType\EwsNotificationType
     */
    public function setFreeBusyChangedEvent(\Ews\StructType\EwsBaseObjectChangedEventType $freeBusyChangedEvent = null)
    {
        $this->FreeBusyChangedEvent = $freeBusyChangedEvent;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsNotificationType
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
