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
     * Meta informations extracted from the WSDL
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
     * Set RuleOperationError value
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsRuleOperationErrorType[] $ruleOperationError
     * @return \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType
     */
    public function setRuleOperationError(array $ruleOperationError = array())
    {
        foreach ($ruleOperationError as $arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) {
            // validation for constraint: itemType
            if (!$arrayOfRuleOperationErrorsTypeRuleOperationErrorItem instanceof \Ews\StructType\EwsRuleOperationErrorType) {
                throw new \InvalidArgumentException(sprintf('The RuleOperationError property can only contain items of \Ews\StructType\EwsRuleOperationErrorType, "%s" given', is_object($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) ? get_class($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem) : gettype($arrayOfRuleOperationErrorsTypeRuleOperationErrorItem)), __LINE__);
            }
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
            throw new \InvalidArgumentException(sprintf('The RuleOperationError property can only contain items of \Ews\StructType\EwsRuleOperationErrorType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
