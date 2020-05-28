<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsightFiltersType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsightFiltersType extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The Types
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Types;
    /**
     * The KeyInsightsOnly
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $KeyInsightsOnly;
    /**
     * Constructor method for InsightFiltersType
     * @uses EwsInsightFiltersType::setCount()
     * @uses EwsInsightFiltersType::setTypes()
     * @uses EwsInsightFiltersType::setKeyInsightsOnly()
     * @param int $count
     * @param \Ews\ArrayType\EwsArrayOfStringsType $types
     * @param bool $keyInsightsOnly
     */
    public function __construct($count = null, \Ews\ArrayType\EwsArrayOfStringsType $types = null, $keyInsightsOnly = null)
    {
        $this
            ->setCount($count)
            ->setTypes($types)
            ->setKeyInsightsOnly($keyInsightsOnly);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \Ews\StructType\EwsInsightFiltersType
     */
    public function setCount($count = null)
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        return $this;
    }
    /**
     * Get Types value
     * @return \Ews\ArrayType\EwsArrayOfStringsType|null
     */
    public function getTypes()
    {
        return $this->Types;
    }
    /**
     * Set Types value
     * @param \Ews\ArrayType\EwsArrayOfStringsType $types
     * @return \Ews\StructType\EwsInsightFiltersType
     */
    public function setTypes(\Ews\ArrayType\EwsArrayOfStringsType $types = null)
    {
        $this->Types = $types;
        return $this;
    }
    /**
     * Get KeyInsightsOnly value
     * @return bool|null
     */
    public function getKeyInsightsOnly()
    {
        return $this->KeyInsightsOnly;
    }
    /**
     * Set KeyInsightsOnly value
     * @param bool $keyInsightsOnly
     * @return \Ews\StructType\EwsInsightFiltersType
     */
    public function setKeyInsightsOnly($keyInsightsOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($keyInsightsOnly) && !is_bool($keyInsightsOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyInsightsOnly, true), gettype($keyInsightsOnly)), __LINE__);
        }
        $this->KeyInsightsOnly = $keyInsightsOnly;
        return $this;
    }
}
