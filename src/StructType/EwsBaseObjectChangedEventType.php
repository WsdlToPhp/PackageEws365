<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseObjectChangedEventType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsBaseObjectChangedEventType extends EwsBaseNotificationEventType
{
    /**
     * The TimeStamp
     * @var string|null
     */
    protected ?string $TimeStamp = null;
    /**
     * The FolderId
     * Meta information extracted from the WSDL
     * - choice: FolderId | ItemId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $FolderId = null;
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - choice: FolderId | ItemId
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \StructType\EwsItemIdType|null
     */
    protected ?\StructType\EwsItemIdType $ItemId = null;
    /**
     * The ParentFolderId
     * @var \StructType\EwsFolderIdType|null
     */
    protected ?\StructType\EwsFolderIdType $ParentFolderId = null;
    /**
     * Constructor method for BaseObjectChangedEventType
     * @uses EwsBaseObjectChangedEventType::setTimeStamp()
     * @uses EwsBaseObjectChangedEventType::setFolderId()
     * @uses EwsBaseObjectChangedEventType::setItemId()
     * @uses EwsBaseObjectChangedEventType::setParentFolderId()
     * @param string $timeStamp
     * @param \StructType\EwsFolderIdType $folderId
     * @param \StructType\EwsItemIdType $itemId
     * @param \StructType\EwsFolderIdType $parentFolderId
     */
    public function __construct(?string $timeStamp = null, ?\StructType\EwsFolderIdType $folderId = null, ?\StructType\EwsItemIdType $itemId = null, ?\StructType\EwsFolderIdType $parentFolderId = null)
    {
        $this
            ->setTimeStamp($timeStamp)
            ->setFolderId($folderId)
            ->setItemId($itemId)
            ->setParentFolderId($parentFolderId);
    }
    /**
     * Get TimeStamp value
     * @return string|null
     */
    public function getTimeStamp(): ?string
    {
        return $this->TimeStamp;
    }
    /**
     * Set TimeStamp value
     * @param string $timeStamp
     * @return \StructType\EwsBaseObjectChangedEventType
     */
    public function setTimeStamp(?string $timeStamp = null): self
    {
        // validation for constraint: string
        if (!is_null($timeStamp) && !is_string($timeStamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStamp, true), gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;
        
        return $this;
    }
    /**
     * Get FolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getFolderId(): ?\StructType\EwsFolderIdType
    {
        return isset($this->FolderId) ? $this->FolderId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setFolderId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFolderId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateFolderIdForChoiceConstraintsFromSetFolderId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'ItemId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property FolderId can\'t be set as the property %s is already set. Only one property must be set among these properties: FolderId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set FolderId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsFolderIdType $folderId
     * @return \StructType\EwsBaseObjectChangedEventType
     */
    public function setFolderId(?\StructType\EwsFolderIdType $folderId = null): self
    {
        // validation for constraint: choice(FolderId, ItemId)
        if ('' !== ($folderIdChoiceErrorMessage = self::validateFolderIdForChoiceConstraintsFromSetFolderId($folderId))) {
            throw new InvalidArgumentException($folderIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($folderId) || (is_array($folderId) && empty($folderId))) {
            unset($this->FolderId);
        } else {
            $this->FolderId = $folderId;
        }
        
        return $this;
    }
    /**
     * Get ItemId value
     * @return \StructType\EwsItemIdType|null
     */
    public function getItemId(): ?\StructType\EwsItemIdType
    {
        return isset($this->ItemId) ? $this->ItemId : null;
    }
    /**
     * This method is responsible for validating the value passed to the setItemId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemId method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemIdForChoiceConstraintsFromSetItemId($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'FolderId',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ItemId can\'t be set as the property %s is already set. Only one property must be set among these properties: ItemId, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ItemId value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsItemIdType $itemId
     * @return \StructType\EwsBaseObjectChangedEventType
     */
    public function setItemId(?\StructType\EwsItemIdType $itemId = null): self
    {
        // validation for constraint: choice(FolderId, ItemId)
        if ('' !== ($itemIdChoiceErrorMessage = self::validateItemIdForChoiceConstraintsFromSetItemId($itemId))) {
            throw new InvalidArgumentException($itemIdChoiceErrorMessage, __LINE__);
        }
        if (is_null($itemId) || (is_array($itemId) && empty($itemId))) {
            unset($this->ItemId);
        } else {
            $this->ItemId = $itemId;
        }
        
        return $this;
    }
    /**
     * Get ParentFolderId value
     * @return \StructType\EwsFolderIdType|null
     */
    public function getParentFolderId(): ?\StructType\EwsFolderIdType
    {
        return $this->ParentFolderId;
    }
    /**
     * Set ParentFolderId value
     * @param \StructType\EwsFolderIdType $parentFolderId
     * @return \StructType\EwsBaseObjectChangedEventType
     */
    public function setParentFolderId(?\StructType\EwsFolderIdType $parentFolderId = null): self
    {
        $this->ParentFolderId = $parentFolderId;
        
        return $this;
    }
}
