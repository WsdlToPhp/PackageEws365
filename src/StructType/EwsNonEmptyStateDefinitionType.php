<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NonEmptyStateDefinitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsNonEmptyStateDefinitionType extends AbstractStructBase
{
    /**
     * The DeletedOccurrenceStateDefinition
     * Meta information extracted from the WSDL
     * - choice: DeletedOccurrenceStateDefinition | DeleteFromFolderStateDefinition | LocationBasedStateDefinition
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsDeletedOccurrenceStateDefinitionType|null
     */
    protected ?\StructType\EwsDeletedOccurrenceStateDefinitionType $DeletedOccurrenceStateDefinition = null;
    /**
     * The DeleteFromFolderStateDefinition
     * Meta information extracted from the WSDL
     * - choice: DeletedOccurrenceStateDefinition | DeleteFromFolderStateDefinition | LocationBasedStateDefinition
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsDeleteFromFolderStateDefinitionType|null
     */
    protected ?\StructType\EwsDeleteFromFolderStateDefinitionType $DeleteFromFolderStateDefinition = null;
    /**
     * The LocationBasedStateDefinition
     * Meta information extracted from the WSDL
     * - choice: DeletedOccurrenceStateDefinition | DeleteFromFolderStateDefinition | LocationBasedStateDefinition
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 0
     * @var \StructType\EwsLocationBasedStateDefinitionType|null
     */
    protected ?\StructType\EwsLocationBasedStateDefinitionType $LocationBasedStateDefinition = null;
    /**
     * Constructor method for NonEmptyStateDefinitionType
     * @uses EwsNonEmptyStateDefinitionType::setDeletedOccurrenceStateDefinition()
     * @uses EwsNonEmptyStateDefinitionType::setDeleteFromFolderStateDefinition()
     * @uses EwsNonEmptyStateDefinitionType::setLocationBasedStateDefinition()
     * @param \StructType\EwsDeletedOccurrenceStateDefinitionType $deletedOccurrenceStateDefinition
     * @param \StructType\EwsDeleteFromFolderStateDefinitionType $deleteFromFolderStateDefinition
     * @param \StructType\EwsLocationBasedStateDefinitionType $locationBasedStateDefinition
     */
    public function __construct(?\StructType\EwsDeletedOccurrenceStateDefinitionType $deletedOccurrenceStateDefinition = null, ?\StructType\EwsDeleteFromFolderStateDefinitionType $deleteFromFolderStateDefinition = null, ?\StructType\EwsLocationBasedStateDefinitionType $locationBasedStateDefinition = null)
    {
        $this
            ->setDeletedOccurrenceStateDefinition($deletedOccurrenceStateDefinition)
            ->setDeleteFromFolderStateDefinition($deleteFromFolderStateDefinition)
            ->setLocationBasedStateDefinition($locationBasedStateDefinition);
    }
    /**
     * Get DeletedOccurrenceStateDefinition value
     * @return \StructType\EwsDeletedOccurrenceStateDefinitionType|null
     */
    public function getDeletedOccurrenceStateDefinition(): ?\StructType\EwsDeletedOccurrenceStateDefinitionType
    {
        return isset($this->DeletedOccurrenceStateDefinition) ? $this->DeletedOccurrenceStateDefinition : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeletedOccurrenceStateDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedOccurrenceStateDefinition method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeletedOccurrenceStateDefinitionForChoiceConstraintsFromSetDeletedOccurrenceStateDefinition($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DeleteFromFolderStateDefinition',
            'LocationBasedStateDefinition',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DeletedOccurrenceStateDefinition can\'t be set as the property %s is already set. Only one property must be set among these properties: DeletedOccurrenceStateDefinition, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DeletedOccurrenceStateDefinition value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsDeletedOccurrenceStateDefinitionType $deletedOccurrenceStateDefinition
     * @return \StructType\EwsNonEmptyStateDefinitionType
     */
    public function setDeletedOccurrenceStateDefinition(?\StructType\EwsDeletedOccurrenceStateDefinitionType $deletedOccurrenceStateDefinition = null): self
    {
        // validation for constraint: choice(DeletedOccurrenceStateDefinition, DeleteFromFolderStateDefinition, LocationBasedStateDefinition)
        if ('' !== ($deletedOccurrenceStateDefinitionChoiceErrorMessage = self::validateDeletedOccurrenceStateDefinitionForChoiceConstraintsFromSetDeletedOccurrenceStateDefinition($deletedOccurrenceStateDefinition))) {
            throw new InvalidArgumentException($deletedOccurrenceStateDefinitionChoiceErrorMessage, __LINE__);
        }
        if (is_null($deletedOccurrenceStateDefinition) || (is_array($deletedOccurrenceStateDefinition) && empty($deletedOccurrenceStateDefinition))) {
            unset($this->DeletedOccurrenceStateDefinition);
        } else {
            $this->DeletedOccurrenceStateDefinition = $deletedOccurrenceStateDefinition;
        }
        
        return $this;
    }
    /**
     * Get DeleteFromFolderStateDefinition value
     * @return \StructType\EwsDeleteFromFolderStateDefinitionType|null
     */
    public function getDeleteFromFolderStateDefinition(): ?\StructType\EwsDeleteFromFolderStateDefinitionType
    {
        return isset($this->DeleteFromFolderStateDefinition) ? $this->DeleteFromFolderStateDefinition : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeleteFromFolderStateDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteFromFolderStateDefinition method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteFromFolderStateDefinitionForChoiceConstraintsFromSetDeleteFromFolderStateDefinition($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DeletedOccurrenceStateDefinition',
            'LocationBasedStateDefinition',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property DeleteFromFolderStateDefinition can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteFromFolderStateDefinition, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set DeleteFromFolderStateDefinition value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsDeleteFromFolderStateDefinitionType $deleteFromFolderStateDefinition
     * @return \StructType\EwsNonEmptyStateDefinitionType
     */
    public function setDeleteFromFolderStateDefinition(?\StructType\EwsDeleteFromFolderStateDefinitionType $deleteFromFolderStateDefinition = null): self
    {
        // validation for constraint: choice(DeletedOccurrenceStateDefinition, DeleteFromFolderStateDefinition, LocationBasedStateDefinition)
        if ('' !== ($deleteFromFolderStateDefinitionChoiceErrorMessage = self::validateDeleteFromFolderStateDefinitionForChoiceConstraintsFromSetDeleteFromFolderStateDefinition($deleteFromFolderStateDefinition))) {
            throw new InvalidArgumentException($deleteFromFolderStateDefinitionChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteFromFolderStateDefinition) || (is_array($deleteFromFolderStateDefinition) && empty($deleteFromFolderStateDefinition))) {
            unset($this->DeleteFromFolderStateDefinition);
        } else {
            $this->DeleteFromFolderStateDefinition = $deleteFromFolderStateDefinition;
        }
        
        return $this;
    }
    /**
     * Get LocationBasedStateDefinition value
     * @return \StructType\EwsLocationBasedStateDefinitionType|null
     */
    public function getLocationBasedStateDefinition(): ?\StructType\EwsLocationBasedStateDefinitionType
    {
        return isset($this->LocationBasedStateDefinition) ? $this->LocationBasedStateDefinition : null;
    }
    /**
     * This method is responsible for validating the value passed to the setLocationBasedStateDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocationBasedStateDefinition method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateLocationBasedStateDefinitionForChoiceConstraintsFromSetLocationBasedStateDefinition($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DeletedOccurrenceStateDefinition',
            'DeleteFromFolderStateDefinition',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property LocationBasedStateDefinition can\'t be set as the property %s is already set. Only one property must be set among these properties: LocationBasedStateDefinition, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set LocationBasedStateDefinition value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EwsLocationBasedStateDefinitionType $locationBasedStateDefinition
     * @return \StructType\EwsNonEmptyStateDefinitionType
     */
    public function setLocationBasedStateDefinition(?\StructType\EwsLocationBasedStateDefinitionType $locationBasedStateDefinition = null): self
    {
        // validation for constraint: choice(DeletedOccurrenceStateDefinition, DeleteFromFolderStateDefinition, LocationBasedStateDefinition)
        if ('' !== ($locationBasedStateDefinitionChoiceErrorMessage = self::validateLocationBasedStateDefinitionForChoiceConstraintsFromSetLocationBasedStateDefinition($locationBasedStateDefinition))) {
            throw new InvalidArgumentException($locationBasedStateDefinitionChoiceErrorMessage, __LINE__);
        }
        if (is_null($locationBasedStateDefinition) || (is_array($locationBasedStateDefinition) && empty($locationBasedStateDefinition))) {
            unset($this->LocationBasedStateDefinition);
        } else {
            $this->LocationBasedStateDefinition = $locationBasedStateDefinition;
        }
        
        return $this;
    }
}
