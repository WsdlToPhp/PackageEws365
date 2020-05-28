<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleType StructType
 * Meta information extracted from the WSDL
 * - documentation: Rule type
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Priority;
    /**
     * The IsEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    public $IsEnabled;
    /**
     * The RuleId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RuleId;
    /**
     * The IsNotSupported
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsNotSupported;
    /**
     * The IsInError
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IsInError;
    /**
     * The Conditions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRulePredicatesType
     */
    public $Conditions;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRulePredicatesType
     */
    public $Exceptions;
    /**
     * The Actions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsRuleActionsType
     */
    public $Actions;
    /**
     * Constructor method for RuleType
     * @uses EwsRuleType::setDisplayName()
     * @uses EwsRuleType::setPriority()
     * @uses EwsRuleType::setIsEnabled()
     * @uses EwsRuleType::setRuleId()
     * @uses EwsRuleType::setIsNotSupported()
     * @uses EwsRuleType::setIsInError()
     * @uses EwsRuleType::setConditions()
     * @uses EwsRuleType::setExceptions()
     * @uses EwsRuleType::setActions()
     * @param string $displayName
     * @param int $priority
     * @param bool $isEnabled
     * @param string $ruleId
     * @param bool $isNotSupported
     * @param bool $isInError
     * @param \Ews\StructType\EwsRulePredicatesType $conditions
     * @param \Ews\StructType\EwsRulePredicatesType $exceptions
     * @param \Ews\StructType\EwsRuleActionsType $actions
     */
    public function __construct($displayName = null, $priority = null, $isEnabled = null, $ruleId = null, $isNotSupported = null, $isInError = null, \Ews\StructType\EwsRulePredicatesType $conditions = null, \Ews\StructType\EwsRulePredicatesType $exceptions = null, \Ews\StructType\EwsRuleActionsType $actions = null)
    {
        $this
            ->setDisplayName($displayName)
            ->setPriority($priority)
            ->setIsEnabled($isEnabled)
            ->setRuleId($ruleId)
            ->setIsNotSupported($isNotSupported)
            ->setIsInError($isInError)
            ->setConditions($conditions)
            ->setExceptions($exceptions)
            ->setActions($actions);
    }
    /**
     * Get DisplayName value
     * @return string
     */
    public function getDisplayName()
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \Ews\StructType\EwsRuleType
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        return $this;
    }
    /**
     * Get Priority value
     * @return int
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \Ews\StructType\EwsRuleType
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get IsEnabled value
     * @return bool
     */
    public function getIsEnabled()
    {
        return $this->IsEnabled;
    }
    /**
     * Set IsEnabled value
     * @param bool $isEnabled
     * @return \Ews\StructType\EwsRuleType
     */
    public function setIsEnabled($isEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEnabled) && !is_bool($isEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEnabled, true), gettype($isEnabled)), __LINE__);
        }
        $this->IsEnabled = $isEnabled;
        return $this;
    }
    /**
     * Get RuleId value
     * @return string|null
     */
    public function getRuleId()
    {
        return $this->RuleId;
    }
    /**
     * Set RuleId value
     * @param string $ruleId
     * @return \Ews\StructType\EwsRuleType
     */
    public function setRuleId($ruleId = null)
    {
        // validation for constraint: string
        if (!is_null($ruleId) && !is_string($ruleId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleId, true), gettype($ruleId)), __LINE__);
        }
        $this->RuleId = $ruleId;
        return $this;
    }
    /**
     * Get IsNotSupported value
     * @return bool|null
     */
    public function getIsNotSupported()
    {
        return $this->IsNotSupported;
    }
    /**
     * Set IsNotSupported value
     * @param bool $isNotSupported
     * @return \Ews\StructType\EwsRuleType
     */
    public function setIsNotSupported($isNotSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNotSupported) && !is_bool($isNotSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNotSupported, true), gettype($isNotSupported)), __LINE__);
        }
        $this->IsNotSupported = $isNotSupported;
        return $this;
    }
    /**
     * Get IsInError value
     * @return bool|null
     */
    public function getIsInError()
    {
        return $this->IsInError;
    }
    /**
     * Set IsInError value
     * @param bool $isInError
     * @return \Ews\StructType\EwsRuleType
     */
    public function setIsInError($isInError = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInError) && !is_bool($isInError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInError, true), gettype($isInError)), __LINE__);
        }
        $this->IsInError = $isInError;
        return $this;
    }
    /**
     * Get Conditions value
     * @return \Ews\StructType\EwsRulePredicatesType|null
     */
    public function getConditions()
    {
        return $this->Conditions;
    }
    /**
     * Set Conditions value
     * @param \Ews\StructType\EwsRulePredicatesType $conditions
     * @return \Ews\StructType\EwsRuleType
     */
    public function setConditions(\Ews\StructType\EwsRulePredicatesType $conditions = null)
    {
        $this->Conditions = $conditions;
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \Ews\StructType\EwsRulePredicatesType|null
     */
    public function getExceptions()
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \Ews\StructType\EwsRulePredicatesType $exceptions
     * @return \Ews\StructType\EwsRuleType
     */
    public function setExceptions(\Ews\StructType\EwsRulePredicatesType $exceptions = null)
    {
        $this->Exceptions = $exceptions;
        return $this;
    }
    /**
     * Get Actions value
     * @return \Ews\StructType\EwsRuleActionsType|null
     */
    public function getActions()
    {
        return $this->Actions;
    }
    /**
     * Set Actions value
     * @param \Ews\StructType\EwsRuleActionsType $actions
     * @return \Ews\StructType\EwsRuleType
     */
    public function setActions(\Ews\StructType\EwsRuleActionsType $actions = null)
    {
        $this->Actions = $actions;
        return $this;
    }
}
