<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncFolderHierarchyChangesType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSyncFolderHierarchyChangesType extends AbstractStructBase
{
    /**
     * The Create
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType
     */
    public $Create;
    /**
     * The Update
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType
     */
    public $Update;
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - choice: Create | Update | Delete
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 0
     * @var \Ews\StructType\EwsSyncFolderHierarchyDeleteType
     */
    public $Delete;
    /**
     * Constructor method for SyncFolderHierarchyChangesType
     * @uses EwsSyncFolderHierarchyChangesType::setCreate()
     * @uses EwsSyncFolderHierarchyChangesType::setUpdate()
     * @uses EwsSyncFolderHierarchyChangesType::setDelete()
     * @param \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $create
     * @param \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $update
     * @param \Ews\StructType\EwsSyncFolderHierarchyDeleteType $delete
     */
    public function __construct(\Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $create = null, \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $update = null, \Ews\StructType\EwsSyncFolderHierarchyDeleteType $delete = null)
    {
        $this
            ->setCreate($create)
            ->setUpdate($update)
            ->setDelete($delete);
    }
    /**
     * Get Create value
     * @return \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType|null
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
     * @param \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $create
     * @return \Ews\StructType\EwsSyncFolderHierarchyChangesType
     */
    public function setCreate(\Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $create = null)
    {
        // validation for constraint: choice(Create, Update, Delete)
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
     * @return \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType|null
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
     * @param \Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $update
     * @return \Ews\StructType\EwsSyncFolderHierarchyChangesType
     */
    public function setUpdate(\Ews\StructType\EwsSyncFolderHierarchyCreateOrUpdateType $update = null)
    {
        // validation for constraint: choice(Create, Update, Delete)
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
     * @return \Ews\StructType\EwsSyncFolderHierarchyDeleteType|null
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
     * @param \Ews\StructType\EwsSyncFolderHierarchyDeleteType $delete
     * @return \Ews\StructType\EwsSyncFolderHierarchyChangesType
     */
    public function setDelete(\Ews\StructType\EwsSyncFolderHierarchyDeleteType $delete = null)
    {
        // validation for constraint: choice(Create, Update, Delete)
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
}
