<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfFolderChangeDescriptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfFolderChangeDescriptionsType extends AbstractStructBase
{
    /**
     * The AppendToFolderField
     * Meta information extracted from the WSDL
     * - choice: AppendToFolderField | SetFolderField | DeleteFolderField
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAppendToFolderFieldType
     */
    public $AppendToFolderField;
    /**
     * The SetFolderField
     * Meta information extracted from the WSDL
     * - choice: AppendToFolderField | SetFolderField | DeleteFolderField
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSetFolderFieldType
     */
    public $SetFolderField;
    /**
     * The DeleteFolderField
     * Meta information extracted from the WSDL
     * - choice: AppendToFolderField | SetFolderField | DeleteFolderField
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDeleteFolderFieldType
     */
    public $DeleteFolderField;
    /**
     * Constructor method for NonEmptyArrayOfFolderChangeDescriptionsType
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setAppendToFolderField()
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setSetFolderField()
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setDeleteFolderField()
     * @param \Ews\StructType\EwsAppendToFolderFieldType $appendToFolderField
     * @param \Ews\StructType\EwsSetFolderFieldType $setFolderField
     * @param \Ews\StructType\EwsDeleteFolderFieldType $deleteFolderField
     */
    public function __construct(\Ews\StructType\EwsAppendToFolderFieldType $appendToFolderField = null, \Ews\StructType\EwsSetFolderFieldType $setFolderField = null, \Ews\StructType\EwsDeleteFolderFieldType $deleteFolderField = null)
    {
        $this
            ->setAppendToFolderField($appendToFolderField)
            ->setSetFolderField($setFolderField)
            ->setDeleteFolderField($deleteFolderField);
    }
    /**
     * Get AppendToFolderField value
     * @return \Ews\StructType\EwsAppendToFolderFieldType|null
     */
    public function getAppendToFolderField()
    {
        return isset($this->AppendToFolderField) ? $this->AppendToFolderField : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAppendToFolderField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppendToFolderField method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAppendToFolderFieldForChoiceConstraintsFromSetAppendToFolderField($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SetFolderField',
            'DeleteFolderField',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AppendToFolderField can\'t be set as the property %s is already set. Only one property must be set among these properties: AppendToFolderField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AppendToFolderField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAppendToFolderFieldType $appendToFolderField
     * @return \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setAppendToFolderField(\Ews\StructType\EwsAppendToFolderFieldType $appendToFolderField = null)
    {
        // validation for constraint: choice(AppendToFolderField, SetFolderField, DeleteFolderField)
        if ('' !== ($appendToFolderFieldChoiceErrorMessage = self::validateAppendToFolderFieldForChoiceConstraintsFromSetAppendToFolderField($appendToFolderField))) {
            throw new \InvalidArgumentException($appendToFolderFieldChoiceErrorMessage, __LINE__);
        }
        if (is_null($appendToFolderField) || (is_array($appendToFolderField) && empty($appendToFolderField))) {
            unset($this->AppendToFolderField);
        } else {
            $this->AppendToFolderField = $appendToFolderField;
        }
        return $this;
    }
    /**
     * Get SetFolderField value
     * @return \Ews\StructType\EwsSetFolderFieldType|null
     */
    public function getSetFolderField()
    {
        return isset($this->SetFolderField) ? $this->SetFolderField : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSetFolderField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetFolderField method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSetFolderFieldForChoiceConstraintsFromSetSetFolderField($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AppendToFolderField',
            'DeleteFolderField',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SetFolderField can\'t be set as the property %s is already set. Only one property must be set among these properties: SetFolderField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SetFolderField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSetFolderFieldType $setFolderField
     * @return \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setSetFolderField(\Ews\StructType\EwsSetFolderFieldType $setFolderField = null)
    {
        // validation for constraint: choice(AppendToFolderField, SetFolderField, DeleteFolderField)
        if ('' !== ($setFolderFieldChoiceErrorMessage = self::validateSetFolderFieldForChoiceConstraintsFromSetSetFolderField($setFolderField))) {
            throw new \InvalidArgumentException($setFolderFieldChoiceErrorMessage, __LINE__);
        }
        if (is_null($setFolderField) || (is_array($setFolderField) && empty($setFolderField))) {
            unset($this->SetFolderField);
        } else {
            $this->SetFolderField = $setFolderField;
        }
        return $this;
    }
    /**
     * Get DeleteFolderField value
     * @return \Ews\StructType\EwsDeleteFolderFieldType|null
     */
    public function getDeleteFolderField()
    {
        return isset($this->DeleteFolderField) ? $this->DeleteFolderField : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeleteFolderField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteFolderField method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteFolderFieldForChoiceConstraintsFromSetDeleteFolderField($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AppendToFolderField',
            'SetFolderField',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeleteFolderField can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteFolderField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeleteFolderField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeleteFolderFieldType $deleteFolderField
     * @return \Ews\StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setDeleteFolderField(\Ews\StructType\EwsDeleteFolderFieldType $deleteFolderField = null)
    {
        // validation for constraint: choice(AppendToFolderField, SetFolderField, DeleteFolderField)
        if ('' !== ($deleteFolderFieldChoiceErrorMessage = self::validateDeleteFolderFieldForChoiceConstraintsFromSetDeleteFolderField($deleteFolderField))) {
            throw new \InvalidArgumentException($deleteFolderFieldChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteFolderField) || (is_array($deleteFolderField) && empty($deleteFolderField))) {
            unset($this->DeleteFolderField);
        } else {
            $this->DeleteFolderField = $deleteFolderField;
        }
        return $this;
    }
}
