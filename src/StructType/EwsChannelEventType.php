<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var string|null
     */
    protected ?string $TimeStamp = null;
    /**
     * The NotificationId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string|null
     */
    protected ?string $NotificationId = null;
    /**
     * Constructor method for ChannelEventType
     * @uses EwsChannelEventType::setTimeStamp()
     * @uses EwsChannelEventType::setNotificationId()
     * @param string $timeStamp
     * @param string $notificationId
     */
    public function __construct(?string $timeStamp = null, ?string $notificationId = null)
    {
        $this
            ->setTimeStamp($timeStamp)
            ->setNotificationId($notificationId);
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp(): ?string
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \StructType\EwsChannelEventType
     */
    public function setTimeStamp(?string $timeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStamp, true), gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        
        return $this;
    }
    /**
     * Get NotificationId value
     * @return string|null
     */
    public function getNotificationId(): ?string
    {
        return $this->NotificationId;
    }
    /**
     * Set NotificationId value
     * @param string $notificationId
     * @return \StructType\EwsChannelEventType
     */
    public function setNotificationId(?string $notificationId = null): self
    {
        // validation for constraint: string
        if (!is_null($notificationId) && !is_string($notificationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($notificationId, true), gettype($notificationId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($notificationId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $notificationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', var_export($notificationId, true)), __LINE__);
        }
        $this->NotificationId = $notificationId;
        
        return $this;
    }
}
