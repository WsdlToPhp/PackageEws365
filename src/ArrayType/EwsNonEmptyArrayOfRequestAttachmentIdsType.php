<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for NonEmptyArrayOfRequestAttachmentIdsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfRequestAttachmentIdsType extends AbstractStructArrayBase
{
    /**
     * The AttachmentId
     * Meta information extracted from the WSDL
     * - choice: AttachmentId
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsRequestAttachmentIdType|null
     */
    protected ?\StructType\EwsRequestAttachmentIdType $AttachmentId = null;
    /**
     * Constructor method for NonEmptyArrayOfRequestAttachmentIdsType
     * @uses EwsNonEmptyArrayOfRequestAttachmentIdsType::setAttachmentId()
     * @param \StructType\EwsRequestAttachmentIdType $attachmentId
     */
    public function __construct(?\StructType\EwsRequestAttachmentIdType $attachmentId = null)
    {
        $this
            ->setAttachmentId($attachmentId);
    }
    /**
     * Get AttachmentId value
     * @return \StructType\EwsRequestAttachmentIdType|null
     */
    public function getAttachmentId(): ?\StructType\EwsRequestAttachmentIdType
    {
        return isset($this->AttachmentId) ? $this->AttachmentId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAttachmentId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAttachmentId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAttachmentIdForChoiceConstraintsFromSetAttachmentId($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AttachmentId can\'t be set as the property %s is already set. Only one property must be set among these properties: AttachmentId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AttachmentId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsRequestAttachmentIdType $attachmentId
     * @return \ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType
     */
    public function setAttachmentId(?\StructType\EwsRequestAttachmentIdType $attachmentId = null): self
    {
        // validation for constraint: choice(AttachmentId)
        if ('' !== ($attachmentIdChoiceErrorMessage = self::validateAttachmentIdForChoiceConstraintsFromSetAttachmentId($attachmentId))) {
            throw new InvalidArgumentException($attachmentIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($attachmentId) || (is_array($attachmentId) && empty($attachmentId))) {
            unset($this->AttachmentId);
        } else {
            $this->AttachmentId = $attachmentId;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsRequestAttachmentIdType|null
     */
    public function current(): ?\StructType\EwsRequestAttachmentIdType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsRequestAttachmentIdType|null
     */
    public function item($index): ?\StructType\EwsRequestAttachmentIdType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsRequestAttachmentIdType|null
     */
    public function first(): ?\StructType\EwsRequestAttachmentIdType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsRequestAttachmentIdType|null
     */
    public function last(): ?\StructType\EwsRequestAttachmentIdType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsRequestAttachmentIdType|null
     */
    public function offsetGet($offset): ?\StructType\EwsRequestAttachmentIdType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsRequestAttachmentIdType $item
     * @return \ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsRequestAttachmentIdType) {
            throw new InvalidArgumentException(sprintf('The AttachmentId property can only contain items of type \StructType\EwsRequestAttachmentIdType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttachmentId
     */
    public function getAttributeName(): string
    {
        return 'AttachmentId';
    }
}
