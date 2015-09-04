<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConversationItemsResponseMessageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsGetConversationItemsResponseMessageType extends EwsResponseMessageType
{
    /**
     * The Conversation
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsGetConversationItemsResponseMessageType
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
