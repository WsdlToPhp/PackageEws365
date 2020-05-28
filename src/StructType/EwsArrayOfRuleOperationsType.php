<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArrayOfRuleOperationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents an array of rule operations to be performed
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRuleOperationsType extends AbstractStructBase
{
    /**
     * The CreateRuleOperation
     * Meta information extracted from the WSDL
     * - choice: CreateRuleOperation | SetRuleOperation | DeleteRuleOperation
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsCreateRuleOperationType
     */
    public $CreateRuleOperation;
    /**
     * The SetRuleOperation
     * Meta information extracted from the WSDL
     * - choice: CreateRuleOperation | SetRuleOperation | DeleteRuleOperation
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsSetRuleOperationType
     */
    public $SetRuleOperation;
    /**
     * The DeleteRuleOperation
     * Meta information extracted from the WSDL
     * - choice: CreateRuleOperation | SetRuleOperation | DeleteRuleOperation
     * - choiceMaxOccurs: unbounded
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsDeleteRuleOperationType
     */
    public $DeleteRuleOperation;
    /**
     * Constructor method for ArrayOfRuleOperationsType
     * @uses EwsArrayOfRuleOperationsType::setCreateRuleOperation()
     * @uses EwsArrayOfRuleOperationsType::setSetRuleOperation()
     * @uses EwsArrayOfRuleOperationsType::setDeleteRuleOperation()
     * @param \Ews\StructType\EwsCreateRuleOperationType $createRuleOperation
     * @param \Ews\StructType\EwsSetRuleOperationType $setRuleOperation
     * @param \Ews\StructType\EwsDeleteRuleOperationType $deleteRuleOperation
     */
    public function __construct(\Ews\StructType\EwsCreateRuleOperationType $createRuleOperation = null, \Ews\StructType\EwsSetRuleOperationType $setRuleOperation = null, \Ews\StructType\EwsDeleteRuleOperationType $deleteRuleOperation = null)
    {
        $this
            ->setCreateRuleOperation($createRuleOperation)
            ->setSetRuleOperation($setRuleOperation)
            ->setDeleteRuleOperation($deleteRuleOperation);
    }
    /**
     * Get CreateRuleOperation value
     * @return \Ews\StructType\EwsCreateRuleOperationType|null
     */
    public function getCreateRuleOperation()
    {
        return isset($this->CreateRuleOperation) ? $this->CreateRuleOperation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setCreateRuleOperation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreateRuleOperation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateCreateRuleOperationForChoiceConstraintsFromSetCreateRuleOperation($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'SetRuleOperation',
            'DeleteRuleOperation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property CreateRuleOperation can\'t be set as the property %s is already set. Only one property must be set among these properties: CreateRuleOperation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set CreateRuleOperation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsCreateRuleOperationType $createRuleOperation
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public function setCreateRuleOperation(\Ews\StructType\EwsCreateRuleOperationType $createRuleOperation = null)
    {
        // validation for constraint: choice(CreateRuleOperation, SetRuleOperation, DeleteRuleOperation)
        if ('' !== ($createRuleOperationChoiceErrorMessage = self::validateCreateRuleOperationForChoiceConstraintsFromSetCreateRuleOperation($createRuleOperation))) {
            throw new \InvalidArgumentException($createRuleOperationChoiceErrorMessage, __LINE__);
        }
        if (is_null($createRuleOperation) || (is_array($createRuleOperation) && empty($createRuleOperation))) {
            unset($this->CreateRuleOperation);
        } else {
            $this->CreateRuleOperation = $createRuleOperation;
        }
        return $this;
    }
    /**
     * Get SetRuleOperation value
     * @return \Ews\StructType\EwsSetRuleOperationType|null
     */
    public function getSetRuleOperation()
    {
        return isset($this->SetRuleOperation) ? $this->SetRuleOperation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSetRuleOperation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetRuleOperation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSetRuleOperationForChoiceConstraintsFromSetSetRuleOperation($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateRuleOperation',
            'DeleteRuleOperation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SetRuleOperation can\'t be set as the property %s is already set. Only one property must be set among these properties: SetRuleOperation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SetRuleOperation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsSetRuleOperationType $setRuleOperation
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public function setSetRuleOperation(\Ews\StructType\EwsSetRuleOperationType $setRuleOperation = null)
    {
        // validation for constraint: choice(CreateRuleOperation, SetRuleOperation, DeleteRuleOperation)
        if ('' !== ($setRuleOperationChoiceErrorMessage = self::validateSetRuleOperationForChoiceConstraintsFromSetSetRuleOperation($setRuleOperation))) {
            throw new \InvalidArgumentException($setRuleOperationChoiceErrorMessage, __LINE__);
        }
        if (is_null($setRuleOperation) || (is_array($setRuleOperation) && empty($setRuleOperation))) {
            unset($this->SetRuleOperation);
        } else {
            $this->SetRuleOperation = $setRuleOperation;
        }
        return $this;
    }
    /**
     * Get DeleteRuleOperation value
     * @return \Ews\StructType\EwsDeleteRuleOperationType|null
     */
    public function getDeleteRuleOperation()
    {
        return isset($this->DeleteRuleOperation) ? $this->DeleteRuleOperation : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDeleteRuleOperation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeleteRuleOperation method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDeleteRuleOperationForChoiceConstraintsFromSetDeleteRuleOperation($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'CreateRuleOperation',
            'SetRuleOperation',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DeleteRuleOperation can\'t be set as the property %s is already set. Only one property must be set among these properties: DeleteRuleOperation, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DeleteRuleOperation value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsDeleteRuleOperationType $deleteRuleOperation
     * @return \Ews\StructType\EwsArrayOfRuleOperationsType
     */
    public function setDeleteRuleOperation(\Ews\StructType\EwsDeleteRuleOperationType $deleteRuleOperation = null)
    {
        // validation for constraint: choice(CreateRuleOperation, SetRuleOperation, DeleteRuleOperation)
        if ('' !== ($deleteRuleOperationChoiceErrorMessage = self::validateDeleteRuleOperationForChoiceConstraintsFromSetDeleteRuleOperation($deleteRuleOperation))) {
            throw new \InvalidArgumentException($deleteRuleOperationChoiceErrorMessage, __LINE__);
        }
        if (is_null($deleteRuleOperation) || (is_array($deleteRuleOperation) && empty($deleteRuleOperation))) {
            unset($this->DeleteRuleOperation);
        } else {
            $this->DeleteRuleOperation = $deleteRuleOperation;
        }
        return $this;
    }
}
