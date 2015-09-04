<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateInboxRulesResponseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 * @release 1.0.0
 */
class EwsUpdateInboxRulesResponseType extends EwsResponseMessageType
{
    /**
     * The RuleOperationErrors
     * Meta informations extracted from the WSDL
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
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsUpdateInboxRulesResponseType
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
