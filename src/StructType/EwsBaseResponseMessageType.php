<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseResponseMessageType extends AbstractStructBase
{
    /**
     * The ResponseMessages
     * @var \StructType\EwsArrayOfResponseMessagesType|null
     */
    protected ?\StructType\EwsArrayOfResponseMessagesType $ResponseMessages = null;
    /**
     * Constructor method for BaseResponseMessageType
     * @uses EwsBaseResponseMessageType::setResponseMessages()
     * @param \StructType\EwsArrayOfResponseMessagesType $responseMessages
     */
    public function __construct(?\StructType\EwsArrayOfResponseMessagesType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \StructType\EwsArrayOfResponseMessagesType|null
     */
    public function getResponseMessages(): ?\StructType\EwsArrayOfResponseMessagesType
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \StructType\EwsArrayOfResponseMessagesType $responseMessages
     * @return \StructType\EwsBaseResponseMessageType
     */
    public function setResponseMessages(?\StructType\EwsArrayOfResponseMessagesType $responseMessages = null): self
    {
        $this->ResponseMessages = $responseMessages;
        
        return $this;
    }
}
