<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleValidationErrorsType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Represents an array of rule validation errors
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRuleValidationErrorsType extends AbstractStructArrayBase
{
    /**
     * The Error
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \Ews\StructType\EwsRuleValidationErrorType[]
     */
    public $Error;
    /**
     * Constructor method for ArrayOfRuleValidationErrorsType
     * @uses EwsArrayOfRuleValidationErrorsType::setError()
     * @param \Ews\StructType\EwsRuleValidationErrorType[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return \Ews\StructType\EwsRuleValidationErrorType[]
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * This method is responsible for validating the values passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintsFromSetError(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRuleValidationErrorsTypeErrorItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleValidationErrorsTypeErrorItem instanceof \Ews\StructType\EwsRuleValidationErrorType) {
                $invalidValues[] = is_object($arrayOfRuleValidationErrorsTypeErrorItem) ? get_class($arrayOfRuleValidationErrorsTypeErrorItem) : sprintf('%s(%s)', gettype($arrayOfRuleValidationErrorsTypeErrorItem), var_export($arrayOfRuleValidationErrorsTypeErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Error property can only contain items of type \Ews\StructType\EwsRuleValidationErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Error value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRuleValidationErrorType[] $error
     * @return \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    public function setError(array $error = array())
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintsFromSetError($error))) {
            throw new \InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Add item to Error value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRuleValidationErrorType $item
     * @return \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    public function addToError(\Ews\StructType\EwsRuleValidationErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsRuleValidationErrorType) {
            throw new \InvalidArgumentException(sprintf('The Error property can only contain items of type \Ews\StructType\EwsRuleValidationErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Error[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Error
     */
    public function getAttributeName()
    {
        return 'Error';
    }
}
