<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStreamingEventsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetStreamingEventsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Notifications
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType
     */
    public $Notifications;
    /**
     * The ErrorSubscriptionIds
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     */
    public $ErrorSubscriptionIds;
    /**
     * The ConnectionStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ConnectionStatus;
    /**
     * Constructor method for GetStreamingEventsResponseMessageType
     * @uses EwsGetStreamingEventsResponseMessageType::setNotifications()
     * @uses EwsGetStreamingEventsResponseMessageType::setErrorSubscriptionIds()
     * @uses EwsGetStreamingEventsResponseMessageType::setConnectionStatus()
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType $notifications
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     * $errorSubscriptionIds
     * @param string $connectionStatus
     */
    public function __construct(\Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType $notifications = null, \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $errorSubscriptionIds = null, $connectionStatus = null)
    {
        $this
            ->setNotifications($notifications)
            ->setErrorSubscriptionIds($errorSubscriptionIds)
            ->setConnectionStatus($connectionStatus);
    }
    /**
     * Get Notifications value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType|null
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType $notifications
     * @return \Ews\StructType\EwsGetStreamingEventsResponseMessageType
     */
    public function setNotifications(\Ews\ArrayType\EwsNonEmptyArrayOfNotificationsType $notifications = null)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    /**
     * Get ErrorSubscriptionIds value
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType|null
     */
    public function getErrorSubscriptionIds()
    {
        return $this->ErrorSubscriptionIds;
    }
    /**
     * Set ErrorSubscriptionIds value
     * @param \Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
     * $errorSubscriptionIds
     * @return \Ews\StructType\EwsGetStreamingEventsResponseMessageType
     */
    public function setErrorSubscriptionIds(\Ews\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $errorSubscriptionIds = null)
    {
        $this->ErrorSubscriptionIds = $errorSubscriptionIds;
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
     * @return \Ews\StructType\EwsGetStreamingEventsResponseMessageType
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
     * @return \Ews\StructType\EwsGetStreamingEventsResponseMessageType
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
