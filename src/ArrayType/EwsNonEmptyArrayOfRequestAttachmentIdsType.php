<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsRequestAttachmentIdType
     */
    public $AttachmentId;
    /**
     * Constructor method for NonEmptyArrayOfRequestAttachmentIdsType
     * @uses EwsNonEmptyArrayOfRequestAttachmentIdsType::setAttachmentId()
     * @param \Ews\StructType\EwsRequestAttachmentIdType $attachmentId
     */
    public function __construct(\Ews\StructType\EwsRequestAttachmentIdType $attachmentId = null)
    {
        $this
            ->setAttachmentId($attachmentId);
    }
    /**
     * Get AttachmentId value
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function getAttachmentId()
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
    public function validateAttachmentIdForChoiceConstraintsFromSetAttachmentId($value)
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
                    throw new \InvalidArgumentException(sprintf('The property AttachmentId can\'t be set as the property %s is already set. Only one property must be set among these properties: AttachmentId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AttachmentId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRequestAttachmentIdType $attachmentId
     * @return \Ews\ArrayType\EwsNonEmptyArrayOfRequestAttachmentIdsType
     */
    public function setAttachmentId(\Ews\StructType\EwsRequestAttachmentIdType $attachmentId = null)
    {
        // validation for constraint: choice(AttachmentId)
        if ('' !== ($attachmentIdChoiceErrorMessage = self::validateAttachmentIdForChoiceConstraintsFromSetAttachmentId($attachmentId))) {
            throw new \InvalidArgumentException($attachmentIdChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRequestAttachmentIdType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AttachmentId
     */
    public function getAttributeName()
    {
        return 'AttachmentId';
    }
}
