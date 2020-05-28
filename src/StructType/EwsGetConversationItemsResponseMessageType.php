<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsConversationResponseType
     */
    public $Conversation;
    /**
     * Constructor method for GetConversationItemsResponseMessageType
     * @uses EwsGetConversationItemsResponseMessageType::setConversation()
     * @param \Ews\StructType\EwsConversationResponseType $conversation
     */
    public function __construct(\Ews\StructType\EwsConversationResponseType $conversation = null)
    {
        $this
            ->setConversation($conversation);
    }
    /**
     * Get Conversation value
     * @return \Ews\StructType\EwsConversationResponseType|null
     */
    public function getConversation()
    {
        return $this->Conversation;
    }
    /**
     * Set Conversation value
     * @param \Ews\StructType\EwsConversationResponseType $conversation
     * @return \Ews\StructType\EwsGetConversationItemsResponseMessageType
     */
    public function setConversation(\Ews\StructType\EwsConversationResponseType $conversation = null)
    {
        $this->Conversation = $conversation;
        return $this;
    }
}
