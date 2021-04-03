<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConversationRequestType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversationRequestType extends AbstractStructBase
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
     * Constructor method for ConversationRequestType
     * @uses EwsConversationRequestType::setConversationId()
     * @uses EwsConversationRequestType::setSyncState()
     * @param \StructType\EwsItemIdType $conversationId
     * @param string $syncState
     */
    public function __construct(\StructType\EwsItemIdType $conversationId, ?string $syncState = null)
    {
        $this
            ->setConversationId($conversationId)
            ->setSyncState($syncState);
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
     * @return \StructType\EwsConversationRequestType
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
     * @return \StructType\EwsConversationRequestType
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
}
