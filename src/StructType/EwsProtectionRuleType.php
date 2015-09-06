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
     * @var anonymous635
     */
    public $Name;
    /**
     * The UserOverridable
     * Meta informations extracted from the WSDL
     * - use: required
     * @var boolean
     */
    public $UserOverridable;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - use: required
     * @var anonymous636
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
     * @param anonymous635 $name
     * @param boolean $userOverridable
     * @param anonymous636 $priority
     */
    public function __construct(\Ews\StructType\EwsProtectionRuleConditionType $condition = null, \Ews\StructType\EwsProtectionRuleActionType $action = null, anonymous635 $name = null, $userOverridable = null, anonymous636 $priority = null)
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
     * @return anonymous635
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param anonymous635 $name
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setName(anonymous635 $name = null)
    {
        $this->Name = $name;
        return $this;
    }
    /**
     * Get UserOverridable value
     * @return boolean
     */
    public function getUserOverridable()
    {
        return $this->UserOverridable;
    }
    /**
     * Set UserOverridable value
     * @param boolean $userOverridable
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setUserOverridable($userOverridable = null)
    {
        $this->UserOverridable = $userOverridable;
        return $this;
    }
    /**
     * Get Priority value
     * @return anonymous636
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param anonymous636 $priority
     * @return \Ews\StructType\EwsProtectionRuleType
     */
    public function setPriority(anonymous636 $priority = null)
    {
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
