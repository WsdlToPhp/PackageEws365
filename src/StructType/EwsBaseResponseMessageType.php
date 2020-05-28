<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsArrayOfResponseMessagesType
     */
    public $ResponseMessages;
    /**
     * Constructor method for BaseResponseMessageType
     * @uses EwsBaseResponseMessageType::setResponseMessages()
     * @param \Ews\StructType\EwsArrayOfResponseMessagesType $responseMessages
     */
    public function __construct(\Ews\StructType\EwsArrayOfResponseMessagesType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \Ews\StructType\EwsArrayOfResponseMessagesType|null
     */
    public function getResponseMessages()
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \Ews\StructType\EwsArrayOfResponseMessagesType $responseMessages
     * @return \Ews\StructType\EwsBaseResponseMessageType
     */
    public function setResponseMessages(\Ews\StructType\EwsArrayOfResponseMessagesType $responseMessages = null)
    {
        $this->ResponseMessages = $responseMessages;
        return $this;
    }
}
