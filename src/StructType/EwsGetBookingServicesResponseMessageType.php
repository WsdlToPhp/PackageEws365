<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfBookingService
     */
    protected \ArrayType\EwsArrayOfBookingService $Services;
    /**
     * Constructor method for GetBookingServicesResponseMessageType
     * @uses EwsGetBookingServicesResponseMessageType::setServices()
     * @param \ArrayType\EwsArrayOfBookingService $services
     */
    public function __construct(\ArrayType\EwsArrayOfBookingService $services)
    {
        $this
            ->setServices($services);
    }
    /**
     * Get Services value
     * @return \ArrayType\EwsArrayOfBookingService
     */
    public function getServices(): \ArrayType\EwsArrayOfBookingService
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param \ArrayType\EwsArrayOfBookingService $services
     * @return \StructType\EwsGetBookingServicesResponseMessageType
     */
    public function setServices(\ArrayType\EwsArrayOfBookingService $services): self
    {
        $this->Services = $services;
        
        return $this;
    }
}
