<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

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
    public $Bias;
    /**
     * The Time
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Time;
    /**
     * The DayOrder
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DayOrder;
    /**
     * The Month
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Month;
    /**
     * The DayOfWeek
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DayOfWeek;
    /**
     * The Year
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Year;
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
    public function __construct($bias = null, $time = null, $dayOrder = null, $month = null, $dayOfWeek = null, $year = null)
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
    public function getBias()
    {
        return $this->Bias;
    }
    /**
     * Set Bias value
     * @param int $bias
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setBias($bias = null)
    {
        // validation for constraint: int
        if (!is_null($bias) && !(is_int($bias) || ctype_digit($bias))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bias, true), gettype($bias)), __LINE__);
        }
        $this->Bias = $bias;
        return $this;
    }
    /**
     * Get Time value
     * @return string
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setTime($time = null)
    {
        // validation for constraint: string
        if (!is_null($time) && !is_string($time)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time, true), gettype($time)), __LINE__);
        }
        $this->Time = $time;
        return $this;
    }
    /**
     * Get DayOrder value
     * @return int
     */
    public function getDayOrder()
    {
        return $this->DayOrder;
    }
    /**
     * Set DayOrder value
     * @param int $dayOrder
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setDayOrder($dayOrder = null)
    {
        // validation for constraint: int
        if (!is_null($dayOrder) && !(is_int($dayOrder) || ctype_digit($dayOrder))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dayOrder, true), gettype($dayOrder)), __LINE__);
        }
        $this->DayOrder = $dayOrder;
        return $this;
    }
    /**
     * Get Month value
     * @return int
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param int $month
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setMonth($month = null)
    {
        // validation for constraint: int
        if (!is_null($month) && !(is_int($month) || ctype_digit($month))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($month, true), gettype($month)), __LINE__);
        }
        $this->Month = $month;
        return $this;
    }
    /**
     * Get DayOfWeek value
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->DayOfWeek;
    }
    /**
     * Set DayOfWeek value
     * @uses \Ews\EnumType\EwsDayOfWeekType::valueIsValid()
     * @uses \Ews\EnumType\EwsDayOfWeekType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dayOfWeek
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        // validation for constraint: enumeration
        if (!\Ews\EnumType\EwsDayOfWeekType::valueIsValid($dayOfWeek)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Ews\EnumType\EwsDayOfWeekType', is_array($dayOfWeek) ? implode(', ', $dayOfWeek) : var_export($dayOfWeek, true), implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
        }
        $this->DayOfWeek = $dayOfWeek;
        return $this;
    }
    /**
     * Get Year value
     * @return string|null
     */
    public function getYear()
    {
        return $this->Year;
    }
    /**
     * Set Year value
     * @param string $year
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setYear($year = null)
    {
        // validation for constraint: string
        if (!is_null($year) && !is_string($year)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($year, true), gettype($year)), __LINE__);
        }
        $this->Year = $year;
        return $this;
    }
}
