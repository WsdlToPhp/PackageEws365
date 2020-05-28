<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetEventsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Notification
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNotificationType
     */
    public $Notification;
    /**
     * Constructor method for GetEventsResponseMessageType
     * @uses EwsGetEventsResponseMessageType::setNotification()
     * @param \Ews\StructType\EwsNotificationType $notification
     */
    public function __construct(\Ews\StructType\EwsNotificationType $notification = null)
    {
        $this
            ->setNotification($notification);
    }
    /**
     * Get Notification value
     * @return \Ews\StructType\EwsNotificationType|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \Ews\StructType\EwsNotificationType $notification
     * @return \Ews\StructType\EwsGetEventsResponseMessageType
     */
    public function setNotification(\Ews\StructType\EwsNotificationType $notification = null)
    {
        $this->Notification = $notification;
        return $this;
    }
}
