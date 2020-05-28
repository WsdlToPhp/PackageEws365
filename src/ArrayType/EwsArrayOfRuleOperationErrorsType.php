<?php

namespace Ews\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

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
     * @var \Ews\StructType\EwsRuleOperationErrorType[]
     */
    public $RuleOperationError;
    /**
     * Constructor method for ArrayOfRuleOperationErrorsType
     * @uses EwsArrayOfRuleOperationErrorsType::setRuleOperationError()
     * @param \Ews\StructType\EwsRuleOperationErrorType[] $ruleOperationError
     */
    public function __construct(array $ruleOperationError = array())
    {
        $this
            ->setRuleOperationError($ruleOperationError);
    }
    /**
     * Get RuleOperationError value
     * @return \Ews\StructType\EwsRuleOperationErrorType[]
     */
    public function getRuleOperationError()
    {
        return $this->RuleOperationError;
    }
    /**
     * This method is responsible for validating the values passed to the setRuleOperationError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRuleOperationError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRuleOperationErrorForArrayConstraintsFromSetRuleOperationError(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleOperationErrorsTypeRuleOperationErrorItem instanceof \Ews\StructType\EwsRuleOperationErrorType) {
                $invalidValues[] = is_object($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) ? get_class($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) : sprintf('%s(%s)', gettype($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem), var_export($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RuleOperationError property can only contain items of type \Ews\StructType\EwsRuleOperationErrorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RuleOperationError value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRuleOperationErrorType[] $ruleOperationError
     * @return \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType
     */
    public function setRuleOperationError(array $ruleOperationError = array())
    {
        // validation for constraint: array
        if ('' !== ($ruleOperationErrorArrayErrorMessage = self::validateRuleOperationErrorForArrayConstraintsFromSetRuleOperationError($ruleOperationError))) {
            throw new \InvalidArgumentException($ruleOperationErrorArrayErrorMessage, __LINE__);
        }
        $this->RuleOperationError = $ruleOperationError;
        return $this;
    }
    /**
     * Add item to RuleOperationError value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRuleOperationErrorType $item
     * @return \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType
     */
    public function addToRuleOperationError(\Ews\StructType\EwsRuleOperationErrorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Ews\StructType\EwsRuleOperationErrorType) {
            throw new \InvalidArgumentException(sprintf('The RuleOperationError property can only contain items of type \Ews\StructType\EwsRuleOperationErrorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->RuleOperationError[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Ews\StructType\EwsRuleOperationErrorType
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Ews\StructType\EwsRuleOperationErrorType
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Ews\StructType\EwsRuleOperationErrorType
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Ews\StructType\EwsRuleOperationErrorType
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Ews\StructType\EwsRuleOperationErrorType
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RuleOperationError
     */
    public function getAttributeName()
    {
        return 'RuleOperationError';
    }
}
