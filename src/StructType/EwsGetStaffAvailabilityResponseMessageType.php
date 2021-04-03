<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStaffAvailabilityResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetStaffAvailabilityResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Responses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    protected \ArrayType\EwsArrayOfStaffAvailabilityResponseType $Responses;
    /**
     * Constructor method for GetStaffAvailabilityResponseMessageType
     * @uses EwsGetStaffAvailabilityResponseMessageType::setResponses()
     * @param \ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses
     */
    public function __construct(\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses)
    {
        $this
            ->setResponses($responses);
    }
    /**
     * Get Responses value
     * @return \ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function getResponses(): \ArrayType\EwsArrayOfStaffAvailabilityResponseType
    {
        return $this->Responses;
    }
    /**
     * Set Responses value
     * @param \ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses
     * @return \StructType\EwsGetStaffAvailabilityResponseMessageType
     */
    public function setResponses(\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses): self
    {
        $this->Responses = $responses;
        
        return $this;
    }
}
