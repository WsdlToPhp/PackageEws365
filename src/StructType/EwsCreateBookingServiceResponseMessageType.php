<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateBookingServiceResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateBookingServiceResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsBookingServiceType
     */
    public $Service;
    /**
     * Constructor method for CreateBookingServiceResponseMessageType
     * @uses EwsCreateBookingServiceResponseMessageType::setService()
     * @param \Ews\StructType\EwsBookingServiceType $service
     */
    public function __construct(\Ews\StructType\EwsBookingServiceType $service = null)
    {
        $this
            ->setService($service);
    }
    /**
     * Get Service value
     * @return \Ews\StructType\EwsBookingServiceType
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param \Ews\StructType\EwsBookingServiceType $service
     * @return \Ews\StructType\EwsCreateBookingServiceResponseMessageType
     */
    public function setService(\Ews\StructType\EwsBookingServiceType $service = null)
    {
        $this->Service = $service;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsCreateBookingServiceResponseMessageType
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
