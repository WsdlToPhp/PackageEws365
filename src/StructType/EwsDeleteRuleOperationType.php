<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteRuleOperationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDeleteRuleOperationType extends EwsRuleOperationType
{
    /**
     * The RuleId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RuleId;
    /**
     * Constructor method for DeleteRuleOperationType
     * @uses EwsDeleteRuleOperationType::setRuleId()
     * @param string $ruleId
     */
    public function __construct($ruleId = null)
    {
        $this
            ->setRuleId($ruleId);
    }
    /**
     * Get RuleId value
     * @return string
     */
    public function getRuleId()
    {
        return $this->RuleId;
    }
    /**
     * Set RuleId value
     * @param string $ruleId
     * @return \Ews\StructType\EwsDeleteRuleOperationType
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
}
