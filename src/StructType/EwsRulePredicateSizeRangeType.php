<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RulePredicateSizeRangeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Size range type used for the WithinSizeRange rule predicate.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRulePredicateSizeRangeType extends AbstractStructBase
{
    /**
     * The MinimumSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MinimumSize;
    /**
     * The MaximumSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MaximumSize;
    /**
     * Constructor method for RulePredicateSizeRangeType
     * @uses EwsRulePredicateSizeRangeType::setMinimumSize()
     * @uses EwsRulePredicateSizeRangeType::setMaximumSize()
     * @param int $minimumSize
     * @param int $maximumSize
     */
    public function __construct($minimumSize = null, $maximumSize = null)
    {
        $this
            ->setMinimumSize($minimumSize)
            ->setMaximumSize($maximumSize);
    }
    /**
     * Get MinimumSize value
     * @return int|null
     */
    public function getMinimumSize()
    {
        return $this->MinimumSize;
    }
    /**
     * Set MinimumSize value
     * @param int $minimumSize
     * @return \Ews\StructType\EwsRulePredicateSizeRangeType
     */
    public function setMinimumSize($minimumSize = null)
    {
        // validation for constraint: int
        if (!is_null($minimumSize) && !(is_int($minimumSize) || ctype_digit($minimumSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minimumSize, true), gettype($minimumSize)), __LINE__);
        }
        $this->MinimumSize = $minimumSize;
        return $this;
    }
    /**
     * Get MaximumSize value
     * @return int|null
     */
    public function getMaximumSize()
    {
        return $this->MaximumSize;
    }
    /**
     * Set MaximumSize value
     * @param int $maximumSize
     * @return \Ews\StructType\EwsRulePredicateSizeRangeType
     */
    public function setMaximumSize($maximumSize = null)
    {
        // validation for constraint: int
        if (!is_null($maximumSize) && !(is_int($maximumSize) || ctype_digit($maximumSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maximumSize, true), gettype($maximumSize)), __LINE__);
        }
        $this->MaximumSize = $maximumSize;
        return $this;
    }
}
