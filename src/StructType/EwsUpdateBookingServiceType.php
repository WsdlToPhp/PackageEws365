<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsBookingServiceType
     */
    protected \StructType\EwsBookingServiceType $Service;
    /**
     * Constructor method for UpdateBookingServiceType
     * @uses EwsUpdateBookingServiceType::setService()
     * @param \StructType\EwsBookingServiceType $service
     */
    public function __construct(\StructType\EwsBookingServiceType $service)
    {
        $this
            ->setService($service);
    }
    /**
     * Get Service value
     * @return \StructType\EwsBookingServiceType
     */
    public function getService(): \StructType\EwsBookingServiceType
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param \StructType\EwsBookingServiceType $service
     * @return \StructType\EwsUpdateBookingServiceType
     */
    public function setService(\StructType\EwsBookingServiceType $service): self
    {
        $this->Service = $service;
        
        return $this;
    }
}
