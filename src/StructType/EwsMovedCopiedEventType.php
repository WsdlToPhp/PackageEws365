<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MovedCopiedEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsMovedCopiedEventType extends EwsBaseObjectChangedEventType
{
    /**
     * The OldFolderId
     * Meta information extracted from the WSDL
     * - choice: OldFolderId | OldItemId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $OldFolderId;
    /**
     * The OldItemId
     * Meta information extracted from the WSDL
     * - choice: OldFolderId | OldItemId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsItemIdType
     */
    public $OldItemId;
    /**
     * The OldParentFolderId
     * @var \Ews\StructType\EwsFolderIdType
     */
    public $OldParentFolderId;
    /**
     * Constructor method for MovedCopiedEventType
     * @uses EwsMovedCopiedEventType::setOldFolderId()
     * @uses EwsMovedCopiedEventType::setOldItemId()
     * @uses EwsMovedCopiedEventType::setOldParentFolderId()
     * @param \Ews\StructType\EwsFolderIdType $oldFolderId
     * @param \Ews\StructType\EwsItemIdType $oldItemId
     * @param \Ews\StructType\EwsFolderIdType $oldParentFolderId
     */
    public function __construct(\Ews\StructType\EwsFolderIdType $oldFolderId = null, \Ews\StructType\EwsItemIdType $oldItemId = null, \Ews\StructType\EwsFolderIdType $oldParentFolderId = null)
    {
        $this
            ->setOldFolderId($oldFolderId)
            ->setOldItemId($oldItemId)
            ->setOldParentFolderId($oldParentFolderId);
    }
    /**
     * Get OldFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getOldFolderId()
    {
        return isset($this->OldFolderId) ? $this->OldFolderId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setOldFolderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOldFolderId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOldFolderIdForChoiceConstraintsFromSetOldFolderId($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'OldItemId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property OldFolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: OldFolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set OldFolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsFolderIdType $oldFolderId
     * @return \Ews\StructType\EwsMovedCopiedEventType
     */
    public function setOldFolderId(\Ews\StructType\EwsFolderIdType $oldFolderId = null)
    {
        // validation for constraint: choice(OldFolderId, OldItemId)
        if ('' !== ($oldFolderIdChoiceErrorMessage = self::validateOldFolderIdForChoiceConstraintsFromSetOldFolderId($oldFolderId))) {
            throw new \InvalidArgumentException($oldFolderIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($oldFolderId) || (is_array($oldFolderId) && empty($oldFolderId))) {
            unset($this->OldFolderId);
        } else {
            $this->OldFolderId = $oldFolderId;
        }
        return $this;
    }
    /**
     * Get OldItemId value
     * @return \Ews\StructType\EwsItemIdType|null
     */
    public function getOldItemId()
    {
        return isset($this->OldItemId) ? $this->OldItemId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setOldItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOldItemId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateOldItemIdForChoiceConstraintsFromSetOldItemId($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'OldFolderId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property OldItemId can\'t be set as the property %s is already set. Only one property must be set among these properties: OldItemId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set OldItemId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsItemIdType $oldItemId
     * @return \Ews\StructType\EwsMovedCopiedEventType
     */
    public function setOldItemId(\Ews\StructType\EwsItemIdType $oldItemId = null)
    {
        // validation for constraint: choice(OldFolderId, OldItemId)
        if ('' !== ($oldItemIdChoiceErrorMessage = self::validateOldItemIdForChoiceConstraintsFromSetOldItemId($oldItemId))) {
            throw new \InvalidArgumentException($oldItemIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($oldItemId) || (is_array($oldItemId) && empty($oldItemId))) {
            unset($this->OldItemId);
        } else {
            $this->OldItemId = $oldItemId;
        }
        return $this;
    }
    /**
     * Get OldParentFolderId value
     * @return \Ews\StructType\EwsFolderIdType|null
     */
    public function getOldParentFolderId()
    {
        return $this->OldParentFolderId;
    }
    /**
     * Set OldParentFolderId value
     * @param \Ews\StructType\EwsFolderIdType $oldParentFolderId
     * @return \Ews\StructType\EwsMovedCopiedEventType
     */
    public function setOldParentFolderId(\Ews\StructType\EwsFolderIdType $oldParentFolderId = null)
    {
        $this->OldParentFolderId = $oldParentFolderId;
        return $this;
    }
}
