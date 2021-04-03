<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMailTipsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetMailTipsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ResponseMessages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfMailTipsResponseMessageType|null
     */
    protected ?\ArrayType\EwsArrayOfMailTipsResponseMessageType $ResponseMessages = null;
    /**
     * Constructor method for GetMailTipsResponseMessageType
     * @uses EwsGetMailTipsResponseMessageType::setResponseMessages()
     * @param \ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages
     */
    public function __construct(?\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \ArrayType\EwsArrayOfMailTipsResponseMessageType|null
     */
    public function getResponseMessages(): ?\ArrayType\EwsArrayOfMailTipsResponseMessageType
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages
     * @return \StructType\EwsGetMailTipsResponseMessageType
     */
    public function setResponseMessages(?\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages = null): self
    {
        $this->ResponseMessages = $responseMessages;
        
        return $this;
    }
}
