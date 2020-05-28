<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateBookingServiceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateBookingServiceType extends EwsBaseBookingRequestType
{
    /**
     * The Service
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsBookingServiceType
     */
    public $Service;
    /**
     * Constructor method for UpdateBookingServiceType
     * @uses EwsUpdateBookingServiceType::setService()
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
     * @return \Ews\StructType\EwsUpdateBookingServiceType
     */
    public function setService(\Ews\StructType\EwsBookingServiceType $service = null)
    {
        $this->Service = $service;
        return $this;
    }
}
