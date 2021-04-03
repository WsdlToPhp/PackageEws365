<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

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
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $InsightSource = null;
    /**
     * The UpdatedUtcTicks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $UpdatedUtcTicks = null;
    /**
     * Constructor method for InsightValue
     * @uses EwsInsightValue::setInsightSource()
     * @uses EwsInsightValue::setUpdatedUtcTicks()
     * @param string $insightSource
     * @param int $updatedUtcTicks
     */
    public function __construct(?string $insightSource = null, ?int $updatedUtcTicks = null)
    {
        $this
            ->setInsightSource($insightSource)
            ->setUpdatedUtcTicks($updatedUtcTicks);
    }
    /**
     * Get InsightSource value
     * @return string|null
     */
    public function getInsightSource(): ?string
    {
        return $this->InsightSource;
    }
    /**
     * Set InsightSource value
     * @param string $insightSource
     * @return \StructType\EwsInsightValue
     */
    public function setInsightSource(?string $insightSource = null): self
    {
        // validation for constraint: string
        if (!is_null($insightSource) && !is_string($insightSource)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($insightSource, true), gettype($insightSource)), __LINE__);
        }
        $this->InsightSource = $insightSource;
        
        return $this;
    }
    /**
     * Get UpdatedUtcTicks value
     * @return int|null
     */
    public function getUpdatedUtcTicks(): ?int
    {
        return $this->UpdatedUtcTicks;
    }
    /**
     * Set UpdatedUtcTicks value
     * @param int $updatedUtcTicks
     * @return \StructType\EwsInsightValue
     */
    public function setUpdatedUtcTicks(?int $updatedUtcTicks = null): self
    {
        // validation for constraint: int
        if (!is_null($updatedUtcTicks) && !(is_int($updatedUtcTicks) || ctype_digit($updatedUtcTicks))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($updatedUtcTicks, true), gettype($updatedUtcTicks)), __LINE__);
        }
        $this->UpdatedUtcTicks = $updatedUtcTicks;
        
        return $this;
    }
}
