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
     * @var array
     */
    public $RuleOperationError;
    /**
     * Constructor method for ArrayOfRuleOperationErrorsType
     * @uses EwsArrayOfRuleOperationErrorsType::setRuleOperationError()
     * @param array $ruleOperationError
     */
    public function __construct(array $ruleOperationError = array())
    {
        $this
            ->setRuleOperationError($ruleOperationError);
    }
    /**
     * Get RuleOperationError value
     * @return array
     */
    public function getRuleOperationError()
    {
        return $this->RuleOperationError;
    }
    /**
     * Set RuleOperationError value
     * @param array $ruleOperationError
     * @return \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType
     */
    public function setRuleOperationError(array $ruleOperationError = array())
    {
        $this->RuleOperationError = $ruleOperationError;
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
