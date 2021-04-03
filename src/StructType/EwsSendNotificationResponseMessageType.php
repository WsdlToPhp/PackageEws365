<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendNotificationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSendNotificationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Notification
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var \StructType\EwsNotificationType
     */
    protected \StructType\EwsNotificationType $Notification;
    /**
     * Constructor method for SendNotificationResponseMessageType
     * @uses EwsSendNotificationResponseMessageType::setNotification()
     * @param \StructType\EwsNotificationType $notification
     */
    public function __construct(\StructType\EwsNotificationType $notification)
    {
        $this
            ->setNotification($notification);
    }
    /**
     * Get Notification value
     * @return \StructType\EwsNotificationType
     */
    public function getNotification(): \StructType\EwsNotificationType
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \StructType\EwsNotificationType $notification
     * @return \StructType\EwsSendNotificationResponseMessageType
     */
    public function setNotification(\StructType\EwsNotificationType $notification): self
    {
        $this->Notification = $notification;
        
        return $this;
    }
}
