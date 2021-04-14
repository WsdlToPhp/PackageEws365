<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRuleOperationErrorsType ArrayType
 * @package Ews
 * @subpackage Arrays
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsArrayOfRuleOperationErrorsType extends AbstractStructArrayBase
{
    /**
     * The RuleOperationError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\EwsRuleOperationErrorType[]
     */
    protected array $RuleOperationError = [];
    /**
     * Constructor method for ArrayOfRuleOperationErrorsType
     * @uses EwsArrayOfRuleOperationErrorsType::setRuleOperationError()
     * @param \StructType\EwsRuleOperationErrorType[] $ruleOperationError
     */
    public function __construct(array $ruleOperationError)
    {
        $this
            ->setRuleOperationError($ruleOperationError);
    }
    /**
     * Get RuleOperationError value
     * @return \StructType\EwsRuleOperationErrorType[]
     */
    public function getRuleOperationError(): array
    {
        return $this->RuleOperationError;
    }
    /**
     * This method is responsible for validating the values passed to the setRuleOperationError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRuleOperationError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRuleOperationErrorForArrayConstraintsFromSetRuleOperationError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleOperationErrorsTypeRuleOperationErrorItem instanceof \StructType\EwsRuleOperationErrorType) {
                $invalidValues[] = is_object($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) ? get_class($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) : sprintf('%s(%s)', gettype($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem), var_export($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RuleOperationError property can only contain items of type \StructType\EwsRuleOperationErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RuleOperationError value
     * @throws InvalidArgumentException
     * @param \StructType\EwsRuleOperationErrorType[] $ruleOperationError
     * @return \ArrayType\EwsArrayOfRuleOperationErrorsType
     */
    public function setRuleOperationError(array $ruleOperationError): self
    {
        // validation for constraint: array
        if ('' !== ($ruleOperationErrorArrayErrorMessage = self::validateRuleOperationErrorForArrayConstraintsFromSetRuleOperationError($ruleOperationError))) {
            throw new InvalidArgumentException($ruleOperationErrorArrayErrorMessage, __LINE__);
        }
        $this->RuleOperationError = $ruleOperationError;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EwsRuleOperationErrorType|null
     */
    public function current(): ?\StructType\EwsRuleOperationErrorType
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EwsRuleOperationErrorType|null
     */
    public function item($index): ?\StructType\EwsRuleOperationErrorType
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EwsRuleOperationErrorType|null
     */
    public function first(): ?\StructType\EwsRuleOperationErrorType
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EwsRuleOperationErrorType|null
     */
    public function last(): ?\StructType\EwsRuleOperationErrorType
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EwsRuleOperationErrorType|null
     */
    public function offsetGet($offset): ?\StructType\EwsRuleOperationErrorType
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EwsRuleOperationErrorType $item
     * @return \ArrayType\EwsArrayOfRuleOperationErrorsType
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EwsRuleOperationErrorType) {
            throw new InvalidArgumentException(sprintf('The RuleOperationError property can only contain items of type \StructType\EwsRuleOperationErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleOperationError
     */
    public function getAttributeName(): string
    {
        return 'RuleOperationError';
    }
}
