<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfConversationRequestsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfConversationRequestsType extends AbstractStructArrayBase
{
    /**
     * The Conversation
     * Meta information extracted from the WSDL
     * - choice: Conversation
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsConversationRequestType|null
     */
    protected ?\StructType\EwsConversationRequestType $Conversation = null;
    /**
     * Constructor method for ArrayOfConversationRequestsType
     * @uses EwsArrayOfConversationRequestsType::setConversation()
     * @param \StructType\EwsConversationRequestType $conversation
     */
    public function __construct(?\StructType\EwsConversationRequestType $conversation = null)
    {
        $this
            ->setConversation($conversation);
    }
    /**
     * Get Conversation value
     * @return \StructType\EwsConversationRequestType|null
     */
    public function getConversation(): ?\StructType\EwsConversationRequestType
    {
        return isset($this->Conversation) ? $this->Conversation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setConversation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConversation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateConversationForChoiceConstraintsFromSetConversation($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Conversation can\'t be set as the property %s is already set. Only one property must be set among these properties: Conversation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Conversation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsConversationRequestType $conversation
     * @return \ArrayType\EwsArrayOfConversationRequestsType
     */
    public function setConversation(?\StructType\EwsConversationRequestType $conversation = null): self
    {
        // validation for constraint: choice(Conversation)
        if ('' !== ($conversationChoiceErrorMessage = self::validateConversationForChoiceConstraintsFromSetConversation($conversation))) {
            throw new InvalidArgumentException($conversationChoiceErrorMessage, __LINE__);
        }
        if (is_null($conversation) || (is_array($conversation) && empty($conversation))) {
            unset($this->Conversation);
        } else {
            $this->Conversation = $conversation;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsConversationRequestType|null
     */
    public function current(): ?\StructType\EwsConversationRequestType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsConversationRequestType|null
     */
    public function item($index): ?\StructType\EwsConversationRequestType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsConversationRequestType|null
     */
    public function first(): ?\StructType\EwsConversationRequestType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsConversationRequestType|null
     */
    public function last(): ?\StructType\EwsConversationRequestType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsConversationRequestType|null
     */
    public function offsetGet($offset): ?\StructType\EwsConversationRequestType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsConversationRequestType $item
     * @return \ArrayType\EwsArrayOfConversationRequestsType
     */
    public function add(\StructType\EwsConversationRequestType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Conversation
     */
    public function getAttributeName(): string
    {
        return 'Conversation';
    }
}
