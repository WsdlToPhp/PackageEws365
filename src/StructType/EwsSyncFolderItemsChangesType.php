<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType
     */
    public $Create;
    /**
     * The Update
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete | ReadFlagChange
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType
     */
    public $Update;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete | ReadFlagChange
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSyncFolderItemsDeleteType
     */
    public $Delete;
    /**
     * The ReadFlagChange
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete | ReadFlagChange
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSyncFolderItemsReadFlagType
     */
    public $ReadFlagChange;
    /**
     * Constructor method for SyncFolderItemsChangesType
     * @uses EwsSyncFolderItemsChangesType::setCreate()
     * @uses EwsSyncFolderItemsChangesType::setUpdate()
     * @uses EwsSyncFolderItemsChangesType::setDelete()
     * @uses EwsSyncFolderItemsChangesType::setReadFlagChange()
     * @param \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $create
     * @param \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $update
     * @param \Ews\StructType\EwsSyncFolderItemsDeleteType $delete
     * @param \Ews\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange
     */
    public function __construct(\Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $create = null, \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $update = null, \Ews\StructType\EwsSyncFolderItemsDeleteType $delete = null, \Ews\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange = null)
    {
        $this
            ->setCreate($create)
            ->setUpdate($update)
            ->setDelete($delete)
            ->setReadFlagChange($readFlagChange);
    }
    /**
     * Get Create value
     * @return \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType|null
     */
    public function getCreate()
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
    public function validateCreateForChoiceConstraintsFromSetCreate($value)
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
                    throw new \InvalidArgumentException(sprintf('The property Create can\'t be set as the property %s is already set. Only one property must be set among these properties: Create, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Create value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $create
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public function setCreate(\Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $create = null)
    {
        // validation for constraint: choice(Create, Update, Delete, ReadFlagChange)
        if ('' !== ($createChoiceErrorMessage = self::validateCreateForChoiceConstraintsFromSetCreate($create))) {
            throw new \InvalidArgumentException($createChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType|null
     */
    public function getUpdate()
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
    public function validateUpdateForChoiceConstraintsFromSetUpdate($value)
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
                    throw new \InvalidArgumentException(sprintf('The property Update can\'t be set as the property %s is already set. Only one property must be set among these properties: Update, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Update value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $update
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public function setUpdate(\Ews\StructType\EwsSyncFolderItemsCreateOrUpdateType $update = null)
    {
        // validation for constraint: choice(Create, Update, Delete, ReadFlagChange)
        if ('' !== ($updateChoiceErrorMessage = self::validateUpdateForChoiceConstraintsFromSetUpdate($update))) {
            throw new \InvalidArgumentException($updateChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsSyncFolderItemsDeleteType|null
     */
    public function getDelete()
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
    public function validateDeleteForChoiceConstraintsFromSetDelete($value)
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
                    throw new \InvalidArgumentException(sprintf('The property Delete can\'t be set as the property %s is already set. Only one property must be set among these properties: Delete, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Delete value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSyncFolderItemsDeleteType $delete
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public function setDelete(\Ews\StructType\EwsSyncFolderItemsDeleteType $delete = null)
    {
        // validation for constraint: choice(Create, Update, Delete, ReadFlagChange)
        if ('' !== ($deleteChoiceErrorMessage = self::validateDeleteForChoiceConstraintsFromSetDelete($delete))) {
            throw new \InvalidArgumentException($deleteChoiceErrorMessage, __LINE__);
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
     * @return \Ews\StructType\EwsSyncFolderItemsReadFlagType|null
     */
    public function getReadFlagChange()
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
    public function validateReadFlagChangeForChoiceConstraintsFromSetReadFlagChange($value)
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
                    throw new \InvalidArgumentException(sprintf('The property ReadFlagChange can\'t be set as the property %s is already set. Only one property must be set among these properties: ReadFlagChange, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ReadFlagChange value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange
     * @return \Ews\StructType\EwsSyncFolderItemsChangesType
     */
    public function setReadFlagChange(\Ews\StructType\EwsSyncFolderItemsReadFlagType $readFlagChange = null)
    {
        // validation for constraint: choice(Create, Update, Delete, ReadFlagChange)
        if ('' !== ($readFlagChangeChoiceErrorMessage = self::validateReadFlagChangeForChoiceConstraintsFromSetReadFlagChange($readFlagChange))) {
            throw new \InvalidArgumentException($readFlagChangeChoiceErrorMessage, __LINE__);
        }
        if (is_null($readFlagChange) || (is_array($readFlagChange) && empty($readFlagChange))) {
            unset($this->ReadFlagChange);
        } else {
            $this->ReadFlagChange = $readFlagChange;
        }
        return $this;
    }
}
