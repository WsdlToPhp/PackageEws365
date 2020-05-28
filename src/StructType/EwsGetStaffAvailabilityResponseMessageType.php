<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public $Responses;
    /**
     * Constructor method for GetStaffAvailabilityResponseMessageType
     * @uses EwsGetStaffAvailabilityResponseMessageType::setResponses()
     * @param \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses = null)
    {
        $this
            ->setResponses($responses);
    }
    /**
     * Get Responses value
     * @return \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType
     */
    public function getResponses()
    {
        return $this->Responses;
    }
    /**
     * Set Responses value
     * @param \Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses
     * @return \Ews\StructType\EwsGetStaffAvailabilityResponseMessageType
     */
    public function setResponses(\Ews\ArrayType\EwsArrayOfStaffAvailabilityResponseType $responses = null)
    {
        $this->Responses = $responses;
        return $this;
    }
}
