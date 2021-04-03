<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
    protected string $DisplayName;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Priority;
    /**
     * The IsEnabled
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $IsEnabled;
    /**
     * The RuleId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $RuleId = null;
    /**
     * The IsNotSupported
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsNotSupported = null;
    /**
     * The IsInError
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $IsInError = null;
    /**
     * The Conditions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRulePredicatesType|null
     */
    protected ?\StructType\EwsRulePredicatesType $Conditions = null;
    /**
     * The Exceptions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRulePredicatesType|null
     */
    protected ?\StructType\EwsRulePredicatesType $Exceptions = null;
    /**
     * The Actions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsRuleActionsType|null
     */
    protected ?\StructType\EwsRuleActionsType $Actions = null;
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
     * @param \StructType\EwsRulePredicatesType $conditions
     * @param \StructType\EwsRulePredicatesType $exceptions
     * @param \StructType\EwsRuleActionsType $actions
     */
    public function __construct(string $displayName, int $priority, bool $isEnabled, ?string $ruleId = null, ?bool $isNotSupported = null, ?bool $isInError = null, ?\StructType\EwsRulePredicatesType $conditions = null, ?\StructType\EwsRulePredicatesType $exceptions = null, ?\StructType\EwsRuleActionsType $actions = null)
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
    public function getDisplayName(): string
    {
        return $this->DisplayName;
    }
    /**
     * Set DisplayName value
     * @param string $displayName
     * @return \StructType\EwsRuleType
     */
    public function setDisplayName(string $displayName): self
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($displayName, true), gettype($displayName)), __LINE__);
        }
        $this->DisplayName = $displayName;
        
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
     * @return \StructType\EwsRuleType
     */
    public function setPriority(int $priority): self
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        
        return $this;
    }
    /**
     * Get IsEnabled value
     * @return bool
     */
    public function getIsEnabled(): bool
    {
        return $this->IsEnabled;
    }
    /**
     * Set IsEnabled value
     * @param bool $isEnabled
     * @return \StructType\EwsRuleType
     */
    public function setIsEnabled(bool $isEnabled): self
    {
        // validation for constraint: boolean
        if (!is_null($isEnabled) && !is_bool($isEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isEnabled, true), gettype($isEnabled)), __LINE__);
        }
        $this->IsEnabled = $isEnabled;
        
        return $this;
    }
    /**
     * Get RuleId value
     * @return string|null
     */
    public function getRuleId(): ?string
    {
        return $this->RuleId;
    }
    /**
     * Set RuleId value
     * @param string $ruleId
     * @return \StructType\EwsRuleType
     */
    public function setRuleId(?string $ruleId = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleId) && !is_string($ruleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleId, true), gettype($ruleId)), __LINE__);
        }
        $this->RuleId = $ruleId;
        
        return $this;
    }
    /**
     * Get IsNotSupported value
     * @return bool|null
     */
    public function getIsNotSupported(): ?bool
    {
        return $this->IsNotSupported;
    }
    /**
     * Set IsNotSupported value
     * @param bool $isNotSupported
     * @return \StructType\EwsRuleType
     */
    public function setIsNotSupported(?bool $isNotSupported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNotSupported) && !is_bool($isNotSupported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNotSupported, true), gettype($isNotSupported)), __LINE__);
        }
        $this->IsNotSupported = $isNotSupported;
        
        return $this;
    }
    /**
     * Get IsInError value
     * @return bool|null
     */
    public function getIsInError(): ?bool
    {
        return $this->IsInError;
    }
    /**
     * Set IsInError value
     * @param bool $isInError
     * @return \StructType\EwsRuleType
     */
    public function setIsInError(?bool $isInError = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInError) && !is_bool($isInError)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInError, true), gettype($isInError)), __LINE__);
        }
        $this->IsInError = $isInError;
        
        return $this;
    }
    /**
     * Get Conditions value
     * @return \StructType\EwsRulePredicatesType|null
     */
    public function getConditions(): ?\StructType\EwsRulePredicatesType
    {
        return $this->Conditions;
    }
    /**
     * Set Conditions value
     * @param \StructType\EwsRulePredicatesType $conditions
     * @return \StructType\EwsRuleType
     */
    public function setConditions(?\StructType\EwsRulePredicatesType $conditions = null): self
    {
        $this->Conditions = $conditions;
        
        return $this;
    }
    /**
     * Get Exceptions value
     * @return \StructType\EwsRulePredicatesType|null
     */
    public function getExceptions(): ?\StructType\EwsRulePredicatesType
    {
        return $this->Exceptions;
    }
    /**
     * Set Exceptions value
     * @param \StructType\EwsRulePredicatesType $exceptions
     * @return \StructType\EwsRuleType
     */
    public function setExceptions(?\StructType\EwsRulePredicatesType $exceptions = null): self
    {
        $this->Exceptions = $exceptions;
        
        return $this;
    }
    /**
     * Get Actions value
     * @return \StructType\EwsRuleActionsType|null
     */
    public function getActions(): ?\StructType\EwsRuleActionsType
    {
        return $this->Actions;
    }
    /**
     * Set Actions value
     * @param \StructType\EwsRuleActionsType $actions
     * @return \StructType\EwsRuleType
     */
    public function setActions(?\StructType\EwsRuleActionsType $actions = null): self
    {
        $this->Actions = $actions;
        
        return $this;
    }
}
