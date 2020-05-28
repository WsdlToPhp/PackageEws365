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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setConversation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConversation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConversationForArrayConstraintsFromSetConversation(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $conversationsConversationItem) {
            // validation for constraint: itemType
            if (!$conversationsConversationItem instanceof \Ews\StructType\EwsConversationType) {
                $invalidValues[] = is_object($conversationsConversationItem) ? get_class($conversationsConversationItem) : sprintf('%s(%s)', gettype($conversationsConversationItem), var_export($conversationsConversationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Conversation property can only contain items of type \Ews\StructType\EwsConversationType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Conversation value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConversationType[] $conversation
     * @return \Ews\StructType\EwsConversations
     */
    public function setConversation(array $conversation = array())
    {
        // validation for constraint: array
        if ('' !== ($conversationArrayErrorMessage = self::validateConversationForArrayConstraintsFromSetConversation($conversation))) {
            throw new \InvalidArgumentException($conversationArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The Conversation property can only contain items of type \Ews\StructType\EwsConversationType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Conversation[] = $item;
        return $this;
    }
}
