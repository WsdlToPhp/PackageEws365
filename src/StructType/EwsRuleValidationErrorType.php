<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleValidationErrorType StructType
 * Meta information extracted from the WSDL
 * - documentation: Represents a single validation error on a particular rule property value, predicate property value or action property value
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleValidationErrorType extends AbstractStructBase
{
    /**
     * The FieldURI
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FieldURI;
    /**
     * The ErrorCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ErrorCode;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $ErrorMessage;
    /**
     * The FieldValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $FieldValue;
    /**
     * Constructor method for RuleValidationErrorType
     * @uses EwsRuleValidationErrorType::setFieldURI()
     * @uses EwsRuleValidationErrorType::setErrorCode()
     * @uses EwsRuleValidationErrorType::setErrorMessage()
     * @uses EwsRuleValidationErrorType::setFieldValue()
     * @param string $fieldURI
     * @param string $errorCode
     * @param string $errorMessage
     * @param string $fieldValue
     */
    public function __construct(string $fieldURI, string $errorCode, string $errorMessage, string $fieldValue)
    {
        $this
            ->setFieldURI($fieldURI)
            ->setErrorCode($errorCode)
            ->setErrorMessage($errorMessage)
            ->setFieldValue($fieldValue);
    }
    /**
     * Get FieldURI value
     * @return string
     */
    public function getFieldURI(): string
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @uses \EnumType\EwsRuleFieldURIType::valueIsValid()
     * @uses \EnumType\EwsRuleFieldURIType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $fieldURI
     * @return \StructType\EwsRuleValidationErrorType
     */
    public function setFieldURI(string $fieldURI): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsRuleFieldURIType::valueIsValid($fieldURI)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsRuleFieldURIType', is_array($fieldURI) ? implode(', ', $fieldURI) : var_export($fieldURI, true), implode(', ', \EnumType\EwsRuleFieldURIType::getValidValues())), __LINE__);
        }
        $this->FieldURI = $fieldURI;
        
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \EnumType\EwsRuleValidationErrorCodeType::valueIsValid()
     * @uses \EnumType\EwsRuleValidationErrorCodeType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $errorCode
     * @return \StructType\EwsRuleValidationErrorType
     */
    public function setErrorCode(string $errorCode): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsRuleValidationErrorCodeType::valueIsValid($errorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsRuleValidationErrorCodeType', is_array($errorCode) ? implode(', ', $errorCode) : var_export($errorCode, true), implode(', ', \EnumType\EwsRuleValidationErrorCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \StructType\EwsRuleValidationErrorType
     */
    public function setErrorMessage(string $errorMessage): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get FieldValue value
     * @return string
     */
    public function getFieldValue(): string
    {
        return $this->FieldValue;
    }
    /**
     * Set FieldValue value
     * @param string $fieldValue
     * @return \StructType\EwsRuleValidationErrorType
     */
    public function setFieldValue(string $fieldValue): self
    {
        // validation for constraint: string
        if (!is_null($fieldValue) && !is_string($fieldValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldValue, true), gettype($fieldValue)), __LINE__);
        }
        $this->FieldValue = $fieldValue;
        
        return $this;
    }
}
