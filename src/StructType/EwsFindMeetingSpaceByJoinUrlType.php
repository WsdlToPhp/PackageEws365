<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingSpaceByJoinUrlType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsFindMeetingSpaceByJoinUrlType extends EwsBaseRequestType
{
    /**
     * The JoinUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $JoinUrl;
    /**
     * Constructor method for FindMeetingSpaceByJoinUrlType
     * @uses EwsFindMeetingSpaceByJoinUrlType::setJoinUrl()
     * @param string $joinUrl
     */
    public function __construct($joinUrl = null)
    {
        $this
            ->setJoinUrl($joinUrl);
    }
    /**
     * Get JoinUrl value
     * @return string
     */
    public function getJoinUrl()
    {
        return $this->JoinUrl;
    }
    /**
     * Set JoinUrl value
     * @param string $joinUrl
     * @return \Ews\StructType\EwsFindMeetingSpaceByJoinUrlType
     */
    public function setJoinUrl($joinUrl = null)
    {
        // validation for constraint: string
        if (!is_null($joinUrl) && !is_string($joinUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($joinUrl, true), gettype($joinUrl)), __LINE__);
        }
        $this->JoinUrl = $joinUrl;
        return $this;
    }
}
