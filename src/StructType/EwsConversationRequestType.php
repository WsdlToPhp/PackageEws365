<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Constructor method for ConversationRequestType
     * @uses EwsConversationRequestType::setConversationId()
     * @uses EwsConversationRequestType::setSyncState()
     * @param \Ews\StructType\EwsItemIdType $conversationId
     * @param base64Binary $syncState
     */
    public function __construct(\Ews\StructType\EwsItemIdType $conversationId = null, base64Binary $syncState = null)
    {
        $this
            ->setConversationId($conversationId)
            ->setSyncState($syncState);
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
     * @return \Ews\StructType\EwsConversationRequestType
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
     * @return \Ews\StructType\EwsConversationRequestType
     */
    public function setSyncState(base64Binary $syncState = null)
    {
        $this->SyncState = $syncState;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConversationRequestType
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
