<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $RequestType;
    /**
     * Constructor method for RequestTypeHeader
     * @uses EwsRequestTypeHeader::setRequestType()
     * @param string $requestType
     */
    public function __construct(string $requestType)
    {
        $this
            ->setRequestType($requestType);
    }
    /**
     * Get RequestType value
     * @return string
     */
    public function getRequestType(): string
    {
        return $this->RequestType;
    }
    /**
     * Set RequestType value
     * @uses \EnumType\EwsAvailabilityProxyRequestType::valueIsValid()
     * @uses \EnumType\EwsAvailabilityProxyRequestType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $requestType
     * @return \StructType\EwsRequestTypeHeader
     */
    public function setRequestType(string $requestType): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsAvailabilityProxyRequestType::valueIsValid($requestType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsAvailabilityProxyRequestType', is_array($requestType) ? implode(', ', $requestType) : var_export($requestType, true), implode(', ', \EnumType\EwsAvailabilityProxyRequestType::getValidValues())), __LINE__);
        }
        $this->RequestType = $requestType;
        
        return $this;
    }
}
