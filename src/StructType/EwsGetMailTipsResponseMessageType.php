<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType
     */
    public $ResponseMessages;
    /**
     * Constructor method for GetMailTipsResponseMessageType
     * @uses EwsGetMailTipsResponseMessageType::setResponseMessages()
     * @param \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType|null
     */
    public function getResponseMessages()
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages
     * @return \Ews\StructType\EwsGetMailTipsResponseMessageType
     */
    public function setResponseMessages(\Ews\ArrayType\EwsArrayOfMailTipsResponseMessageType $responseMessages = null)
    {
        $this->ResponseMessages = $responseMessages;
        return $this;
    }
}
