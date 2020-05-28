<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseDelegateResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsBaseDelegateResponseMessageType extends EwsResponseMessageType
{
    /**
     * The ResponseMessages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;
    /**
     * Constructor method for BaseDelegateResponseMessageType
     * @uses EwsBaseDelegateResponseMessageType::setResponseMessages()
     * @param \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType|null
     */
    public function getResponseMessages()
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages
     * @return \Ews\StructType\EwsBaseDelegateResponseMessageType
     */
    public function setResponseMessages(\Ews\ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages = null)
    {
        $this->ResponseMessages = $responseMessages;
        return $this;
    }
}
