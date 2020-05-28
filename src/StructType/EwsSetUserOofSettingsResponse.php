<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetUserOofSettingsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:SetUserOofSettingsResponse
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSetUserOofSettingsResponse extends AbstractStructBase
{
    /**
     * The ResponseMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsResponseMessageType
     */
    public $ResponseMessage;
    /**
     * Constructor method for SetUserOofSettingsResponse
     * @uses EwsSetUserOofSettingsResponse::setResponseMessage()
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     */
    public function __construct(\Ews\StructType\EwsResponseMessageType $responseMessage = null)
    {
        $this
            ->setResponseMessage($responseMessage);
    }
    /**
     * Get ResponseMessage value
     * @return \Ews\StructType\EwsResponseMessageType|null
     */
    public function getResponseMessage()
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \Ews\StructType\EwsResponseMessageType $responseMessage
     * @return \Ews\StructType\EwsSetUserOofSettingsResponse
     */
    public function setResponseMessage(\Ews\StructType\EwsResponseMessageType $responseMessage = null)
    {
        $this->ResponseMessage = $responseMessage;
        return $this;
    }
}
