<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $OperationIndex;
    /**
     * The ValidationErrors
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    protected \ArrayType\EwsArrayOfRuleValidationErrorsType $ValidationErrors;
    /**
     * Constructor method for RuleOperationErrorType
     * @uses EwsRuleOperationErrorType::setOperationIndex()
     * @uses EwsRuleOperationErrorType::setValidationErrors()
     * @param int $operationIndex
     * @param \ArrayType\EwsArrayOfRuleValidationErrorsType $validationErrors
     */
    public function __construct(int $operationIndex, \ArrayType\EwsArrayOfRuleValidationErrorsType $validationErrors)
    {
        $this
            ->setOperationIndex($operationIndex)
            ->setValidationErrors($validationErrors);
    }
    /**
     * Get OperationIndex value
     * @return int
     */
    public function getOperationIndex(): int
    {
        return $this->OperationIndex;
    }
    /**
     * Set OperationIndex value
     * @param int $operationIndex
     * @return \StructType\EwsRuleOperationErrorType
     */
    public function setOperationIndex(int $operationIndex): self
    {
        // validation for constraint: int
        if (!is_null($operationIndex) && !(is_int($operationIndex) || ctype_digit($operationIndex))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($operationIndex, true), gettype($operationIndex)), __LINE__);
        }
        $this->OperationIndex = $operationIndex;
        
        return $this;
    }
    /**
     * Get ValidationErrors value
     * @return \ArrayType\EwsArrayOfRuleValidationErrorsType
     */
    public function getValidationErrors(): \ArrayType\EwsArrayOfRuleValidationErrorsType
    {
        return $this->ValidationErrors;
    }
    /**
     * Set ValidationErrors value
     * @param \ArrayType\EwsArrayOfRuleValidationErrorsType $validationErrors
     * @return \StructType\EwsRuleOperationErrorType
     */
    public function setValidationErrors(\ArrayType\EwsArrayOfRuleValidationErrorsType $validationErrors): self
    {
        $this->ValidationErrors = $validationErrors;
        
        return $this;
    }
}
