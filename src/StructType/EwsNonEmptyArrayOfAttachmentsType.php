<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfAttachmentsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfAttachmentsType extends AbstractStructBase
{
    /**
     * The ItemAttachment
     * Meta information extracted from the WSDL
     * - choice: ItemAttachment | FileAttachment | ReferenceAttachment
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsItemAttachmentType|null
     */
    protected ?\StructType\EwsItemAttachmentType $ItemAttachment = null;
    /**
     * The FileAttachment
     * Meta information extracted from the WSDL
     * - choice: ItemAttachment | FileAttachment | ReferenceAttachment
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsFileAttachmentType|null
     */
    protected ?\StructType\EwsFileAttachmentType $FileAttachment = null;
    /**
     * The ReferenceAttachment
     * Meta information extracted from the WSDL
     * - choice: ItemAttachment | FileAttachment | ReferenceAttachment
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsReferenceAttachmentType|null
     */
    protected ?\StructType\EwsReferenceAttachmentType $ReferenceAttachment = null;
    /**
     * Constructor method for NonEmptyArrayOfAttachmentsType
     * @uses EwsNonEmptyArrayOfAttachmentsType::setItemAttachment()
     * @uses EwsNonEmptyArrayOfAttachmentsType::setFileAttachment()
     * @uses EwsNonEmptyArrayOfAttachmentsType::setReferenceAttachment()
     * @param \StructType\EwsItemAttachmentType $itemAttachment
     * @param \StructType\EwsFileAttachmentType $fileAttachment
     * @param \StructType\EwsReferenceAttachmentType $referenceAttachment
     */
    public function __construct(?\StructType\EwsItemAttachmentType $itemAttachment = null, ?\StructType\EwsFileAttachmentType $fileAttachment = null, ?\StructType\EwsReferenceAttachmentType $referenceAttachment = null)
    {
        $this
            ->setItemAttachment($itemAttachment)
            ->setFileAttachment($fileAttachment)
            ->setReferenceAttachment($referenceAttachment);
    }
    /**
     * Get ItemAttachment value
     * @return \StructType\EwsItemAttachmentType|null
     */
    public function getItemAttachment(): ?\StructType\EwsItemAttachmentType
    {
        return isset($this->ItemAttachment) ? $this->ItemAttachment : null;
    }
    /**
     * This method is responsible for validating the value passed to the setItemAttachment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemAttachment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemAttachmentForChoiceConstraintsFromSetItemAttachment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FileAttachment',
            'ReferenceAttachment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ItemAttachment can\'t be set as the property %s is already set. Only one property must be set among these properties: ItemAttachment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ItemAttachment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemAttachmentType $itemAttachment
     * @return \StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public function setItemAttachment(?\StructType\EwsItemAttachmentType $itemAttachment = null): self
    {
        // validation for constraint: choice(ItemAttachment, FileAttachment, ReferenceAttachment)
        if ('' !== ($itemAttachmentChoiceErrorMessage = self::validateItemAttachmentForChoiceConstraintsFromSetItemAttachment($itemAttachment))) {
            throw new InvalidArgumentException($itemAttachmentChoiceErrorMessage, __LINE__);
        }
        if (is_null($itemAttachment) || (is_array($itemAttachment) && empty($itemAttachment))) {
            unset($this->ItemAttachment);
        } else {
            $this->ItemAttachment = $itemAttachment;
        }
        
        return $this;
    }
    /**
     * Get FileAttachment value
     * @return \StructType\EwsFileAttachmentType|null
     */
    public function getFileAttachment(): ?\StructType\EwsFileAttachmentType
    {
        return isset($this->FileAttachment) ? $this->FileAttachment : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFileAttachment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileAttachment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFileAttachmentForChoiceConstraintsFromSetFileAttachment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ItemAttachment',
            'ReferenceAttachment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FileAttachment can\'t be set as the property %s is already set. Only one property must be set among these properties: FileAttachment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FileAttachment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsFileAttachmentType $fileAttachment
     * @return \StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public function setFileAttachment(?\StructType\EwsFileAttachmentType $fileAttachment = null): self
    {
        // validation for constraint: choice(ItemAttachment, FileAttachment, ReferenceAttachment)
        if ('' !== ($fileAttachmentChoiceErrorMessage = self::validateFileAttachmentForChoiceConstraintsFromSetFileAttachment($fileAttachment))) {
            throw new InvalidArgumentException($fileAttachmentChoiceErrorMessage, __LINE__);
        }
        if (is_null($fileAttachment) || (is_array($fileAttachment) && empty($fileAttachment))) {
            unset($this->FileAttachment);
        } else {
            $this->FileAttachment = $fileAttachment;
        }
        
        return $this;
    }
    /**
     * Get ReferenceAttachment value
     * @return \StructType\EwsReferenceAttachmentType|null
     */
    public function getReferenceAttachment(): ?\StructType\EwsReferenceAttachmentType
    {
        return isset($this->ReferenceAttachment) ? $this->ReferenceAttachment : null;
    }
    /**
     * This method is responsible for validating the value passed to the setReferenceAttachment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReferenceAttachment method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateReferenceAttachmentForChoiceConstraintsFromSetReferenceAttachment($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ItemAttachment',
            'FileAttachment',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ReferenceAttachment can\'t be set as the property %s is already set. Only one property must be set among these properties: ReferenceAttachment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ReferenceAttachment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsReferenceAttachmentType $referenceAttachment
     * @return \StructType\EwsNonEmptyArrayOfAttachmentsType
     */
    public function setReferenceAttachment(?\StructType\EwsReferenceAttachmentType $referenceAttachment = null): self
    {
        // validation for constraint: choice(ItemAttachment, FileAttachment, ReferenceAttachment)
        if ('' !== ($referenceAttachmentChoiceErrorMessage = self::validateReferenceAttachmentForChoiceConstraintsFromSetReferenceAttachment($referenceAttachment))) {
            throw new InvalidArgumentException($referenceAttachmentChoiceErrorMessage, __LINE__);
        }
        if (is_null($referenceAttachment) || (is_array($referenceAttachment) && empty($referenceAttachment))) {
            unset($this->ReferenceAttachment);
        } else {
            $this->ReferenceAttachment = $referenceAttachment;
        }
        
        return $this;
    }
}
