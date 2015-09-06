<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBookingServicesResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetBookingServicesResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Services
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfBookingService
     */
    public $Services;
    /**
     * Constructor method for GetBookingServicesResponseMessageType
     * @uses EwsGetBookingServicesResponseMessageType::setServices()
     * @param \Ews\ArrayType\EwsArrayOfBookingService $services
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfBookingService $services = null)
    {
        $this
            ->setServices($services);
    }
    /**
     * Get Services value
     * @return \Ews\ArrayType\EwsArrayOfBookingService
     */
    public function getServices()
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \Ews\ArrayType\EwsArrayOfBookingService $services
     * @return \Ews\StructType\EwsGetBookingServicesResponseMessageType
     */
    public function setServices(\Ews\ArrayType\EwsArrayOfBookingService $services = null)
    {
        $this->Services = $services;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetBookingServicesResponseMessageType
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
