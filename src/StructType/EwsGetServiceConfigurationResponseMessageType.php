<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceConfigurationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetServiceConfigurationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ResponseMessages
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public $ResponseMessages;
    /**
     * Constructor method for GetServiceConfigurationResponseMessageType
     * @uses EwsGetServiceConfigurationResponseMessageType::setResponseMessages()
     * @param \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     * $responseMessages
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType|null
     */
    public function getResponseMessages()
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     * $responseMessages
     * @return \Ews\StructType\EwsGetServiceConfigurationResponseMessageType
     */
    public function setResponseMessages(\Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages = null)
    {
        $this->ResponseMessages = $responseMessages;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetServiceConfigurationResponseMessageType
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
