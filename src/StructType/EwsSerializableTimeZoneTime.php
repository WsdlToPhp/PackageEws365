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
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Bias;
    /**
     * The Time
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Time;
    /**
     * The DayOrder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $DayOrder;
    /**
     * The Month
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $Month;
    /**
     * The DayOfWeek
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DayOfWeek;
    /**
     * The Year
     * Meta informations extracted from the WSDL
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
        if (!is_null($bias) && !is_numeric($bias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bias)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($time)), __LINE__);
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
        if (!is_null($dayOrder) && !is_numeric($dayOrder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($dayOrder)), __LINE__);
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
        if (!is_null($month) && !is_numeric($month)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($month)), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $dayOfWeek, implode(', ', \Ews\EnumType\EwsDayOfWeekType::getValidValues())), __LINE__);
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
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($year)), __LINE__);
        }
        $this->Year = $year;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
