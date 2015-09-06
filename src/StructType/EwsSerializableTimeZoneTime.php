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
     * @var short
     */
    public $DayOrder;
    /**
     * The Month
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var short
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
     * @param short $dayOrder
     * @param short $month
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
        $this->Time = $time;
        return $this;
    }
    /**
     * Get DayOrder value
     * @return short
     */
    public function getDayOrder()
    {
        return $this->DayOrder;
    }
    /**
     * Set DayOrder value
     * @param short $dayOrder
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setDayOrder($dayOrder = null)
    {
        $this->DayOrder = $dayOrder;
        return $this;
    }
    /**
     * Get Month value
     * @return short
     */
    public function getMonth()
    {
        return $this->Month;
    }
    /**
     * Set Month value
     * @param short $month
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setMonth($month = null)
    {
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
     * @param string $dayOfWeek
     * @return \Ews\StructType\EwsSerializableTimeZoneTime
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
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
