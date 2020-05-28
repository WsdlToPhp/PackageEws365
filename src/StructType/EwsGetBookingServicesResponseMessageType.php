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
     * Meta information extracted from the WSDL
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
}
