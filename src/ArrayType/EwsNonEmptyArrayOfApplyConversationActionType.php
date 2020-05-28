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
     * Meta information extracted from the WSDL
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
     * This method is responsible for validating the values passed to the setConversationAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConversationAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConversationActionForArrayConstraintsFromSetConversationAction(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfApplyConversationActionTypeConversationActionItem instanceof \Ews\StructType\EwsConversationActionType) {
                $invalidValues[] = is_object($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) ? get_class($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem), var_export($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConversationAction property can only contain items of type \Ews\StructType\EwsConversationActionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ConversationAction value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsConversationActionType[] $conversationAction
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
     */
    public function setConversationAction(array $conversationAction = array())
    {
        // validation for constraint: array
        if ('' !== ($conversationActionArrayErrorMessage = self::validateConversationActionForArrayConstraintsFromSetConversationAction($conversationAction))) {
            throw new \InvalidArgumentException($conversationActionArrayErrorMessage, __LINE__);
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
            throw new \InvalidArgumentException(sprintf('The ConversationAction property can only contain items of type \Ews\StructType\EwsConversationActionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
}
