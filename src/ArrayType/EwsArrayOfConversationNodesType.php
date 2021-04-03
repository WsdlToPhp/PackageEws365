<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfConversationNodesType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfConversationNodesType extends AbstractStructArrayBase
{
    /**
     * The ConversationNode
     * Meta information extracted from the WSDL
     * - choice: ConversationNode
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsConversationNodeType|null
     */
    protected ?\StructType\EwsConversationNodeType $ConversationNode = null;
    /**
     * Constructor method for ArrayOfConversationNodesType
     * @uses EwsArrayOfConversationNodesType::setConversationNode()
     * @param \StructType\EwsConversationNodeType $conversationNode
     */
    public function __construct(?\StructType\EwsConversationNodeType $conversationNode = null)
    {
        $this
            ->setConversationNode($conversationNode);
    }
    /**
     * Get ConversationNode value
     * @return \StructType\EwsConversationNodeType|null
     */
    public function getConversationNode(): ?\StructType\EwsConversationNodeType
    {
        return isset($this->ConversationNode) ? $this->ConversationNode : null;
    }
    /**
     * This method is responsible for validating the value passed to the setConversationNode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConversationNode method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateConversationNodeForChoiceConstraintsFromSetConversationNode($value): string
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
                    throw new InvalidArgumentException(sprintf('The property ConversationNode can\'t be set as the property %s is already set. Only one property must be set among these properties: ConversationNode, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ConversationNode value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsConversationNodeType $conversationNode
     * @return \ArrayType\EwsArrayOfConversationNodesType
     */
    public function setConversationNode(?\StructType\EwsConversationNodeType $conversationNode = null): self
    {
        // validation for constraint: choice(ConversationNode)
        if ('' !== ($conversationNodeChoiceErrorMessage = self::validateConversationNodeForChoiceConstraintsFromSetConversationNode($conversationNode))) {
            throw new InvalidArgumentException($conversationNodeChoiceErrorMessage, __LINE__);
        }
        if (is_null($conversationNode) || (is_array($conversationNode) && empty($conversationNode))) {
            unset($this->ConversationNode);
        } else {
            $this->ConversationNode = $conversationNode;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsConversationNodeType|null
     */
    public function current(): ?\StructType\EwsConversationNodeType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsConversationNodeType|null
     */
    public function item($index): ?\StructType\EwsConversationNodeType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsConversationNodeType|null
     */
    public function first(): ?\StructType\EwsConversationNodeType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsConversationNodeType|null
     */
    public function last(): ?\StructType\EwsConversationNodeType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsConversationNodeType|null
     */
    public function offsetGet($offset): ?\StructType\EwsConversationNodeType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsConversationNodeType $item
     * @return \ArrayType\EwsArrayOfConversationNodesType
     */
    public function add(\StructType\EwsConversationNodeType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConversationNode
     */
    public function getAttributeName(): string
    {
        return 'ConversationNode';
    }
}
