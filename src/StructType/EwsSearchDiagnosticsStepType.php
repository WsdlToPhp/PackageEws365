<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchDiagnosticsStepType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSearchDiagnosticsStepType extends AbstractStructBase
{
    /**
     * The StartTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StartTime;
    /**
     * The StepTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $StepTime;
    /**
     * The StepType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $StepType;
    /**
     * The AdditionalEntries
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Ews\StructType\EwsAdditionalEntries
     */
    public $AdditionalEntries;
    /**
     * Constructor method for SearchDiagnosticsStepType
     * @uses EwsSearchDiagnosticsStepType::setStartTime()
     * @uses EwsSearchDiagnosticsStepType::setStepTime()
     * @uses EwsSearchDiagnosticsStepType::setStepType()
     * @uses EwsSearchDiagnosticsStepType::setAdditionalEntries()
     * @param string $startTime
     * @param int $stepTime
     * @param string $stepType
     * @param \Ews\StructType\EwsAdditionalEntries $additionalEntries
     */
    public function __construct($startTime = null, $stepTime = null, $stepType = null, \Ews\StructType\EwsAdditionalEntries $additionalEntries = null)
    {
        $this
            ->setStartTime($startTime)
            ->setStepTime($stepTime)
            ->setStepType($stepType)
            ->setAdditionalEntries($additionalEntries);
    }
    /**
     * Get StartTime value
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \Ews\StructType\EwsSearchDiagnosticsStepType
     */
    public function setStartTime($startTime = null)
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        return $this;
    }
    /**
     * Get StepTime value
     * @return int|null
     */
    public function getStepTime()
    {
        return $this->StepTime;
    }
    /**
     * Set StepTime value
     * @param int $stepTime
     * @return \Ews\StructType\EwsSearchDiagnosticsStepType
     */
    public function setStepTime($stepTime = null)
    {
        // validation for constraint: int
        if (!is_null($stepTime) && !is_int($stepTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide an int, "%s" given', gettype($stepTime)), __LINE__);
        }
        $this->StepTime = $stepTime;
        return $this;
    }
    /**
     * Get StepType value
     * @return string|null
     */
    public function getStepType()
    {
        return $this->StepType;
    }
    /**
     * Set StepType value
     * @param string $stepType
     * @return \Ews\StructType\EwsSearchDiagnosticsStepType
     */
    public function setStepType($stepType = null)
    {
        // validation for constraint: string
        if (!is_null($stepType) && !is_string($stepType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stepType)), __LINE__);
        }
        $this->StepType = $stepType;
        return $this;
    }
    /**
     * Get AdditionalEntries value
     * @return \Ews\StructType\EwsAdditionalEntries|null
     */
    public function getAdditionalEntries()
    {
        return $this->AdditionalEntries;
    }
    /**
     * Set AdditionalEntries value
     * @param \Ews\StructType\EwsAdditionalEntries $additionalEntries
     * @return \Ews\StructType\EwsSearchDiagnosticsStepType
     */
    public function setAdditionalEntries(\Ews\StructType\EwsAdditionalEntries $additionalEntries = null)
    {
        $this->AdditionalEntries = $additionalEntries;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSearchDiagnosticsStepType
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
