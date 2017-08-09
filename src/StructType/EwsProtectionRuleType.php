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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsProtectionRuleConditionType
     */
    public $Condition;
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsProtectionRuleActionType
     */
    public $Action;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Name;
    /**
     * The UserOverridable
     * Meta informations extracted from the WSDL
     * - use: required
     * @var bool
     */
    public $UserOverridable;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
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
     * @param string $priority
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($userOverridable)), __LINE__);
        }
        $this->UserOverridable = $userOverridable;
        return $this;
    }
    /**
     * Get Priority value
     * @return string
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param string $priority
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: string
        if (!is_null($priority) && !is_string($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsProtectionRuleType
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
