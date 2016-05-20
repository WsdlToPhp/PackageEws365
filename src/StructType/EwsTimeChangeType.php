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
     * @var int
     */
    public $Offset;
    /**
     * The RelativeYearlyRecurrence
     * @var \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;
    /**
     * The AbsoluteDate
     * @var string
     */
    public $AbsoluteDate;
    /**
     * The Time
     * @var string
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
     * @param int $offset
     * @param \Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence
     * @param string $absoluteDate
     * @param string $time
     * @param string $timeZoneName
     */
    public function __construct($offset = null, \Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null, $absoluteDate = null, $time = null, $timeZoneName = null)
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
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }
    /**
     * Set Offset value
     * @param int $offset
     * @return \Ews\StructType\EwsTimeChangeType
     */
    public function setOffset($offset = null)
    {
        // validation for constraint: int
        if (!is_null($offset) && !is_numeric($offset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offset)), __LINE__);
        }
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
     * @param \Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence
     * @return \Ews\StructType\EwsTimeChangeType
     */
    public function setRelativeYearlyRecurrence(\Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null)
    {
        $this->RelativeYearlyRecurrence = $relativeYearlyRecurrence;
        return $this;
    }
    /**
     * Get AbsoluteDate value
     * @return string|null
     */
    public function getAbsoluteDate()
    {
        return $this->AbsoluteDate;
    }
    /**
     * Set AbsoluteDate value
     * @param string $absoluteDate
     * @return \Ews\StructType\EwsTimeChangeType
     */
    public function setAbsoluteDate($absoluteDate = null)
    {
        // validation for constraint: string
        if (!is_null($absoluteDate) && !is_string($absoluteDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($absoluteDate)), __LINE__);
        }
        $this->AbsoluteDate = $absoluteDate;
        return $this;
    }
    /**
     * Get Time value
     * @return string|null
     */
    public function getTime()
    {
        return $this->Time;
    }
    /**
     * Set Time value
     * @param string $time
     * @return \Ews\StructType\EwsTimeChangeType
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
        // validation for constraint: string
        if (!is_null($timeZoneName) && !is_string($timeZoneName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timeZoneName)), __LINE__);
        }
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
