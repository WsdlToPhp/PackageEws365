<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfNotificationsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfNotificationsType $Notifications = null;
    /**
     * The ErrorSubscriptionIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType|null
     */
    protected ?\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $ErrorSubscriptionIds = null;
    /**
     * The ConnectionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConnectionStatus = null;
    /**
     * Constructor method for GetStreamingEventsResponseMessageType
     * @uses EwsGetStreamingEventsResponseMessageType::setNotifications()
     * @uses EwsGetStreamingEventsResponseMessageType::setErrorSubscriptionIds()
     * @uses EwsGetStreamingEventsResponseMessageType::setConnectionStatus()
     * @param \ArrayType\EwsNonEmptyArrayOfNotificationsType $notifications
     * @param \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $errorSubscriptionIds
     * @param string $connectionStatus
     */
    public function __construct(?\ArrayType\EwsNonEmptyArrayOfNotificationsType $notifications = null, ?\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $errorSubscriptionIds = null, ?string $connectionStatus = null)
    {
        $this
            ->setNotifications($notifications)
            ->setErrorSubscriptionIds($errorSubscriptionIds)
            ->setConnectionStatus($connectionStatus);
    }
    /**
     * Get Notifications value
     * @return \ArrayType\EwsNonEmptyArrayOfNotificationsType|null
     */
    public function getNotifications(): ?\ArrayType\EwsNonEmptyArrayOfNotificationsType
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @param \ArrayType\EwsNonEmptyArrayOfNotificationsType $notifications
     * @return \StructType\EwsGetStreamingEventsResponseMessageType
     */
    public function setNotifications(?\ArrayType\EwsNonEmptyArrayOfNotificationsType $notifications = null): self
    {
        $this->Notifications = $notifications;
        
        return $this;
    }
    /**
     * Get ErrorSubscriptionIds value
     * @return \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType|null
     */
    public function getErrorSubscriptionIds(): ?\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType
    {
        return $this->ErrorSubscriptionIds;
    }
    /**
     * Set ErrorSubscriptionIds value
     * @param \ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $errorSubscriptionIds
     * @return \StructType\EwsGetStreamingEventsResponseMessageType
     */
    public function setErrorSubscriptionIds(?\ArrayType\EwsNonEmptyArrayOfSubscriptionIdsType $errorSubscriptionIds = null): self
    {
        $this->ErrorSubscriptionIds = $errorSubscriptionIds;
        
        return $this;
    }
    /**
     * Get ConnectionStatus value
     * @return string|null
     */
    public function getConnectionStatus(): ?string
    {
        return $this->ConnectionStatus;
    }
    /**
     * Set ConnectionStatus value
     * @uses \EnumType\EwsConnectionStatusType::valueIsValid()
     * @uses \EnumType\EwsConnectionStatusType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $connectionStatus
     * @return \StructType\EwsGetStreamingEventsResponseMessageType
     */
    public function setConnectionStatus(?string $connectionStatus = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsConnectionStatusType::valueIsValid($connectionStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsConnectionStatusType', is_array($connectionStatus) ? implode(', ', $connectionStatus) : var_export($connectionStatus, true), implode(', ', \EnumType\EwsConnectionStatusType::getValidValues())), __LINE__);
        }
        $this->ConnectionStatus = $connectionStatus;
        
        return $this;
    }
}
