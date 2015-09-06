<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Rule type
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRuleType extends AbstractStructBase
{
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DisplayName;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Priority;
    /**
     * The IsEnabled
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var boolean
     */
    public $IsEnabled;
    /**
     * The RuleId
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RuleId;
    /**
     * The IsNotSupported
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsNotSupported;
    /**
     * The IsInError
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $IsInError;
    /**
     * The Conditions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Rule predicates, used as rule conditions or exceptions
     * @var \Ews\StructType\EwsRulePredicatesType
     */
    public $Conditions;
    /**
     * The Exceptions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Rule predicates, used as rule conditions or exceptions
     * @var \Ews\StructType\EwsRulePredicatesType
     */
    public $Exceptions;
    /**
     * The Actions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - documentation: Rule actions
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
     * @param boolean $isEnabled
     * @param string $ruleId
     * @param boolean $isNotSupported
     * @param boolean $isInError
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
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get IsEnabled value
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->IsEnabled;
    }
    /**
     * Set IsEnabled value
     * @param boolean $isEnabled
     * @return \Ews\StructType\EwsRuleType
     */
    public function setIsEnabled($isEnabled = null)
    {
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
        $this->RuleId = $ruleId;
        return $this;
    }
    /**
     * Get IsNotSupported value
     * @return boolean|null
     */
    public function getIsNotSupported()
    {
        return $this->IsNotSupported;
    }
    /**
     * Set IsNotSupported value
     * @param boolean $isNotSupported
     * @return \Ews\StructType\EwsRuleType
     */
    public function setIsNotSupported($isNotSupported = null)
    {
        $this->IsNotSupported = $isNotSupported;
        return $this;
    }
    /**
     * Get IsInError value
     * @return boolean|null
     */
    public function getIsInError()
    {
        return $this->IsInError;
    }
    /**
     * Set IsInError value
     * @param boolean $isInError
     * @return \Ews\StructType\EwsRuleType
     */
    public function setIsInError($isInError = null)
    {
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRuleType
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
