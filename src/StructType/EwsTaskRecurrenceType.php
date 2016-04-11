<?php

namespace Ews\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaskRecurrenceType StructType
 * @package Ews
 * @subpackage Structs
 * @author WsdlToPhp <contact@wsdltophp.com>
 */
class EwsTaskRecurrenceType extends AbstractStructBase
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
     * The DailyRegeneration
     * @var \Ews\StructType\EwsDailyRegeneratingPatternType
     */
    public $DailyRegeneration;
    /**
     * The WeeklyRegeneration
     * @var \Ews\StructType\EwsWeeklyRegeneratingPatternType
     */
    public $WeeklyRegeneration;
    /**
     * The MonthlyRegeneration
     * @var \Ews\StructType\EwsMonthlyRegeneratingPatternType
     */
    public $MonthlyRegeneration;
    /**
     * The YearlyRegeneration
     * @var \Ews\StructType\EwsYearlyRegeneratingPatternType
     */
    public $YearlyRegeneration;
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
     * Constructor method for TaskRecurrenceType
     * @uses EwsTaskRecurrenceType::setRelativeYearlyRecurrence()
     * @uses EwsTaskRecurrenceType::setAbsoluteYearlyRecurrence()
     * @uses EwsTaskRecurrenceType::setRelativeMonthlyRecurrence()
     * @uses EwsTaskRecurrenceType::setAbsoluteMonthlyRecurrence()
     * @uses EwsTaskRecurrenceType::setWeeklyRecurrence()
     * @uses EwsTaskRecurrenceType::setDailyRecurrence()
     * @uses EwsTaskRecurrenceType::setDailyRegeneration()
     * @uses EwsTaskRecurrenceType::setWeeklyRegeneration()
     * @uses EwsTaskRecurrenceType::setMonthlyRegeneration()
     * @uses EwsTaskRecurrenceType::setYearlyRegeneration()
     * @uses EwsTaskRecurrenceType::setNoEndRecurrence()
     * @uses EwsTaskRecurrenceType::setEndDateRecurrence()
     * @uses EwsTaskRecurrenceType::setNumberedRecurrence()
     * @param \Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence
     * @param \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence
     * @param \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence
     * @param \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence
     * @param \Ews\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence
     * @param \Ews\StructType\EwsDailyRecurrencePatternType $dailyRecurrence
     * @param \Ews\StructType\EwsDailyRegeneratingPatternType $dailyRegeneration
     * @param \Ews\StructType\EwsWeeklyRegeneratingPatternType $weeklyRegeneration
     * @param \Ews\StructType\EwsMonthlyRegeneratingPatternType $monthlyRegeneration
     * @param \Ews\StructType\EwsYearlyRegeneratingPatternType $yearlyRegeneration
     * @param \Ews\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence
     * @param \Ews\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence
     * @param \Ews\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence
     */
    public function __construct(\Ews\StructType\EwsRelativeYearlyRecurrencePatternType $relativeYearlyRecurrence = null, \Ews\StructType\EwsAbsoluteYearlyRecurrencePatternType $absoluteYearlyRecurrence = null, \Ews\StructType\EwsRelativeMonthlyRecurrencePatternType $relativeMonthlyRecurrence = null, \Ews\StructType\EwsAbsoluteMonthlyRecurrencePatternType $absoluteMonthlyRecurrence = null, \Ews\StructType\EwsWeeklyRecurrencePatternType $weeklyRecurrence = null, \Ews\StructType\EwsDailyRecurrencePatternType $dailyRecurrence = null, \Ews\StructType\EwsDailyRegeneratingPatternType $dailyRegeneration = null, \Ews\StructType\EwsWeeklyRegeneratingPatternType $weeklyRegeneration = null, \Ews\StructType\EwsMonthlyRegeneratingPatternType $monthlyRegeneration = null, \Ews\StructType\EwsYearlyRegeneratingPatternType $yearlyRegeneration = null, \Ews\StructType\EwsNoEndRecurrenceRangeType $noEndRecurrence = null, \Ews\StructType\EwsEndDateRecurrenceRangeType $endDateRecurrence = null, \Ews\StructType\EwsNumberedRecurrenceRangeType $numberedRecurrence = null)
    {
        $this
            ->setRelativeYearlyRecurrence($relativeYearlyRecurrence)
            ->setAbsoluteYearlyRecurrence($absoluteYearlyRecurrence)
            ->setRelativeMonthlyRecurrence($relativeMonthlyRecurrence)
            ->setAbsoluteMonthlyRecurrence($absoluteMonthlyRecurrence)
            ->setWeeklyRecurrence($weeklyRecurrence)
            ->setDailyRecurrence($dailyRecurrence)
            ->setDailyRegeneration($dailyRegeneration)
            ->setWeeklyRegeneration($weeklyRegeneration)
            ->setMonthlyRegeneration($monthlyRegeneration)
            ->setYearlyRegeneration($yearlyRegeneration)
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
     */
    public function setDailyRecurrence(\Ews\StructType\EwsDailyRecurrencePatternType $dailyRecurrence = null)
    {
        $this->DailyRecurrence = $dailyRecurrence;
        return $this;
    }
    /**
     * Get DailyRegeneration value
     * @return \Ews\StructType\EwsDailyRegeneratingPatternType|null
     */
    public function getDailyRegeneration()
    {
        return $this->DailyRegeneration;
    }
    /**
     * Set DailyRegeneration value
     * @param \Ews\StructType\EwsDailyRegeneratingPatternType $dailyRegeneration
     * @return \Ews\StructType\EwsTaskRecurrenceType
     */
    public function setDailyRegeneration(\Ews\StructType\EwsDailyRegeneratingPatternType $dailyRegeneration = null)
    {
        $this->DailyRegeneration = $dailyRegeneration;
        return $this;
    }
    /**
     * Get WeeklyRegeneration value
     * @return \Ews\StructType\EwsWeeklyRegeneratingPatternType|null
     */
    public function getWeeklyRegeneration()
    {
        return $this->WeeklyRegeneration;
    }
    /**
     * Set WeeklyRegeneration value
     * @param \Ews\StructType\EwsWeeklyRegeneratingPatternType $weeklyRegeneration
     * @return \Ews\StructType\EwsTaskRecurrenceType
     */
    public function setWeeklyRegeneration(\Ews\StructType\EwsWeeklyRegeneratingPatternType $weeklyRegeneration = null)
    {
        $this->WeeklyRegeneration = $weeklyRegeneration;
        return $this;
    }
    /**
     * Get MonthlyRegeneration value
     * @return \Ews\StructType\EwsMonthlyRegeneratingPatternType|null
     */
    public function getMonthlyRegeneration()
    {
        return $this->MonthlyRegeneration;
    }
    /**
     * Set MonthlyRegeneration value
     * @param \Ews\StructType\EwsMonthlyRegeneratingPatternType $monthlyRegeneration
     * @return \Ews\StructType\EwsTaskRecurrenceType
     */
    public function setMonthlyRegeneration(\Ews\StructType\EwsMonthlyRegeneratingPatternType $monthlyRegeneration = null)
    {
        $this->MonthlyRegeneration = $monthlyRegeneration;
        return $this;
    }
    /**
     * Get YearlyRegeneration value
     * @return \Ews\StructType\EwsYearlyRegeneratingPatternType|null
     */
    public function getYearlyRegeneration()
    {
        return $this->YearlyRegeneration;
    }
    /**
     * Set YearlyRegeneration value
     * @param \Ews\StructType\EwsYearlyRegeneratingPatternType $yearlyRegeneration
     * @return \Ews\StructType\EwsTaskRecurrenceType
     */
    public function setYearlyRegeneration(\Ews\StructType\EwsYearlyRegeneratingPatternType $yearlyRegeneration = null)
    {
        $this->YearlyRegeneration = $yearlyRegeneration;
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
     * @return \Ews\StructType\EwsTaskRecurrenceType
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
