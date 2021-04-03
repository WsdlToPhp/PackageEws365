<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsProtectionRuleConditionType
     */
    protected \StructType\EwsProtectionRuleConditionType $Condition;
    /**
     * The Action
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\EwsProtectionRuleActionType
     */
    protected \StructType\EwsProtectionRuleActionType $Action;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $Name;
    /**
     * The UserOverridable
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $UserOverridable;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - minInclusive: 1
     * - use: required
     * @var int
     */
    protected int $Priority;
    /**
     * Constructor method for ProtectionRuleType
     * @uses EwsProtectionRuleType::setCondition()
     * @uses EwsProtectionRuleType::setAction()
     * @uses EwsProtectionRuleType::setName()
     * @uses EwsProtectionRuleType::setUserOverridable()
     * @uses EwsProtectionRuleType::setPriority()
     * @param \StructType\EwsProtectionRuleConditionType $condition
     * @param \StructType\EwsProtectionRuleActionType $action
     * @param string $name
     * @param bool $userOverridable
     * @param int $priority
     */
    public function __construct(\StructType\EwsProtectionRuleConditionType $condition, \StructType\EwsProtectionRuleActionType $action, string $name, bool $userOverridable, int $priority)
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
     * @return \StructType\EwsProtectionRuleConditionType
     */
    public function getCondition(): \StructType\EwsProtectionRuleConditionType
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @param \StructType\EwsProtectionRuleConditionType $condition
     * @return \StructType\EwsProtectionRuleType
     */
    public function setCondition(\StructType\EwsProtectionRuleConditionType $condition): self
    {
        $this->Condition = $condition;
        
        return $this;
    }
    /**
     * Get Action value
     * @return \StructType\EwsProtectionRuleActionType
     */
    public function getAction(): \StructType\EwsProtectionRuleActionType
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param \StructType\EwsProtectionRuleActionType $action
     * @return \StructType\EwsProtectionRuleType
     */
    public function setAction(\StructType\EwsProtectionRuleActionType $action): self
    {
        $this->Action = $action;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\EwsProtectionRuleType
     */
    public function setName(string $name): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($name) && mb_strlen((string) $name) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get UserOverridable value
     * @return bool
     */
    public function getUserOverridable(): bool
    {
        return $this->UserOverridable;
    }
    /**
     * Set UserOverridable value
     * @param bool $userOverridable
     * @return \StructType\EwsProtectionRuleType
     */
    public function setUserOverridable(bool $userOverridable): self
    {
        // validation for constraint: boolean
        if (!is_null($userOverridable) && !is_bool($userOverridable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userOverridable, true), gettype($userOverridable)), __LINE__);
        }
        $this->UserOverridable = $userOverridable;
        
        return $this;
    }
    /**
     * Get Priority value
     * @return int
     */
    public function getPriority(): int
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \StructType\EwsProtectionRuleType
     */
    public function setPriority(int $priority): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        // validation for constraint: minInclusive(1)
        if (!is_null($priority) && $priority < 1) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, the value must be numerically greater than or equal to 1', var_export($priority, true)), __LINE__);
        }
        $this->Priority = $priority;
        
        return $this;
    }
}
