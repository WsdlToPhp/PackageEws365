<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfApplyConversationActionType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfApplyConversationActionType extends AbstractStructArrayBase
{
    /**
     * The ConversationAction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Ews\StructType\EwsConversationActionType[]
     */
    public $ConversationAction;
    /**
     * Constructor method for NonEmptyArrayOfApplyConversationActionType
     * @uses EwsNonEmptyArrayOfApplyConversationActionType::setConversationAction()
     * @param \Ews\StructType\EwsConversationActionType[] $conversationAction
     */
    public function __construct(array $conversationAction = array())
    {
        $this
            ->setConversationAction($conversationAction);
    }
    /**
     * Get ConversationAction value
     * @return \Ews\StructType\EwsConversationActionType[]|null
     */
    public function getConversationAction()
    {
        return $this->ConversationAction;
    }
    /**
     * Set ConversationAction value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConversationActionType[] $conversationAction
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
     */
    public function setConversationAction(array $conversationAction = array())
    {
        foreach ($conversationAction as $nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfApplyConversationActionTypeConversationActionItem instanceof \Ews\StructType\EwsConversationActionType) {
                throw new \InvalidArgumentException(sprintf('The ConversationAction property can only contain items of \Ews\StructType\EwsConversationActionType, "%s" given', is_object($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) ? get_class($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) : gettype($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem)), __LINE__);
            }
        }
        $this->ConversationAction = $conversationAction;
        return $this;
    }
    /**
     * Add item to ConversationAction value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConversationActionType $item
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
     */
    public function addToConversationAction(\Ews\StructType\EwsConversationActionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsConversationActionType) {
            throw new \InvalidArgumentException(sprintf('The ConversationAction property can only contain items of \Ews\StructType\EwsConversationActionType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConversationAction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsConversationActionType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsConversationActionType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsConversationActionType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsConversationActionType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsConversationActionType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConversationAction
     */
    public function getAttributeName()
    {
        return 'ConversationAction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
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
