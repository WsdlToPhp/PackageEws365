<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AudioMetricsAverageType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAudioMetricsAverageType extends AbstractStructBase
{
    /**
     * The TotalValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalValue;
    /**
     * The TotalCount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalCount;
    /**
     * Constructor method for AudioMetricsAverageType
     * @uses EwsAudioMetricsAverageType::setTotalValue()
     * @uses EwsAudioMetricsAverageType::setTotalCount()
     * @param float $totalValue
     * @param float $totalCount
     */
    public function __construct($totalValue = null, $totalCount = null)
    {
        $this
            ->setTotalValue($totalValue)
            ->setTotalCount($totalCount);
    }
    /**
     * Get TotalValue value
     * @return float
     */
    public function getTotalValue()
    {
        return $this->TotalValue;
    }
    /**
     * Set TotalValue value
     * @param float $totalValue
     * @return \Ews\StructType\EwsAudioMetricsAverageType
     */
    public function setTotalValue($totalValue = null)
    {
        $this->TotalValue = $totalValue;
        return $this;
    }
    /**
     * Get TotalCount value
     * @return float
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }
    /**
     * Set TotalCount value
     * @param float $totalCount
     * @return \Ews\StructType\EwsAudioMetricsAverageType
     */
    public function setTotalCount($totalCount = null)
    {
        $this->TotalCount = $totalCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsAudioMetricsAverageType
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
