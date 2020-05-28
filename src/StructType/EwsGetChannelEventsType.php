<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetChannelEventsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetChannelEventsType extends EwsBaseRequestType
{
    /**
     * The ChannelId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $ChannelId;
    /**
     * The ConnectionTimeout
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxInclusive: 120
     * - minInclusive: 1
     * @var int
     */
    public $ConnectionTimeout;
    /**
     * The LastNotificationId
     * Meta information extracted from the WSDL
     * - documentation: The regular expression captures the standard representation of a GUID
     * - base: xs:string
     * - minOccurs: 0
     * - pattern: [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}
     * @var string
     */
    public $LastNotificationId;
    /**
     * Constructor method for GetChannelEventsType
     * @uses EwsGetChannelEventsType::setChannelId()
     * @uses EwsGetChannelEventsType::setConnectionTimeout()
     * @uses EwsGetChannelEventsType::setLastNotificationId()
     * @param string $channelId
     * @param int $connectionTimeout
     * @param string $lastNotificationId
     */
    public function __construct($channelId = null, $connectionTimeout = null, $lastNotificationId = null)
    {
        $this
            ->setChannelId($channelId)
            ->setConnectionTimeout($connectionTimeout)
            ->setLastNotificationId($lastNotificationId);
    }
    /**
     * Get ChannelId value
     * @return string|null
     */
    public function getChannelId()
    {
        return $this->ChannelId;
    }
    /**
     * Set ChannelId value
     * @param string $channelId
     * @return \Ews\StructType\EwsGetChannelEventsType
     */
    public function setChannelId($channelId = null)
    {
        // validation for constraint: string
        if (!is_null($channelId) && !is_string($channelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($channelId, true), gettype($channelId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($channelId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $channelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($channelId, true)), __LINE__);
        }
        $this->ChannelId = $channelId;
        return $this;
    }
    /**
     * Get ConnectionTimeout value
     * @return int|null
     */
    public function getConnectionTimeout()
    {
        return $this->ConnectionTimeout;
    }
    /**
     * Set ConnectionTimeout value
     * @param int $connectionTimeout
     * @return \Ews\StructType\EwsGetChannelEventsType
     */
    public function setConnectionTimeout($connectionTimeout = null)
    {
        // validation for constraint: int
        if (!is_null($connectionTimeout) && !(is_int($connectionTimeout) || ctype_digit($connectionTimeout))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($connectionTimeout, true), gettype($connectionTimeout)), __LINE__);
        }
        // validation for constraint: maxInclusive(120)
        if (!is_null($connectionTimeout) && $connectionTimeout > 120) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically less than or equal to 120', var_export($connectionTimeout, true)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($connectionTimeout) && $connectionTimeout < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($connectionTimeout, true)), __LINE__);
        }
        $this->ConnectionTimeout = $connectionTimeout;
        return $this;
    }
    /**
     * Get LastNotificationId value
     * @return string|null
     */
    public function getLastNotificationId()
    {
        return $this->LastNotificationId;
    }
    /**
     * Set LastNotificationId value
     * @param string $lastNotificationId
     * @return \Ews\StructType\EwsGetChannelEventsType
     */
    public function setLastNotificationId($lastNotificationId = null)
    {
        // validation for constraint: string
        if (!is_null($lastNotificationId) && !is_string($lastNotificationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastNotificationId, true), gettype($lastNotificationId)), __LINE__);
        }
        // validation for constraint: pattern([0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12})
        if (!is_null($lastNotificationId) && !preg_match('/[0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}/', $lastNotificationId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression [0-9A-Fa-f]{8}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{4}-[0-9A-Fa-f]{12}', var_export($lastNotificationId, true)), __LINE__);
        }
        $this->LastNotificationId = $lastNotificationId;
        return $this;
    }
}
