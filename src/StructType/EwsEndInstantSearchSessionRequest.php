<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndInstantSearchSessionRequest StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsEndInstantSearchSessionRequest extends EwsBaseRequestType
{
    /**
     * The SessionId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $SessionId;
    /**
     * Constructor method for EndInstantSearchSessionRequest
     * @uses EwsEndInstantSearchSessionRequest::setSessionId()
     * @param string $sessionId
     */
    public function __construct($sessionId = null)
    {
        $this
            ->setSessionId($sessionId);
    }
    /**
     * Get SessionId value
     * @return string
     */
    public function getSessionId()
    {
        return $this->SessionId;
    }
    /**
     * Set SessionId value
     * @param string $sessionId
     * @return \Ews\StructType\EwsEndInstantSearchSessionRequest
     */
    public function setSessionId($sessionId = null)
    {
        $this->SessionId = $sessionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsEndInstantSearchSessionRequest
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
