<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Duration StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsDuration extends AbstractStructBase
{
    /**
     * The StartTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $StartTime;
    /**
     * The EndTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $EndTime;
    /**
     * Constructor method for Duration
     * @uses EwsDuration::setStartTime()
     * @uses EwsDuration::setEndTime()
     * @param string $startTime
     * @param string $endTime
     */
    public function __construct(string $startTime, string $endTime)
    {
        $this
            ->setStartTime($startTime)
            ->setEndTime($endTime);
    }
    /**
     * Get StartTime value
     * @return string
     */
    public function getStartTime(): string
    {
        return $this->StartTime;
    }
    /**
     * Set StartTime value
     * @param string $startTime
     * @return \StructType\EwsDuration
     */
    public function setStartTime(string $startTime): self
    {
        // validation for constraint: string
        if (!is_null($startTime) && !is_string($startTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTime, true), gettype($startTime)), __LINE__);
        }
        $this->StartTime = $startTime;
        
        return $this;
    }
    /**
     * Get EndTime value
     * @return string
     */
    public function getEndTime(): string
    {
        return $this->EndTime;
    }
    /**
     * Set EndTime value
     * @param string $endTime
     * @return \StructType\EwsDuration
     */
    public function setEndTime(string $endTime): self
    {
        // validation for constraint: string
        if (!is_null($endTime) && !is_string($endTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endTime, true), gettype($endTime)), __LINE__);
        }
        $this->EndTime = $endTime;
        
        return $this;
    }
}
