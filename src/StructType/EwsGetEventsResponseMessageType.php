<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEventsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetEventsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Notification
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetEventsResponseMessageType
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
