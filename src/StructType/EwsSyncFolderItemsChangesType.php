<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderItemsChangesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderItemsChangesType extends AbstractStructBase
{
    /**
     * The Create
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete | ReadFlagChange
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsSyncFolderItemsCreateOrUpdateType|null
     */
    protected ?\StructType\EwsSyncFolderItemsCreateOrUpdateType $Create = null;
    /**
     * The Update
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete | ReadFlagChange
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsSyncFolderItemsCreateOrUpdateType|null
     */
    protected ?\StructType\EwsSyncFolderItemsCreateOrUpdateType $Update = null;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete | ReadFlagChange
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsSyncFolderItemsDeleteType|null
     */
    protected ?\StructType\EwsSyncFolderItemsDeleteType $Delete = null;
    /**
     * The ReadFlagChange
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete | ReadFlagChange
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \StructType\EwsSyncFolderItemsReadFlagType|null
     */
    protected ?\StructType\EwsSyncFolderItemsReadFlagType $ReadFlagChange = null;
    /**
     * Constructor method for SyncFolderItemsChangesType
     * @uses EwsSyncFolderItemsChangesType::setCreate()
     * @uses EwsSyncFolderItemsChangesType::setUpdate()
     * @uses EwsSyncFolderItemsChangesType::setDelete()
     * @uses EwsSyncFolderItemsChangesType::setReadFlagChange()
     * @param \StructType\EwsSyncFolderItemsCreateOrUpdateType $create
     * @param \StructType\EwsSyncFolderItemsCreateOrUpdateType $update
     * @param \StructType\EwsSyncFolderItemsDeleteType $delete
     * @param \StructType\EwsSyncFolderItemsReadFlagType $readFlagChange
     */
    public function __construct(?\StructType\EwsSyncFolderItemsCreateOrUpdateType $create = null, ?\StructType\EwsSyncFolderItemsCreateOrUpdateType $update = null, ?\StructType\EwsSyncFolderItemsDeleteType $delete = null, ?\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange = null)
    {
        $this
            ->setCreate($create)
            ->setUpdate($update)
            ->setDelete($delete)
            ->setReadFlagChange($readFlagChange);
    }
    /**
     * Get Create value
     * @return \StructType\EwsSyncFolderItemsCreateOrUpdateType|null
     */
    public function getCreate(): ?\StructType\EwsSyncFolderItemsCreateOrUpdateType
    {
        return isset($this->Create) ? $this->Create : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreateForChoiceConstraintsFromSetCreate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Update',
            'Delete',
            'ReadFlagChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Create can\'t be set as the property %s is already set. Only one property must be set among these properties: Create, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Create value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSyncFolderItemsCreateOrUpdateType $create
     * @return \StructType\EwsSyncFolderItemsChangesType
     */
    public function setCreate(?\StructType\EwsSyncFolderItemsCreateOrUpdateType $create = null): self
    {
        // validation for constraint: choice(Create, Update, Delete, ReadFlagChange)
        if ('' !== ($createChoiceErrorMessage = self::validateCreateForChoiceConstraintsFromSetCreate($create))) {
            throw new InvalidArgumentException($createChoiceErrorMessage, __LINE__);
        }
        if (is_null($create) || (is_array($create) && empty($create))) {
            unset($this->Create);
        } else {
            $this->Create = $create;
        }
        
        return $this;
    }
    /**
     * Get Update value
     * @return \StructType\EwsSyncFolderItemsCreateOrUpdateType|null
     */
    public function getUpdate(): ?\StructType\EwsSyncFolderItemsCreateOrUpdateType
    {
        return isset($this->Update) ? $this->Update : null;
    }
    /**
     * This method is responsible for validating the value passed to the setUpdate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUpdate method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateUpdateForChoiceConstraintsFromSetUpdate($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Create',
            'Delete',
            'ReadFlagChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Update can\'t be set as the property %s is already set. Only one property must be set among these properties: Update, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Update value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSyncFolderItemsCreateOrUpdateType $update
     * @return \StructType\EwsSyncFolderItemsChangesType
     */
    public function setUpdate(?\StructType\EwsSyncFolderItemsCreateOrUpdateType $update = null): self
    {
        // validation for constraint: choice(Create, Update, Delete, ReadFlagChange)
        if ('' !== ($updateChoiceErrorMessage = self::validateUpdateForChoiceConstraintsFromSetUpdate($update))) {
            throw new InvalidArgumentException($updateChoiceErrorMessage, __LINE__);
        }
        if (is_null($update) || (is_array($update) && empty($update))) {
            unset($this->Update);
        } else {
            $this->Update = $update;
        }
        
        return $this;
    }
    /**
     * Get Delete value
     * @return \StructType\EwsSyncFolderItemsDeleteType|null
     */
    public function getDelete(): ?\StructType\EwsSyncFolderItemsDeleteType
    {
        return isset($this->Delete) ? $this->Delete : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDelete method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDelete method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteForChoiceConstraintsFromSetDelete($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Create',
            'Update',
            'ReadFlagChange',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property Delete can\'t be set as the property %s is already set. Only one property must be set among these properties: Delete, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set Delete value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSyncFolderItemsDeleteType $delete
     * @return \StructType\EwsSyncFolderItemsChangesType
     */
    public function setDelete(?\StructType\EwsSyncFolderItemsDeleteType $delete = null): self
    {
        // validation for constraint: choice(Create, Update, Delete, ReadFlagChange)
        if ('' !== ($deleteChoiceErrorMessage = self::validateDeleteForChoiceConstraintsFromSetDelete($delete))) {
            throw new InvalidArgumentException($deleteChoiceErrorMessage, __LINE__);
        }
        if (is_null($delete) || (is_array($delete) && empty($delete))) {
            unset($this->Delete);
        } else {
            $this->Delete = $delete;
        }
        
        return $this;
    }
    /**
     * Get ReadFlagChange value
     * @return \StructType\EwsSyncFolderItemsReadFlagType|null
     */
    public function getReadFlagChange(): ?\StructType\EwsSyncFolderItemsReadFlagType
    {
        return isset($this->ReadFlagChange) ? $this->ReadFlagChange : null;
    }
    /**
     * This method is responsible for validating the value passed to the setReadFlagChange method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReadFlagChange method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateReadFlagChangeForChoiceConstraintsFromSetReadFlagChange($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'Create',
            'Update',
            'Delete',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property ReadFlagChange can\'t be set as the property %s is already set. Only one property must be set among these properties: ReadFlagChange, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set ReadFlagChange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSyncFolderItemsReadFlagType $readFlagChange
     * @return \StructType\EwsSyncFolderItemsChangesType
     */
    public function setReadFlagChange(?\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange = null): self
    {
        // validation for constraint: choice(Create, Update, Delete, ReadFlagChange)
        if ('' !== ($readFlagChangeChoiceErrorMessage = self::validateReadFlagChangeForChoiceConstraintsFromSetReadFlagChange($readFlagChange))) {
            throw new InvalidArgumentException($readFlagChangeChoiceErrorMessage, __LINE__);
        }
        if (is_null($readFlagChange) || (is_array($readFlagChange) && empty($readFlagChange))) {
            unset($this->ReadFlagChange);
        } else {
            $this->ReadFlagChange = $readFlagChange;
        }
        
        return $this;
    }
}
