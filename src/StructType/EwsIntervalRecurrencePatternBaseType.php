<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IntervalRecurrencePatternBaseType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsIntervalRecurrencePatternBaseType extends EwsRecurrencePatternBaseType
{
    /**
     * The Interval
     * @var int|null
     */
    protected ?int $Interval = null;
    /**
     * Constructor method for IntervalRecurrencePatternBaseType
     * @uses EwsIntervalRecurrencePatternBaseType::setInterval()
     * @param int $interval
     */
    public function __construct(?int $interval = null)
    {
        $this
            ->setInterval($interval);
    }
    /**
     * Get Interval value
     * @return int|null
     */
    public function getInterval(): ?int
    {
        return $this->Interval;
    }
    /**
     * Set Interval value
     * @param int $interval
     * @return \StructType\EwsIntervalRecurrencePatternBaseType
     */
    public function setInterval(?int $interval = null): self
    {
        // validation for constraint: int
        if (!is_null($interval) && !(is_int($interval) || ctype_digit($interval))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($interval, true), gettype($interval)), __LINE__);
        }
        $this->Interval = $interval;
        
        return $this;
    }
}
