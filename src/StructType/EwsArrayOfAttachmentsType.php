<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfAttachmentsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfAttachmentsType extends AbstractStructBase
{
    /**
     * The ItemAttachment
     * Meta information extracted from the WSDL
     * - choice: ItemAttachment | FileAttachment | ReferenceAttachment
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsItemAttachmentType
     */
    public $ItemAttachment;
    /**
     * The FileAttachment
     * Meta information extracted from the WSDL
     * - choice: ItemAttachment | FileAttachment | ReferenceAttachment
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsFileAttachmentType
     */
    public $FileAttachment;
    /**
     * The ReferenceAttachment
     * Meta information extracted from the WSDL
     * - choice: ItemAttachment | FileAttachment | ReferenceAttachment
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsReferenceAttachmentType
     */
    public $ReferenceAttachment;
    /**
     * Constructor method for ArrayOfAttachmentsType
     * @uses EwsArrayOfAttachmentsType::setItemAttachment()
     * @uses EwsArrayOfAttachmentsType::setFileAttachment()
     * @uses EwsArrayOfAttachmentsType::setReferenceAttachment()
     * @param \Ews\StructType\EwsItemAttachmentType $itemAttachment
     * @param \Ews\StructType\EwsFileAttachmentType $fileAttachment
     * @param \Ews\StructType\EwsReferenceAttachmentType $referenceAttachment
     */
    public function __construct(\Ews\StructType\EwsItemAttachmentType $itemAttachment = null, \Ews\StructType\EwsFileAttachmentType $fileAttachment = null, \Ews\StructType\EwsReferenceAttachmentType $referenceAttachment = null)
    {
        $this
            ->setItemAttachment($itemAttachment)
            ->setFileAttachment($fileAttachment)
            ->setReferenceAttachment($referenceAttachment);
    }
    /**
     * Get ItemAttachment value
     * @return \Ews\StructType\EwsItemAttachmentType|null
     */
    public function getItemAttachment()
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
    public function validateItemAttachmentForChoiceConstraintsFromSetItemAttachment($value)
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
                    throw new \InvalidArgumentException(sprintf('The property ItemAttachment can\'t be set as the property %s is already set. Only one property must be set among these properties: ItemAttachment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ItemAttachment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemAttachmentType $itemAttachment
     * @return \Ews\StructType\EwsArrayOfAttachmentsType
     */
    public function setItemAttachment(\Ews\StructType\EwsItemAttachmentType $itemAttachment = null)
    {
        // validation for constraint: choice(ItemAttachment, FileAttachment, ReferenceAttachment)
        if ('' !== ($itemAttachmentChoiceErrorMessage = self::validateItemAttachmentForChoiceConstraintsFromSetItemAttachment($itemAttachment))) {
            throw new \InvalidArgumentException($itemAttachmentChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsFileAttachmentType|null
     */
    public function getFileAttachment()
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
    public function validateFileAttachmentForChoiceConstraintsFromSetFileAttachment($value)
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
                    throw new \InvalidArgumentException(sprintf('The property FileAttachment can\'t be set as the property %s is already set. Only one property must be set among these properties: FileAttachment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set FileAttachment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFileAttachmentType $fileAttachment
     * @return \Ews\StructType\EwsArrayOfAttachmentsType
     */
    public function setFileAttachment(\Ews\StructType\EwsFileAttachmentType $fileAttachment = null)
    {
        // validation for constraint: choice(ItemAttachment, FileAttachment, ReferenceAttachment)
        if ('' !== ($fileAttachmentChoiceErrorMessage = self::validateFileAttachmentForChoiceConstraintsFromSetFileAttachment($fileAttachment))) {
            throw new \InvalidArgumentException($fileAttachmentChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsReferenceAttachmentType|null
     */
    public function getReferenceAttachment()
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
    public function validateReferenceAttachmentForChoiceConstraintsFromSetReferenceAttachment($value)
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
                    throw new \InvalidArgumentException(sprintf('The property ReferenceAttachment can\'t be set as the property %s is already set. Only one property must be set among these properties: ReferenceAttachment, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ReferenceAttachment value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsReferenceAttachmentType $referenceAttachment
     * @return \Ews\StructType\EwsArrayOfAttachmentsType
     */
    public function setReferenceAttachment(\Ews\StructType\EwsReferenceAttachmentType $referenceAttachment = null)
    {
        // validation for constraint: choice(ItemAttachment, FileAttachment, ReferenceAttachment)
        if ('' !== ($referenceAttachmentChoiceErrorMessage = self::validateReferenceAttachmentForChoiceConstraintsFromSetReferenceAttachment($referenceAttachment))) {
            throw new \InvalidArgumentException($referenceAttachmentChoiceErrorMessage, __LINE__);
        }
        if (is_null($referenceAttachment) || (is_array($referenceAttachment) && empty($referenceAttachment))) {
            unset($this->ReferenceAttachment);
        } else {
            $this->ReferenceAttachment = $referenceAttachment;
        }
        return $this;
    }
}
