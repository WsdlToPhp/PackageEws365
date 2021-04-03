<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsNotificationType|null
     */
    protected ?\StructType\EwsNotificationType $Notification = null;
    /**
     * Constructor method for GetEventsResponseMessageType
     * @uses EwsGetEventsResponseMessageType::setNotification()
     * @param \StructType\EwsNotificationType $notification
     */
    public function __construct(?\StructType\EwsNotificationType $notification = null)
    {
        $this
            ->setNotification($notification);
    }
    /**
     * Get Notification value
     * @return \StructType\EwsNotificationType|null
     */
    public function getNotification(): ?\StructType\EwsNotificationType
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @param \StructType\EwsNotificationType $notification
     * @return \StructType\EwsGetEventsResponseMessageType
     */
    public function setNotification(?\StructType\EwsNotificationType $notification = null): self
    {
        $this->Notification = $notification;
        
        return $this;
    }
}
