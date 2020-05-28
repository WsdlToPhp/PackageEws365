<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType
     */
    public $RuleOperationErrors;
    /**
     * Constructor method for UpdateInboxRulesResponseType
     * @uses EwsUpdateInboxRulesResponseType::setRuleOperationErrors()
     * @param \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType $ruleOperationErrors
     */
    public function __construct(\Ews\ArrayType\EwsArrayOfRuleOperationErrorsType $ruleOperationErrors = null)
    {
        $this
            ->setRuleOperationErrors($ruleOperationErrors);
    }
    /**
     * Get RuleOperationErrors value
     * @return \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType|null
     */
    public function getRuleOperationErrors()
    {
        return $this->RuleOperationErrors;
    }
    /**
     * Set RuleOperationErrors value
     * @param \Ews\ArrayType\EwsArrayOfRuleOperationErrorsType $ruleOperationErrors
     * @return \Ews\StructType\EwsUpdateInboxRulesResponseType
     */
    public function setRuleOperationErrors(\Ews\ArrayType\EwsArrayOfRuleOperationErrorsType $ruleOperationErrors = null)
    {
        $this->RuleOperationErrors = $ruleOperationErrors;
        return $this;
    }
}
