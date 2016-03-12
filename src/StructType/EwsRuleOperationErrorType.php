<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleOperationErrorType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleOperationErrorType extends AbstractStructBase
{
    /**
     * The OperationIndex
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $OperationIndex;
    /**
     * The ValidationErrors
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    public $ValidationErrors;
    /**
     * Constructor method for RuleOperationErrorType
     * @uses EwsRuleOperationErrorType::setOperationIndex()
     * @uses EwsRuleOperationErrorType::setValidationErrors()
     * @param int $operationIndex
     * @param \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType $validationErrors
     */
    public function __construct($operationIndex = null, \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType $validationErrors = null)
    {
        $this
            ->setOperationIndex($operationIndex)
            ->setValidationErrors($validationErrors);
    }
    /**
     * Get OperationIndex value
     * @return int
     */
    public function getOperationIndex()
    {
        return $this->OperationIndex;
    }
    /**
     * Set OperationIndex value
     * @param int $operationIndex
     * @return \Ews\StructType\EwsRuleOperationErrorType
     */
    public function setOperationIndex($operationIndex = null)
    {
        // validation for constraint: int
        if (!is_null($operationIndex) && !is_int($operationIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($operationIndex)), __LINE__);
        }
        $this->OperationIndex = $operationIndex;
        return $this;
    }
    /**
     * Get ValidationErrors value
     * @return \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    public function getValidationErrors()
    {
        return $this->ValidationErrors;
    }
    /**
     * Set ValidationErrors value
     * @param \Ews\ArrayType\EwsArrayOfRuleValidationErrorsType $validationErrors
     * @return \Ews\StructType\EwsRuleOperationErrorType
     */
    public function setValidationErrors(\Ews\ArrayType\EwsArrayOfRuleValidationErrorsType $validationErrors = null)
    {
        $this->ValidationErrors = $validationErrors;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRuleOperationErrorType
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
