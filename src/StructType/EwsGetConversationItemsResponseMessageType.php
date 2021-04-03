<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConversationItemsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsGetConversationItemsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Conversation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\EwsConversationResponseType|null
     */
    protected ?\StructType\EwsConversationResponseType $Conversation = null;
    /**
     * Constructor method for GetConversationItemsResponseMessageType
     * @uses EwsGetConversationItemsResponseMessageType::setConversation()
     * @param \StructType\EwsConversationResponseType $conversation
     */
    public function __construct(?\StructType\EwsConversationResponseType $conversation = null)
    {
        $this
            ->setConversation($conversation);
    }
    /**
     * Get Conversation value
     * @return \StructType\EwsConversationResponseType|null
     */
    public function getConversation(): ?\StructType\EwsConversationResponseType
    {
        return $this->Conversation;
    }
    /**
     * Set Conversation value
     * @param \StructType\EwsConversationResponseType $conversation
     * @return \StructType\EwsGetConversationItemsResponseMessageType
     */
    public function setConversation(?\StructType\EwsConversationResponseType $conversation = null): self
    {
        $this->Conversation = $conversation;
        
        return $this;
    }
}
