<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsNonEmptyArrayOfChannelEventsType|null
     */
    protected ?\StructType\EwsNonEmptyArrayOfChannelEventsType $Notifications = null;
    /**
     * The ConnectionStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ConnectionStatus = null;
    /**
     * Constructor method for GetChannelEventsResponseMessageType
     * @uses EwsGetChannelEventsResponseMessageType::setNotifications()
     * @uses EwsGetChannelEventsResponseMessageType::setConnectionStatus()
     * @param \StructType\EwsNonEmptyArrayOfChannelEventsType $notifications
     * @param string $connectionStatus
     */
    public function __construct(?\StructType\EwsNonEmptyArrayOfChannelEventsType $notifications = null, ?string $connectionStatus = null)
    {
        $this
            ->setNotifications($notifications)
            ->setConnectionStatus($connectionStatus);
    }
    /**
     * Get Notifications value
     * @return \StructType\EwsNonEmptyArrayOfChannelEventsType|null
     */
    public function getNotifications(): ?\StructType\EwsNonEmptyArrayOfChannelEventsType
    {
        return $this->Notifications;
    }
    /**
     * Set Notifications value
     * @param \StructType\EwsNonEmptyArrayOfChannelEventsType $notifications
     * @return \StructType\EwsGetChannelEventsResponseMessageType
     */
    public function setNotifications(?\StructType\EwsNonEmptyArrayOfChannelEventsType $notifications = null): self
    {
        $this->Notifications = $notifications;
        
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
     * @return \StructType\EwsGetChannelEventsResponseMessageType
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
