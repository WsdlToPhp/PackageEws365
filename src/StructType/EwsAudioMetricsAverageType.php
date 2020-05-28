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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $TotalValue;
    /**
     * The TotalCount
     * Meta information extracted from the WSDL
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
        // validation for constraint: float
        if (!is_null($totalValue) && !(is_float($totalValue) || is_numeric($totalValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalValue, true), gettype($totalValue)), __LINE__);
        }
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
        // validation for constraint: float
        if (!is_null($totalCount) && !(is_float($totalCount) || is_numeric($totalCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalCount, true), gettype($totalCount)), __LINE__);
        }
        $this->TotalCount = $totalCount;
        return $this;
    }
}
