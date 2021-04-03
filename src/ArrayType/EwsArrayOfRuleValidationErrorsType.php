<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \StructType\EwsRuleValidationErrorType[]
     */
    protected array $Error = [];
    /**
     * Constructor method for ArrayOfRuleValidationErrorsType
     * @uses EwsArrayOfRuleValidationErrorsType::setError()
     * @param \StructType\EwsRuleValidationErrorType[] $error
     */
    public function __construct(array $error)
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return \StructType\EwsRuleValidationErrorType[]
     */
    public function getError(): array
    {
        return $this->Error;
    }
    /**
     * This method is responsible for validating the values passed to the setError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErrorForArrayConstraintsFromSetError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRuleValidationErrorsTypeErrorItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleValidationErrorsTypeErrorItem instanceof \StructType\EwsRuleValidationErrorType) {
                $invalidValues[] = is_object($arrayOfRuleValidationErrorsTypeErrorItem) ? get_class($arrayOfRuleValidationErrorsTypeErrorItem) : sprintf('%s(%s)', gettype($arrayOfRuleValidationErrorsTypeErrorItem), var_export($arrayOfRuleValidationErrorsTypeErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Error property can only contain items of type \StructType\EwsRuleValidationErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Error value
     * @throws InvalidArgumentException
     * @param \StructType\EwsRuleValidationErrorType[] $error
     * @return \ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    public function setError(array $error): self
    {
        // validation for constraint: array
        if ('' !== ($errorArrayErrorMessage = self::validateErrorForArrayConstraintsFromSetError($error))) {
            throw new InvalidArgumentException($errorArrayErrorMessage, __LINE__);
        }
        $this->Error = $error;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsRuleValidationErrorType|null
     */
    public function current(): ?\StructType\EwsRuleValidationErrorType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsRuleValidationErrorType|null
     */
    public function item($index): ?\StructType\EwsRuleValidationErrorType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsRuleValidationErrorType|null
     */
    public function first(): ?\StructType\EwsRuleValidationErrorType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsRuleValidationErrorType|null
     */
    public function last(): ?\StructType\EwsRuleValidationErrorType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsRuleValidationErrorType|null
     */
    public function offsetGet($offset): ?\StructType\EwsRuleValidationErrorType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsRuleValidationErrorType $item
     * @return \ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    public function add(\StructType\EwsRuleValidationErrorType $item): self
    {
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Error
     */
    public function getAttributeName(): string
    {
        return 'Error';
    }
}
