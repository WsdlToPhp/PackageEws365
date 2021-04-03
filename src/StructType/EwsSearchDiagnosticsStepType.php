<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StartTime = null;
    /**
     * The StepTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $StepTime = null;
    /**
     * The StepType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $StepType = null;
    /**
     * The AdditionalEntries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EwsAdditionalEntries|null
     */
    protected ?\StructType\EwsAdditionalEntries $AdditionalEntries = null;
    /**
     * Constructor method for SearchDiagnosticsStepType
     * @uses EwsSearchDiagnosticsStepType::setStartTime()
     * @uses EwsSearchDiagnosticsStepType::setStepTime()
     * @uses EwsSearchDiagnosticsStepType::setStepType()
     * @uses EwsSearchDiagnosticsStepType::setAdditionalEntries()
     * @param string $startTime
     * @param int $stepTime
     * @param string $stepType
     * @param \StructType\EwsAdditionalEntries $additionalEntries
     */
    public function __construct(?string $startTime = null, ?int $stepTime = null, ?string $stepType = null, ?\StructType\EwsAdditionalEntries $additionalEntries = null)
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
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\EwsSearchDiagnosticsStepType
     */
    public function setStartTime(?string $startTime = null): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get StepTime value
     * @return int|null
     */
    public function getStepTime(): ?int
    {
        return $this->StepTime;
    }
    /**
     * Set StepTime value
     * @param int $stepTime
     * @return \StructType\EwsSearchDiagnosticsStepType
     */
    public function setStepTime(?int $stepTime = null): self
    {
        // validation for constraint: int
        if (!is_null($stepTime) && !(is_int($stepTime) || ctype_digit($stepTime))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($stepTime, true), gettype($stepTime)), __LINE__);
        }
        $this->StepTime = $stepTime;
        
        return $this;
    }
    /**
     * Get StepType value
     * @return string|null
     */
    public function getStepType(): ?string
    {
        return $this->StepType;
    }
    /**
     * Set StepType value
     * @param string $stepType
     * @return \StructType\EwsSearchDiagnosticsStepType
     */
    public function setStepType(?string $stepType = null): self
    {
        // validation for constraint: string
        if (!is_null($stepType) && !is_string($stepType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stepType, true), gettype($stepType)), __LINE__);
        }
        $this->StepType = $stepType;
        
        return $this;
    }
    /**
     * Get AdditionalEntries value
     * @return \StructType\EwsAdditionalEntries|null
     */
    public function getAdditionalEntries(): ?\StructType\EwsAdditionalEntries
    {
        return $this->AdditionalEntries;
    }
    /**
     * Set AdditionalEntries value
     * @param \StructType\EwsAdditionalEntries $additionalEntries
     * @return \StructType\EwsSearchDiagnosticsStepType
     */
    public function setAdditionalEntries(?\StructType\EwsAdditionalEntries $additionalEntries = null): self
    {
        $this->AdditionalEntries = $additionalEntries;
        
        return $this;
    }
}
