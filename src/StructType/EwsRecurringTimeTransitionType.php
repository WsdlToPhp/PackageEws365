<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringTimeTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
abstract class EwsRecurringTimeTransitionType extends EwsTransitionType
{
    /**
     * The TimeOffset
     * @var string|null
     */
    protected ?string $TimeOffset = null;
    /**
     * The Month
     * @var int|null
     */
    protected ?int $Month = null;
    /**
     * Constructor method for RecurringTimeTransitionType
     * @uses EwsRecurringTimeTransitionType::setTimeOffset()
     * @uses EwsRecurringTimeTransitionType::setMonth()
     * @param string $timeOffset
     * @param int $month
     */
    public function __construct(?string $timeOffset = null, ?int $month = null)
    {
        $this
            ->setTimeOffset($timeOffset)
            ->setMonth($month);
    }
    /**
     * Get TimeOffset value
     * @return string|null
     */
    public function getTimeOffset(): ?string
    {
        return $this->TimeOffset;
    }
    /**
     * Set TimeOffset value
     * @param string $timeOffset
     * @return \StructType\EwsRecurringTimeTransitionType
     */
    public function setTimeOffset(?string $timeOffset = null): self
    {
        // validation for constraint: string
        if (!is_null($timeOffset) && !is_string($timeOffset)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeOffset, true), gettype($timeOffset)), __LINE__);
        }
        $this->TimeOffset = $timeOffset;
        
        return $this;
    }
    /**
     * Get Month value
     * @return int|null
     */
    public function getMonth(): ?int
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \StructType\EwsRecurringTimeTransitionType
     */
    public function setMonth(?int $month = null): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->Month = $month;
        
        return $this;
    }
}
