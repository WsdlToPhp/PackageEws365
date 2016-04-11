<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RecurrenceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsRecurrenceType extends AbstractStructBase
{
    /**
     * The RelativeYearlyRecurrence
     * @var \Ews\StructType\EwsRelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;
    /**
     * The AbsoluteYearlyRecurrence
     * @var \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType
     */
    public $AbsoluteYearlyRecurrence;
    /**
     * The RelativeMonthlyRecurrence
     * @var \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType
     */
    public $RelativeMonthlyRecurrence;
    /**
     * The AbsoluteMonthlyRecurrence
     * @var \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType
     */
    public $AbsoluteMonthlyRecurrence;
    /**
     * The WeeklyRecurrence
     * @var \Ews\StructType\EwsWeeklyRecurrencePatternType
     */
    public $WeeklyRecurrence;
    /**
     * The DailyRecurrence
     * @var \Ews\StructType\EwsDailyRecurrencePatternType
     */
    public $DailyRecurrence;
    /**
     * The NoEndRecurrence
     * @var \Ews\StructType\EwsNoEndRecurrenceRangeType
     */
    public $NoEndRecurrence;
    /**
     * The EndDateRecurrence
     * @var \Ews\StructType\EwsEndDateRecurrenceRangeType
     */
    public $EndDateRecurrence;
    /**
     * The NumberedRecurrence
     * @var \Ews\StructType\EwsNumberedRecurrenceRangeType
     */
    public $NumberedRecurrence;
    /**
     * Constructor method for RecurrenceType
     * @uses EwsRecurrenceType::setRelativeYearlyRecurrence()
     * @uses EwsRecurrenceType::setAbsoluteYearlyRecurrence()
     * @uses EwsRecurrenceType::setRelativeMonthlyRecurrence()
     * @uses EwsRecurrenceType::setAbsoluteMonthlyRecurrence()
     * @uses EwsRecurrenceType::setWeeklyRecurrence()
     * @uses EwsRecurrenceType::setDailyRecurrence()
     * @uses EwsRecurrenceType::setNoEndRecurrence()
     * @uses EwsRecurrenceType::setEndDateRecurrence()
     * @uses EwsRecurrenceType::setNumberedRecurrence()
     * @param \Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence
     * @param \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence
     * @param \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence
     * @param \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence
     * @param \Ews\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence
     * @param \Ews\StructType\EwsDailyRecurrencePatternType $dailyRecurrence
     * @param \Ews\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence
     * @param \Ews\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence
     * @param \Ews\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence
     */
    public function __construct(\Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null, \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence = null, \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence = null, \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence = null, \Ews\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence = null, \Ews\StructType\EwsDailyRecurrencePatternType $dailyRecurrence = null, \Ews\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence = null, \Ews\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence = null, \Ews\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence = null)
    {
        $this
            ->setRelativeYearlyRecurrence($relativeYearlyRecurrence)
            ->setAbsoluteYearlyRecurrence($absoluteYearlyRecurrence)
            ->setRelativeMonthlyRecurrence($relativeMonthlyRecurrence)
            ->setAbsoluteMonthlyRecurrence($absoluteMonthlyRecurrence)
            ->setWeeklyRecurrence($weeklyRecurrence)
            ->setDailyRecurrence($dailyRecurrence)
            ->setNoEndRecurrence($noEndRecurrence)
            ->setEndDateRecurrence($endDateRecurrence)
            ->setNumberedRecurrence($numberedRecurrence);
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
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setRelativeYearlyRecurrence(\Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null)
    {
        $this->RelativeYearlyRecurrence = $relativeYearlyRecurrence;
        return $this;
    }
    /**
     * Get AbsoluteYearlyRecurrence value
     * @return \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType|null
     */
    public function getAbsoluteYearlyRecurrence()
    {
        return $this->AbsoluteYearlyRecurrence;
    }
    /**
     * Set AbsoluteYearlyRecurrence value
     * @param \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setAbsoluteYearlyRecurrence(\Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence = null)
    {
        $this->AbsoluteYearlyRecurrence = $absoluteYearlyRecurrence;
        return $this;
    }
    /**
     * Get RelativeMonthlyRecurrence value
     * @return \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType|null
     */
    public function getRelativeMonthlyRecurrence()
    {
        return $this->RelativeMonthlyRecurrence;
    }
    /**
     * Set RelativeMonthlyRecurrence value
     * @param \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setRelativeMonthlyRecurrence(\Ews\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence = null)
    {
        $this->RelativeMonthlyRecurrence = $relativeMonthlyRecurrence;
        return $this;
    }
    /**
     * Get AbsoluteMonthlyRecurrence value
     * @return \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType|null
     */
    public function getAbsoluteMonthlyRecurrence()
    {
        return $this->AbsoluteMonthlyRecurrence;
    }
    /**
     * Set AbsoluteMonthlyRecurrence value
     * @param \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setAbsoluteMonthlyRecurrence(\Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence = null)
    {
        $this->AbsoluteMonthlyRecurrence = $absoluteMonthlyRecurrence;
        return $this;
    }
    /**
     * Get WeeklyRecurrence value
     * @return \Ews\StructType\EwsWeeklyRecurrencePatternType|null
     */
    public function getWeeklyRecurrence()
    {
        return $this->WeeklyRecurrence;
    }
    /**
     * Set WeeklyRecurrence value
     * @param \Ews\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setWeeklyRecurrence(\Ews\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence = null)
    {
        $this->WeeklyRecurrence = $weeklyRecurrence;
        return $this;
    }
    /**
     * Get DailyRecurrence value
     * @return \Ews\StructType\EwsDailyRecurrencePatternType|null
     */
    public function getDailyRecurrence()
    {
        return $this->DailyRecurrence;
    }
    /**
     * Set DailyRecurrence value
     * @param \Ews\StructType\EwsDailyRecurrencePatternType $dailyRecurrence
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setDailyRecurrence(\Ews\StructType\EwsDailyRecurrencePatternType $dailyRecurrence = null)
    {
        $this->DailyRecurrence = $dailyRecurrence;
        return $this;
    }
    /**
     * Get NoEndRecurrence value
     * @return \Ews\StructType\EwsNoEndRecurrenceRangeType|null
     */
    public function getNoEndRecurrence()
    {
        return $this->NoEndRecurrence;
    }
    /**
     * Set NoEndRecurrence value
     * @param \Ews\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setNoEndRecurrence(\Ews\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence = null)
    {
        $this->NoEndRecurrence = $noEndRecurrence;
        return $this;
    }
    /**
     * Get EndDateRecurrence value
     * @return \Ews\StructType\EwsEndDateRecurrenceRangeType|null
     */
    public function getEndDateRecurrence()
    {
        return $this->EndDateRecurrence;
    }
    /**
     * Set EndDateRecurrence value
     * @param \Ews\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setEndDateRecurrence(\Ews\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence = null)
    {
        $this->EndDateRecurrence = $endDateRecurrence;
        return $this;
    }
    /**
     * Get NumberedRecurrence value
     * @return \Ews\StructType\EwsNumberedRecurrenceRangeType|null
     */
    public function getNumberedRecurrence()
    {
        return $this->NumberedRecurrence;
    }
    /**
     * Set NumberedRecurrence value
     * @param \Ews\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence
     * @return \Ews\StructType\EwsRecurrenceType
     */
    public function setNumberedRecurrence(\Ews\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence = null)
    {
        $this->NumberedRecurrence = $numberedRecurrence;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Ews\StructType\EwsRecurrenceType
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
