<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceConfigurationResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetServiceConfigurationResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ResponseMessages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
     */
    public $ResponseMessages;
    /**
     * Constructor method for GetServiceConfigurationResponseMessageType
     * @uses EwsGetServiceConfigurationResponseMessageType::setResponseMessages()
     * @param \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages
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
     * @param \Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages
     * @return \Ews\StructType\EwsGetServiceConfigurationResponseMessageType
     */
    public function setResponseMessages(\Ews\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages = null)
    {
        $this->ResponseMessages = $responseMessages;
        return $this;
    }
}
