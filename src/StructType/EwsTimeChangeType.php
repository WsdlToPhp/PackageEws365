<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeChangeType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTimeChangeType extends AbstractStructBase
{
    /**
     * The Offset
     * @var duration
     */
    public $Offset;
    /**
     * The RelativeYearlyRecurrence
     * @var \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;
    /**
     * The AbsoluteDate
     * @var date
     */
    public $AbsoluteDate;
    /**
     * The Time
     * @var time
     */
    public $Time;
    /**
     * The TimeZoneName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $TimeZoneName;
    /**
     * Constructor method for TimeChangeType
     * @uses EwsTimeChangeType::setOffset()
     * @uses EwsTimeChangeType::setRelativeYearlyRecurrence()
     * @uses EwsTimeChangeType::setAbsoluteDate()
     * @uses EwsTimeChangeType::setTime()
     * @uses EwsTimeChangeType::setTimeZoneName()
     * @param duration $offset
     * @param \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     * $relativeYearlyRecurrence
     * @param date $absoluteDate
     * @param time $time
     * @param string $timeZoneName
     */
    public function __construct($offset = null, \Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null, $absoluteDate = null, time $time = null, $timeZoneName = null)
    {
        $this
            ->setOffset($offset)
            ->setRelativeYearlyRecurrence($relativeYearlyRecurrence)
            ->setAbsoluteDate($absoluteDate)
            ->setTime($time)
            ->setTimeZoneName($timeZoneName);
    }
    /**
     * Get Offset value
     * @return duration|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param duration $offset
     * @return \Ews\StructType\EwsTimeChangeType
     */
    public function setOffset($offset = null)
    {
        $this->Offset = $offset;
        return $this;
    }
    /**
     * Get RelativeYearlyRecurrence value
     * @return \Ews\StructType\EwsRelativeYearlyRecurrencePatternType|null
     */
    public function getRelativeYearlyRecurrence()
    {
        return $this->RelativeYearlyRecurrence;
    }
    /**
     * Set RelativeYearlyRecurrence value
     * @param \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     * $relativeYearlyRecurrence
     * @return \Ews\StructType\EwsTimeChangeType
     */
    public function setRelativeYearlyRecurrence(\Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null)
    {
        $this->RelativeYearlyRecurrence = $relativeYearlyRecurrence;
        return $this;
    }
    /**
     * Get AbsoluteDate value
     * @return date|null
     */
    public function getAbsoluteDate()
    {
        return $this->AbsoluteDate;
    }
    /**
     * Set AbsoluteDate value
     * @param date $absoluteDate
     * @return \Ews\StructType\EwsTimeChangeType
     */
    public function setAbsoluteDate($absoluteDate = null)
    {
        $this->AbsoluteDate = $absoluteDate;
        return $this;
    }
    /**
     * Get Time value
     * @return time|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param time $time
     * @return \Ews\StructType\EwsTimeChangeType
     */
    public function setTime(time $time = null)
    {
        $this->Time = $time;
        return $this;
    }
    /**
     * Get TimeZoneName value
     * @return string|null
     */
    public function getTimeZoneName()
    {
        return $this->TimeZoneName;
    }
    /**
     * Set TimeZoneName value
     * @param string $timeZoneName
     * @return \Ews\StructType\EwsTimeChangeType
     */
    public function setTimeZoneName($timeZoneName = null)
    {
        $this->TimeZoneName = $timeZoneName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsTimeChangeType
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
