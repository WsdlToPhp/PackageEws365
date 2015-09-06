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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Count;
    /**
     * The Types
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\ArrayType\EwsArrayOfStringsType
     */
    public $Types;
    /**
     * The KeyInsightsOnly
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var boolean
     */
    public $KeyInsightsOnly;
    /**
     * Constructor method for InsightFiltersType
     * @uses EwsInsightFiltersType::setCount()
     * @uses EwsInsightFiltersType::setTypes()
     * @uses EwsInsightFiltersType::setKeyInsightsOnly()
     * @param int $count
     * @param \Ews\ArrayType\EwsArrayOfStringsType $types
     * @param boolean $keyInsightsOnly
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
     * @return boolean|null
     */
    public function getKeyInsightsOnly()
    {
        return $this->KeyInsightsOnly;
    }
    /**
     * Set KeyInsightsOnly value
     * @param boolean $keyInsightsOnly
     * @return \Ews\StructType\EwsInsightFiltersType
     */
    public function setKeyInsightsOnly($keyInsightsOnly = null)
    {
        $this->KeyInsightsOnly = $keyInsightsOnly;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInsightFiltersType
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
