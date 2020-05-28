<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConversationResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationResponseType extends AbstractStructBase
{
    /**
     * The ConversationId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ConversationId;
    /**
     * The SyncState
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SyncState;
    /**
     * The ConversationNodes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfConversationNodesType
     */
    public $ConversationNodes;
    /**
     * Constructor method for ConversationResponseType
     * @uses EwsConversationResponseType::setConversationId()
     * @uses EwsConversationResponseType::setSyncState()
     * @uses EwsConversationResponseType::setConversationNodes()
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @param string $syncState
     * @param \Ews\ArrayType\EwsArrayOfConversationNodesType $conversationNodes
     */
    public function __construct(\Ews\StructType\EwsItemIdType $conversationId = null, $syncState = null, \Ews\ArrayType\EwsArrayOfConversationNodesType $conversationNodes = null)
    {
        $this
            ->setConversationId($conversationId)
            ->setSyncState($syncState)
            ->setConversationNodes($conversationNodes);
    }
    /**
     * Get ConversationId value
     * @return \Ews\StructType\EwsItemIdType
     */
    public function getConversationId()
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @return \Ews\StructType\EwsConversationResponseType
     */
    public function setConversationId(\Ews\StructType\EwsItemIdType $conversationId = null)
    {
        $this->ConversationId = $conversationId;
        return $this;
    }
    /**
     * Get SyncState value
     * @return string|null
     */
    public function getSyncState()
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @param string $syncState
     * @return \Ews\StructType\EwsConversationResponseType
     */
    public function setSyncState($syncState = null)
    {
        // validation for constraint: string
        if (!is_null($syncState) && !is_string($syncState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($syncState, true), gettype($syncState)), __LINE__);
        }
        $this->SyncState = $syncState;
        return $this;
    }
    /**
     * Get ConversationNodes value
     * @return \Ews\ArrayType\EwsArrayOfConversationNodesType|null
     */
    public function getConversationNodes()
    {
        return $this->ConversationNodes;
    }
    /**
     * Set ConversationNodes value
     * @param \Ews\ArrayType\EwsArrayOfConversationNodesType $conversationNodes
     * @return \Ews\StructType\EwsConversationResponseType
     */
    public function setConversationNodes(\Ews\ArrayType\EwsArrayOfConversationNodesType $conversationNodes = null)
    {
        $this->ConversationNodes = $conversationNodes;
        return $this;
    }
}
