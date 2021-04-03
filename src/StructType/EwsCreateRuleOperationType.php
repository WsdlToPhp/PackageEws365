<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * @var \StructType\EwsRuleType
     */
    protected \StructType\EwsRuleType $Rule;
    /**
     * Constructor method for CreateRuleOperationType
     * @uses EwsCreateRuleOperationType::setRule()
     * @param \StructType\EwsRuleType $rule
     */
    public function __construct(\StructType\EwsRuleType $rule)
    {
        $this
            ->setRule($rule);
    }
    /**
     * Get Rule value
     * @return \StructType\EwsRuleType
     */
    public function getRule(): \StructType\EwsRuleType
    {
        return $this->Rule;
    }
    /**
     * Set Rule value
     * @param \StructType\EwsRuleType $rule
     * @return \StructType\EwsCreateRuleOperationType
     */
    public function setRule(\StructType\EwsRuleType $rule): self
    {
        $this->Rule = $rule;
        
        return $this;
    }
}
