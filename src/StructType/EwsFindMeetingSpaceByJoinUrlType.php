<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindMeetingSpaceByJoinUrlType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsFindMeetingSpaceByJoinUrlType extends EwsBaseRequestType
{
    /**
     * The JoinUrl
     * Meta informations extracted from the WSDL
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
        $this->JoinUrl = $joinUrl;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsFindMeetingSpaceByJoinUrlType
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
