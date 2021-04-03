<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsConversationActionType[]
     */
    protected array $ConversationAction = [];
    /**
     * Constructor method for NonEmptyArrayOfApplyConversationActionType
     * @uses EwsNonEmptyArrayOfApplyConversationActionType::setConversationAction()
     * @param \StructType\EwsConversationActionType[] $conversationAction
     */
    public function __construct(array $conversationAction = [])
    {
        $this
            ->setConversationAction($conversationAction);
    }
    /**
     * Get ConversationAction value
     * @return \StructType\EwsConversationActionType[]
     */
    public function getConversationAction(): array
    {
        return $this->ConversationAction;
    }
    /**
     * This method is responsible for validating the values passed to the setConversationAction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConversationAction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConversationActionForArrayConstraintsFromSetConversationAction(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) {
            // validation for constraint: itemType
            if (!$nonEmptyArrayOfApplyConversationActionTypeConversationActionItem instanceof \StructType\EwsConversationActionType) {
                $invalidValues[] = is_object($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) ? get_class($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem) : sprintf('%s(%s)', gettype($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem), var_export($nonEmptyArrayOfApplyConversationActionTypeConversationActionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConversationAction property can only contain items of type \StructType\EwsConversationActionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ConversationAction value
     * @throws InvalidArgumentException
     * @param \StructType\EwsConversationActionType[] $conversationAction
     * @return \ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
     */
    public function setConversationAction(array $conversationAction = []): self
    {
        // validation for constraint: array
        if ('' !== ($conversationActionArrayErrorMessage = self::validateConversationActionForArrayConstraintsFromSetConversationAction($conversationAction))) {
            throw new InvalidArgumentException($conversationActionArrayErrorMessage, __LINE__);
        }
        $this->ConversationAction = $conversationAction;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsConversationActionType|null
     */
    public function current(): ?\StructType\EwsConversationActionType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsConversationActionType|null
     */
    public function item($index): ?\StructType\EwsConversationActionType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsConversationActionType|null
     */
    public function first(): ?\StructType\EwsConversationActionType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsConversationActionType|null
     */
    public function last(): ?\StructType\EwsConversationActionType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsConversationActionType|null
     */
    public function offsetGet($offset): ?\StructType\EwsConversationActionType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsConversationActionType $item
     * @return \ArrayType\EwsNonEmptyArrayOfApplyConversationActionType
     */
    public function add(\StructType\EwsConversationActionType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConversationAction
     */
    public function getAttributeName(): string
    {
        return 'ConversationAction';
    }
}
