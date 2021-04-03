<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AbsoluteMonthlyRecurrencePatternType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsAbsoluteMonthlyRecurrencePatternType extends EwsIntervalRecurrencePatternBaseType
{
    /**
     * The DayOfMonth
     * @var int|null
     */
    protected ?int $DayOfMonth = null;
    /**
     * Constructor method for AbsoluteMonthlyRecurrencePatternType
     * @uses EwsAbsoluteMonthlyRecurrencePatternType::setDayOfMonth()
     * @param int $dayOfMonth
     */
    public function __construct(?int $dayOfMonth = null)
    {
        $this
            ->setDayOfMonth($dayOfMonth);
    }
    /**
     * Get DayOfMonth value
     * @return int|null
     */
    public function getDayOfMonth(): ?int
    {
        return $this->DayOfMonth;
    }
    /**
     * Set DayOfMonth value
     * @param int $dayOfMonth
     * @return \StructType\EwsAbsoluteMonthlyRecurrencePatternType
     */
    public function setDayOfMonth(?int $dayOfMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($dayOfMonth) && !(is_int($dayOfMonth) || ctype_digit($dayOfMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayOfMonth, true), gettype($dayOfMonth)), __LINE__);
        }
        $this->DayOfMonth = $dayOfMonth;
        
        return $this;
    }
}
