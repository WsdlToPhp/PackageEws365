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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - documentation: Identifier for a fully resolved item
     * @var \Ews\StructType\EwsItemIdType
     */
    public $ConversationId;
    /**
     * The SyncState
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var base64Binary
     */
    public $SyncState;
    /**
     * The ConversationNodes
     * Meta informations extracted from the WSDL
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
     * @param base64Binary $syncState
     * @param \Ews\ArrayType\EwsArrayOfConversationNodesType $conversationNodes
     */
    public function __construct(\Ews\StructType\EwsItemIdType $conversationId = null, base64Binary $syncState = null, \Ews\ArrayType\EwsArrayOfConversationNodesType $conversationNodes = null)
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
     * @return base64Binary|null
     */
    public function getSyncState()
    {
        return $this->SyncState;
    }
    /**
     * Set SyncState value
     * @param base64Binary $syncState
     * @return \Ews\StructType\EwsConversationResponseType
     */
    public function setSyncState(base64Binary $syncState = null)
    {
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConversationResponseType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
