<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfConversationRequestsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsArrayOfConversationRequestsType extends AbstractStructArrayBase
{
    /**
     * The Conversation
     * @var array
     */
    public $Conversation;
    /**
     * Constructor method for ArrayOfConversationRequestsType
     * @uses EwsArrayOfConversationRequestsType::setConversation()
     * @param array $conversation
     */
    public function __construct(array $conversation = array())
    {
        $this
            ->setConversation($conversation);
    }
    /**
     * Get Conversation value
     * @return array
     */
    public function getConversation()
    {
        return $this->Conversation;
    }
    /**
     * Set Conversation value
     * @param array $conversation
     * @return \Ews\ArrayType\EwsArrayOfConversationRequestsType
     */
    public function setConversation(array $conversation = array())
    {
        $this->Conversation = $conversation;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsConversationRequestType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsConversationRequestType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsConversationRequestType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsConversationRequestType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsConversationRequestType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Conversation
     */
    public function getAttributeName()
    {
        return 'Conversation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfConversationRequestsType
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
