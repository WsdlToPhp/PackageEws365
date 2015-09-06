<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RulePredicateSizeRangeType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Size range type used for the WithinSizeRange rule predicate.
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRulePredicateSizeRangeType extends AbstractStructBase
{
    /**
     * The MinimumSize
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $MinimumSize;
    /**
     * The MaximumSize
     * Meta informations extracted from the WSDL
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
        $this->MaximumSize = $maximumSize;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRulePredicateSizeRangeType
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
