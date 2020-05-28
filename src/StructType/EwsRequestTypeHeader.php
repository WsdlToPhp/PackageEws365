<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestTypeHeader StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRequestTypeHeader extends AbstractStructBase
{
    /**
     * The RequestType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RequestType;
    /**
     * Constructor method for RequestTypeHeader
     * @uses EwsRequestTypeHeader::setRequestType()
     * @param string $requestType
     */
    public function __construct($requestType = null)
    {
        $this
            ->setRequestType($requestType);
    }
    /**
     * Get RequestType value
     * @return string
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }
    /**
     * Set RequestType value
     * @uses \Ews\EnumType\EwsAvailabilityProxyRequestType::valueIsValid()
     * @uses \Ews\EnumType\EwsAvailabilityProxyRequestType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $requestType
     * @return \Ews\StructType\EwsRequestTypeHeader
     */
    public function setRequestType($requestType = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsAvailabilityProxyRequestType::valueIsValid($requestType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsAvailabilityProxyRequestType', is_array($requestType) ? implode(', ', $requestType) : var_export($requestType, true), implode(', ', \Ews\EnumType\EwsAvailabilityProxyRequestType::getValidValues())), __LINE__);
        }
        $this->RequestType = $requestType;
        return $this;
    }
}
