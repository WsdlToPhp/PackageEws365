<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurringDayTransitionType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecurringDayTransitionType extends EwsRecurringTimeTransitionType
{
    /**
     * The DayOfWeek
     * @var string|null
     */
    protected ?string $DayOfWeek = null;
    /**
     * The Occurrence
     * @var int|null
     */
    protected ?int $Occurrence = null;
    /**
     * Constructor method for RecurringDayTransitionType
     * @uses EwsRecurringDayTransitionType::setDayOfWeek()
     * @uses EwsRecurringDayTransitionType::setOccurrence()
     * @param string $dayOfWeek
     * @param int $occurrence
     */
    public function __construct(?string $dayOfWeek = null, ?int $occurrence = null)
    {
        $this
            ->setDayOfWeek($dayOfWeek)
            ->setOccurrence($occurrence);
    }
    /**
     * Get DayOfWeek value
     * @return string|null
     */
    public function getDayOfWeek(): ?string
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \EnumType\EwsDayOfWeekType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dayOfWeek
     * @return \StructType\EwsRecurringDayTransitionType
     */
    public function setDayOfWeek(?string $dayOfWeek = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDayOfWeekType', is_array($dayOfWeek) ? implode(', ', $dayOfWeek) : var_export($dayOfWeek, true), implode(', ', \EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        
        return $this;
    }
    /**
     * Get Occurrence value
     * @return int|null
     */
    public function getOccurrence(): ?int
    {
        return $this->Occurrence;
    }
    /**
     * Set Occurrence value
     * @param int $occurrence
     * @return \StructType\EwsRecurringDayTransitionType
     */
    public function setOccurrence(?int $occurrence = null): self
    {
        // validation for constraint: int
        if (!is_null($occurrence) && !(is_int($occurrence) || ctype_digit($occurrence))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($occurrence, true), gettype($occurrence)), __LINE__);
        }
        $this->Occurrence = $occurrence;
        
        return $this;
    }
}
