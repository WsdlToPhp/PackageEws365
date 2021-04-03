<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringDateTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecurringDateTransitionType extends EwsRecurringTimeTransitionType
{
    /**
     * The Day
     * @var int|null
     */
    protected ?int $Day = null;
    /**
     * Constructor method for RecurringDateTransitionType
     * @uses EwsRecurringDateTransitionType::setDay()
     * @param int $day
     */
    public function __construct(?int $day = null)
    {
        $this
            ->setDay($day);
    }
    /**
     * Get Day value
     * @return int|null
     */
    public function getDay(): ?int
    {
        return $this->Day;
    }
    /**
     * Set Day value
     * @param int $day
     * @return \StructType\EwsRecurringDateTransitionType
     */
    public function setDay(?int $day = null): self
    {
        // validation for constraint: int
        if (!is_null($day) && !(is_int($day) || ctype_digit($day))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($day, true), gettype($day)), __LINE__);
        }
        $this->Day = $day;
        
        return $this;
    }
}
