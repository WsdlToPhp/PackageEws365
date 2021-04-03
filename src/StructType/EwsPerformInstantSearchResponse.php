<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsInstantSearchPayloadType|null
     */
    protected ?\StructType\EwsInstantSearchPayloadType $Payload = null;
    /**
     * Constructor method for PerformInstantSearchResponse
     * @uses EwsPerformInstantSearchResponse::setPayload()
     * @param \StructType\EwsInstantSearchPayloadType $payload
     */
    public function __construct(?\StructType\EwsInstantSearchPayloadType $payload = null)
    {
        $this
            ->setPayload($payload);
    }
    /**
     * Get Payload value
     * @return \StructType\EwsInstantSearchPayloadType|null
     */
    public function getPayload(): ?\StructType\EwsInstantSearchPayloadType
    {
        return $this->Payload;
    }
    /**
     * Set Payload value
     * @param \StructType\EwsInstantSearchPayloadType $payload
     * @return \StructType\EwsPerformInstantSearchResponse
     */
    public function setPayload(?\StructType\EwsInstantSearchPayloadType $payload = null): self
    {
        $this->Payload = $payload;
        
        return $this;
    }
}
