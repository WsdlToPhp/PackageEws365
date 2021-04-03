<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsResponseMessageType|null
     */
    protected ?\StructType\EwsResponseMessageType $ResponseMessage = null;
    /**
     * Constructor method for SetUserOofSettingsResponse
     * @uses EwsSetUserOofSettingsResponse::setResponseMessage()
     * @param \StructType\EwsResponseMessageType $responseMessage
     */
    public function __construct(?\StructType\EwsResponseMessageType $responseMessage = null)
    {
        $this
            ->setResponseMessage($responseMessage);
    }
    /**
     * Get ResponseMessage value
     * @return \StructType\EwsResponseMessageType|null
     */
    public function getResponseMessage(): ?\StructType\EwsResponseMessageType
    {
        return $this->ResponseMessage;
    }
    /**
     * Set ResponseMessage value
     * @param \StructType\EwsResponseMessageType $responseMessage
     * @return \StructType\EwsSetUserOofSettingsResponse
     */
    public function setResponseMessage(?\StructType\EwsResponseMessageType $responseMessage = null): self
    {
        $this->ResponseMessage = $responseMessage;
        
        return $this;
    }
}
