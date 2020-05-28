<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateRuleOperationType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsCreateRuleOperationType extends EwsRuleOperationType
{
    /**
     * The Rule
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Ews\StructType\EwsRuleType
     */
    public $Rule;
    /**
     * Constructor method for CreateRuleOperationType
     * @uses EwsCreateRuleOperationType::setRule()
     * @param \Ews\StructType\EwsRuleType $rule
     */
    public function __construct(\Ews\StructType\EwsRuleType $rule = null)
    {
        $this
            ->setRule($rule);
    }
    /**
     * Get Rule value
     * @return \Ews\StructType\EwsRuleType
     */
    public function getRule()
    {
        return $this->Rule;
    }
    /**
     * Set Rule value
     * @param \Ews\StructType\EwsRuleType $rule
     * @return \Ews\StructType\EwsCreateRuleOperationType
     */
    public function setRule(\Ews\StructType\EwsRuleType $rule = null)
    {
        $this->Rule = $rule;
        return $this;
    }
}
