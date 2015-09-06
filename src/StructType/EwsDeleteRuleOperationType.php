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
     * Meta informations extracted from the WSDL
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
        $this->RuleId = $ruleId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsDeleteRuleOperationType
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
