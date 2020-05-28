<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyArrayOfItemChangeDescriptionsType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyArrayOfItemChangeDescriptionsType extends AbstractStructBase
{
    /**
     * The AppendToItemField
     * Meta information extracted from the WSDL
     * - choice: AppendToItemField | SetItemField | DeleteItemField
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsAppendToItemFieldType
     */
    public $AppendToItemField;
    /**
     * The SetItemField
     * Meta information extracted from the WSDL
     * - choice: AppendToItemField | SetItemField | DeleteItemField
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSetItemFieldType
     */
    public $SetItemField;
    /**
     * The DeleteItemField
     * Meta information extracted from the WSDL
     * - choice: AppendToItemField | SetItemField | DeleteItemField
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDeleteItemFieldType
     */
    public $DeleteItemField;
    /**
     * Constructor method for NonEmptyArrayOfItemChangeDescriptionsType
     * @uses EwsNonEmptyArrayOfItemChangeDescriptionsType::setAppendToItemField()
     * @uses EwsNonEmptyArrayOfItemChangeDescriptionsType::setSetItemField()
     * @uses EwsNonEmptyArrayOfItemChangeDescriptionsType::setDeleteItemField()
     * @param \Ews\StructType\EwsAppendToItemFieldType $appendToItemField
     * @param \Ews\StructType\EwsSetItemFieldType $setItemField
     * @param \Ews\StructType\EwsDeleteItemFieldType $deleteItemField
     */
    public function __construct(\Ews\StructType\EwsAppendToItemFieldType $appendToItemField = null, \Ews\StructType\EwsSetItemFieldType $setItemField = null, \Ews\StructType\EwsDeleteItemFieldType $deleteItemField = null)
    {
        $this
            ->setAppendToItemField($appendToItemField)
            ->setSetItemField($setItemField)
            ->setDeleteItemField($deleteItemField);
    }
    /**
     * Get AppendToItemField value
     * @return \Ews\StructType\EwsAppendToItemFieldType|null
     */
    public function getAppendToItemField()
    {
        return isset($this->AppendToItemField) ? $this->AppendToItemField : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAppendToItemField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAppendToItemField method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAppendToItemFieldForChoiceConstraintsFromSetAppendToItemField($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SetItemField',
            'DeleteItemField',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AppendToItemField can\'t be set as the property %s is already set. Only one property must be set among these properties: AppendToItemField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AppendToItemField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsAppendToItemFieldType $appendToItemField
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setAppendToItemField(\Ews\StructType\EwsAppendToItemFieldType $appendToItemField = null)
    {
        // validation for constraint: choice(AppendToItemField, SetItemField, DeleteItemField)
        if ('' !== ($appendToItemFieldChoiceErrorMessage = self::validateAppendToItemFieldForChoiceConstraintsFromSetAppendToItemField($appendToItemField))) {
            throw new \InvalidArgumentException($appendToItemFieldChoiceErrorMessage, __LINE__);
        }
        if (is_null($appendToItemField) || (is_array($appendToItemField) && empty($appendToItemField))) {
            unset($this->AppendToItemField);
        } else {
            $this->AppendToItemField = $appendToItemField;
        }
        return $this;
    }
    /**
     * Get SetItemField value
     * @return \Ews\StructType\EwsSetItemFieldType|null
     */
    public function getSetItemField()
    {
        return isset($this->SetItemField) ? $this->SetItemField : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSetItemField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetItemField method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSetItemFieldForChoiceConstraintsFromSetSetItemField($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AppendToItemField',
            'DeleteItemField',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SetItemField can\'t be set as the property %s is already set. Only one property must be set among these properties: SetItemField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SetItemField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSetItemFieldType $setItemField
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setSetItemField(\Ews\StructType\EwsSetItemFieldType $setItemField = null)
    {
        // validation for constraint: choice(AppendToItemField, SetItemField, DeleteItemField)
        if ('' !== ($setItemFieldChoiceErrorMessage = self::validateSetItemFieldForChoiceConstraintsFromSetSetItemField($setItemField))) {
            throw new \InvalidArgumentException($setItemFieldChoiceErrorMessage, __LINE__);
        }
        if (is_null($setItemField) || (is_array($setItemField) && empty($setItemField))) {
            unset($this->SetItemField);
        } else {
            $this->SetItemField = $setItemField;
        }
        return $this;
    }
    /**
     * Get DeleteItemField value
     * @return \Ews\StructType\EwsDeleteItemFieldType|null
     */
    public function getDeleteItemField()
    {
        return isset($this->DeleteItemField) ? $this->DeleteItemField : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeleteItemField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteItemField method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteItemFieldForChoiceConstraintsFromSetDeleteItemField($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AppendToItemField',
            'SetItemField',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeleteItemField can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteItemField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeleteItemField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeleteItemFieldType $deleteItemField
     * @return \Ews\StructType\EwsNonEmptyArrayOfItemChangeDescriptionsType
     */
    public function setDeleteItemField(\Ews\StructType\EwsDeleteItemFieldType $deleteItemField = null)
    {
        // validation for constraint: choice(AppendToItemField, SetItemField, DeleteItemField)
        if ('' !== ($deleteItemFieldChoiceErrorMessage = self::validateDeleteItemFieldForChoiceConstraintsFromSetDeleteItemField($deleteItemField))) {
            throw new \InvalidArgumentException($deleteItemFieldChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteItemField) || (is_array($deleteItemField) && empty($deleteItemField))) {
            unset($this->DeleteItemField);
        } else {
            $this->DeleteItemField = $deleteItemField;
        }
        return $this;
    }
}
