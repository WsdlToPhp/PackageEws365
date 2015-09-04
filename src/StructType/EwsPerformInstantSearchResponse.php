<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PerformInstantSearchResponse StructType
 * Meta informations extracted from the WSDL
 * - type: m:PerformInstantSearchResponse
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsPerformInstantSearchResponse extends EwsResponseMessageType
{
    /**
     * The Payload
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsPerformInstantSearchResponse
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
