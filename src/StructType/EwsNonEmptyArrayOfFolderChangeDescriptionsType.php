<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsAppendToFolderFieldType|null
     */
    protected ?\StructType\EwsAppendToFolderFieldType $AppendToFolderField = null;
    /**
     * The SetFolderField
     * Meta information extracted from the WSDL
     * - choice: AppendToFolderField | SetFolderField | DeleteFolderField
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsSetFolderFieldType|null
     */
    protected ?\StructType\EwsSetFolderFieldType $SetFolderField = null;
    /**
     * The DeleteFolderField
     * Meta information extracted from the WSDL
     * - choice: AppendToFolderField | SetFolderField | DeleteFolderField
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \StructType\EwsDeleteFolderFieldType|null
     */
    protected ?\StructType\EwsDeleteFolderFieldType $DeleteFolderField = null;
    /**
     * Constructor method for NonEmptyArrayOfFolderChangeDescriptionsType
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setAppendToFolderField()
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setSetFolderField()
     * @uses EwsNonEmptyArrayOfFolderChangeDescriptionsType::setDeleteFolderField()
     * @param \StructType\EwsAppendToFolderFieldType $appendToFolderField
     * @param \StructType\EwsSetFolderFieldType $setFolderField
     * @param \StructType\EwsDeleteFolderFieldType $deleteFolderField
     */
    public function __construct(?\StructType\EwsAppendToFolderFieldType $appendToFolderField = null, ?\StructType\EwsSetFolderFieldType $setFolderField = null, ?\StructType\EwsDeleteFolderFieldType $deleteFolderField = null)
    {
        $this
            ->setAppendToFolderField($appendToFolderField)
            ->setSetFolderField($setFolderField)
            ->setDeleteFolderField($deleteFolderField);
    }
    /**
     * Get AppendToFolderField value
     * @return \StructType\EwsAppendToFolderFieldType|null
     */
    public function getAppendToFolderField(): ?\StructType\EwsAppendToFolderFieldType
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
    public function validateAppendToFolderFieldForChoiceConstraintsFromSetAppendToFolderField($value): string
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
                    throw new InvalidArgumentException(sprintf('The property AppendToFolderField can\'t be set as the property %s is already set. Only one property must be set among these properties: AppendToFolderField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set AppendToFolderField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsAppendToFolderFieldType $appendToFolderField
     * @return \StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setAppendToFolderField(?\StructType\EwsAppendToFolderFieldType $appendToFolderField = null): self
    {
        // validation for constraint: choice(AppendToFolderField, SetFolderField, DeleteFolderField)
        if ('' !== ($appendToFolderFieldChoiceErrorMessage = self::validateAppendToFolderFieldForChoiceConstraintsFromSetAppendToFolderField($appendToFolderField))) {
            throw new InvalidArgumentException($appendToFolderFieldChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsSetFolderFieldType|null
     */
    public function getSetFolderField(): ?\StructType\EwsSetFolderFieldType
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
    public function validateSetFolderFieldForChoiceConstraintsFromSetSetFolderField($value): string
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
                    throw new InvalidArgumentException(sprintf('The property SetFolderField can\'t be set as the property %s is already set. Only one property must be set among these properties: SetFolderField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set SetFolderField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsSetFolderFieldType $setFolderField
     * @return \StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setSetFolderField(?\StructType\EwsSetFolderFieldType $setFolderField = null): self
    {
        // validation for constraint: choice(AppendToFolderField, SetFolderField, DeleteFolderField)
        if ('' !== ($setFolderFieldChoiceErrorMessage = self::validateSetFolderFieldForChoiceConstraintsFromSetSetFolderField($setFolderField))) {
            throw new InvalidArgumentException($setFolderFieldChoiceErrorMessage, __LINE__);
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
     * @return \StructType\EwsDeleteFolderFieldType|null
     */
    public function getDeleteFolderField(): ?\StructType\EwsDeleteFolderFieldType
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
    public function validateDeleteFolderFieldForChoiceConstraintsFromSetDeleteFolderField($value): string
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
                    throw new InvalidArgumentException(sprintf('The property DeleteFolderField can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteFolderField, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DeleteFolderField value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsDeleteFolderFieldType $deleteFolderField
     * @return \StructType\EwsNonEmptyArrayOfFolderChangeDescriptionsType
     */
    public function setDeleteFolderField(?\StructType\EwsDeleteFolderFieldType $deleteFolderField = null): self
    {
        // validation for constraint: choice(AppendToFolderField, SetFolderField, DeleteFolderField)
        if ('' !== ($deleteFolderFieldChoiceErrorMessage = self::validateDeleteFolderFieldForChoiceConstraintsFromSetDeleteFolderField($deleteFolderField))) {
            throw new InvalidArgumentException($deleteFolderFieldChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteFolderField) || (is_array($deleteFolderField) && empty($deleteFolderField))) {
            unset($this->DeleteFolderField);
        } else {
            $this->DeleteFolderField = $deleteFolderField;
        }
        
        return $this;
    }
}
