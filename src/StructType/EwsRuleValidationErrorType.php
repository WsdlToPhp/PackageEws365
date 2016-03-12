<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleValidationErrorType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a single validation error on a particular rule property value, predicate property value or action property value
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleValidationErrorType extends AbstractStructBase
{
    /**
     * The FieldURI
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FieldURI;
    /**
     * The ErrorCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ErrorCode;
    /**
     * The ErrorMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ErrorMessage;
    /**
     * The FieldValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FieldValue;
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
    public function __construct($fieldURI = null, $errorCode = null, $errorMessage = null, $fieldValue = null)
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
    public function getFieldURI()
    {
        return $this->FieldURI;
    }
    /**
     * Set FieldURI value
     * @uses \Ews\EnumType\EwsRuleFieldURIType::valueIsValid()
     * @uses \Ews\EnumType\EwsRuleFieldURIType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $fieldURI
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function setFieldURI($fieldURI = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsRuleFieldURIType::valueIsValid($fieldURI)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $fieldURI, implode(', ', \Ews\EnumType\EwsRuleFieldURIType::getValidValues())), __LINE__);
        }
        $this->FieldURI = $fieldURI;
        return $this;
    }
    /**
     * Get ErrorCode value
     * @return string
     */
    public function getErrorCode()
    {
        return $this->ErrorCode;
    }
    /**
     * Set ErrorCode value
     * @uses \Ews\EnumType\EwsRuleValidationErrorCodeType::valueIsValid()
     * @uses \Ews\EnumType\EwsRuleValidationErrorCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $errorCode
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function setErrorCode($errorCode = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsRuleValidationErrorCodeType::valueIsValid($errorCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $errorCode, implode(', ', \Ews\EnumType\EwsRuleValidationErrorCodeType::getValidValues())), __LINE__);
        }
        $this->ErrorCode = $errorCode;
        return $this;
    }
    /**
     * Get ErrorMessage value
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->ErrorMessage;
    }
    /**
     * Set ErrorMessage value
     * @param string $errorMessage
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($errorMessage)), __LINE__);
        }
        $this->ErrorMessage = $errorMessage;
        return $this;
    }
    /**
     * Get FieldValue value
     * @return string
     */
    public function getFieldValue()
    {
        return $this->FieldValue;
    }
    /**
     * Set FieldValue value
     * @param string $fieldValue
     * @return \Ews\StructType\EwsRuleValidationErrorType
     */
    public function setFieldValue($fieldValue = null)
    {
        // validation for constraint: string
        if (!is_null($fieldValue) && !is_string($fieldValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fieldValue)), __LINE__);
        }
        $this->FieldValue = $fieldValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRuleValidationErrorType
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
