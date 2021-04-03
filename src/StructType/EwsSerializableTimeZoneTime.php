<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SerializableTimeZoneTime StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsSerializableTimeZoneTime extends AbstractStructBase
{
    /**
     * The Bias
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Bias;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Time;
    /**
     * The DayOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $DayOrder;
    /**
     * The Month
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $Month;
    /**
     * The DayOfWeek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DayOfWeek;
    /**
     * The Year
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Year = null;
    /**
     * Constructor method for SerializableTimeZoneTime
     * @uses EwsSerializableTimeZoneTime::setBias()
     * @uses EwsSerializableTimeZoneTime::setTime()
     * @uses EwsSerializableTimeZoneTime::setDayOrder()
     * @uses EwsSerializableTimeZoneTime::setMonth()
     * @uses EwsSerializableTimeZoneTime::setDayOfWeek()
     * @uses EwsSerializableTimeZoneTime::setYear()
     * @param int $bias
     * @param string $time
     * @param int $dayOrder
     * @param int $month
     * @param string $dayOfWeek
     * @param string $year
     */
    public function __construct(int $bias, string $time, int $dayOrder, int $month, string $dayOfWeek, ?string $year = null)
    {
        $this
            ->setBias($bias)
            ->setTime($time)
            ->setDayOrder($dayOrder)
            ->setMonth($month)
            ->setDayOfWeek($dayOfWeek)
            ->setYear($year);
    }
    /**
     * Get Bias value
     * @return int
     */
    public function getBias(): int
    {
        return $this->Bias;
    }
    /**
     * Set Bias value
     * @param int $bias
     * @return \StructType\EwsSerializableTimeZoneTime
     */
    public function setBias(int $bias): self
    {
        // validation for constraint: int
        if (!is_null($bias) && !(is_int($bias) || ctype_digit($bias))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bias, true), gettype($bias)), __LINE__);
        }
        $this->Bias = $bias;
        
        return $this;
    }
    /**
     * Get Time value
     * @return string
     */
    public function getTime(): string
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \StructType\EwsSerializableTimeZoneTime
     */
    public function setTime(string $time): self
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        
        return $this;
    }
    /**
     * Get DayOrder value
     * @return int
     */
    public function getDayOrder(): int
    {
        return $this->DayOrder;
    }
    /**
     * Set DayOrder value
     * @param int $dayOrder
     * @return \StructType\EwsSerializableTimeZoneTime
     */
    public function setDayOrder(int $dayOrder): self
    {
        // validation for constraint: int
        if (!is_null($dayOrder) && !(is_int($dayOrder) || ctype_digit($dayOrder))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayOrder, true), gettype($dayOrder)), __LINE__);
        }
        $this->DayOrder = $dayOrder;
        
        return $this;
    }
    /**
     * Get Month value
     * @return int
     */
    public function getMonth(): int
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \StructType\EwsSerializableTimeZoneTime
     */
    public function setMonth(int $month): self
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->Month = $month;
        
        return $this;
    }
    /**
     * Get DayOfWeek value
     * @return string
     */
    public function getDayOfWeek(): string
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \EnumType\EwsDayOfWeekType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $dayOfWeek
     * @return \StructType\EwsSerializableTimeZoneTime
     */
    public function setDayOfWeek(string $dayOfWeek): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EwsDayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EwsDayOfWeekType', is_array($dayOfWeek) ? implode(', ', $dayOfWeek) : var_export($dayOfWeek, true), implode(', ', \EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        
        return $this;
    }
    /**
     * Get Year value
     * @return string|null
     */
    public function getYear(): ?string
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param string $year
     * @return \StructType\EwsSerializableTimeZoneTime
     */
    public function setYear(?string $year = null): self
    {
        // validation for constraint: string
        if (!is_null($year) && !is_string($year)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->Year = $year;
        
        return $this;
    }
}
