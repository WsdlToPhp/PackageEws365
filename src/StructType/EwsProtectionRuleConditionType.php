<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleConditionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleConditionType extends AbstractStructBase
{
    /**
     * The AllInternal
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - choice: AllInternal | And | RecipientIs | SenderDepartments | True
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - length: 0
     * @var string
     */
    public $AllInternal;
    /**
     * The And
     * Meta information extracted from the WSDL
     * - choice: AllInternal | And | RecipientIs | SenderDepartments | True
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsProtectionRuleAndType
     */
    public $And;
    /**
     * The RecipientIs
     * Meta information extracted from the WSDL
     * - choice: AllInternal | And | RecipientIs | SenderDepartments | True
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsProtectionRuleRecipientIsType
     */
    public $RecipientIs;
    /**
     * The SenderDepartments
     * Meta information extracted from the WSDL
     * - choice: AllInternal | And | RecipientIs | SenderDepartments | True
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Ews\StructType\EwsProtectionRuleSenderDepartmentsType
     */
    public $SenderDepartments;
    /**
     * The True
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - choice: AllInternal | And | RecipientIs | SenderDepartments | True
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - length: 0
     * @var string
     */
    public $True;
    /**
     * Constructor method for ProtectionRuleConditionType
     * @uses EwsProtectionRuleConditionType::setAllInternal()
     * @uses EwsProtectionRuleConditionType::setAnd()
     * @uses EwsProtectionRuleConditionType::setRecipientIs()
     * @uses EwsProtectionRuleConditionType::setSenderDepartments()
     * @uses EwsProtectionRuleConditionType::setTrue()
     * @param string $allInternal
     * @param \Ews\StructType\EwsProtectionRuleAndType $and
     * @param \Ews\StructType\EwsProtectionRuleRecipientIsType $recipientIs
     * @param \Ews\StructType\EwsProtectionRuleSenderDepartmentsType $senderDepartments
     * @param string $true
     */
    public function __construct($allInternal = null, \Ews\StructType\EwsProtectionRuleAndType $and = null, \Ews\StructType\EwsProtectionRuleRecipientIsType $recipientIs = null, \Ews\StructType\EwsProtectionRuleSenderDepartmentsType $senderDepartments = null, $true = null)
    {
        $this
            ->setAllInternal($allInternal)
            ->setAnd($and)
            ->setRecipientIs($recipientIs)
            ->setSenderDepartments($senderDepartments)
            ->setTrue($true);
    }
    /**
     * Get AllInternal value
     * @return string|null
     */
    public function getAllInternal()
    {
        return isset($this->AllInternal) ? $this->AllInternal : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAllInternal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAllInternal method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAllInternalForChoiceConstraintsFromSetAllInternal($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'And',
            'RecipientIs',
            'SenderDepartments',
            'True',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property AllInternal can\'t be set as the property %s is already set. Only one property must be set among these properties: AllInternal, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set AllInternal value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $allInternal
     * @return \Ews\StructType\EwsProtectionRuleConditionType
     */
    public function setAllInternal($allInternal = null)
    {
        // validation for constraint: string
        if (!is_null($allInternal) && !is_string($allInternal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allInternal, true), gettype($allInternal)), __LINE__);
        }
        // validation for constraint: choice(AllInternal, And, RecipientIs, SenderDepartments, True)
        if ('' !== ($allInternalChoiceErrorMessage = self::validateAllInternalForChoiceConstraintsFromSetAllInternal($allInternal))) {
            throw new \InvalidArgumentException($allInternalChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: length
        if (!is_null($allInternal) && mb_strlen($allInternal) !== 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 0', mb_strlen($allInternal)), __LINE__);
        }
        if (is_null($allInternal) || (is_array($allInternal) && empty($allInternal))) {
            unset($this->AllInternal);
        } else {
            $this->AllInternal = $allInternal;
        }
        return $this;
    }
    /**
     * Get And value
     * @return \Ews\StructType\EwsProtectionRuleAndType|null
     */
    public function getAnd()
    {
        return isset($this->And) ? $this->And : null;
    }
    /**
     * This method is responsible for validating the value passed to the setAnd method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnd method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateAndForChoiceConstraintsFromSetAnd($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AllInternal',
            'RecipientIs',
            'SenderDepartments',
            'True',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property And can\'t be set as the property %s is already set. Only one property must be set among these properties: And, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set And value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsProtectionRuleAndType $and
     * @return \Ews\StructType\EwsProtectionRuleConditionType
     */
    public function setAnd(\Ews\StructType\EwsProtectionRuleAndType $and = null)
    {
        // validation for constraint: choice(AllInternal, And, RecipientIs, SenderDepartments, True)
        if ('' !== ($andChoiceErrorMessage = self::validateAndForChoiceConstraintsFromSetAnd($and))) {
            throw new \InvalidArgumentException($andChoiceErrorMessage, __LINE__);
        }
        if (is_null($and) || (is_array($and) && empty($and))) {
            unset($this->And);
        } else {
            $this->And = $and;
        }
        return $this;
    }
    /**
     * Get RecipientIs value
     * @return \Ews\StructType\EwsProtectionRuleRecipientIsType|null
     */
    public function getRecipientIs()
    {
        return isset($this->RecipientIs) ? $this->RecipientIs : null;
    }
    /**
     * This method is responsible for validating the value passed to the setRecipientIs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientIs method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRecipientIsForChoiceConstraintsFromSetRecipientIs($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AllInternal',
            'And',
            'SenderDepartments',
            'True',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property RecipientIs can\'t be set as the property %s is already set. Only one property must be set among these properties: RecipientIs, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set RecipientIs value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsProtectionRuleRecipientIsType $recipientIs
     * @return \Ews\StructType\EwsProtectionRuleConditionType
     */
    public function setRecipientIs(\Ews\StructType\EwsProtectionRuleRecipientIsType $recipientIs = null)
    {
        // validation for constraint: choice(AllInternal, And, RecipientIs, SenderDepartments, True)
        if ('' !== ($recipientIsChoiceErrorMessage = self::validateRecipientIsForChoiceConstraintsFromSetRecipientIs($recipientIs))) {
            throw new \InvalidArgumentException($recipientIsChoiceErrorMessage, __LINE__);
        }
        if (is_null($recipientIs) || (is_array($recipientIs) && empty($recipientIs))) {
            unset($this->RecipientIs);
        } else {
            $this->RecipientIs = $recipientIs;
        }
        return $this;
    }
    /**
     * Get SenderDepartments value
     * @return \Ews\StructType\EwsProtectionRuleSenderDepartmentsType|null
     */
    public function getSenderDepartments()
    {
        return isset($this->SenderDepartments) ? $this->SenderDepartments : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSenderDepartments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSenderDepartments method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSenderDepartmentsForChoiceConstraintsFromSetSenderDepartments($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AllInternal',
            'And',
            'RecipientIs',
            'True',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SenderDepartments can\'t be set as the property %s is already set. Only one property must be set among these properties: SenderDepartments, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SenderDepartments value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Ews\StructType\EwsProtectionRuleSenderDepartmentsType $senderDepartments
     * @return \Ews\StructType\EwsProtectionRuleConditionType
     */
    public function setSenderDepartments(\Ews\StructType\EwsProtectionRuleSenderDepartmentsType $senderDepartments = null)
    {
        // validation for constraint: choice(AllInternal, And, RecipientIs, SenderDepartments, True)
        if ('' !== ($senderDepartmentsChoiceErrorMessage = self::validateSenderDepartmentsForChoiceConstraintsFromSetSenderDepartments($senderDepartments))) {
            throw new \InvalidArgumentException($senderDepartmentsChoiceErrorMessage, __LINE__);
        }
        if (is_null($senderDepartments) || (is_array($senderDepartments) && empty($senderDepartments))) {
            unset($this->SenderDepartments);
        } else {
            $this->SenderDepartments = $senderDepartments;
        }
        return $this;
    }
    /**
     * Get True value
     * @return string|null
     */
    public function getTrue()
    {
        return isset($this->True) ? $this->True : null;
    }
    /**
     * This method is responsible for validating the value passed to the setTrue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrue method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateTrueForChoiceConstraintsFromSetTrue($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'AllInternal',
            'And',
            'RecipientIs',
            'SenderDepartments',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property True can\'t be set as the property %s is already set. Only one property must be set among these properties: True, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set True value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $true
     * @return \Ews\StructType\EwsProtectionRuleConditionType
     */
    public function setTrue($true = null)
    {
        // validation for constraint: string
        if (!is_null($true) && !is_string($true)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($true, true), gettype($true)), __LINE__);
        }
        // validation for constraint: choice(AllInternal, And, RecipientIs, SenderDepartments, True)
        if ('' !== ($trueChoiceErrorMessage = self::validateTrueForChoiceConstraintsFromSetTrue($true))) {
            throw new \InvalidArgumentException($trueChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: length
        if (!is_null($true) && mb_strlen($true) !== 0) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 0', mb_strlen($true)), __LINE__);
        }
        if (is_null($true) || (is_array($true) && empty($true))) {
            unset($this->True);
        } else {
            $this->True = $true;
        }
        return $this;
    }
}
