<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Conversations StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsConversations extends AbstractStructBase
{
    /**
     * The Conversation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Ews\StructType\EwsConversationType[]
     */
    public $Conversation;
    /**
     * Constructor method for Conversations
     * @uses EwsConversations::setConversation()
     * @param \Ews\StructType\EwsConversationType[] $conversation
     */
    public function __construct(array $conversation = array())
    {
        $this
            ->setConversation($conversation);
    }
    /**
     * Get Conversation value
     * @return \Ews\StructType\EwsConversationType[]|null
     */
    public function getConversation()
    {
        return $this->Conversation;
    }
    /**
     * Set Conversation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConversationType[] $conversation
     * @return \Ews\StructType\EwsConversations
     */
    public function setConversation(array $conversation = array())
    {
        foreach ($conversation as $conversationsConversationItem) {
            // validation for constraint: itemType
            if (!$conversationsConversationItem instanceof \Ews\StructType\EwsConversationType) {
                throw new \InvalidArgumentException(sprintf('The Conversation property can only contain items of \Ews\StructType\EwsConversationType, "%s" given', is_object($conversationsConversationItem) ? get_class($conversationsConversationItem) : gettype($conversationsConversationItem)), __LINE__);
            }
        }
        $this->Conversation = $conversation;
        return $this;
    }
    /**
     * Add item to Conversation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConversationType $item
     * @return \Ews\StructType\EwsConversations
     */
    public function addToConversation(\Ews\StructType\EwsConversationType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsConversationType) {
            throw new \InvalidArgumentException(sprintf('The Conversation property can only contain items of \Ews\StructType\EwsConversationType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Conversation[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsConversations
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
