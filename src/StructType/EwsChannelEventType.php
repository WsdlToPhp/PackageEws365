<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ChannelEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsChannelEventType extends AbstractStructBase
{
    /**
     * The TimeStamp
     * @var dateTime
     */
    public $TimeStamp;
    /**
     * The NotificationId
     * Meta informations extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $NotificationId;
    /**
     * Constructor method for ChannelEventType
     * @uses EwsChannelEventType::setTimeStamp()
     * @uses EwsChannelEventType::setNotificationId()
     * @param dateTime $timeStamp
     * @param string $notificationId
     */
    public function __construct($timeStamp = null, $notificationId = null)
    {
        $this
            ->setTimeStamp($timeStamp)
            ->setNotificationId($notificationId);
    }
    /**
     * Get TimeStamp value
     * @return dateTime|null
     */
    public function getTimeStamp()
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param dateTime $timeStamp
     * @return \Ews\StructType\EwsChannelEventType
     */
    public function setTimeStamp($timeStamp = null)
    {
        $this->TimeStamp = $timeStamp;
        return $this;
    }
    /**
     * Get NotificationId value
     * @return string|null
     */
    public function getNotificationId()
    {
        return $this->NotificationId;
    }
    /**
     * Set NotificationId value
     * @param string $notificationId
     * @return \Ews\StructType\EwsChannelEventType
     */
    public function setNotificationId($notificationId = null)
    {
        $this->NotificationId = $notificationId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsChannelEventType
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
