<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsightValue StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsInsightValue extends AbstractStructBase
{
    /**
     * The InsightSource
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $InsightSource;
    /**
     * The UpdatedUtcTicks
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $UpdatedUtcTicks;
    /**
     * Constructor method for InsightValue
     * @uses EwsInsightValue::setInsightSource()
     * @uses EwsInsightValue::setUpdatedUtcTicks()
     * @param string $insightSource
     * @param int $updatedUtcTicks
     */
    public function __construct($insightSource = null, $updatedUtcTicks = null)
    {
        $this
            ->setInsightSource($insightSource)
            ->setUpdatedUtcTicks($updatedUtcTicks);
    }
    /**
     * Get InsightSource value
     * @return string|null
     */
    public function getInsightSource()
    {
        return $this->InsightSource;
    }
    /**
     * Set InsightSource value
     * @param string $insightSource
     * @return \Ews\StructType\EwsInsightValue
     */
    public function setInsightSource($insightSource = null)
    {
        // validation for constraint: string
        if (!is_null($insightSource) && !is_string($insightSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($insightSource)), __LINE__);
        }
        $this->InsightSource = $insightSource;
        return $this;
    }
    /**
     * Get UpdatedUtcTicks value
     * @return int|null
     */
    public function getUpdatedUtcTicks()
    {
        return $this->UpdatedUtcTicks;
    }
    /**
     * Set UpdatedUtcTicks value
     * @param int $updatedUtcTicks
     * @return \Ews\StructType\EwsInsightValue
     */
    public function setUpdatedUtcTicks($updatedUtcTicks = null)
    {
        // validation for constraint: int
        if (!is_null($updatedUtcTicks) && !is_int($updatedUtcTicks)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($updatedUtcTicks)), __LINE__);
        }
        $this->UpdatedUtcTicks = $updatedUtcTicks;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsInsightValue
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
