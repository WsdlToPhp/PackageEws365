<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestTypeHeader StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsRequestTypeHeader extends AbstractStructBase
{
    /**
     * The RequestType
     * Meta informations extracted from the WSDL
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
     * @param string $requestType
     * @return \Ews\StructType\EwsRequestTypeHeader
     */
    public function setRequestType($requestType = null)
    {
        if (!\Ews\EnumType\EwsAvailabilityProxyRequestType::valueIsValid($requestType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $requestType, implode(', ', \Ews\EnumType\EwsAvailabilityProxyRequestType::getValidValues())), __LINE__);
        }
        $this->RequestType = $requestType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRequestTypeHeader
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
