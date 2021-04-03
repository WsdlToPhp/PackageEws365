<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateInboxRulesResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsUpdateInboxRulesResponseType extends EwsResponseMessageType
{
    /**
     * The RuleOperationErrors
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\EwsArrayOfRuleOperationErrorsType|null
     */
    protected ?\ArrayType\EwsArrayOfRuleOperationErrorsType $RuleOperationErrors = null;
    /**
     * Constructor method for UpdateInboxRulesResponseType
     * @uses EwsUpdateInboxRulesResponseType::setRuleOperationErrors()
     * @param \ArrayType\EwsArrayOfRuleOperationErrorsType $ruleOperationErrors
     */
    public function __construct(?\ArrayType\EwsArrayOfRuleOperationErrorsType $ruleOperationErrors = null)
    {
        $this
            ->setRuleOperationErrors($ruleOperationErrors);
    }
    /**
     * Get RuleOperationErrors value
     * @return \ArrayType\EwsArrayOfRuleOperationErrorsType|null
     */
    public function getRuleOperationErrors(): ?\ArrayType\EwsArrayOfRuleOperationErrorsType
    {
        return $this->RuleOperationErrors;
    }
    /**
     * Set RuleOperationErrors value
     * @param \ArrayType\EwsArrayOfRuleOperationErrorsType $ruleOperationErrors
     * @return \StructType\EwsUpdateInboxRulesResponseType
     */
    public function setRuleOperationErrors(?\ArrayType\EwsArrayOfRuleOperationErrorsType $ruleOperationErrors = null): self
    {
        $this->RuleOperationErrors = $ruleOperationErrors;
        
        return $this;
    }
}
