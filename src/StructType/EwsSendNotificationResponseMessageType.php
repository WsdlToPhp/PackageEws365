<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsNotificationType
     */
    public $Notification;
    /**
     * Constructor method for SendNotificationResponseMessageType
     * @uses EwsSendNotificationResponseMessageType::setNotification()
     * @param \Ews\StructType\EwsNotificationType $notification
     */
    public function __construct(\Ews\StructType\EwsNotificationType $notification = null)
    {
        $this
            ->setNotification($notification);
    }
    /**
     * Get Notification value
     * @return \Ews\StructType\EwsNotificationType
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \Ews\StructType\EwsNotificationType $notification
     * @return \Ews\StructType\EwsSendNotificationResponseMessageType
     */
    public function setNotification(\Ews\StructType\EwsNotificationType $notification = null)
    {
        $this->Notification = $notification;
        return $this;
    }
}
