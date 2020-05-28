<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProtectionRuleType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsProtectionRuleType extends AbstractStructBase
{
    /**
     * The Condition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsProtectionRuleConditionType
     */
    public $Condition;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsProtectionRuleActionType
     */
    public $Action;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    public $Name;
    /**
     * The UserOverridable
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UserOverridable;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    public $Priority;
    /**
     * Constructor method for ProtectionRuleType
     * @uses EwsProtectionRuleType::setCondition()
     * @uses EwsProtectionRuleType::setAction()
     * @uses EwsProtectionRuleType::setName()
     * @uses EwsProtectionRuleType::setUserOverridable()
     * @uses EwsProtectionRuleType::setPriority()
     * @param \Ews\StructType\EwsProtectionRuleConditionType $condition
     * @param \Ews\StructType\EwsProtectionRuleActionType $action
     * @param string $name
     * @param bool $userOverridable
     * @param int $priority
     */
    public function __construct(\Ews\StructType\EwsProtectionRuleConditionType $condition = null, \Ews\StructType\EwsProtectionRuleActionType $action = null, $name = null, $userOverridable = null, $priority = null)
    {
        $this
            ->setCondition($condition)
            ->setAction($action)
            ->setName($name)
            ->setUserOverridable($userOverridable)
            ->setPriority($priority);
    }
    /**
     * Get Condition value
     * @return \Ews\StructType\EwsProtectionRuleConditionType
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @param \Ews\StructType\EwsProtectionRuleConditionType $condition
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setCondition(\Ews\StructType\EwsProtectionRuleConditionType $condition = null)
    {
        $this->Condition = $condition;
        return $this;
    }
    /**
     * Get Action value
     * @return \Ews\StructType\EwsProtectionRuleActionType
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param \Ews\StructType\EwsProtectionRuleActionType $action
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setAction(\Ews\StructType\EwsProtectionRuleActionType $action = null)
    {
        $this->Action = $action;
        return $this;
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($name) && mb_strlen($name) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get UserOverridable value
     * @return bool
     */
    public function getUserOverridable()
    {
        return $this->UserOverridable;
    }
    /**
     * Set UserOverridable value
     * @param bool $userOverridable
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setUserOverridable($userOverridable = null)
    {
        // validation for constraint: boolean
        if (!is_null($userOverridable) && !is_bool($userOverridable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userOverridable, true), gettype($userOverridable)), __LINE__);
        }
        $this->UserOverridable = $userOverridable;
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
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($priority) && $priority < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($priority, true)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
}
