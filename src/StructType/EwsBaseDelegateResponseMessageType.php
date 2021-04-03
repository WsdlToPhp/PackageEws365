<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \ArrayType\EwsArrayOfDelegateUserResponseMessageType|null
     */
    protected ?\ArrayType\EwsArrayOfDelegateUserResponseMessageType $ResponseMessages = null;
    /**
     * Constructor method for BaseDelegateResponseMessageType
     * @uses EwsBaseDelegateResponseMessageType::setResponseMessages()
     * @param \ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages
     */
    public function __construct(?\ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages = null)
    {
        $this
            ->setResponseMessages($responseMessages);
    }
    /**
     * Get ResponseMessages value
     * @return \ArrayType\EwsArrayOfDelegateUserResponseMessageType|null
     */
    public function getResponseMessages(): ?\ArrayType\EwsArrayOfDelegateUserResponseMessageType
    {
        return $this->ResponseMessages;
    }
    /**
     * Set ResponseMessages value
     * @param \ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages
     * @return \StructType\EwsBaseDelegateResponseMessageType
     */
    public function setResponseMessages(?\ArrayType\EwsArrayOfDelegateUserResponseMessageType $responseMessages = null): self
    {
        $this->ResponseMessages = $responseMessages;
        
        return $this;
    }
}
