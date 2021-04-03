<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfServiceConfigurationResponseMessageType|null
     */
    protected ?\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $ResponseMessages = null;
    /**
     * Constructor method for GetServiceConfigurationResponseMessageType
     * @uses EwsGetServiceConfigurationResponseMessageType::setResponseMessages()
     * @param \ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages
     */
    public function __construct(?\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \ArrayType\EwsArrayOfServiceConfigurationResponseMessageType|null
     */
    public function getResponseMessages(): ?\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages
     * @return \StructType\EwsGetServiceConfigurationResponseMessageType
     */
    public function setResponseMessages(?\ArrayType\EwsArrayOfServiceConfigurationResponseMessageType $responseMessages = null): self
    {
        $this->ResponseMessages = $responseMessages;
        
        return $this;
    }
}
