<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsItemIdType
     */
    protected \StructType\EwsItemIdType $ConversationId;
    /**
     * The SyncState
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SyncState = null;
    /**
     * The ConversationNodes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfConversationNodesType|null
     */
    protected ?\ArrayType\EwsArrayOfConversationNodesType $ConversationNodes = null;
    /**
     * Constructor method for ConversationResponseType
     * @uses EwsConversationResponseType::setConversationId()
     * @uses EwsConversationResponseType::setSyncState()
     * @uses EwsConversationResponseType::setConversationNodes()
     * @param \StructType\EwsItemIdType $conversationId
     * @param string $syncState
     * @param \ArrayType\EwsArrayOfConversationNodesType $conversationNodes
     */
    public function __construct(\StructType\EwsItemIdType $conversationId, ?string $syncState = null, ?\ArrayType\EwsArrayOfConversationNodesType $conversationNodes = null)
    {
        $this
            ->setConversationId($conversationId)
            ->setSyncState($syncState)
            ->setConversationNodes($conversationNodes);
    }
    /**
     * Get ConversationId value
     * @return \StructType\EwsItemIdType
     */
    public function getConversationId(): \StructType\EwsItemIdType
    {
        return $this->ConversationId;
    }
    /**
     * Set ConversationId value
     * @param \StructType\EwsItemIdType $conversationId
     * @return \StructType\EwsConversationResponseType
     */
    public function setConversationId(\StructType\EwsItemIdType $conversationId): self
    {
        $this->ConversationId = $conversationId;
        
        return $this;
    }
    /**
     * Get SyncState value
     * @return string|null
     */
    public function getSyncState(): ?string
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @param string $syncState
     * @return \StructType\EwsConversationResponseType
     */
    public function setSyncState(?string $syncState = null): self
    {
        // validation for constraint: string
        if (!is_null($syncState) && !is_string($syncState)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($syncState, true), gettype($syncState)), __LINE__);
        }
        $this->SyncState = $syncState;
        
        return $this;
    }
    /**
     * Get ConversationNodes value
     * @return \ArrayType\EwsArrayOfConversationNodesType|null
     */
    public function getConversationNodes(): ?\ArrayType\EwsArrayOfConversationNodesType
    {
        return $this->ConversationNodes;
    }
    /**
     * Set ConversationNodes value
     * @param \ArrayType\EwsArrayOfConversationNodesType $conversationNodes
     * @return \StructType\EwsConversationResponseType
     */
    public function setConversationNodes(?\ArrayType\EwsArrayOfConversationNodesType $conversationNodes = null): self
    {
        $this->ConversationNodes = $conversationNodes;
        
        return $this;
    }
}
