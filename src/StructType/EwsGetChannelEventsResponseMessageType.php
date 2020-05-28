<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChannelEventsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetChannelEventsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Notifications
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public $Notifications;
    /**
     * The ConnectionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConnectionStatus;
    /**
     * Constructor method for GetChannelEventsResponseMessageType
     * @uses EwsGetChannelEventsResponseMessageType::setNotifications()
     * @uses EwsGetChannelEventsResponseMessageType::setConnectionStatus()
     * @param \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType $notifications
     * @param string $connectionStatus
     */
    public function __construct(\Ews\StructType\EwsNonEmptyArrayOfChannelEventsType $notifications = null, $connectionStatus = null)
    {
        $this
            ->setNotifications($notifications)
            ->setConnectionStatus($connectionStatus);
    }
    /**
     * Get Notifications value
     * @return \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType|null
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @param \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType $notifications
     * @return \Ews\StructType\EwsGetChannelEventsResponseMessageType
     */
    public function setNotifications(\Ews\StructType\EwsNonEmptyArrayOfChannelEventsType $notifications = null)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Get ConnectionStatus value
     * @return string|null
     */
    public function getConnectionStatus()
    {
        return $this->ConnectionStatus;
    }
    /**
     * Set ConnectionStatus value
     * @uses \Ews\EnumType\EwsConnectionStatusType::valueIsValid()
     * @uses \Ews\EnumType\EwsConnectionStatusType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $connectionStatus
     * @return \Ews\StructType\EwsGetChannelEventsResponseMessageType
     */
    public function setConnectionStatus($connectionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsConnectionStatusType::valueIsValid($connectionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsConnectionStatusType', is_array($connectionStatus) ? implode(', ', $connectionStatus) : var_export($connectionStatus, true), implode(', ', \Ews\EnumType\EwsConnectionStatusType::getValidValues())), __LINE__);
        }
        $this->ConnectionStatus = $connectionStatus;
        return $this;
    }
}
