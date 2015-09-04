<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChannelEventsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetChannelEventsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\StructType\EwsNonEmptyArrayOfChannelEventsType
     */
    public $Notifications;
    /**
     * The ConnectionStatus
     * Meta informations extracted from the WSDL
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
     * @param string $connectionStatus
     * @return \Ews\StructType\EwsGetChannelEventsResponseMessageType
     */
    public function setConnectionStatus($connectionStatus = null)
    {
        if (!\Ews\EnumType\EwsConnectionStatusType::valueIsValid($connectionStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $connectionStatus, implode(', ', \Ews\EnumType\EwsConnectionStatusType::getValidValues())), __LINE__);
        }
        $this->ConnectionStatus = $connectionStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetChannelEventsResponseMessageType
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
