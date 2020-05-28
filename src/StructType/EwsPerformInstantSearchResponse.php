<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformInstantSearchResponse StructType
 * Meta information extracted from the WSDL
 * - type: m:PerformInstantSearchResponse
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsPerformInstantSearchResponse extends EwsResponseMessageType
{
    /**
     * The Payload
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsInstantSearchPayloadType
     */
    public $Payload;
    /**
     * Constructor method for PerformInstantSearchResponse
     * @uses EwsPerformInstantSearchResponse::setPayload()
     * @param \Ews\StructType\EwsInstantSearchPayloadType $payload
     */
    public function __construct(\Ews\StructType\EwsInstantSearchPayloadType $payload = null)
    {
        $this
            ->setPayload($payload);
    }
    /**
     * Get Payload value
     * @return \Ews\StructType\EwsInstantSearchPayloadType|null
     */
    public function getPayload()
    {
        return $this->Payload;
    }
    /**
     * Set Payload value
     * @param \Ews\StructType\EwsInstantSearchPayloadType $payload
     * @return \Ews\StructType\EwsPerformInstantSearchResponse
     */
    public function setPayload(\Ews\StructType\EwsInstantSearchPayloadType $payload = null)
    {
        $this->Payload = $payload;
        return $this;
    }
}
